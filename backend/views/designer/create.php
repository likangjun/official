<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Designer */

$this->title = '新增设计师';
$this->params['breadcrumbs'][] = ['label' => '团队管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="designer-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
