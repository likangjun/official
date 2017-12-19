<?php
namespace frontend\controllers;

use common\models\Designer;
use Yii;
use yii\web\Controller;

/**
 * Team controller
 */
class TeamController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionMember()
    {
        $list = Designer::find()->asArray()->all();
        return $this->render('member', ['list' => $list]);
    }
}