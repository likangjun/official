<body class="single single-codeus_portfolios postid-2329">
<div id="page" class="fullwidth">
    <!-- wrap start -->
    <div class="block-wrap">
        <?= $this->render('/layouts/header') ?>

        <div class="page-title-block"
             style="background-image: url(skin/images/banner_field.jpg); background-color: #f5f4f0;">
            <div class="central-wrapper page-title-block-content">
                <div class="page-title-block-header">
                    <h1 style=""> 案例展示 </h1>
                </div>
            </div>
        </div>
    </div>
    <!-- wrap end -->

    <!-- wrap start -->
    <div class="content-wrap">
        <div id="main">
            <div class="central-wrapper clearfix">
                <div class="fullwidth">
                    <div class="top-el">
                        <h2 style="text-align: center;font-size: 25px;color: #a5b753">
                            <?= $case['project_name'] . ' | ' . $case['style'] ?>
                        </h2>
                        <div class="gallery noscript small  left">
                            <div class="container">
                                <ul class="preview clearfix styled">
                                    <?php foreach ($image as $v) { ?>
                                        <li>
                                            <a class="fancy_gallery" rel="group-416" href="<?= $v['img_url'] ?>">
                                                <img src="<?= $v['img_url'] ?>" width="800" height="473" alt=""/>
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
                                                <img src="<?= $v['img_url'] ?>" style="width:165px;height:93px" alt=""/>
                                            </a>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                        <div class="loading"></div>
                    </div>
                </div>
                <div id="center" class="fullwidth">
                    <div id="content">
                        <div class="inner">
                            <div class="post-tags-block clearfix">
                                <div class="post-tags"><?= date('Y-m-d', strtotime($case['create_time'])) ?></div>
                            </div>
                        </div>
                    </div>
                    <!-- #content -->
                </div>
                <!-- #center -->

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
