<?php

namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\data\Pagination;
use yii\base\Model;
use yii\web\UploadedFile;
use common\models\UploadForm;

class UploadController extends BaseController
{
    public function init()
    {
        parent::init();

        $this->enableCsrfValidation = false;
    }

    private function getResultObject($code, $object)
    {
        return json_encode(array("code" => $code, "object" => $object));
    }

    public function actionFile()
    {
        $model = new UploadForm();

        if (Yii::$app->request->isPost) {
            $model->imageFile = UploadedFile::getInstancesByName('imageFile');
            $result = $model->upload();

            return $this->getResultObject(0, ['name' => $result, 'message' => '']);
        }

        return $this->getResultObject(1, ['message' => '请求无效']);
    }
}