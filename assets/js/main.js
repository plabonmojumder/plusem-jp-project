//Preloader Js
$(".loader").fadeOut(500);

// Mobile menu start*
$(document).on("click", ".nav-toggle-btn-outer", function () {
    $("body").toggleClass("mobile-menu-visible");
    $(this).toggleClass("active");

    $(".nav-items-wrapper").slideToggle();

    if (!$(this).hasClass("active")) {
        $(".submenu-list.parent").slideUp();
    }
});

$(document).on("click", ".dt-menu-expand.parent", function () {
    $(this).toggleClass("active");
    if ($(this).hasClass("active")) {
        $(this).text("-");
    } else {
        $(this).text("+");
    }

    $(this).closest(".nav-list-item").find(".submenu-list.parent").slideToggle();
});

$(document).on("click", ".dt-menu-expand.sub", function () {
    $(this).toggleClass("active");
    if ($(this).hasClass("active")) {
        $(this).text("-");
    } else {
        $(this).text("+");
    }

    $(this).closest(".submenu-list-item").find(".submenu-list.sub").slideToggle();
});

$(document).on("click", ".dt-menu-expand.parent", function () {
    $(this).toggleClass("active");
    if ($(this).hasClass("active")) {
        $(this).text("-");
    } else {
        $(this).text("+");
    }

    $(this).closest(".nav-list-item").find(".megamenu-list").slideToggle();
});

$(document).on("click", ".dt-menu-expand.sub", function () {
    $(this).toggleClass("active");
    if ($(this).hasClass("active")) {
        $(this).text("-");
    } else {
        $(this).text("+");
    }

    $(this).closest(".megamenu-list-item").find(".megamenu-submenu-list").slideToggle();
});
// *Mobile menu end

// fixed header
$(window).scroll(function () {
    var scrollTop = $(window).scrollTop();
    if (scrollTop >= 200) {
        $("body").addClass("fixed-header");
    } else {
        $("body").removeClass("fixed-header");
    }
});

// Home main Slider Start
function setREVStartSize(e) {
    //window.requestAnimationFrame(function() {
    window.RSIW = window.RSIW === undefined ? window.innerWidth : window.RSIW;
    window.RSIH = window.RSIH === undefined ? window.innerHeight : window.RSIH;
    try {
        var pw = document.getElementById(e.c).parentNode.offsetWidth,
            newh;
        pw = pw === 0 || isNaN(pw) ? window.RSIW : pw;
        e.tabw = e.tabw === undefined ? 0 : parseInt(e.tabw);
        e.thumbw = e.thumbw === undefined ? 0 : parseInt(e.thumbw);
        e.tabh = e.tabh === undefined ? 0 : parseInt(e.tabh);
        e.thumbh = e.thumbh === undefined ? 0 : parseInt(e.thumbh);
        e.tabhide = e.tabhide === undefined ? 0 : parseInt(e.tabhide);
        e.thumbhide = e.thumbhide === undefined ? 0 : parseInt(e.thumbhide);
        e.mh = e.mh === undefined || e.mh == "" || e.mh === "auto" ? 0 : parseInt(e.mh, 0);
        if (e.layout === "fullscreen" || e.l === "fullscreen") newh = Math.max(e.mh, window.RSIH);
        else {
            e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
            for (var i in e.rl) if (e.gw[i] === undefined || e.gw[i] === 0) e.gw[i] = e.gw[i - 1];
            e.gh = e.el === undefined || e.el === "" || (Array.isArray(e.el) && e.el.length == 0) ? e.gh : e.el;
            e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
            for (var i in e.rl) if (e.gh[i] === undefined || e.gh[i] === 0) e.gh[i] = e.gh[i - 1];

            var nl = new Array(e.rl.length),
                ix = 0,
                sl;
            e.tabw = e.tabhide >= pw ? 0 : e.tabw;
            e.thumbw = e.thumbhide >= pw ? 0 : e.thumbw;
            e.tabh = e.tabhide >= pw ? 0 : e.tabh;
            e.thumbh = e.thumbhide >= pw ? 0 : e.thumbh;
            for (var i in e.rl) nl[i] = e.rl[i] < window.RSIW ? 0 : e.rl[i];
            sl = nl[0];
            for (var i in nl)
                if (sl > nl[i] && nl[i] > 0) {
                    sl = nl[i];
                    ix = i;
                }
            var m = pw > e.gw[ix] + e.tabw + e.thumbw ? 1 : (pw - (e.tabw + e.thumbw)) / e.gw[ix];
            newh = e.gh[ix] * m + (e.tabh + e.thumbh);
        }
        if (window.rs_init_css === undefined) window.rs_init_css = document.head.appendChild(document.createElement("style"));
        document.getElementById(e.c).height = newh + "px";
        window.rs_init_css.innerHTML += "#" + e.c + "_wrapper { height: " + newh + "px }";
    } catch (e) {
        console.log("Failure at Presize of Slider:" + e);
    }
    //});
}

