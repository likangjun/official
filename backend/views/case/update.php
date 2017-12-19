<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Cases */

$this->title = '编辑案例: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => '案例管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = '更新';
?>
<div class="cases-update">

    <?= $this->render('_form', [
        'model' => $model,
        'list' => $list,
    ]) ?>

</div>
