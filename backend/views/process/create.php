<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Process */

$this->title = '进度更新-' . $user['username'] . '-' . $user['project_name'];
$this->params['breadcrumbs'][] = ['label' => '进度管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="process-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
