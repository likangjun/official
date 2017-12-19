<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Style */

$this->title = '新增风格';
$this->params['breadcrumbs'][] = ['label' => '风格管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="style-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
