<body class="home blog lazy-enabled">
<div id="page" class="fullwidth">
    <div class="block-wrap">
        <?= $this->render('/layouts/header') ?>
        <!-- banner start -->
        <div class="block slideshow noscript">
            <div id="slideshow-14410442612127553056" class="nivoSlider">
                <?php foreach ($banner as $k => $v) { ?>
                    <a class="slide nivo-imageLink" <?php if ($v['url']) { ?> href="<?= $v['url'] ?>" <?php } ?>>
                        <img alt="" src="<?= $v['image'] ?>"/>
                        <div class="caption" style="display: none;">
                            <div class="caption-right">
                                <div class="title"><?= $v['title'] ?></div>
                                <div class="clear"></div>
                                <div class="description">
                                    <p><?= $v['desc'] ?></p>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </a>
                <?php } ?>
            </div>
            <div class="loading"></div>
        </div>
        <div class="loading"></div>
        <!-- banner end -->
        <!-- four start -->
        <div class="block quickfinder">
            <div class="central-wrapper clearfix">
                <ul class="lazy-loading styled" data-ll-force-start="1">
                    <li>
                        <a href="index.php?r=about/index" class="clearfix">
                            <span class="image lazy-loading-item" data-ll-item-delay="0" data-ll-effect="clip"
                                  style="background-color: rgb(134, 209, 131); color: #ffffff;">&#xe609;</span>
                            <span class="lazy-loading-item caption" data-ll-item-delay="200" data-ll-effect="fading">
                            <span class="title">公司简介</span>
                            <span class="description">湖北和晟天成装饰有限公司是国内高级软装搭配设计品牌之一，拥有丰富的经验和软装产品资源</span> </span>
                        </a>
                    </li>
                    <li>
                        <a href="index.php?r=case/index" class="clearfix">
                            <span class="image lazy-loading-item" data-ll-item-delay="0" data-ll-effect="clip"
                                  style="background-color: rgb(96, 219, 196); color: #ffffff;">&#xe656;</span>
                            <span class="lazy-loading-item caption" data-ll-item-delay="200" data-ll-effect="fading">
                                <span class="title">经典案例</span>
                                <span class="description">和晟天成装饰经典案例，各类软件风格，住宅设计，商业空间设计。有丰富的室内外环境装饰经验</span>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="index.php?r=field/process" class="clearfix">
                            <span class="image lazy-loading-item" data-ll-item-delay="0" data-ll-effect="clip"
                                  style="background-color: rgb(85, 140, 173); color: #ffffff;">&#xe638;</span>
                            <span class="lazy-loading-item caption" data-ll-item-delay="200" data-ll-effect="fading">
                                <span class="title">软装流程</span>
                                <span class="description">首次空间测量，风格探讨，初步构思（定位方案），初步方案，方案制定，方案讲解，进场安装摆放，饰后服务</span>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="index.php?r=team/index" class="clearfix">
                            <span class="image lazy-loading-item" data-ll-item-delay="0" data-ll-effect="clip"
                                  style="background-color: rgb(72, 175, 219); color: #ffffff;">&#xe633;</span>
                            <span class="lazy-loading-item caption" data-ll-item-delay="200" data-ll-effect="fading">
                                <span class="title">设计团队</span>
                                <span class="description">软装设计企业拥有较强的设计优势，和晟天成设计团队充分整合行业资源，致力成为软装设计行业的领航明星</span>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- four end -->

        <!-- case start -->
        <div class="block portfolio">
            <div class="lazy-loading" data-ll-item-delay="0">
                <div class="central-wrapper">
                    <div class="fullwidth">
                        <h2 class="bar-title lazy-loading-item" data-ll-effect="fading">经典案例</h2>
                    </div>
                </div>
                <div class="carousel-wrapper">
                    <div class="carousel">
                        <ul class="thumbs noscript styled">
                            <?php foreach ($case as $v) { ?>
                                <li class="self-link lazy-loading-item" data-ll-effect="drop-bottom">
                                    <a href="index.php?r=case/detail&id=<?= $v['id'] ?>">
                                        <span class="image">
                                            <img src="<?= $v['image'] ?>" width="370" height="210"
                                                 alt="<?= $v['project_name'] ?>"/>
                                            <span class="overlay">
                                                <span class="p-icon"></span>
                                            </span>
                                        </span>
                                    </a>
                                    <div class="caption">
                                        <div class="title">
                                            <div class="title-hover-color"></div>
                                            <div class="title-inner">
                                                <div class="title-inner-content"> <?= $v['project_name'] ?></div>
                                            </div>
                                        </div>
                                        <div class="small-title"> <?= $v['project_name'] ?></div>
                                    </div>
                                </li>
                            <?php } ?>
                        </ul>
                        <div class="loading"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- case end -->
    </div>
    <div class="content-wrap">
        <div class="block content">
            <div class="central-wrapper clearfix">
                <div class="panel clearfix">
                    <div class="center">
                        <div class="lazy-loading" data-ll-item-delay="0">
                            <h2 class="lazy-loading-item" data-ll-effect="drop-top" data-ll-step="0.5">
                                为什么选择和晟天成</h2>
                        </div>
                        <div class="lazy-loading" data-ll-item-delay="0">
                            <div class="lazy-loading-item" data-ll-effect="fading">
                                <div class="inner">
                                    <p>
                                        <img class="alignleft" style="width: 352px;"
                                             src="skin/images/about_index.jpg"/>
                                    </p>
                                    <p style="text-indent: 2em;">
                                        湖北和晟天成装饰有限公司是国内专业整体软装配饰设计品牌之一，拥有丰富的经验和软装产品资源。</p>
                                    <p style="text-indent: 2em;">
                                        公司经营室内外环境装饰行业多年，积累了丰富的室内空间设计经验，汇集了大批具有多年从事艺术软装和室内软装设计工作人员。随着和晟天成软装公司的努力奋斗，目前和晟天成装饰公司是一家集酒店与样板房、精装修房软装设计、高端别墅、高档住宅、会所、商业空间以及室内空间软装饰设计与开发实施为一体的综合性大型整体软装公司。</p>
                                    <p style="text-indent: 2em;">
                                        和晟天成装饰公司以“理念先行，设计主导”的思想来发展，以家具、灯饰、窗帘、花艺、挂画、地毯、饰品、布艺等软装产品设计开发和产业资源整合为发展方向，提供软装设计、软装产品和软装配饰工程服务等整体软装服务业务。</p>
                                    <p><a class="button" href="index.php?r=about/index" target="_self">了解更多</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar">
                        <section id="testimonials-2" class="widget widget_testimonials">
                            <h3 class="widget-title">客户的评论</h3>
                            <div class="testimonials_wrap">
                                <div class="testimonials">
                                    <div class="testimonials-list">
                                        <div class="testimonial_item">
                                            <table class="nostyle">
                                                <tbody>
                                                <tr>
                                                    <td class="image">
                                                        <div><img src="skin/images/1-150Z4145323226.jpg"
                                                                  alt=""/>
                                                        </div>
                                                    </td>
                                                    <td class="info"><span class="name">Kate</span><br/>
                                                        软装设计师：Kate<br/></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <blockquote>
                                                <p>
                                                    ...软装饰背后涵盖的国家或民族的风土人情、生活方式、文学艺术、行为规范和价值观念之上。一个软装设计师只有静下心来研究这些大概念意义上的文化，经过岁月的积累和沉淀，才能</p>
                                            </blockquote>
                                        </div>
                                        <div class="testimonial_item">
                                            <table class="nostyle">
                                                <tbody>
                                                <tr>
                                                    <td class="image">
                                                        <div><img src="skin/images/1-150Z41432080-L.jpg"
                                                                  alt=""/></div>
                                                    </td>
                                                    <td class="info"><span class="name">Linda</span><br/>
                                                        软装设计师：Linda<br/></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <blockquote>
                                                <p>
                                                    ...软装饰背后涵盖的国家或民族的风土人情、生活方式、文学艺术、行为规范和价值观念之上。一个软装设计师只有静下心来研究这些大概念意义上的文化，经过岁月的积累和沉淀，才能</p>
                                            </blockquote>
                                        </div>
                                        <div class="testimonial_item">
                                            <table class="nostyle">
                                                <tbody>
                                                <tr>
                                                    <td class="image">
                                                        <div><img src="skin/images/1-150Z41452020-L.jpg"
                                                                  alt=""/></div>
                                                    </td>
                                                    <td class="info"><span class="name">Andrew Cliffe</span><br/>
                                                        软装设计师：Andrew Cliffe<br/></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <blockquote>
                                                <p>
                                                    ...在和晟天成软装公司实施项目前期的沟通和策划以及实施的过程中，和晟天成软装设计所表现出的高水准的专业能力以及高品质的服务，让我对这个团队所拥有的雄厚实力以及所展现的业务能力</p>
                                            </blockquote>
                                        </div>
                                        <div class="testimonial_item">
                                            <table class="nostyle">
                                                <tbody>
                                                <tr>
                                                    <td class="image">
                                                        <div><img src="skin/images/1-150Z41451390-L.jpg"
                                                                  alt=""/></div>
                                                    </td>
                                                    <td class="info"><span class="name">Michelle</span><br/>
                                                        软装设计师：Michelle<br/></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <blockquote>
                                                <p>
                                                    ...在和晟天成软装公司实施项目前期的沟通和策划以及实施的过程中，和晟天成软装设计所表现出的高水准的专业能力以及高品质的服务，让我对这个团队所拥有的雄厚实力以及所展现的业务能力</p>
                                            </blockquote>
                                        </div>
                                        <div class="testimonial_item">
                                            <table class="nostyle">
                                                <tbody>
                                                <tr>
                                                    <td class="image">
                                                        <div><img src="skin/images/1-150Z414512E55.png" alt=""/>
                                                        </div>
                                                    </td>
                                                    <td class="info"><span class="name">Steven</span><br/>
                                                        软装设计师：Steven<br/></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <blockquote>
                                                <p>
                                                    ...很庆幸自己找到了和晟天成软装公司这样有经验的设计团队，除了设计贴心、制作的东西美观，牢固，服务及正规的人员管理也令人放心。真心的推荐给需要软装设计的朋友。</p>
                                            </blockquote>
                                        </div>
                                        <div class="testimonial_item">
                                            <table class="nostyle">
                                                <tbody>
                                                <tr>
                                                    <td class="image">
                                                        <div><img src="skin/images/1-150Z41450370-L.jpg"
                                                                  alt=""/></div>
                                                    </td>
                                                    <td class="info"><span class="name">Molly</span><br/>
                                                        软装设计师：Molly<br/></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <blockquote>
                                                <p>
                                                    ...凭借多年的施工管理经验，精心组织施工、细化施工管理、安全文明施工。不怕苦、不怕累，做好每一施工环节。在空间设计和软装配饰搭配都做的非常完美。</p>
                                            </blockquote>
                                        </div>
                                        <div class="testimonial_item">
                                            <table class="nostyle">
                                                <tbody>
                                                <tr>
                                                    <td class="image">
                                                        <div><img src="skin/images/1-150Z41449430-L.jpg"
                                                                  alt=""/></div>
                                                    </td>
                                                    <td class="info"><span class="name">Avle</span><br/>
                                                        软装设计师：Avle<br/></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <blockquote>
                                                <p>
                                                    ...软装饰背后涵盖的国家或民族的风土人情、生活方式、文学艺术、行为规范和价值观念之上。一个软装设计师只有静下心来研究这些大概念意义上的文化，经过岁月的积累和沉淀，才能</p>
                                            </blockquote>
                                        </div>
                                        <div class="testimonial_item">
                                            <table class="nostyle">
                                                <tbody>
                                                <tr>
                                                    <td class="image">
                                                        <div><img src="skin/images/1-150Z41442200-L.jpg"
                                                                  alt=""/></div>
                                                    </td>
                                                    <td class="info"><span class="name">Ann</span><br/>
                                                        软装设计师：Ann<br/></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <blockquote>
                                                <p>
                                                    ...软装饰背后涵盖的国家或民族的风土人情、生活方式、文学艺术、行为规范和价值观念之上。一个软装设计师只有静下心来研究这些大概念意义上的文化，经过岁月的积累和沉淀，才能</p>
                                            </blockquote>
                                        </div>
                                    </div>
                                    <a href="javascript:void(0);" class="button next">Next</a></div>
                            </div>

                        </section>
                    </div>
                </div>
                <!-- .panel -->
            </div>
        </div>
        <div class="block news">
            <div class="central-wrapper clearfix">
                <div class="center">
                    <h2>软装资讯</h2>
                    <div class="all-news lazy-loading-item" data-ll-effect="fading">
                        <a href="index.php?r=info/index">更多软装资讯</a>
                    </div>
                    <div class="news_list lazy-loading clearfix" data-ll-item-delay="0">
                        <?php foreach ($news as $k => $v) { ?>
                            <div class="news_item lazy-loading-item clearfix" data-ll-effect="fading" style="cursor:pointer"
                                 onmousemove="this.style.background='#DFEAE0'"
                                 onclick="window.location.href='index.php?r=info/detail&id=<?= $v['id'] ?>'">
                                <div class="left-col">
                                    <img src="skin/images/index-news-<?= $k + 1 ?>.jpg"/>
                                    <span class="empty"></span>
                                </div>
                                <div class="news-content">
                                    <div class="title">
                                        <a class="colorLink" href="index.php?r=info/detail&id=<?= $v['id'] ?>">
                                            <?= $v['title'] ?>
                                        </a>
                                    </div>
                                    <div class="text"><?= \common\models\News::cutstr_html(($v['content']), 35); ?>...
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="sidebar">
                    <h3 class="widget-title"></h3>
                    <div></div>
                </div>
            </div>
            <!-- .panel -->
        </div>
    </div>
</div>
<div class="block-wrap">
    <div class="block clients">
        <div class="central-wrapper">
            <div class="fullwidth">
                <h2 class="bar-title">我们的客户</h2>
            </div>
        </div>
        <div class="carousel-wrapper">
            <div class="carousel">
                <ul class="list lazy-loading styled" data-ll-item-delay="0">
                    <li class="lazy-loading-item" data-ll-effect="drop-right"><a class="clearfix"
                                                                                 title="万科"><span
                                style="background-image: url('skin/images/万科-200x150.jpg');"></span></a></li>
                    <li class="lazy-loading-item" data-ll-effect="drop-right"><a class="clearfix"
                                                                                 title="中科院"><span
                                style="background-image: url('skin/images/中科院-200x150.jpg');"></span></a></li>
                    <li class="lazy-loading-item" data-ll-effect="drop-right"><a class="clearfix"
                                                                                 title="中海地产"><span
                                style="background-image: url('skin/images/中海-200x150.jpg');"></span></a></li>
                    <li class="lazy-loading-item" data-ll-effect="drop-right"><a class="clearfix"
                                                                                 title="正荣集团"><span
                                style="background-image: url('skin/images/正荣-200x150.jpg');"></span></a></li>
                    <li class="lazy-loading-item" data-ll-effect="drop-right"><a class="clearfix"
                                                                                 title="远洋地产"><span
                                style="background-image: url('skin/images/远洋-200x150.jpg');"></span></a></li>
                    <li class="lazy-loading-item" data-ll-effect="drop-right"><a class="clearfix"
                                                                                 title="首创置业"><span
                                style="background-image: url('skin/images/首创-200x150.jpg');"></span></a></li>
                    <li class="lazy-loading-item" data-ll-effect="drop-right"><a class="clearfix"
                                                                                 title="绿地集团"><span
                                style="background-image: url('skin/images/绿地-200x150.jpg');"></span></a></li>
                    <li class="lazy-loading-item" data-ll-effect="drop-right"><a class="clearfix"
                                                                                 title="绿城集团"><span
                                style="background-image: url('skin/images/绿城-200x150.jpg');"></span></a></li>
                    <li class="lazy-loading-item" data-ll-effect="drop-right"><a class="clearfix"
                                                                                 title="金科集团"><span
                                style="background-image: url('skin/images/金科-200x150.jpg');"></span></a></li>
                    <li class="lazy-loading-item" data-ll-effect="drop-right"><a class="clearfix"
                                                                                 title="恒大地产"><span
                                style="background-image: url('skin/images/恒大-200x150.jpg');"></span></a></li>
                    <li class="lazy-loading-item" data-ll-effect="drop-right"><a class="clearfix"
                                                                                 title="大华集团"><span
                                style="background-image: url('skin/images/大华-200x150.jpg');"></span></a></li>
                    <li class="lazy-loading-item" data-ll-effect="drop-right"><a class="clearfix"
                                                                                 title="保利地产"><span
                                style="background-image: url('skin/images/保利-200x150.jpg');"></span></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="dock" style="height: 296px; top: 250.5px;">
    <ul class="icons">
        <li class="up"><i></i></li>
        <li class="im">
            <i></i>
            <p>装修咨询<br>在线沟通，请点我
                <a href="http://wpa.qq.com/msgrd?v=3&uin=2814593455&site=qq&menu=yes" target="_blank">在线咨询</a>
            </p>
        </li>
        <li class="tel">
            <i></i>
            <p>装修热线：<br>18872486455 (余)<br>建站热线：<br>18672792276 (李)</p>
        </li>
        <li class="wechat">
            <i></i>
            <p><img src="skin/images/ybweixin.png" alt="扫描关注网站建设微信公众账号"></p>
        </li>
        <li class="down"><i></i></li>
    </ul>
    <a class="switch"></a>
</div>
<script>
    //右边悬浮
    (function ($) {
        $(".dock ul.icons li").mouseover(function () {
            $(".dock ul.icons li").removeClass('active');
            $(this).addClass('active');
        }).mouseout(function () {
            $(".dock ul.icons li").removeClass('active');
        });
        $('.dock ul.icons li.up').click(function () {
            $('html, body').animate({scrollTop: 0}, 'slow');
        });
        $('.dock ul.icons li.down').click(function () {
            $('html, body').animate({scrollTop: $(document).height()}, 'slow');
        });
        $('.dock .switch').click(function () {
            $('.dock').hide();
        })
    })(jQuery);
</script>
<?= $this->render('/layouts/footer') ?>
</body>
