<header class="site-header">
    <div class="site-w">
        <div class="top-header flex-b align-c">
            <button type="button" class="menu-icon is-mobile">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <a class="site-logo" href="/">
                <picture>
                    <source media="(min-width: 320px)" srcset="/themes/tinker/images/logo.svg">
                    <source src="/themes/tinker/images/blank.gif">
                    <img src="/themes/tinker/images/blank.gif" alt="Electic - Thiết bị điện tử, điện lạnh">
                </picture>
            </a>
            <div class="header-tags flex-b align-s flex-s">
                <a href="#" title="">
                    Laptop
                </a>
                <a href="#" title="">
                    Tủ lạnh
                </a>
                <a href="#" title="">
                    Điều Hòa
                </a>
                <a href="#" title="">
                    Lò vi sóng
                </a>
            </div>
            <div class="hot-category flex-b align-s flex-s">
                <a class="hot-category-item flex-b align-c flex-c" href="#" title="">
                    Xây dựng cấu hình máy
                </a>
                <a class="hot-category-item flex-b align-c flex-c" href="#" title="">
                    Xây dựng hệ thống
                </a>
            </div>
            <div class="header-support-action flex-b align-s flex-s">
                <div class="header-support-item flex-b align-c flex-s">
                    <span class="header-support-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                        </svg>
                    </span>
                    <span class="flex-b column">
                        <small>Mua hàng online</small>
                        099.789.6789
                    </span>
                </div>
                <div class="header-support-item flex-b align-c flex-s">
                    <span class="header-support-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                        </svg>
                    </span>
                    <span class="flex-b column">
                        <small>Đăng ký</small>
                        <small>Đăng nhập</small>
                    </span>
                </div>
                <div class="header-support-item flex-b align-c flex-s">
                    <span class="header-support-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"  viewBox="0 0 16 16">
                            <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/>
                        </svg>
                        <small class="count-item">0</small>
                    </span>
                    <small>
                        Giỏ hàng
                    </small>
                </div>
            </div>
        </div>
    </div>
    <div class="header-search-wrapper">
        <div class="site-w flex-b align-c">
            <div id="shortLink" class="flex-b align-c">
                <div class="short-link-item category-wrapper">
                    <span class="category-main-text">Danh mục sản phẩm</span>
                    @include('inc.navigation')
                </div>
                <div class="short-link-item policy-wrapper">
                    Chính sách - hướng dẫn
                </div>
                <div class="short-link-item find-brand-wrapper">
                    Tìm theo hãng
                </div>
            </div>
            <div class="search-wrapper">
                <form class="search-form flex-b align-s flex-s" action="/search/" method="get">
                    <input class="search-keyword form-control" type="text" name="q" placeholder="Nhập tên sản phẩm, từ khóa cần tìm">
                    <button class="search-button button" type="button">
                        <svg class="default-search-icon" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                        </svg>
                        <div class="default-loading"></div>
                    </button>
                </form>
                <button type="button" class="search-icon is-mobile">
                    &times;
                </button>
                @include('inc/suggestions')
            </div>
            <div class="header-news flex-b align-c flex-e">
                <a class="flex-b align-c" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-newspaper" viewBox="0 0 16 16">
                        <path d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5v-11zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5H12z"/>
                        <path d="M2 3h10v2H2V3zm0 3h4v3H2V6zm0 4h4v1H2v-1zm0 2h4v1H2v-1zm5-6h2v1H7V6zm3 0h2v1h-2V6zM7 8h2v1H7V8zm3 0h2v1h-2V8zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1z"/>
                    </svg>
                    <span>Tin Tức</span>
                </a>
            </div>
        </div>
    </div>
    <div class="is-mobile navigation-background"></div>
</header>
