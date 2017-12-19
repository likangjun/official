<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\file\FileInput;

/* @var $this yii\web\View */
/* @var $model common\models\Style */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => '风格管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="style-view">
    <p>
        <?= Html::a('更新', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'content:ntext',
            [
                'label' => '图片',
                'format' => 'raw',
                'value' => FileInput::widget(['name' => 'imageFile[]',
                    'language' => 'zh',
                    'pluginOptions' => [
                        'showUpload' => false,
                        'showRemove' => false,
                        'showBrowse' => false,
                        'showCaption' => false,
                        'overwriteInitial' => false,
                        'initialPreviewAsData' => true,
                        'initialPreview' => $model->image
                    ],
                ])
            ]
        ]]) ?>

</div>
