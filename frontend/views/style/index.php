<body class="page page-id-281 page-child parent-pageid-280 page-template page-template-page_sidebar-php">
<div id="page" class="fullwidth">
    <!-- wrap start -->
    <div class="block-wrap">
        <?= $this->render('/layouts/header') ?>

        <div class="page-title-block"
             style="background-image: url(skin/images/banner_style.jpg); background-color: #f5f4f0;">
            <div class="central-wrapper page-title-block-content">
                <div class="page-title-block-header">
                </div>
            </div>
        </div>
    </div>
    <!-- wrap end -->

    <!-- wrap start -->
    <div class="content-wrap">
        <div id="main">
            <div class="central-wrapper clearfix">
                <div class="panel clearfix">
                    <div id="center" class="center clearfix">
                        <div id="content">
                            <div class="top-el">
                                <div class="gallery noscript small  left">
                                    <div class="container">
                                        <ul class="preview clearfix styled">
                                            <?php foreach ($image as $v) { ?>
                                                <li>
                                                    <a class="fancy_gallery" rel="group-416"
                                                       href="<?= $v['img_url'] ?>">
                                                        <img src="<?= $v['img_url'] ?>" width="800" height="473"
                                                             alt=""/>
                                                    <span class="overlay">
                                                        <span class="p-icon"></span>
                                                    </span>
                                                    </a>
                                                </li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                    <div class="thumbs_wrapper">
                                        <ul class="thumbs clearfix styled">
                                            <?php foreach ($image as $v) { ?>
                                                <li>
                                                    <a class="thumb" href="<?= $v['img_url'] ?>">
                                                        <img src="<?= $v['img_url'] ?>" style="width:165px;height:93px"
                                                             alt=""/>
                                                    </a>
                                                </li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                                <div class="loading"></div>
                            </div>
                            <div class="inner">
                                <h3 class="iconed-title"><span class="icon active"></span><?= $style['name'] ?></h3>
                                &nbsp;
                                <pre class="pre-huan"><?= $style['content'] ?></pre>
                            </div>
                        </div>
                        <!-- #content -->
                    </div>
                    <!-- #center -->

                    <?= $this->render('/style/left') ?>
                    <!-- #sidebar -->

                </div>
                <!-- .panel -->

            </div>
            <!-- .central-wrapper -->
        </div>
        <!-- #main -->

    </div>
    <!-- wrap end -->

    <!-- wrap start -->
    <div class="block-wrap"></div>
    <!-- wrap end -->
</div>
<?= $this->render('/layouts/footer') ?>
</body>