$(function () {
    var pagetop = $('#page_top');
    // ボタン非表示
    pagetop.hide();

    // 100px スクロールしたらボタン表示
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            pagetop.fadeIn();
        } else {
            pagetop.fadeOut();
        }
    });
    pagetop.click(function () {
        $('body, html').animate({
            scrollTop: 0
        }, 500);
        return false;
    });
});

$(document).ready(function () {
    $('.drawer').drawer();
});

$(function () {
    $(".acc > span").on("click", function () {
        $(this).toggleClass("open");
        $(this).next().slideToggle();
        $(".acc > span.open").not(this).next().slideToggle();
        $(".acc > span.open").not(this).toggleClass("open");

    });
});

$(function () {
    $('.tabWorks li').click(function () {
        var index = $('.tabWorks  li').index(this);
        $('.tabWorks li').removeClass('active');
        $(this).addClass('active');
        $('.areaWorks .itemBox').removeClass('show').eq(index).addClass('show');
    });
});

$(function () {
    $('.tabPlan li').click(function () {
        var index = $('.tabPlan  li').index(this);
        $('.tabPlan li').removeClass('active');
        $(this).addClass('active');
        $('.areaPlan .itemBox').removeClass('show').eq(index).addClass('show');
    });
});

$(function () {
    $('.tabFaq li').click(function () {
        var index = $('.tabFaq li').index(this);
        $('.tabFaq li').removeClass('active');
        $(this).addClass('active');
        $('.areaFaq .itemBox').removeClass('show').eq(index).addClass('show');
    });
});

$(document).ready(function () {

    // 文字列へのspan設定
    $(".txtEn").each(function () {
        var content = $(this).html();
        var trimText = $.trim(content);
        var newText = "";

        trimText.split("").forEach(function (e) {
            if (e == ' ') {
                // 空白対策
                newText += '<span> </span>';
            } else {
                newText += '<span class="elm3">' + e + '</span>';
            }
        });
        $(this).html(newText);
    });

});

$(document).ready(function () {

    // 文字列へのspan設定
    $(".ttl").each(function () {
        var content = $(this).html();
        var trimText = $.trim(content);
        var newText = "";

        trimText.split("").forEach(function (e) {
            if (e == ' ') {
                // 空白対策
                newText += '<em> </em>';
            } else {
                newText += '<em class="elm">' + e + '</em>';
            }
        });
        $(this).html(newText);
    });

});


// animationプロパティの場合
$(".coverLogo").on('animationend webkitAnimationEnd', function () {
    $('body').addClass("finished");
    $(this).addClass("finished");
    $(function () {
        $('.drawer.drawer--right .drawer-hamburger').on('inview', function (event, isInView) {
            if (isInView) {
                //表示領域に入った時
                $(this).delay(50).queue(function () {
                    $(this).stop().addClass('fadedown');
                });

            }
        });
    });
    $(function () {
        $('#mainHeader').on('inview', function (event, isInView) {
            if (isInView) {
                //表示領域に入った時
                $(this).delay(50).queue(function () {
                    $(this).stop().addClass('fadedown');
                });

            }
        });
    });
    $(function () {
        $('.txt01').on('inview', function (event, isInView) {
            if (isInView) {
                //表示領域に入った時
                $(this).delay(50).queue(function () {
                    $(this).stop().addClass('fadeleft3');
                });

            }
        });
    });

    $(function () {
        $('.txt02').on('inview', function (event, isInView) {
            if (isInView) {
                //表示領域に入った時
                $(this).delay(60).queue(function () {
                    $(this).stop().addClass('fadeleft3');
                });

            }
        });
    });
    $(function () {
        $('.txt03').on('inview', function (event, isInView) {
            if (isInView) {
                //表示領域に入った時
                $(this).delay(70).queue(function () {
                    $(this).stop().addClass('fadeleft3');
                });

            }
        });
    });
    $(function () {
        $('.txt04').on('inview', function (event, isInView) {
            if (isInView) {
                //表示領域に入った時
                $(this).delay(80).queue(function () {
                    $(this).stop().addClass('fadeleft3');
                });

            }
        });
    });
    var delaySpeed = 10;
    $('.txtEn').on('inview', function (event, isInView) {
        if (isInView) {
            $(".txtEn .elm3").each(function (i) {
                $(this).delay(i * (delaySpeed)).delay(500).queue(function () {
                    $(this).stop(true, false).animate({ opacity: 1 }, 50).animate({ "bottom": "0" }, 50);
                });
            });
        }
    });
    $('.fvImg').on('inview', function (event, isInView) {
        if (isInView) {
            //表示領域に入った時
            $(this).delay(800).queue(function () {
                $(this).stop().addClass('fadeIn');
            });

        }
    });
    $('.scroll').on('inview', function (event, isInView) {
        if (isInView) {
            //表示領域に入った時
            $(this).delay(800).queue(function () {
                $(this).stop().addClass('updown2');
            });

        }
    });
});


