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
                <div class="home-slider-init">
                    <div class="swiper-wrapper">
                        <product-box></product-box>
                        <product-box></product-box>
                        <product-box></product-box>
                        <product-box></product-box>
                        <product-box></product-box>
                        <product-box></product-box>
                        <product-box></product-box>
                        <product-box></product-box>

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
        mounted() {
            console.log('Category mounted')
        }
    }
</script>
