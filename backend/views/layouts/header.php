<?php
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */
?>

<header class="main-header">

    <?= Html::a('<span class="logo-mini">和晟天成</span><span class="logo-lg">和晟天成</span>', Yii::$app->homeUrl, ['class' => 'logo']) ?>

    <nav class="navbar navbar-static-top" role="navigation">

        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>


        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="images/user_image.png" class="user-image" alt="User Image">
                        <span><?= !Yii::$app->user->isGuest ? Yii::$app->user->identity->username : '' ?></span>
                    </a>
                </li>
                <li>
                    <?= Html::a('', ['/site/logout'], [
                        'class' => 'fa fa-sign-out',
                        'data' => [
                            'method' => 'post',
                        ],
                    ]) ?>
                </li>
            </ul>
        </div>
    </nav>
</header>
