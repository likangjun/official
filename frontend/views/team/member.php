<body class="page page-id-598 page-child parent-pageid-591 page-template-default">
<div id="page" class="fullwidth">
    <!-- wrap start -->
    <div class="block-wrap">
        <?= $this->render('/layouts/header') ?>
        <div class="page-title-block"
             style="background-image: url(skin/images/banner_teams.jpg); background-color: #f5f4f0;">
            <div class="central-wrapper page-title-block-content">
                <div class="page-title-block-header">
                    <h1 style=""> 软装团队 </h1>
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
                            <div class="team-list-wrapper">
                                <div class="team-list">
                                    <?php foreach ($list as $v) { ?>
                                        <div class="team-element">
                                            <div class="team-element-image"><img src="<?= $v['image'] ?>" alt=""/></div>
                                            <div class="team-element-name"><?= $v['name'] ?></div>
                                            <div class="team-element-position"><?= $v['desc'] ?></div>
                                            <div class="team-element-email">
                                                <a href="mailto:<?= $v['mail'] ?>">Send Message</a>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
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