setREVStartSize({ c: "rev_slider_1_1", rl: [1240, 1024, 778, 480], el: [800], gw: [1200], gh: [800], type: "standard", justify: "", layout: "fullwidth", mh: "0" });
var revapi1, tpj;
function revinit_revslider11() {
    jQuery(function () {
        tpj = jQuery;
        revapi1 = tpj("#rev_slider_1_1");
        if (revapi1 == undefined || revapi1.revolution == undefined) {
            revslider_showDoubleJqueryError("rev_slider_1_1");
        } else {
            revapi1.revolution({
                visibilityLevels: "1240,1024,778,480",
                gridwidth: 1200,
                gridheight: 800,
                spinner: "spinner0",
                perspective: 600,
                perspectiveType: "local",
                editorheight: "800,768,960,720",
                responsiveLevels: "1240,1024,778,480",
                progressBar: { disableProgressBar: true },
                navigation: {
                    mouseScrollNavigation: false,
                    wheelCallDelay: 1000,
                    onHoverStop: false,
                    arrows: {
                        enable: true,
                        style: "persephone",
                        hide_onmobile: true,
                        hide_under: 480,
                        hide_onleave: true,
                        left: {},
                        right: {},
                    },
                },
                fallbacks: {
                    allowHTML5AutoPlayOnAndroid: true,
                },
            });
        }
    });
} // End of RevInitScript
var once_revslider11 = false;
if (document.readyState === "loading") {
    document.addEventListener("readystatechange", function () {
        if ((document.readyState === "interactive" || document.readyState === "complete") && !once_revslider11) {
            once_revslider11 = true;
            revinit_revslider11();
        }
    });
} else {
    once_revslider11 = true;
    revinit_revslider11();
}

var htmlDivCss = unescape(
    "%23rev_slider_1_1_wrapper%20.persephone.tparrows%20%7B%0A%09cursor%3Apointer%3B%0A%09background%3Argba%28255%2C%20255%2C%20255%2C%200.75%29%3B%0A%09width%3A40px%3B%0A%09height%3A40px%3B%0A%09position%3Aabsolute%3B%0A%09display%3Ablock%3B%0A%09z-index%3A1000%3B%0A%20%20%20%20border%3A1px%20solid%20rgba%28255%2C%20255%2C%20255%2C%200%29%3B%0A%7D%0A%23rev_slider_1_1_wrapper%20.persephone.tparrows%3Ahover%20%7B%0A%09background%3Argba%28227%2C%20246%2C%20249%2C%200.92%29%3B%0A%7D%0A%23rev_slider_1_1_wrapper%20.persephone.tparrows%3Abefore%20%7B%0A%09font-family%3A%20%27revicons%27%3B%0A%09font-size%3A15px%3B%0A%09color%3A%20%23274584%3B%0A%09display%3Ablock%3B%0A%09line-height%3A%2040px%3B%0A%09text-align%3A%20center%3B%0A%7D%0A%23rev_slider_1_1_wrapper%20.persephone.tparrows.tp-leftarrow%3Abefore%20%7B%0A%09content%3A%20%27%5Ce824%27%3B%0A%7D%0A%23rev_slider_1_1_wrapper%20.persephone.tparrows.tp-rightarrow%3Abefore%20%7B%0A%09content%3A%20%27%5Ce825%0A%27%3B%0A%7D%0A%0A%0A"
);
var htmlDiv = document.getElementById("rs-plugin-settings-inline-css");
if (htmlDiv) {
    htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
} else {
    var htmlDiv = document.createElement("div");
    htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
    document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
}

