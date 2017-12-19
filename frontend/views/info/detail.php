<body class="single single-post postid-3888 single-format-standard">
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
    <div class="content-wrap">
        <div id="main">
            <div class="central-wrapper clearfix">
                <div class="panel clearfix">
                    <div id="center" class="center clearfix">
                        <div id="content">
                            <div id="post-3888"
                                 class="post-3888 post type-post status-publish format-standard hentry category-ouluoinfo tag-71 tag-72 tag-89 tag-34">
                                <div class="inner">
                                    <h4 style="text-align: center; color: #a5b753; padding-bottom: 15px;font-weight: 500;">
                                        <?= $detail['title'] ?>
                                    </h4>
                                    <?= $detail['content'] ?>

                                    <div style="margin-top: 0" class="post-tags-block clearfix">
                                        <div class="post-tags"><?= $detail['create_time'] ?>
                                            <span class="sep">|</span>
                                            <span class="tags-links">
                                                <a href="index.php?r=info/index&type=1" rel="tag">公司动态</a>
                                                <a href='index.php?r=info/index&type=2' class='thisclass'>装修资讯</a>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="post-posts-links clearfix">
                                        <?php if ($prev) { ?>
                                            <div class="left">
                                                <a href="index.php?r=info/detail&id=<?= $prev['id'] ?>" rel="prev">Prev</a>
                                            </div>
                                        <?php } ?>
                                        <?php if ($next) { ?>
                                            <div class="right">
                                                <a href="index.php?r=info/detail&id=<?= $next['id'] ?>" rel="next">Next</a>
                                            </div>
                                        <?php } ?>

                                    </div>
                                    <div class="post-related-posts">
                                        <h3>Related Posts</h3>
                                        <?php foreach ($related as $v) { ?>
                                            <div class="related-element without-image">
                                                <a href="index.php?r=info/detail&id=<?= $v['id'] ?>"></a>
                                                <div class="related-element-info">
                                                    <a style="display: -webkit-box;height: 41px;" href="index.php?r=info/detail&id=<?= $v['id'] ?>"><?= $v['title'] ?></a>
                                                    <div class="date">
                                                        <?= date('Y-m-d', strtotime($v['create_time'])) ?>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>

                                    <!-- You can start editing here. -->

                                    <!-- If comments are closed. -->
                                    <p class="nocomments">Comments are closed.</p>


                                </div>
                            </div>
                        </div>
                        <!-- #content -->
                    </div>
                    <!-- #center -->

                    <div id="blog_sidebar" class="sidebar left-news">
                        <section id="recent-posts-2" class="widget widget_recent_entries">
                            <h3 class="widget-title">最新资讯</h3>
                            <ul>
                                <?php foreach ($news as $v) { ?>
                                    <li>
                                        <a href="index.php?r=info/detail&id=<?= $v['id'] ?>">
                                            <?= $v['title'] ?></a>
                                        <span class="post-date"><?= date('Y年m月d日', strtotime($v['create_time'])) ?></span>
                                    </li>
                                <?php } ?>
                            </ul>
                        </section>
                    </div>
                    <!-- #sidebar -->
                </div>
                <!-- .panel -->
            </div>
            <!-- .central -->
        </div>
        <!-- #main -->

    </div>
    <!-- wrap end -->
</div>
<?= $this->render('/layouts/footer') ?>
</body>
