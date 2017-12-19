<body class="page page-id-615 page-template page-template-page_sidebar_left-php" xmlns="http://www.w3.org/1999/html">
<div id="page" class="fullwidth">
    <!-- wrap start -->
    <div class="block-wrap">
        <?= $this->render('/layouts/header') ?>

        <div class="page-title-block"
             style="background-image: url(skin/images/banner_contact.jpg); background-color: #f5f4f0;">
            <div class="central-wrapper page-title-block-content">
                <div class="page-title-block-header">
                    <h1 style=""> 联系我们 </h1>
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
                                <p>
                                    <iframe src="index.php?r=contact/map" width="800" height="520"></iframe>
                                    <br/>
                                </p>
                            </div>
                        </div>
                        <!-- #content -->
                    </div>
                    <!-- #center -->

                    <div id="sidebar" class="sidebar">
                        <section id="text-3" class="widget widget_text">
                            <div class="textwidget">
                                <div>
                                    <p>你的名字<br/>
                                         <span class="wpcf7-form-control-wrap">
                                            <input type='text' name='username' size="40"
                                                   class="wpcf7-form-control wpcf7-text" value=''/>
                                         </span>
                                    </p>

                                    <p>你的手机<br/>
                                         <span class="wpcf7-form-control-wrap">
                                             <input type='tel' name='mobile' size="40"
                                                    class="wpcf7-form-control wpcf7-text" value=''/>
                                         </span>
                                    </p>

                                    <p>你的留言 （必填）<br/>
                                     <span class="wpcf7-form-control-wrap">
                                        <textarea name="content" cols="40" rows="10"
                                                  class="wpcf7-form-control wpcf7-textarea"
                                                  aria-invalid="false"></textarea>
                                     </span>
                                    </p>

                                    <p>
                                        <button id="wordPost"
                                        ">提 交</button>
                                    </p>
                                    <div class="wpcf7-response-output wpcf7-display-none"></div>
                                </div>
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
<script>
    (function ($) {
        $('#wordPost').click(function () {
            var mobile = $("input[name='mobile']").val();
            var username = $("input[name='username']").val();
            var content = $("textarea[name='content']").val();
            if (!content || content == '') {
                layer.alert('留言不能为空哦');
            }
            $.post("index.php?r=contact/word", {
                "mobile": mobile,
                "username": username,
                "content": content,
                "<?= Yii::$app->request->csrfParam ?>": '<?= Yii::$app->request->csrfToken ?>'
            }, function (data) {
                var res = JSON.parse(data);
                if (res.code == 0) {
                    layer.msg('感谢您的留言,我们会及时联系您!', {icon: 1, time: 1000});
                    $('input').val('');
                    $('textarea').val('');
                } else {
                    layer.alert(res.message, {
                        icon: 2,
                        skin: 'layer-ext-moon'
                    });
                }
            });
        });
    })(jQuery);
</script>

</body>
