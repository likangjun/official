<?php $action = Yii::$app->controller->action->id ?>
<div id="sidebar" class="sidebar">
    <section id="nav_menu-3" class="widget widget_nav_menu">
        <h3 class="widget-title">关于我们</h3>
        <div class="menu-%e5%85%b3%e4%ba%8e%e6%88%91%e4%bb%ac-container">
            <ul id="menu-%e5%85%b3%e4%ba%8e%e6%88%91%e4%bb%ac" class="menu">
                <li class='menu-item menu-item-type-post_type <?php if ($action == 'index') { ?>current-menu-item<?php } ?>'>
                    <a href='index.php?r=about/index' class='thisclass'>公司介绍</a>
                </li>
                <li class="menu-item menu-item-type-post_type <?php if ($action == 'fuwu') { ?>current-menu-item<?php } ?>">
                    <a href="index.php?r=about/fuwu">服务内容</a>
                </li>
                <li class="menu-item menu-item-type-post_type <?php if ($action == 'process') { ?>current-menu-item<?php } ?>">
                    <a href="index.php?r=about/process">装修流程</a>
                </li>

                <li class="menu-item menu-item-type-post_type <?php if ($action == 'tactic') { ?>current-menu-item<?php } ?>">
                    <a href="index.php?r=about/tactic">企业战略</a>
                </li>
            </ul>
        </div>
    </section>
</div>