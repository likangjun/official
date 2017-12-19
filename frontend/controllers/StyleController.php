<?php
namespace frontend\controllers;

use common\models\Lookup;
use common\models\Style;
use common\models\Image;
use Yii;
use yii\web\Controller;

/**
 * Style controller
 */
class StyleController extends Controller
{
    public function actionIndex()
    {
        $default_id = Style::find()->select('id')->scalar();
        $id = Yii::$app->request->get('id', $default_id);
        $style = Style::find()->asArray()->where(['id' => $id])->one();
        $image = Image::getImagesListByObjType($id, Lookup::IMAGE_TYPE_STYLE);
        return $this->render('index', ['style' => $style, 'image' => $image]);
    }
}