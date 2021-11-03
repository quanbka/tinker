$(document).ready(function() {

    var categoryBanner = new Swiper('.category-banner', {
        slidesPerView: 1,
        slidesPerGroup: 1,
        spaceBetween: 10,
        lazy: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            990: {
                slidesPerView: 2,
                slidesPerGroup: 2,
            },
        },
    });

    $(document).on('click', '.criteria-item', function functionName() {
        $(this).addClass('active').siblings().removeClass('active');
    })
    $(document).on('click', '.open-filter-box, .filter-background', function functionName() {
        $('body').toggleClass('open-filter')
    })

    $(document).on('click', '.filter-title', function functionName() {
        $(this).next().find('.filter-lable:nth-child(n + 2)').slideToggle()
        $(this).next().toggleClass('active');
    })

});
