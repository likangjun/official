<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Style */

$this->title = '更新风格: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => '风格管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = '更新';
?>
<div class="style-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
