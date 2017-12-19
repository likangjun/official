<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model common\models\Cases */
/* @var $form yii\widgets\ActiveForm */
?>
<style>
    .kv-file-upload {
        display: none
    }
</style>
<div class="cases-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'project_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'style')->textInput() ?>

    <?= $form->field($model, 'desinger_id')->dropDownList($list,['prompt' => '请选择设计师']) ?>

    <?= $form->field($model, 'image')->hiddenInput(['id' => 'image'])->label(false) ?>

    <div class="form-group field-case-image required">
        <label class="control-label" for="case-image">图片</label>
        <?= FileInput::widget(['name' => 'imageFile[]',
            'language' => 'zh',
            'options' => [
                'multiple' => true,
                'accept' => 'image/*'
            ],
            'pluginOptions' => [
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
        <?= Html::submitButton($model->isNewRecord ? '新增' : '更新', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
