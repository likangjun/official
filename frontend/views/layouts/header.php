<?php
$field_list = \common\models\Field::fieldList();
$style_list = \common\models\Style::styleList();
?>
<script type="text/javascript">
    if (jQuery('body').hasClass('lazy-enabled') && jQuery(window).width() <= 800) {
        jQuery('body').removeClass('lazy-enabled')
    }
</script>
<div class="header-fixed-wrapper">
    <header id="header">
        <div class="central-wrapper">
            <div class="navigation clearfix logo-position-left">
                <h1 class="site-title logo">
                    <img src="skin/images/hstc-logo.png" style="width: 56px;height: 56px"/>
                    <img src="skin/images/hstc-logo.png" style="width: 56px;height: 56px;display: none;"
                         class="header-fixed-logo"/>
                    <span>和晟天成</span>
                </h1>
                <nav id="site-navigation">
                    <a href="javascript:void(0);" class="menu-toggle dl-trigger">
                        Menu
                    </a>
                    <ul id="menu-home" class="nav-menu styled">
                        <li class="navbar-link" data-c="index">
                            <a href="index.php?r=index/index">首页<br/>Home</a>
                        </li>

                        <li class="navbar-link" data-c="about">
                            <a href="index.php?r=about/index">关于我们<br/>About</a>
                            <ul class="sub-menu">
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-147">
                                    <a href="index.php?r=about/index">公司介绍</a></li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-147">
                                    <a href="index.php?r=about/fuwu">服务内容</a></li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-147">
                                    <a href="index.php?r=about/process">软装流程</a></li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-147">
                                    <a href="index.php?r=about/tactic">企业战略</a></li>
                            </ul>
                        </li>
                        <li class="navbar-link" data-c="field">
                            <a href="index.php?r=field/index">服务领域<br/>Field</a>
                            <ul class="sub-menu">
                                <?php foreach ($field_list as $v) { ?>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-147">
                                        <a href="index.php?r=field/index&id=<?= $v['id'] ?>"><?= $v['name'] ?></a>
                                    </li>
                                <?php } ?>
                            </ul>
                        </li>
                        <li class="navbar-link" data-c="style">
                            <a href="index.php?r=style/index">装修风格<br/>Style</a>
                            <ul class="sub-menu">
                                <?php foreach ($style_list as $v) { ?>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-147">
                                        <a href="index.php?r=style/index&id=<?= $v['id'] ?>"><?= $v['name'] ?></a>
                                    </li>
                                <?php } ?>
                            </ul>
                        </li>
                        <li class="navbar-link" data-c="case">
                            <a href="index.php?r=case/index">案例展示<br/>Case</a>
                        </li>
                        <li class="navbar-link" data-c="info">
                            <a href="index.php?r=info/index">资讯中心<br/>Info</a>
                            <ul class="sub-menu">
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-147">
                                    <a href="index.php?r=info/index&type=1">公司动态</a></li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-147">
                                    <a href="index.php?r=info/index&type=2">装修资讯</a></li>
                            </ul>
                        </li>
                        <li class="navbar-link" data-c="team">
                            <a href="index.php?r=team/index">团队风采<br/>Team</a>
                            <ul class="sub-menu">
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-147">
                                    <a href="index.php?r=team/index">团队介绍</a></li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-147">
                                    <a href="index.php?r=team/member">软装团队</a></li>
                            </ul>
                        </li>
                        <li class="navbar-link" data-c="contact">
                            <a href="index.php?r=contact/contact">联系我们<br/>Contact</a>
                            <ul class="sub-menu">
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-147">
                                    <a href="index.php?r=contact/idea">人才理念</a></li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-147">
                                    <a href="index.php?r=contact/join">加入我们</a></li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-147">
                                    <a href="index.php?r=contact/contact">联系我们</a></li>
                            </ul>
                        </li>
                        <li class="navbar-link" data-c="process">
                            <a <?= Yii::$app->session->get('user_id') ? 'href="index.php?r=process/index"' : ''; ?>>进度查看<br/>Process</a>
                            <ul class="sub-menu">
                                <?php if (Yii::$app->session->get('user_id')) { ?>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-147">
                                        <a href="index.php?r=process/index">进度查看</a></li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-147">
                                        <a id="logout">退出</a></li>
                                <?php } else { ?>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-147">
                                        <a id="viewProcess">登录</a></li>
                                <?php } ?>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- #site-navigation -->
            </div>
        </div>
    </header>
</div>
<script>
    (function ($) {
        $('.navbar-link').each(function (index, obj) {
            var action = '<?= Yii::$app->controller->id; ?>';
            var nav = $(obj).attr("data-c");
            if (nav == action) {
                $(obj).addClass("current-menu-item")
            }
        });
        if (document.getElementById("viewProcess")) {
            document.getElementById('viewProcess').onclick = function () {
                layer.prompt({title: '请输入您的手机号', formType: 4}, function (pass, index) {
                    if (!pass || pass == '') {
                        layer.alert('手机号不能为空哦');
                    }
                    $.post("index.php?r=process/login", {
                        "mobile": pass,
                        "<?= Yii::$app->request->csrfParam ?>": '<?= Yii::$app->request->csrfToken ?>'
                    }, function (data) {
                        var res = JSON.parse(data);
                        if (res.code == 0) {
                            layer.msg('登录成功!', {icon: 1, time: 1000});
                            window.location.href = 'index.php?r=process/index'
                        } else {
                            layer.alert(res.message, {
                                icon: 5,
                                skin: 'layer-ext-moon'
                            });
                        }
                    });
                });
            };
        }
        if (document.getElementById("logout")) {
            document.getElementById('logout').onclick = function () {
                $.post("index.php?r=process/logout", {
                    "<?= Yii::$app->request->csrfParam ?>": '<?= Yii::$app->request->csrfToken ?>'
                }, function (data) {
                    var res = JSON.parse(data);
                    if (res.code == 0) {
                        layer.msg('退出成功!', {icon: 1, time: 1000});
                        window.location.reload();
                    } else {
                        layer.alert(res.message, {
                            icon: 2,
                            skin: 'layer-ext-moon'
                        });
                    }
                });
            };
        }
    })(jQuery);
</script>