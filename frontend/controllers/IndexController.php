<?php
namespace frontend\controllers;

use common\models\Banner;
use common\models\Cases;
use common\models\Image;
use common\models\Lookup;
use common\models\News;
use Yii;
use yii\web\Controller;

/**
 * Index controller
 */
class IndexController extends Controller
{
    public function actionIndex()
    {
        $banner = Banner::bannerList();
        $case = Cases::find()->where(['push' => 1])->asArray()->orderBy('id desc')->all();
        foreach ($case as $k => $v) {
            $case[$k]['image'] = Image::getImageByObjType($v['id'], Lookup::IMAGE_TYPE_CASE);
        }
        $news = News::find()->asArray()->where(['type' => 2])->orderBy('views desc,id desc')->limit(6)->all();
        return $this->render('index', ['banner' => $banner, 'case' => $case, 'news' => $news]);
    }
}