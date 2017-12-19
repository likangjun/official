<?php
namespace frontend\controllers;

use common\models\Lookup;
use common\models\News;
use common\models\Process;
use common\models\User;
use Yii;
use yii\data\Pagination;
use yii\web\Controller;

/**
 * Process controller
 */
class ProcessController extends Controller
{
    public function actionIndex()
    {
        $user_id = Yii::$app->session->get('user_id');
        if (!$user_id) {
            return $this->redirect(['/index/index']);
        }
        $user = User::findOne(['id' => $user_id]);
        //分页
        $count = Process::find()->where(['user_id' => $user_id, 'is_delete' => 0])->count();
        $pagination = new Pagination(
            [
                'defaultPageSize' => 6,
                'totalCount' => $count,
            ]);
        $process = Process::find()->where(['user_id' => $user_id, 'is_delete' => 0])
            ->asArray()
            ->orderBy('id desc')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        return $this->render('index', ['user' => $user, 'list' => $process, 'page' => $pagination]);
    }

    public function actionDetail()
    {
        $id = Yii::$app->request->get('id');
        $detail = Process::find()->asArray()->where(['id' => $id])->one();
        if ($detail['status'] == 0) {
            Process::updateAll(['status' => 1], ['id' => $id]);
        }
        $user_id = $detail['user_id'];
        //资讯
        $news = News::find()->asArray()->where(['type' => 2])->orderBy('id desc')->limit(6)->all();
        //进度
        $prev = Process::find()->asArray()->where(['<', 'id', $id])->andWhere(['user_id' => $user_id, 'is_delete' => 0])->orderBy('id desc')->one();
        $next = Process::find()->asArray()->where(['>', 'id', $id])->andWhere(['user_id' => $user_id, 'is_delete' => 0])->orderBy('id asc')->one();
        $related = Process::find()->asArray()->where(['user_id' => $user_id, 'is_delete' => 0])->orderBy('id desc')->limit(3)->all();
        $data = array(
            'detail' => $detail,
            'news' => $news,
            'prev' => $prev,
            'next' => $next,
            'related' => $related,
        );
        return $this->render('detail', $data);
    }

    public function actionLogout()
    {
        Yii::$app->session->remove('user_id');
        $result = ["code" => 0, "message" => '', "object" => null];
        return json_encode($result);
    }

    public function actionLogin()
    {
        $mobile = Yii::$app->request->post('mobile');
        if (!$mobile) {
            $result = ["code" => 1, "message" => '手机号不能为空哦', "object" => null];
            return json_encode($result);
        }

        $user = User::findOne(['mobile' => $mobile]);
        if (!$user) {
            $result = ["code" => 1, "message" => '客户信息还未上传,请耐心等待哦', "object" => null];
            return json_encode($result);
        }
        $process = Process::findAll(['user_id' => $user['id'], 'is_delete' => 0]);
        if (!$process) {
            $result = ["code" => 1, "message" => '尊敬的' . $user['username'] . ':您好,您的装修进度还未及时更新,请耐心等待哦', "object" => null];
            return json_encode($result);
        }
        Yii::$app->session->set('user_id', $user['id']);
        $result = ["code" => 0, "message" => '', "object" => null];
        return json_encode($result);
    }
}