var htmlDivCss = unescape("%0A%0A%0A");
var htmlDiv = document.getElementById("rs-plugin-settings-inline-css");
if (htmlDiv) {
    htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
} else {
    var htmlDiv = document.createElement("div");
    htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
    document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
}
// Home main Slider End

//Home Slider Js
$(".home__items-wrapper").slick({
    dots: false,
    arrows: true,
    infinite: true,
    speed: 500,
    autoplay: true,
    fade: true,
    cssEase: "linear",
    prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-chevron-left"></i></button>',
    nextArrow: '<button type="button" class="slick-next"><i class="fas fa-chevron-right"></i></button>',
});

// Article Slider js
$(".article__items-wrapper").owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    dots: true,
    responsiveClass: true,
    navText: ['<i class="fa-light fa-arrow-left-long"></i>', '<i class="fa-light fa-arrow-right-long"></i>'],
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 1,
        },
        1000: {
            items: 3,
        },
    },
});

// Testimonial Slider js
$(".testimonial__slider-items-wrapper").owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    dots: true,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 1,
        },
        1000: {
            items: 1,
        },
    },
});

// Testimonial Slider js
$(".review__items-wrapper").owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    dots: false,
    responsiveClass: true,
    navText: ['<i class="fa-solid fa-left-long"></i>', '<i class="fa-solid fa-right-long"></i>'],
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 1,
        },
        1000: {
            items: 2,
        },
    },
});

//Dot Js
$(document).ready(function () {
    // Function to generate the pattern
    function generatePattern(rows, columns) {
        for (var i = rows - 1; i >= 0; i--) {
            var dotRow = $("<div class='dot-row'></div>");

            for (var j = 0; j < columns; j++) {
                dotRow.append("<span>&#x2022;</span>");
            }

            // Set opacity from 0 to 1
            var opacity = (rows - 1 - i) / (rows - 1); // Adjust this calculation as needed
            dotRow.css("opacity", opacity);

            $(".contact-info__right-dot-outer").append(dotRow);
        }
    }

    // Call the function to generate the pattern
    generatePattern(10, 10); // Define your rows & columns as parameters
});

$(window).scroll(function () {
    //Scroll Top Js
    var toTopButton = document.getElementById("toTop");
    window.addEventListener("scroll", function () {
        if (window.scrollY >= 200) {
            toTopButton.style.display = "block";
        } else {
            toTopButton.style.display = "none";
        }
    });
    toTopButton.addEventListener("click", function () {
        window.scrollTo({
            top: 0,
            behavior: "smooth",
        });
    });
});

// banner slider js
$(".banner-slider-image").owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    dots: false,
    responsiveClass: true,
    navText: ['<i class="fa-solid fa-angle-left"></i>', '<i class="fa-solid fa-angle-right"></i>'],
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 1,
        },
        1000: {
            items: 1,
        },
    },
});

//

$(".featured-projects-card-wraper").owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    dots: true,
    smartSpeed: 1500,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    autoplay: true,
    responsiveClass: true,
    navText: ['<i class="fa-solid fa-angle-left"></i>', '<i class="fa-solid fa-angle-right"></i>'],
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 2,
        },
        1000: {
            items: 4,
        },
    },
});

// team-testimonial-slider satrt
$(document).ready(function () {
    $(".team-slider.slider-for").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        fade: false,
        asNavFor: ".team-slider.slider-nav",
        prevArrow:
        '<button type="button" class="slick-prev"><i class="fa-solid fa-left-long"></i></button>',
    nextArrow:
        '<button type="button" class="slick-next"><i class="fa-solid fa-right-long"></i></button>',
    });
    $(".team-slider.slider-nav").slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        asNavFor: ".team-slider.slider-for",
        dots: false,
        centerMode: true,
        focusOnSelect: true,
        arrows: false,
        accessibility: false,
    });
});

// team-testimonial-slider end

// ====================team-details- progress========================

