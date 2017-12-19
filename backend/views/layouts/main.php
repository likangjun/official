<?php
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */

backend\assets\AppAsset::register($this);

dmstr\web\AdminLteAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title>和晟天成-<?= $this->title ?></title>
    <?php $this->head() ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<?php $this->beginBody() ?>
<div class="wrapper">

    <?= $this->render('header.php') ?>

    <?= $this->render('left.php')?>

    <?= $this->render('content.php',['content' => $content]) ?>

</div>

<?php $this->endBody() ?>
<?php if (isset($this->blocks['scripts'])) { ?>
    <?= $this->blocks['scripts'] ?>
<?php } ?>

<script type="text/javascript">
    function setfullHeightWrap() {
        $('.full-height-wrap').css('min-height', ($(window).height() - $('.footer-container').height() - 50) + "px");
    }

    $(function () {
        setfullHeightWrap();

        $(window).resize(function () {
            setfullHeightWrap();
        });
    });
</script>
</body>
</html>
<?php $this->endPage() ?>
