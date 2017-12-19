<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Style */

$this->title = '新增服务';
$this->params['breadcrumbs'][] = ['label' => '服务管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="style-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
