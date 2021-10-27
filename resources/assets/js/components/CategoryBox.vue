<template>
    <div class="home-slider-wrapper">
        <div class="site-w">

            <div class="home-slider-content-box">
                <div class="home-slider-tabs flex-b align-c">
                    <h2 class="home-slider-tab-heading">
                        Title
                    </h2>
                    <div class="home-slider-tab-list flex-b align-c">
                        <div class="home-slider-tab-item"><a class="home-slider-tab-link" href="#">Url</a></div>
                        <div class="home-slider-tab-item"><a class="home-slider-tab-link" href="#">Url</a></div>
                        <div class="home-slider-tab-item"><a class="home-slider-tab-link" href="#">Url</a></div>
                        <div class="home-slider-tab-item"><a class="home-slider-tab-link" href="#">Url</a></div>
                    </div>
                    <div class="home-slider-tab-view-all is-desktop">
                        <a class="home-slider-tab-link" href="#">Xem hết</a>
                    </div>
                </div>
                <div class="home-slider-init" v-swiper:mySwiper="swiperOption">
                    <div class="swiper-wrapper">
                        <swiper-slide :key="product" v-for="product in products"><product-box></product-box></swiper-slide>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>

        </div>


    </div>
</template>

<script>
    export default {
        data () {
          return {
            products : [1,2,3,4,5,6,7],
            swiperOption: {
                slidesPerView: 2,
                slidesPerGroup: 2,
                slidesPerView: "auto",
                spaceBetween: 0,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },

                breakpoints: {
                    0: {
                        slidesPerView: 2,
                        slidesPerGroup: 2,
                    },
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
            }
          }
        },
        mounted() {
            console.log('Category mounted')
        }
    }
</script>
