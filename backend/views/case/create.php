<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Cases */

$this->title = '新增案例';
$this->params['breadcrumbs'][] = ['label' => '案例管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cases-create">

    <?= $this->render('_form', [
        'model' => $model,
        'list' => $list,
    ]) ?>

</div>
