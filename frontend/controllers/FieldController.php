<?php
namespace frontend\controllers;

use common\models\Field;
use common\models\Image;
use common\models\Lookup;
use Yii;
use yii\web\Controller;

/**
 * Field controller
 */
class FieldController extends Controller
{
    public function actionIndex()
    {
        $default_id = Field::find()->select('id')->scalar();
        $id = Yii::$app->request->get('id', $default_id);
        $field = Field::find()->asArray()->where(['id' => $id])->one();
        $image = Image::getImagesListByObjType($id, Lookup::IMAGE_TYPE_FIELD);
        return $this->render('index', ['field' => $field, 'image' => $image]);
    }
}