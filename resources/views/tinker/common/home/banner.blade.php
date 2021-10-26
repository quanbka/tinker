<div id="main-banner" class="site-w" role="banner">
    <div class="main-banner-wrapper flex-b align-s flex-s">
        <div class="menu-dummy"></div>
        <div class="list-banner-wrapper flex-b align-s flex-s">
            <div class="main-banner">
                <div class="swiper-wrapper">
                    <?php for ($i=1; $i < 5; $i++) { ?>
                        <a href="#" class="main-banner-item swiper-slide">
                            <picture>
                                <source media="(min-width: 320px)" srcset="/themes/tinker/images/banner/<?= $i?>.jpg">
                                <source src="/themes/tinker/images/blank.gif">
                                <img src="/themes/tinker/images/blank.gif" alt="">
                            </picture>
                        </a>
                    <?php } ?>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
            <div class="list-small-banner flex-b align-s flex-s column">
                <div class="small-banner-item">
                    <a href="#">
                        <picture>
                            <source media="(min-width: 320px)" srcset="/themes/tinker/images/banner/s1.png">
                            <source src="/themes/tinker/images/blank.gif">
                            <img src="/themes/tinker/images/blank.gif" alt="">
                        </picture>
                    </a>
                </div>
                <div class="small-banner-item">
                    <a href="#">
                        <picture>
                            <source media="(min-width: 320px)" srcset="/themes/tinker/images/banner/s2.png">
                            <source src="/themes/tinker/images/blank.gif">
                            <img src="/themes/tinker/images/blank.gif" alt="">
                        </picture>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-banner-wrapper">
        <?php for ($i=1; $i < 4; $i++) { ?>
            <div class="bottom-banner-item">
                <a href="#">
                    <img src="/themes/tinker/images/banner/<?= $i?>.jpg" alt="">
                </a>
            </div>
        <?php } ?>
    </div>
</div>
