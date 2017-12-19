<?php
namespace frontend\controllers;

use common\models\Lookup;
use common\models\News;
use Yii;
use yii\data\Pagination;
use yii\db\Expression;
use yii\web\Controller;

/**
 * Info controller
 */
class InfoController extends Controller
{
    public function actionIndex()
    {
        $type = Yii::$app->request->get('type', 2);
        $count = News::find()->where(['type' => $type])->count();
        $pagination = new Pagination(
            [
                'defaultPageSize' => 5,
                'totalCount' => $count,
            ]);

        $list = News::find()->asArray()
            ->where(['type' => $type])->orderBy('id desc')
            ->offset($pagination->offset)
            ->limit($pagination->limit)->all();
        $type = Lookup::getDropDownName(Lookup::NEWS_TYPE, $type);
        return $this->render('index', ['list' => $list, 'page' => $pagination, 'type' => $type]);
    }

    public function actionDetail()
    {
        $id = Yii::$app->request->get('id');
        News::updateAll(['views' => new Expression("views+1")], ['id' => $id]);
        $detail = News::find()->asArray()->where(['id' => $id])->one();
        $type = $detail['type'];
        $news = News::find()->asArray()->where(['type' => $type])->orderBy('id desc')->limit(6)->all();
        $prev = News::find()->asArray()->where(['<', 'id', $id])->andWhere(['type' => $type])->orderBy('id desc')->one();
        $next = News::find()->asArray()->where(['>', 'id', $id])->andWhere(['type' => $type])->orderBy('id asc')->one();
        $related = News::find()->asArray()->where(['type' => $type])->orderBy('views desc')->limit(3)->all();
        $data = array(
            'detail' => $detail,
            'news' => $news,
            'prev' => $prev,
            'next' => $next,
            'related' => $related,
        );
        return $this->render('detail', $data);
    }
}