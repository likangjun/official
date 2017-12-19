<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '头图管理';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="banner-index">
    <p>
        <?= Html::a('新增头图', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'options' => ['class' => 'box-body table-responsive no-paddin'],
        'formatter' => ['class' => 'yii\i18n\Formatter', 'nullDisplay' => ''],
        'tableOptions' => ['class' => 'table table-striped'],
        'columns' => [
            'id',
            'title',
            'desc',
            [
                'header' => '图片',
                'format' => 'raw',
                'value' => function ($model) {
                    return '<image width="300" src="' . $model->image . '">';
                }
            ],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
