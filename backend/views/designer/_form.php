<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model common\models\Designer */
/* @var $form yii\widgets\ActiveForm */
?>
<style>
    .kv-file-upload {
        display: none
    }
</style>
<div class="designer-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'desc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mail')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image')->hiddenInput(['id' => 'image'])->label(false) ?>

    <div class="form-group field-desinger-image required">
        <label class="control-label" for="desinger-image">照片(128x128)</label>
        <?= FileInput::widget(['name' => 'imageFile[]',
            'language' => 'zh',
            'options' => [
                'multiple' => false,
                'accept' => 'image/*'
            ],
            'pluginOptions' => [
                'maxFileCount' => 1,
                'showClose' => false, // 是否显示左上角close
                'uploadUrl' => Url::to(['upload/file']),
                'uploadAsync' => false, // 同步异步
                'uploadExtraData' => ['_csrf' => Yii::$app->request->csrfToken]
            ],
            // POST数据参数
            'pluginEvents' => [// 插件事件设置
                // 触发这个事件仅为ajax上传和同步成功后批量上传
                // 将成功上传图片返回路径在表单中赋值
                'filebatchuploadsuccess' => "function(event, data, previewId, index) {
                    $('#image').val(data.response.object.name);
                }",
            ],
        ]);
        ?>
    </div>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? '新建' : '更新', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
