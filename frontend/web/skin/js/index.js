(function ($) {
    $(document).ready(function () {
        $('#slideshow-14410442612127553056').nivoSlider({
            effect: "random",
            slices: 15,
            boxCols: 8,
            boxRows: 4,
            animSpeed: "500",
            pauseTime: "3000",
            directionNav: true,
            controlNav: true,
            beforeChange: function () {
                $('#slideshow-14410442612127553056 .nivo-caption').animate({opacity: 'hide'}, 500);
            },
            afterChange: function () {
                var data = $('#slideshow-14410442612127553056').data('nivo:vars');
                var index = data.currentSlide;
                if ($('#slideshow-14410442612127553056 .slide:eq(' + index + ') .caption').length) {
                    $('#slideshow-14410442612127553056 .nivo-caption').html($('#slideshow-14410442612127553056 .slide:eq(' + index + ') .caption').html());
                    $('#slideshow-14410442612127553056 .nivo-caption').animate({opacity: 'show'}, 500);
                } else {
                    $('#slideshow-14410442612127553056 .nivo-caption').html('');
                }
            },
            afterLoad: function () {
                if ($('#slideshow-14410442612127553056 .slide:eq(0) .caption').length) {
                    $('#slideshow-14410442612127553056 .nivo-caption').html($('#slideshow-14410442612127553056 .slide:eq(0) .caption').html());
                    $('#slideshow-14410442612127553056 .nivo-caption').show();
                }
            }
        });
    });
})(jQuery);

jQuery('.sidebar .widget.widget_testimonials .widget-title').wrap('<div class="lazy-loading" data-ll-item-delay="0"><div class="lazy-loading-item" data-ll-effect="drop-top" data-ll-step="0.5"></div></div>');
jQuery('.sidebar .widget.widget_testimonials .testimonials_wrap').wrap('<div class="lazy-loading" data-ll-item-delay="0"><div class="lazy-loading-item" data-ll-effect="drop-right-unwrap" data-ll-item-delay="400"></div></div>');
jQuery('.sidebar .widget.widget_testimonials .testimonials_wrap .image > div').wrap('<span class="lazy-loading-item" style="display: block;" data-ll-item-delay="0" data-ll-effect="clip"></span>');

//滚动插件
(function ($) {
    $.fn.extend({
        Scroll: function (opt, callback) {
            //参数初始化
            if (!opt) var opt = {};
            var _this = this.eq(0).find("ul:first");
            var lineH = _this.find("li:first").height(), //获取行高
                line = opt.line ? parseInt(opt.line, 10) : parseInt(this.height() / lineH, 10), //每次滚动的行数，默认为一屏，即父容器高度
                speed = opt.speed ? parseInt(opt.speed, 10) : 500, //卷动速度，数值越大，速度越慢（毫秒）
                timer = opt.timer ? parseInt(opt.timer, 10) : 3000; //滚动的时间间隔（毫秒）
            if (line == 0) line = 1;
            var upHeight = 0 - line * lineH;
            //滚动函数
            scrollUp = function () {
                _this.animate({
                    marginTop: upHeight
                }, speed, function () {
                    for (i = 1; i <= line; i++) {
                        _this.find("li:first").appendTo(_this);
                    }
                    _this.css({marginTop: 0});
                });
            };
            //鼠标事件绑定
            _this.hover(function () {
                clearInterval(timerID);
            }, function () {
                timerID = setInterval("scrollUp()", timer);
            }).mouseout();
        }
    });
    $(document).ready(function () {
        $("#scrollDiv").Scroll({line: 1, speed: 500, timer: 5000});
    });
})(jQuery);

