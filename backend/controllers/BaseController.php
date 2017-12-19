<?php
namespace backend\controllers;

use Yii;
use yii\helpers\Url;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * Base controller
 */
class BaseController extends Controller
{
    public function beforeAction($action)
    {
        $ac = Yii::$app->controller->action->uniqueId;
        $userId = Yii::$app->user->id;

        if ($ac == 'site/login' || $ac == 'site/logout') {
            return parent::beforeAction($action);
        }

        if (!$userId) {
            return $this->redirect(Url::toRoute('/site/login'));
        }
        return parent::beforeAction($action);

    }

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }
}