function isInViewport(element) {
    var rect = element.getBoundingClientRect();
    return rect.top >= 0 && rect.left >= 0 && rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) && rect.right <= (window.innerWidth || document.documentElement.clientWidth);
}

function animateProgressBars() {
    var progressBars = document.querySelectorAll(".progress-bar");
    progressBars.forEach(function (progressBar) {
        if (isInViewport(progressBar)) {
            var targetValue = parseInt(progressBar.getAttribute("data-target-value"));
            var width = 0;
            var id = setInterval(frame, 10);
            function frame() {
                if (width >= targetValue) {
                    clearInterval(id);
                } else {
                    width++;
                    progressBar.style.width = width + "%";
                    progressBar.innerHTML = width + "%";
                }
            }
        }
    });
}


function handleScroll() {
    if($(".progress-bar").length > 0){
        var section = document.querySelector(".team-details-prograssbar-secction");
        if (isInViewport(section)) {
            animateProgressBars();
            window.removeEventListener("scroll", handleScroll);
        }
    }
}
window.addEventListener("scroll", handleScroll);
//   ============circel-progress bar js ===================
let circularProgresses = document.querySelectorAll(".circular-progress");
let progressValues = document.querySelectorAll(".progress-value");

let progressStartValues = [0, 0, 0];
let progressEndValues = [40, 80, 75];
let speeds = [50, 50, 50];

for (let i = 0; i < circularProgresses.length; i++) {
    let progressStartValue = progressStartValues[i];
    let progressEndValue = progressEndValues[i];
    let speed = speeds[i];
    let circularProgress = circularProgresses[i];
    let progressValue = progressValues[i];

    let progress = setInterval(() => {
        progressStartValue++;

        progressValue.textContent = `${progressStartValue}%`;
        circularProgress.style.background = `conic-gradient(#274584 ${progressStartValue * 3.6}deg, #E3F6F9 0deg)`;

        if (progressStartValue == progressEndValue) {
            clearInterval(progress);
        }
    }, speed);
}
// ==========================

$(document).ready(function () {
    $(".what-we-offer-card-wraper").owlCarousel({
        loop: true,
        margin: 20,
        nav: true,
        autoplay: false,
        autoplayTimeout: 4000,
        dots: false,
        responsiveClass: true,
        navText: ['<i class="fa-solid fa-angle-left"></i>', '<i class="fa-solid fa-angle-right"></i>'],
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 2,
            },
            1000: {
                items: 3,
            },
        },
    });
});
// ====================
$(".client-review-items-wrapper").owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    dots: false,
    responsiveClass: true,
    navText: ['<i class="fa-solid fa-left-long"></i>', '<i class="fa-solid fa-right-long"></i>'],
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 1,
        },
        1000: {
            items: 1,
        },
    },
});

// ===========mission progress  js============
var skillPers = document.querySelectorAll(".skill-per");

skillPers.forEach(function (skillPer) {
    var per = parseFloat(skillPer.getAttribute("per"));
    skillPer.style.width = per + "%";

    var animatedValue = 0;
    var startTime = null;

    function animate(timestamp) {
        if (!startTime) startTime = timestamp;
        var progress = timestamp - startTime;
        var stepPercentage = progress / 1000; // Dividing by duration in milliseconds (1000ms = 1s)

        if (stepPercentage < 1) {
            animatedValue = per * stepPercentage;
            skillPer.setAttribute("per", Math.floor(animatedValue) + "%");
            requestAnimationFrame(animate);
        } else {
            animatedValue = per;
            skillPer.setAttribute("per", Math.floor(animatedValue) + "%");
        }
    }

    requestAnimationFrame(animate);
});
// ==============counter js ===============
$(window).scroll(function () {
    var windowHeight = $(window).height();
    var windowScrollTop = $(window).scrollTop();
    var successSection = $(".counter-section");

    // Check if success section is in the viewport
    if (successSection.length) {
        var successSectionTop = successSection.offset().top;
        var successSectionHeight = successSection.outerHeight();

        if (windowScrollTop + windowHeight > successSectionTop && windowScrollTop < successSectionTop + successSectionHeight) {
            // Code to trigger the countdown animation
            $(".counter-num").each(function () {
                var $this = $(this),
                    countTo = $this.attr("data-value");
                $({ countNum: $this.text() }).animate(
                    {
                        countNum: countTo,
                    },
                    {
                        duration: 10000,
                        easing: "linear",
                        step: function () {
                            $this.text(Math.floor(this.countNum));
                        },
                        complete: function () {
                            $this.text(this.countNum);
                            //alert('finished');
                        },
                    }
                );
            });
        }
    }
});


