<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Process */

$this->title = '进度更新: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => '进度管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="process-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
