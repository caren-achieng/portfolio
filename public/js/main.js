(function ($) {
    "use strict";

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

// Preloader
    $(window).on('load', function () {
        $('.lds-ellipsis').fadeOut(); // will first fade out the loading animation
        $('.preloader').delay(333).fadeOut('slow'); // will fade out the white DIV that covers the website.
        $('body').delay(333);
    });


// Header Sticky
    $(window).on('scroll', function () {
        let stickyTop = $('#header.sticky-top .bg-transparent');
        let stickyTopSlide = $('#header.sticky-top-slide');

        if ($(this).scrollTop() > 1) {
            stickyTop.addClass("sticky-on-top");
            stickyTop.find(".logo img").attr('src', stickyTop.find('.logo img').data('sticky-logo'));
        } else {
            stickyTop.removeClass("sticky-on-top");
            stickyTop.find(".logo img").attr('src', stickyTop.find('.logo img').data('default-logo'));
        }

        if ($(this).scrollTop() > 180) {
            stickyTopSlide.find(".primary-menu").addClass("sticky-on");
            stickyTopSlide.find(".logo img").attr('src', stickyTopSlide.find('.logo img').data('sticky-logo'));
        } else {
            stickyTopSlide.find(".primary-menu").removeClass("sticky-on");
            stickyTopSlide.find(".logo img").attr('src', stickyTopSlide.find('.logo img').data('default-logo'));
        }
    });


// Sections Scroll
//     if ($("body").hasClass("side-header")) {
//         $('.smooth-scroll').on('click', function (event) {
//             event.preventDefault();
//
//             let sectionTo = $(this).attr('href');
//             $('html, body').stop().animate({
//                 scrollTop: $(sectionTo).offset().top
//             }, 1000, 'easeInOutExpo');
//         });
//     } else {
//         $('.smooth-scroll').on('click', function (event) {
//             event.preventDefault();
//
//             let sectionTo = $(this).attr('href');
//
//             $('html, body').stop().animate({
//                 scrollTop: $(sectionTo).offset().top - 50
//             }, 1000, 'easeInOutExpo');
//         });
//     }

// Mobile Menu
    $('.navbar-toggler').on('click', function () {
        $(this).toggleClass('show');
    });
    $(".navbar-nav a").on('click', function () {
        $(".navbar-collapse, .navbar-toggler").removeClass("show");
    });

// Overlay Menu & Side Open Menu
    $('.navbar-side-open .collapse, .navbar-overlay .collapse').on('show.bs.collapse hide.bs.collapse', function (e) {
        e.preventDefault();
    });
    $('.navbar-side-open [data-bs-toggle="collapse"], .navbar-overlay [data-bs-toggle="collapse"]').on('click', function (e) {
        e.preventDefault();
        $($(this).data('target')).toggleClass('show');
    })

    /*---------------------------------
       Carousel (Owl Carousel)
    ----------------------------------- */
    $(".owl-carousel").each(function (index) {
        let a = $(this),
            rtlVal = $("html").attr("dir") === 'rtl'

        $(this).owlCarousel({
            rtl: rtlVal,
            autoplay: a.data('autoplay'),
            center: a.data('center'),
            autoplayTimeout: a.data('autoplaytimeout'),
            autoplayHoverPause: a.data('autoplayhoverpause'),
            loop: a.data('loop'),
            speed: a.data('speed'),
            nav: a.data('nav'),
            dots: a.data('dots'),
            autoHeight: a.data('autoheight'),
            autoWidth: a.data('autowidth'),
            margin: a.data('margin'),
            stagePadding: a.data('stagepadding'),
            slideBy: a.data('slideby'),
            lazyLoad: a.data('lazyload'),
            navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
            animateOut: a.data('animateout'),
            animateIn: a.data('animatein'),
            video: a.data('video'),
            items: a.data('items'),
            responsive: {
                0: {items: a.data('items-xs'),},
                576: {items: a.data('items-sm'),},
                768: {items: a.data('items-md'),},
                992: {items: a.data('items-lg'),}
            }
        });
    });

    /*------------------------------------
        Magnific Popup
    -------------------------------------- */
// Image on Modal
    $('.popup-img-gallery').each(function () {
        $(this).magnificPopup({
            delegate: '.popup-img:visible',
            type: "image",
            tLoading: '<div class="preloader"><div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div></div>',
            closeOnContentClick: !0,
            mainClass: "mfp-fade",
            gallery: {
                enabled: true,
                navigateByImgClick: true,
                preload: [0, 1]
            },
        });
    });

// Ajax On Modal
    $('.popup-ajax-gallery').each(function () {
        $(this).magnificPopup({
            delegate: '.popup-ajax:visible',
            type: "ajax",
            tLoading: '<div class="preloader"><div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div></div>',
            mainClass: "mfp-fade",
            closeBtnInside: true,
            midClick: true,
            gallery: {
                enabled: true,
            },
            callbacks: {
                ajaxContentAdded: function () {
                    $(".owl-carousel").each(function (index) {
                        let a = $(this);
                        if ($("html").attr("dir") === 'rtl') {
                            let rtlVal = true
                        } else {
                            let rtlVal = false
                        }
                        $(this).owlCarousel({
                            rtl: rtlVal,
                            autoplay: a.data('autoplay'),
                            center: a.data('center'),
                            autoplayTimeout: a.data('autoplaytimeout'),
                            autoplayHoverPause: a.data('autoplayhoverpause'),
                            loop: a.data('loop'),
                            speed: a.data('speed'),
                            nav: a.data('nav'),
                            dots: a.data('dots'),
                            autoHeight: a.data('autoheight'),
                            autoWidth: a.data('autowidth'),
                            margin: a.data('margin'),
                            stagePadding: a.data('stagepadding'),
                            slideBy: a.data('slideby'),
                            lazyLoad: a.data('lazyload'),
                            navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
                            animateOut: a.data('animateOut'),
                            animateIn: a.data('animateIn'),
                            video: a.data('video'),
                            items: a.data('items'),
                            responsive: {
                                0: {items: a.data('items-xs'),},
                                576: {items: a.data('items-sm'),},
                                768: {items: a.data('items-md'),},
                                992: {items: a.data('items-lg'),}
                            }
                        });
                    });
                }
            }
        });
    });

// YouTube/Viemo Video & Gmaps
    $('.popup-youtube, .popup-vimeo, .popup-gmaps').each(function () {
        $(this).magnificPopup({
            type: 'iframe',
            mainClass: 'mfp-fade',
        });
    });


    /*------------------------------------
        Isotope Portfolio Filter
    -------------------------------------- */

    $(window).on('load', function () {
        $(".portfolio-filter").each(function () {
            let e = $(this);

            e.imagesLoaded(function () {
                let rtlVal = !($("html").attr("dir") === 'rtl');

                let $grid = e.isotope({layoutMode: "masonry", originLeft: rtlVal});

                $(".portfolio-menu").find("a").on("click", function () {
                    let filterValue = $(this).attr("data-filter");

                    return $(".portfolio-menu").find("a").removeClass("active"),
                        $(this).addClass("active"),
                        $grid.isotope({filter: filterValue}), !1
                });
            });
        });
    });

    /*------------------------------------
        Parallax Background
    -------------------------------------- */
    $(".parallax").each(function () {
        $(this).parallaxie({
            speed: 0.5,
        });
    });

    /*------------------------------------
        Counter
    -------------------------------------- */
    $(".counter").each(function () {
        $(this).appear(function () {
            $(this).countTo({
                speed: 1800,
            });
        });
    });

    /*------------------------------------
        Typed
    -------------------------------------- */

    $(".typed").each(function () {
        let typed = new Typed('.typed', {
            stringsElement: '.typed-strings',
            loop: true,
            typeSpeed: 100,
            backSpeed: 50,
            backDelay: 1500,
        });
    });


    /*------------------------------------
        YTPlayer YouTube Background
    -------------------------------------- */

    $(".player").each(function () {
        $(this).mb_YTPlayer();
    });


    /*------------------------
       tooltips
    -------------------------- */
    let tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    let tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    })


    /*------------------------
       Scroll to top
    -------------------------- */
    $(function () {
        $(window).on('scroll', function () {
            if ($(this).scrollTop() > 400) {
                $('#back-to-top').fadeIn();
            } else {
                $('#back-to-top').fadeOut();
            }
        });
    });
    $('#back-to-top').on("click", function () {
        $('html, body').animate({scrollTop: 0}, 'slow');
        return false;
    });


    /*------------------------
       Contact Form
    -------------------------- */
    let form = $('#contact-form'); // contact form
    let submit = $('#submit-btn'); // submit button

// form submit event
    form.on('submit', function (e) {
        e.preventDefault(); // prevent default form submit

        $.ajax({
            url: '/contact', // form action url
            type: 'POST', // form submit method get/post
            dataType: 'json', // request type html/json/xml
            data: form.serialize(), // serialize form data
            beforeSend: function () {
                submit.attr("disabled", "disabled");
                let loadingText = '<span role="status" aria-hidden="true" class="spinner-border spinner-border-sm align-self-center me-2"></span>Sending.....'; // change submit button text
                if (submit.html() !== loadingText) {
                    submit.data('original-text', submit.html());
                    submit.html(loadingText);
                }
            },
            success: function (data) {
                submit.before(data.Message).fadeIn("slow"); // fade in response data
                submit.html(submit.data('original-text'));// reset submit button text
                submit.removeAttr("disabled", "disabled");

                if (data.response === 'success') form.trigger('reset'); // reset form

                setTimeout(function () {
                    $('.alert-dismissible').fadeOut('slow', function () {
                        $(this).remove();
                    });
                }, 3500);
            },
            error: function (e) {
                console.log(e)
            }
        });
    });

})(jQuery)
