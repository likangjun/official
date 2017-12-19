<body class="page page-id-708 page-child parent-pageid-154 page-template-default lazy-enabled">
<div id="page" class="fullwidth">
    <!-- wrap start -->
    <div class="block-wrap">
        <?= $this->render('/layouts/header') ?>

        <div class="page-title-block" style="background-image: url(skin/images/banner_field.jpg); background-color: #f5f4f0;">
            <div class="central-wrapper page-title-block-content">
                <div class="page-title-block-header">
                    <h1 style=""> 经典案例 </h1>
                </div>
            </div>
        </div>
    </div>
    <!-- wrap end -->

    <!-- wrap start -->
    <div class="content-wrap">
        <div id="main">
            <div class="central-wrapper clearfix">
                <div id="center" class="fullwidth">
                    <div id="content">
                        <div class="inner">
                            <div class="portfolio noscript medium">
                                <div class=" rubrics" data-count="6">
                                    <?php $type = isset($_GET['type']) ? $_GET['type'] : 1 ?>

                                    <ul class="filter styled">
                                        <li class="mix-filter iconed" data-filter="all">
                                            <a href="index.php?r=case/index&type=1" <?php if($type==1){?>style="color: #a5b753" <?php } ?>>
                                                <span class="icon" <?php if($type==1){?>style="color: #a5b753" <?php } ?>>&#xe645;</span> Show All
                                            </a>
                                        </li>
                                        <li data-filter="classical" class="mix-filter ">
                                            <a href="index.php?r=case/index&type=2" <?php if($type==2){?>style="color: #a5b753" <?php } ?>> 经典案例 </a>
                                        </li>
                                    </ul>
                                    <ul class="thumbs-temp styled">
                                    </ul>
                                    <ul class="thumbs lazy-loading styled" data-ll-item-delay="0">
                                        <?php foreach($case as $v){ ?>
                                        <li class="self-link classical lazy-loading-item" data-ll-effect="drop-bottom">
                                            <a href="index.php?r=case/detail&id=<?=$v['id']?>">
                                                <span class="image">
                                                    <img src="<?=$v['image']?>" style="width:371px;height:210px" alt="案例展示" />
                                                    <span class="overlay">
                                                        <span class="p-icon"></span>
                                                    </span></span>
                                            </a>
                                            <div class="caption">
                                                <div class="title">
                                                    <div class="title-hover-color"></div>
                                                    <div class="title-inner">
                                                        <div class="title-inner-content"><?=$v['project_name']?></div>
                                                    </div>
                                                </div>
                                                <div class="info" style="margin-top: 10px">
                                                    <?=date('Y-m-d',strtotime($v['create_time']))?>
                                                    <span>|</span><a data-slug="classical"><?=$v['style']?></a>
                                                    <span>|</span><a data-slug="classical"><?=$v['desinger_name']?></a>
                                                </div>
                                            </div>
                                        </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="loading"></div>
                            <div style="display: block;text-align: center;">
                                <?= \yii\widgets\LinkPager::widget(['pagination' => $page, 'firstPageLabel' => true, 'lastPageLabel' => true]) ?>
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
    <div class="block-wrap"> </div>
    <!-- wrap end -->

</div>
<?= $this->render('/layouts/footer') ?>
</body>
