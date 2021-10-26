<div class="recommendation-wrapper">
    <div class="site-w">
        <div class="recommendation-heading">
            Sản phẩm dành riêng cho bạn
        </div>
        <div class="recommendation-slider">
            <div class="swiper-wrapper">
                <?php for ($i=1; $i < 10; $i++) { ?>
                    <div class="home-slider-item swiper-slide">
                    <div class="home-show-image">
                        <a href="#">
                            <img src="/images/products/<?= $i ?>.jpg" alt="">
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
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
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
                                    <path d="M8.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L2.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093L8.95 4.992a.252.252 0 0 1 .02-.022zm-.92 5.14.92.92a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 1 0-1.091-1.028L9.477 9.417l-.485-.486-.943 1.179z"></path>
                                </svg>
                                <span>Còn hàng</span>
                            </div>
                            <button id="addtocart-2" class="addtocart-btn button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-bag-plus" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z"></path>
                                    <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
</div>
