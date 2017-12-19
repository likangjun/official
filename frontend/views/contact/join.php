<body class="page page-id-676 page-child parent-pageid-608 page-template page-template-page_sidebar-php">
<div id="page" class="fullwidth">
    <!-- wrap start -->
    <div class="block-wrap">
        <?= $this->render('/layouts/header') ?>

        <div class="page-title-block"
             style="background-image: url(skin/images/banner_hr.jpg); background-color: #f5f4f0;">
            <div class="central-wrapper page-title-block-content">
                <div class="page-title-block-header">
                    <h1 style=""> 人才理念 </h1>
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
                            <div class="inner">
                                <div class="tabs ui-tabs ui-widget ui-widget-content ui-corner-all">
                                    <ul class="tabs-nav styled ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all"
                                        role="tablist">
                                        <?php foreach ($list as $k => $v) { ?>
                                            <li aria-controls="tabs-<?= $v['id'] ?>"
                                                aria-labelledby="ui-id-<?= $v['id'] ?>"
                                                aria-selected="<?= $k == 0 ? 'true' : 'false' ?>"
                                                class="ui-state-default ui-corner-top <?php if ($k == 0) { ?> ui-tabs-active ui-state-active<?php } ?>"
                                                role="tab" tabindex="<?= $k == 0 ? '0' : '-1' ?>">
                                                <h5>
                                                    <a class="ui-tabs-anchor" href="#tabs-<?= $v['id'] ?>"
                                                       id="ui-id-<?= $v['id'] ?>"
                                                       role="presentation" tabindex="-1"><?= $v['name'] ?></a>
                                                </h5>
                                            </li>
                                        <?php } ?>


                                    </ul>
                                    <?php foreach ($list as $k => $v) { ?>
                                        <div aria-expanded="<?= $k == 0 ? 'true' : 'false' ?>" aria-hidden="<?= $k == 0 ? 'false' : 'true' ?>" aria-labelledby="ui-id-<?= $v['id'] ?>"
                                             class="tab_wrapper ui-tabs-panel ui-widget-content ui-corner-bottom"
                                             id="tabs-<?= $v['id'] ?>" role="tabpanel" <?php if ($k == 0) { ?>style="display: none;"<?php } ?>>
                                            <b>职位标签：</b> <?= $v['name'] ?><br/>
                                            <b>职位职能：</b><?= $v['function'] ?><br/>
                                            <b>职位描述：</b><br/>
                                            <pre class="pre-huan"><?= $v['describe'] ?></pre><br/>
                                            <b>岗位职责：</b><br/>
                                            <pre class="pre-huan"><?= $v['content'] ?></pre>
                                        </div>

                                    <?php } ?>

                                </div>
                                <p>
                                    <span style="font-size: 16px;">请发简历至邮箱：2814593455@qq.com</span>
                                </p>
                            </div>
                            <br/>
                        </div>
                        <!-- #content -->
                    </div>
                    <!-- #center -->

                    <div id="sidebar" class="sidebar">
                        <section id="nav_menu-31" class="widget widget_nav_menu">
                            <h3 class="widget-title">联系我们</h3>
                            <div class="menu-%e4%ba%ba%e5%8a%9b%e8%b5%84%e6%ba%90-container">
                                <ul id="menu-%e4%ba%ba%e5%8a%9b%e8%b5%84%e6%ba%90" class="menu">

                                    <li id="menu-item-678" class="menu-item menu-item-type-post_type">
                                        <a href="index.php?r=contact/idea">人才理念</a>
                                    </li>
                                    <li id="menu-item-678" class="menu-item menu-item-type-post_type current-menu-item">
                                        <a href="index.php?r=contact/join">加入我们</a>
                                    </li>
                                    <li id="menu-item-678" class="menu-item menu-item-type-post_type">
                                        <a href="index.php?r=contact/contact">联系我们</a>
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
