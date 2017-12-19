<?php

namespace backend\controllers;

use common\models\Designer;
use common\models\Image;
use common\models\Lookup;
use Yii;
use common\models\Cases;
use yii\data\ActiveDataProvider;
use backend\controllers\BaseController;
use yii\helpers\ArrayHelper;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CaseController implements the CRUD actions for Cases model.
 */
class CaseController extends BaseController
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Cases models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Cases::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Cases model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        $model = $this->findModel($id);
        $image = Image::getImagesListByObjType($id, Lookup::IMAGE_TYPE_CASE);
        $image_url = array_column($image, 'img_url');
        $model->image = $image_url;
        return $this->render('view', [
            'model' => $model,
        ]);
    }

    /**
     * Creates a new Cases model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Cases();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            $desinger = Designer::find()->asArray()->all();
            $list = ArrayHelper::map($desinger, 'id', 'name');
            return $this->render('create', [
                'model' => $model,
                'list' => $list,
            ]);
        }
    }

    /**
     * Updates an existing Cases model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            $image = Image::getImagesListByObjType($id, Lookup::IMAGE_TYPE_CASE);
            $image_url = array_column($image, 'img_url');
            $model->image = implode(',', $image_url);
            //设计师
            $desinger = Designer::find()->asArray()->all();
            $list = ArrayHelper::map($desinger, 'id', 'name');
            return $this->render('update', [
                'model' => $model,
                'list' => $list,
            ]);
        }
    }

    /**
     * Deletes an existing Cases model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Cases model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Cases the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Cases::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function actionPush()
    {
        $id = Yii::$app->request->post('id');
        $push = Cases::find()->select('push')->where(['id' => $id])->scalar();
        $new = 1 - $push;
        Cases::updateAll(['push' => $new], ['id' => $id]);
        return json_encode(['code' => 0, 'object' => '', 'message' => '']);
    }
}