$(".owl-theme-two").owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    dots: false,
    responsiveClass: true,
    navText: ['<i class="fa-light fa-arrow-left-long"></i>', '<i class="fa-light fa-arrow-right-long"></i>'],
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 1,
        },
        1000: {
            items: 2,
        },
    },
});

// ================
$(".voice-review-wraper").owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    dots: true,
    // smartSpeed: 1500,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    autoplay: true,
    responsiveClass: true,
    navText: ['<i class="fa-solid fa-angle-left"></i>', '<i class="fa-solid fa-angle-right"></i>'],
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 1,
        },
        1000: {
            items: 1,
        },
    },
});
// =========================================
// $(document).ready(function () {
//     $(".introducing-team.slider-nav").slick({
//         slidesToShow: 1,
//         slidesToScroll: 1,
//         asNavFor: ".introducing-team.slider-for",
//         dots: false,
//         arrows: true,
//         focusOnSelect: true,
//         centerMode: true,
//         centerPadding: '15%',
//         prevArrow:
//         '<button type="button" class="slick-prev"><i class="fa-solid fa-left-long"></i></button>',
//     nextArrow:
//         '<button type="button" class="slick-next"><i class="fa-solid fa-right-long"></i></button>',
//     });
    
//     $(".introducing-team.slider-for").slick({
//         slidesToShow: 1,
//         slidesToScroll: 1,
//         asNavFor: ".introducing-team.slider-nav",
//         dots: false,
//         arrows: false,
//         focusOnSelect: true,
//     });
      
// });






$(document).ready(function () {
    var sliderNav = $(".introducing-team.slider-nav");
    var sliderFor = $(".introducing-team.slider-for");

    sliderNav.slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        asNavFor: ".introducing-team.slider-for",
        dots: false,
        arrows: false,
        focusOnSelect: true,
        centerMode: true,
        centerPadding: '15%',
    });

    sliderFor.slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        asNavFor: ".introducing-team.slider-nav",
        dots: false,
        arrows: false,
        focusOnSelect: true,
    });

    // Next and previous buttons functionality
    $(".inroduction-next-prev-btn .slick-prev").click(function () {
        sliderNav.slick("slickPrev");
        sliderFor.slick("slickPrev");
    });

    $(".inroduction-next-prev-btn .slick-next").click(function () {
        sliderNav.slick("slickNext");
        sliderFor.slick("slickNext");
    });
});
// ===========masonary-grid-js=========================

$('.customer-voice-cards-wrapper').masonry({
    // options
    itemSelector: '.customer-voice-outer',
    columnWidth: '.customer-voice-outer',
  });

// =======================================

  $(document).ready(function() {
    // Initialize fancybox
    $('.video-popup').on('click', function() {
      var videoUrl = $(this).data('id');
      var embedUrl = getEmbedUrl(videoUrl);

      $.fancybox.open({
        src: embedUrl,
        type: 'iframe', // Opens as iframe
        iframe: {
          preload: false // Don't preload iframe content
        }
      });
    });

    function getEmbedUrl(url) {
      if (url.includes('youtube.com')) {
        return 'https://www.youtube.com/embed/' + getYouTubeVideoId(url);
      } else if (url.includes('vimeo.com')) {
        return 'https://player.vimeo.com/video/' + getVimeoVideoId(url);
      } else {
        return null;
      }
    }

    function getYouTubeVideoId(url) {
      var match = url.match(/[?&]v=([^&]+)/);
      if (match) {
        return match[1];
      } else {
        return null;
      }
    }

    function getVimeoVideoId(url) {
      var match = url.match(/\/([0-9]+)$/);
      if (match) {
        return match[1];
      } else {
        return null;
      }
    }
  });
