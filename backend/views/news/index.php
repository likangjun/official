<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '文章管理';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-index">
    <p>
        <?= Html::a('新建文章', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'options' => ['class' => 'box-body table-responsive no-paddin'],
        'formatter' => ['class' => 'yii\i18n\Formatter', 'nullDisplay' => ''],
        'tableOptions' => ['class' => 'table table-striped'],
        'columns' => [
            'id',
            'type' => [
                'attribute' => 'type',
                'value' => function ($model) {
                    $list = \common\models\Lookup::buildDropDownList(\common\models\Lookup::NEWS_TYPE);
                    return $list[$model->type];
                }
            ],
            'title',
            'views',
            'create_time',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
