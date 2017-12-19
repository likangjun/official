<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '团队管理';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="designer-index">

    <p>
        <?= Html::a('新增设计师', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'options' => ['class' => 'box-body table-responsive no-paddin'],
        'formatter' => ['class' => 'yii\i18n\Formatter', 'nullDisplay' => ''],
        'tableOptions' => ['class' => 'table table-striped'],
        'columns' => [
            'id',
            'name',
            'desc',
            'mail',
            'create_time',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
