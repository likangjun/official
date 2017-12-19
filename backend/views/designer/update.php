<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Designer */

$this->title = '更新设计师: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => '团队管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = '更新';
?>
<div class="designer-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
