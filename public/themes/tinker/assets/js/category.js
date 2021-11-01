$(document).ready(function() {


    var categoryBanner = new Swiper('.category-banner', {
        slidesPerView: 1,
        slidesPerGroup: 1,
        spaceBetween: 10,
        lazy: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            990: {
                slidesPerView: 2,
                slidesPerGroup: 2,
            },
        },
    });

});
