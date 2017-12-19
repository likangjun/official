<?php
$id = Yii::$app->request->get('id');
$field_list = \common\models\Field::fieldList();
?>
<div id="sidebar" class="sidebar">
    <section id="nav_menu-8" class="widget widget_nav_menu">
        <h3 class="widget-title">住宅设计</h3>
        <div class="menu-%e8%bd%af%e8%a3%85%e9%a3%8e%e6%a0%bc-container">
            <ul id="menu-%e8%bd%af%e8%a3%85%e9%a3%8e%e6%a0%bc" class="menu">
                <?php foreach($field_list as $v){ ?>
                <li id="menu-item-286" class="menu-item menu-item-type-post_type <?php if ($id == $v['id']) { ?>current-menu-item<?php } ?>">
                    <a href="index.php?r=field/index&id=<?=$v['id']?>"><?=$v['name']?></a>
                </li>
                <?php } ?>
            </ul>
        </div>
    </section>
</div>