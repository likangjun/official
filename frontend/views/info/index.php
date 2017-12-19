<body class="page page-id-893 page-child parent-pageid-148 page-template page-template-page_blog_sidebar_left-php">
<div id="page" class="fullwidth">
    <!-- wrap start -->
    <div class="block-wrap">
        <?= $this->render('/layouts/header') ?>

        <div class="page-title-block"
             style="background-image: url(skin/images/banner_news.jpg); background-color: #f5f4f0;">
            <div class="central-wrapper page-title-block-content">
                <div class="page-title-block-header">
                    <h1 style=""> 资讯中心 </h1>
                </div>
            </div>
        </div>
    </div>
    <!-- wrap end -->

    <!-- wrap start -->
    <div class="content-wrap content-right">
        <div id="main">
            <div class="central-wrapper clearfix">
                <div class="panel clearfix">
                    <div id="center" class="center clearfix">
                        <div id="content">
                            <div class="inner">
                                <h1 style="text-align: center;">
                                    <span style="color: #003366;">和晟天成装饰公司的<?= $type ?></span>
                                </h1>
                                <div class="blog_list">
                                    <ul class="styled">
                                        <?php foreach ($list as $v) { ?>
                                            <li class="clearfix">
                                                <div id="post-3888"
                                                     class="post-3888 post type-post status-publish format-standard hentry category-ouluoinfo tag-71 tag-72 tag-89 tag-34">
                                                    <div class="comment-info">
                                                        <a class="date-day"><?= date('d', strtotime($v['create_time'])) ?></a>
                                                        <div
                                                            class="date-month"><?= date('m', strtotime($v['create_time'])) ?></div>
                                                    </div>
                                                    <div class="post-info">
                                                        <h3>
                                                            <a href="index.php?r=info/detail&id=<?= $v['id'] ?>"><?= $v['title'] ?></a>
                                                        </h3>
                                                        <div class="text clearfix">
                                                            <p><?= \common\models\News::cutstr_html(($v['content']), 80); ?>
                                                                ...</p>
                                                        </div>
                                                        <div class="post-info-bottom clearfix">
                                                            <div class="categories">
                                                                <a href="index.php?r=info/index&type=<?= $v['type'] ?>"><?= $type ?></a>
                                                            </div>
                                                            <div class="comments-count">
                                                                <span class="comment-count"><b><?= $v['views'] ?></b> views</span>
                                                                <a href="index.php?r=info/detail&id=<?= $v['id'] ?>"
                                                                   class="more-link"><b>&nbsp;</b>Read more
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                                <div style="display: block;text-align: center">
                                    <?= \yii\widgets\LinkPager::widget(['pagination' => $page, 'firstPageLabel' => true, 'lastPageLabel' => true]) ?>
                                </div>
                            </div>
                        </div>
                        <!-- #content -->
                    </div>
                    <!-- #center -->
                    <?php $type_code = isset($_GET['type']) ? $_GET['type'] : 2 ?>
                    <div id="sidebar" class="sidebar">
                        <section id="nav_menu-33" class="widget widget_nav_menu">
                            <h3 class="widget-title">资讯中心</h3>
                            <div class="menu-%e8%b5%84%e8%ae%af%e4%b8%ad%e5%bf%83-container">
                                <ul id="menu-%e8%b5%84%e8%ae%af%e4%b8%ad%e5%bf%83" class="menu">
                                    <li id="menu-item-898"
                                        class="menu-item menu-item-type-post_type <?php if ($type_code == 1) { ?>current-menu-item<?php } ?>">
                                        <a href="index.php?r=info/index&type=1">公司动态</a>
                                    </li>
                                    <li id="menu-item-898"
                                        class="menu-item menu-item-type-post_type <?php if ($type_code == 2) { ?>current-menu-item<?php } ?>">
                                        <a href="index.php?r=info/index&type=2">装修资讯</a>
                                    </li>
                                </ul>
                            </div>
                        </section>
                    </div>
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
