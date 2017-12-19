<?php

use yii\helpers\Html;
use kartik\detail\DetailView;


/* @var $this yii\web\View */
/* @var $model common\models\User */

$this->title = $model->username;
$this->params['breadcrumbs'][] = ['label' => '客户管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

function process($user_id)
{
    return Yii::$app->runAction('/process/index', ['user_id' => $user_id]);
}

?>
<div class="user-view">
    <p>
        <?= Html::a('返回', ['index'], ['class' => 'btn btn-default']) ?>
        <?= Html::a('进度更新', ['/process/create', 'user_id' => $model->id], ['class' => 'btn btn-success']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'formatter' => ['class' => 'yii\i18n\Formatter', 'nullDisplay' => ''],
        'condensed' => true,
        'hover' => true,
        'attributes' => [
            [
                'group' => true,
                'label' => '客户信息',
                'rowOptions' => ['class' => 'info']
            ],
            [
                'columns' => [
                    [
                        'attribute' => 'username',
                        'label' => '客户姓名',
                        'valueColOptions' => ['style' => 'width:30%']
                    ],
                    [
                        'attribute' => 'mobile',
                        'label' => '手机号',
                        'valueColOptions' => ['style' => 'width:30%'],
                    ],
                ],
            ],
            [
                'columns' => [
                    [
                        'attribute' => 'project_name',
                        'label' => '楼盘',
                        'valueColOptions' => ['style' => 'width:30%']
                    ],
                    [
                        'attribute' => 'style',
                        'label' => '风格',
                        'valueColOptions' => ['style' => 'width:30%']
                    ],
                ],
            ],

            [
                'group' => true,
                'label' => '进度信息',
                'rowOptions' => ['class' => 'info']
            ],
            [
                'group' => true,
                'format' => 'raw',
                'label' => process($model->id),
            ],
        ],
    ]) ?>
</div>
