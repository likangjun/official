<?php
namespace frontend\controllers;

use common\models\Job;
use common\models\Word;
use Yii;
use yii\web\Controller;

/**
 * Contact controller
 */
class ContactController extends Controller
{
    public function actionIdea()
    {
        return $this->render('idea');
    }

    public function actionJoin()
    {
        $list = Job::find()->asArray()->where(['status' => 0])->all();
        return $this->render('join', ['list' => $list]);
    }

    public function actionContact()
    {
        return $this->render('contact');
    }

    public function actionMap()
    {
        $this->layout = false;
        return $this->render('map');
    }


    public function actionWord()
    {
        $username = Yii::$app->request->post('username');
        $mobile = Yii::$app->request->post('mobile');
        $content = Yii::$app->request->post('content');

        if (!$content) {
            $result = ["code" => 1, "message" => '留言不能为空哦', "object" => null];
            return json_encode($result);
        }
        $model = new Word();
        $model->username = $username;
        $model->mobile = $mobile;
        $model->content = $content;
        $model->save();
        $result = ["code" => 0, "message" => '留言成功', "object" => null];
        return json_encode($result);
    }
}