//iOSサファリ用　下部のメニュー被り解決
jQuery(function () {
    $('.drawer').drawer();
    $('.drawer-nav li a').on('click', function () {
        $('.drawer').drawer('close');
    });
});

const setFillHeight = () => {
    const vh = window.innerHeight * 0.01;
    document.documentElement.style.setProperty('--vh', `${vh}px`);
}

// 画面のサイズ変動があった時に高さを再計算する
window.addEventListener('resize', setFillHeight);

// 初期化
setFillHeight();


//パララックス
$(function () {
    function parallaxImg() {
        let img = $('#concept .third .con .elm:nth-child(1)');
        img.each(function () {
            let elemPos = $(this).offset().top;
            let scroll = $(window).scrollTop();
            let windowHeight = $(window).height();
            let adjust = 120;
            //要素が画面内に入ってすぐではなく、そこから120上に来たら発動するため

            let parallaxSpeed = 0.1;
            //画像を動かす量が多すぎると、はみ出してします可能性がある為。この値を大きくすれば、画像が動く量が大きくなる

            if (scroll > elemPos - windowHeight + adjust) {
                $(this).css('top', (scroll - elemPos) * parallaxSpeed *0.5 + 'px');
                //スクロール量から要素の位置を引き、調整用の数値をかけ、文字列'px'を足したものをtopに代入
            }
        });
        let img2 = $('#concept .third .con .elm:nth-child(2)');
        img2.each(function () {
            let elemPos = $(this).offset().top;
            let scroll = $(window).scrollTop();
            let windowHeight = $(window).height();
            let adjust = 120;
            //要素が画面内に入ってすぐではなく、そこから120上に来たら発動するため

            let parallaxSpeed = -0.1;
            //画像を動かす量が多すぎると、はみ出してします可能性がある為。この値を大きくすれば、画像が動く量が大きくなる

            if (scroll > elemPos - windowHeight + adjust) {
                $(this).css('top', (scroll - elemPos) * parallaxSpeed * 0.7 + 'px');
                //スクロール量から要素の位置を引き、調整用の数値をかけ、文字列'px'を足したものをtopに代入
            }
        });
        let img3 = $('#concept .third .con .elm:nth-child(3)');
        img3.each(function () {
            let elemPos = $(this).offset().top;
            let scroll = $(window).scrollTop();
            let windowHeight = $(window).height();
            let adjust = 120;
            //要素が画面内に入ってすぐではなく、そこから120上に来たら発動するため

            let parallaxSpeed = 0.1;
            //画像を動かす量が多すぎると、はみ出してします可能性がある為。この値を大きくすれば、画像が動く量が大きくなる

            if (scroll > elemPos - windowHeight + adjust) {
                $(this).css('top', (scroll - elemPos) * parallaxSpeed *0.5 + 'px');
                //スクロール量から要素の位置を引き、調整用の数値をかけ、文字列'px'を足したものをtopに代入
            }
        });
        let img4 = $('#concept .third .con .elm:nth-child(4)');
        img4.each(function () {
            let elemPos = $(this).offset().top;
            let scroll = $(window).scrollTop();
            let windowHeight = $(window).height();
            let adjust = 120;
            //要素が画面内に入ってすぐではなく、そこから120上に来たら発動するため

            let parallaxSpeed = -0.2;
            //画像を動かす量が多すぎると、はみ出してします可能性がある為。この値を大きくすれば、画像が動く量が大きくなる

            if (scroll > elemPos - windowHeight + adjust) {
                $(this).css('top', (scroll - elemPos) * parallaxSpeed *0.5 + 'px');
                //スクロール量から要素の位置を引き、調整用の数値をかけ、文字列'px'を足したものをtopに代入
            }
        });
    }
    $(window).on('scroll', function () {
        parallaxImg();
        //画面をスクロールした時に、関数parallaxImgが発動する
    });
});


window.addEventListener("load", function () {
  new ScrollHint(".js-table-scroll-hint", {
    suggestiveShadow: true,
    remainingTime: 5000,
    i18n: {
      scrollable: "スクロールできます"
    }
  });
});