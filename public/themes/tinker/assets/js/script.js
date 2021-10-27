$(document).ready(function() {
    $(document).scroll(function() {

        var y = $(this).scrollTop();
        var heightHeader = $('.site-header').height();
        if ($('#main-banner').is(':visible') == true) {
            var heightBanner = $('.main-banner-wrapper').height();
        } else {
            var heightBanner = 0;
        }
        var sTop = heightHeader + heightBanner
        if (y > sTop) {
            $('#shortLink').addClass('show-menu');
            $('.header-search-wrapper').addClass('fix-menu');
            $('.navigation-wrapper').removeClass('transform');
        } else {
            $('.header-search-wrapper').removeClass('fix-menu');
            $('.navigation-wrapper').addClass('transform');
        }
    });




    $(document).mouseup(function(e) {
        var container = $('.search-wrapper');
        if (!container.is(e.target) && container.has(e.target).length === 0) {
            $('.search-form').removeClass('search-focus');
            $('.search-result-wrapper').slideUp();
        } else {
            $('.search-form').addClass('search-focus');
        }
    });

    $('.search-keyword').bind('keyup change', function () {
        if (this.value.length > 2) {
            if (screen.width > 990) {
                $('.search-result-wrapper').slideDown();
            }
            $('.default-loading').fadeIn();
            $('.default-search-icon').hide();
        } else {
            if (screen.width > 990) {
                $('.search-result-wrapper').slideUp();
            }
            $('.default-loading').hide();
            $('.default-search-icon').fadeIn();
        }
    });

    $(document).on('click', '.search-keyword', function () {
        if (screen.width < 990) {
            $('.search-wrapper').addClass('search-action')
        }
    })

    $(document).on('click', '.search-icon', function () {
        if (screen.width < 990) {
            $('.search-wrapper').removeClass('search-action');
            $('.default-loading').hide();
            $('.default-search-icon').fadeIn();
        }
    })

    $(document).on('keyup', function(evt) {
        if (evt.keyCode == 27) {
            $('.search-result-wrapper').slideUp();
        }
    });

    if ($('.menu-dummy').is(':visible') == true && screen.width > 990) {
        var heightMenu = $('.main-menu').height();
        $('.menu-dummy').css('height', heightMenu);
    }

    if (screen.width < 990) {
        $(document).on('click', '.menu-item-link', function (menu) {
            $(this).next().slideToggle();
            $(this).toggleClass('menu-active');
            menu.preventDefault();
        })
    }

    $(document).on('click', '.menu-icon', function (menu) {
        $('body').addClass('open-menu')
    })
    $(document).on('click', '.navigation-background', function (menu) {
        $('body').removeClass('open-menu')
    })

    var mainBanner = new Swiper('.main-banner', {
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
    });


    // var homeSlider = new Swiper('.home-slider-init', {
    //     slidesPerView: 2,
    //     slidesPerGroup: 2,
    //     slidesPerView: "auto",
    //     spaceBetween: 0,
    //     navigation: {
    //         nextEl: ".swiper-button-next",
    //         prevEl: ".swiper-button-prev",
    //     },
    //     breakpoints: {
    //         760: {
    //             slidesPerView: 3,
    //             slidesPerGroup: 3,
    //         },
    //         990: {
    //             slidesPerView: 4,
    //             slidesPerGroup: 4,
    //         },
    //         1200: {
    //             slidesPerView: 5,
    //             slidesPerGroup: 5,
    //         },
    //         1300: {
    //             slidesPerView: 6,
    //             slidesPerGroup: 6,
    //         }
    //     },
    // });

    var recommendationSlider = new Swiper('.recommendation-slider', {
        slidesPerView: 2,
        slidesPerGroup: 2,
        slidesPerView: "auto",
        spaceBetween: 0,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            760: {
                slidesPerView: 3,
                slidesPerGroup: 3,
            },
            990: {
                slidesPerView: 4,
                slidesPerGroup: 4,
            },
            1200: {
                slidesPerView: 5,
                slidesPerGroup: 5,
            },
            1300: {
                slidesPerView: 6,
                slidesPerGroup: 6,
            }
        },
    });


    function showProductInfo(){
        var w_tooltip = $('#show-product-info').width();
        var h_tooltip = 0;
        var pad = 10;
        var x_mouse = 0; var y_mouse = 0;
        var wrap_left = 0;
        var wrap_right = 0;
        var wrap_top = 0;
        var wrap_bottom = 0;
        $('.home-show-image').mousemove(function(e){
            contentShowInfo = $(this).parents('.home-slider-item').find('.hover-content-pro');
            if(contentShowInfo.length == 0){
                return;
                $('#show-product-info').hide();
            }
            $('#show-product-info').html(contentShowInfo.html());
            console.log(contentShowInfo.html);
            wrap_left = 0;
            wrap_top = $(window).scrollTop();
            wrap_bottom = $(window).height();
            wrap_right = $(window).width();
            x_mouse = e.pageX;
            y_mouse = e.pageY;
            h_tooltip = $('#show-product-info').height();


            if(x_mouse + w_tooltip > wrap_right) $('#show-product-info').css('left',x_mouse - w_tooltip - pad);
            else $('#show-product-info').css('left',x_mouse + pad);


            if(y_mouse - h_tooltip < wrap_top) $('#show-product-info').css('top',wrap_top);
            else $('#show-product-info').css('top',y_mouse - h_tooltip - pad);
            $('#show-product-info').show();

        });

        $('.home-show-image').mouseout(function(){
            $('#show-product-info').hide();
        });
    }

    $(document).ready(function(e) {
        showProductInfo();
    });
});
