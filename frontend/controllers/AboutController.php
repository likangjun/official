<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;

/**
 * About controller
 */
class AboutController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionFuwu()
    {
        return $this->render('fuwu');
    }

    public function actionProcess()
    {
        return $this->render('process');
    }

    public function actionTactic()
    {
        return $this->render('tactic');
    }
}