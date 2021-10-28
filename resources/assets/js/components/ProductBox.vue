<template>
    <div class="home-slider-item swiper-slide">
        <div class="home-show-image" @mouseover="showProductInfo" @mousemove="showProductInfo" @mouseleave="hideProductInfo">
            <a href="#">
                <img src="https://via.placeholder.com/500x500" alt="">
            </a>
        </div>
        <div class="home-slider-info">
            <div class="home-slide-rate flex-b align-c flex-s">
                <div class="rating-wrap flex-b align-c flex-s">
                    <div class="rating-star-in-list"></div>
                    <div class="rating-star-in-list"></div>
                    <div class="rating-star-in-list"></div>
                    <div class="rating-star-in-list"></div>
                    <div class="rating-star-in-list"></div>
                </div>
                <div class="code-wrapper">
                    <span>Mã SP: CAHI330</span>
                </div>
            </div>
            <div class="home-slider-product-title">
                <a class="home-slider-product-title-link" href="#">
                    {{ product.title }}
                </a>
            </div>
            <div class="home-slider-price">
                <div class="hight-price">
                    <del>1.234.000đ</del>
                    <small>Tiết kiệm: 9%</small>
                </div>
                <div class="sale-price">
                    999.000đ
                </div>
            </div>
            <div class="home-slide-action flex-b align-c flex-s">
                <div class="product-status flex-b align-c">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-all" viewBox="0 0 16 16">
                        <path
                            d="M8.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L2.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093L8.95 4.992a.252.252 0 0 1 .02-.022zm-.92 5.14.92.92a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 1 0-1.091-1.028L9.477 9.417l-.485-.486-.943 1.179z" />
                    </svg>
                    <span>Còn hàng</span>
                </div>
                <button id="addtocart" class="addtocart-btn button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-bag-plus" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z" />
                        <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                    </svg>
                </button>
            </div>
        </div>

    </div>
</template>

<script>
    export default {
        mounted() {
            // console.log('Product box mounted.')
            // showProductInfo();
        },
        props : {
            product: {
              type: Object
            }
        },
        methods: {
            showProductInfo: function(e) {
                var w_tooltip = $('#show-product-info').width();
                var pad = 10;
                var x_mouse = 0;
                var y_mouse = 0;
                var wrap_left = 0;
                var wrap_right = 0;
                var wrap_top = 0;
                var wrap_bottom = 0;
                wrap_left = 0;
                wrap_top = $(window).scrollTop();
                wrap_bottom = $(window).height();
                wrap_right = $(window).width();
                x_mouse = e.pageX;
                y_mouse = e.pageY;
                let h_tooltip = $('#show-product-info').height();


                if (x_mouse + w_tooltip > wrap_right) $('#show-product-info').css('left', x_mouse - w_tooltip - pad);
                else $('#show-product-info').css('left', x_mouse + pad);


                if (y_mouse - h_tooltip < wrap_top) $('#show-product-info').css('top', wrap_top);
                else $('#show-product-info').css('top', y_mouse - h_tooltip - pad);
                // $('#show-product-info').html("OK");
                $('#show-product-info').show();
                // console.log("showProductInfo");
            },
            hideProductInfo: function() {
                // $('#show-product-info').html();
                $('#show-product-info').hide();
                // console.log("hideProductInfo");
            }
        }
    }
</script>
