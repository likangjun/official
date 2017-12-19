<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\searchs\UserSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="row">
    <div class="col-xs-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <?php $form = ActiveForm::begin(['method' => 'get', 'options' => ['class' => 'form-inline']]); ?>
                <?= $form->field($model, 'username') ?>
                <?= $form->field($model, 'mobile') ?>
                <?= $form->field($model, 'project_name') ?>
                <?= Html::submitButton('搜索', ['class' => 'btn btn-primary', 'style' => 'margin-bottom: 10px;']) ?>
                <?= Html::resetButton('清空', ['class' => 'btn btn-default', 'style' => 'margin-bottom: 10px;']) ?>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>

