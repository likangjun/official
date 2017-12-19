<footer id="footer">
    <div id="contacts" class="clearfix">
        <div class="central-wrapper">
            <div class="clearfix">
                <div class="socials socials-icons center qrcode">
                    <h2 class="bar-title">关注我们</h2>
                    <div class="text">
                        <span>
                            装修咨询:<br/>
                            <img src="skin/images/ybweixin.png"/>
                        </span>
                        <span>
                            建站咨询:<br/>
                            <img src="skin/images/myweixin.png"/>
                        </span>
                    </div>
                </div>
                <!-- .social-icons -->

                <div class="contact-us">
                    <h2 class="bar-title"> 联系我们</h2>
                    公司地址：武汉市汉阳区龙阳大道36号顶琇广场A座8层2室-3 <br/>
                    联系电话：18872486455 <br/>
                    Email: <a href="mailto:info@dede58.com">2814593455@qq.com</a> <br/>
                    QQ: <a href="http://wpa.qq.com/msgrd?v=3&uin=2814593455&site=qq&menu=yes"
                           target="_blank">2814593455</a>
                </div>
            </div>
            <!-- .panel -->

        </div>
    </div>
    <!-- #contacts -->

    <div id="bottom-line" style="background-color:#191724">
        <div class="central-wrapper">
            <div class="footer-nav center"></div>
            <!-- .footer-nav -->

            <div class="site-info sidebar" style="margin-top: 0">
                <div style="width: auto;float: left;">
                    <!--滚动代码开始-->
                    <style type="text/css">
                        ul, li {
                            margin: 0;
                            padding: 0
                        }

                        #scrollDiv {
                            height: 25px;
                            min-height: 25px;
                            line-height: 25px;
                            overflow: hidden
                        }

                        #scrollDiv li {
                            height: 25px;
                            padding-left: 10px;
                        }
                    </style>
                    <!--滚动代码开始-->
                    <?php $index_news = \common\models\News::find()->asArray()->orderBy('views desc,id desc')->all() ?>
                    <div id="scrollDiv">
                        <ul>
                            <?php foreach ($index_news as $v) { ?>
                                <li>
                                    <a href='index.php?r=info/detail&id=<?= $v['id'] ?>'
                                       target='_blank'><?= $v['title'] ?></a>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <div class="access">2017 © <a>和晟天成</a> 版权所有
                    鄂ICP备14024098号<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1261533901'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s4.cnzz.com/z_stat.php%3Fid%3D1261533901%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));</script>
                </div>
                <!-- .site-info -->

            </div>
            <div class="clear"></div>
        </div>
        <!-- #bottom-line -->
    </div>
</footer>