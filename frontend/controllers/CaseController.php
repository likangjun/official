<?php
namespace frontend\controllers;

use Yii;
use yii\data\Pagination;
use yii\web\Controller;
use common\models\Cases;
use common\models\Image;
use common\models\Lookup;

/**
 * Case controller
 */
class CaseController extends Controller
{
    public function actionIndex()
    {
        $type = Yii::$app->request->get('type', 1);

        $where = [];
        if ($type == 2) {
            $where['push'] = 1;
        }
        $count = Cases::find()->where($where)->count();
        $pagination = new Pagination(
            [
                'defaultPageSize' => 6,
                'totalCount' => $count,
            ]);
        $case = Cases::find()->where($where)
            ->orderBy('id desc')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        foreach ($case as $k => $v) {
            $case[$k]['image'] = Image::getImageByObjType($v['id'], Lookup::IMAGE_TYPE_CASE);
        }
        return $this->render('index', ['case' => $case, 'page' => $pagination]);
    }

    public function actionDetail()
    {
        $id = Yii::$app->request->get('id');
        $case = Cases::find()->asArray()->where(['id' => $id])->one();
        $image = Image::getImagesListByObjType($id, Lookup::IMAGE_TYPE_CASE);
        return $this->render('detail', ['case' => $case, 'image' => $image]);
    }
}