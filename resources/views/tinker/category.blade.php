@extends('inc.layout')
@section('css')
    <link rel="stylesheet" href="/themes/tinker/assets/css/swiper.css?v={{ config('app.version') }}">
    <link rel="stylesheet" href="/themes/tinker/assets/css/category.css?v={{ time() }}">
@endsection

@section('main')
<section id="js-category">
    <div class="site-w">
        <div class="breadcrumb-box">
            <ul class="breadcrumb" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                    <a href="/" itemprop="item">
                        <span itemprop="name">Trang chủ</span>
                    </a>
                </li>
                <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                    <a href="/laptop" itemprop="item">
                        <span itemprop="name">Laptop, Máy Tính Xách Tay</span>
                    </a>
                </li>
            </ul>
        </div>
        <h1 class="main-heading">
            {{ $category->title }}
        </h1>
        @desktop
        <div class="category-banner">
            <div class="swiper-wrapper">
                @for($i=1; $i < 6; $i++)
                <a href="#" class="category-banner-item swiper-slide">
                    <picture>
                        <source media="(min-width: 320px)" srcset="/themes/tinker/images/banner/category/{{$i}}.jpg">
                        <source src="/themes/tinker/images/blank.gif">
                        <img src="/themes/tinker/images/blank.gif" alt="" class="swiper-lazy">
                        <div class="swiper-lazy-preloader"></div>
                    </picture>
                </a>
                @endfor
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
        @enddesktop
        <!-- content -->
        <main class="category-content-wrapper flex-b flex-w">
            <aside class="category-sidebar">
                @include('common/products/filter-product')
            </aside>
            <div class="category-content">

                <div class="category-top-box">
                    <div class="filter-price">
                        <form class="filter-by-price flex-b align-c" action="?price" method="get">
                            <span class="filter-by-price-title">
                                Lọc theo giá tiền
                            </span>
                            <input class="form-control" name="price" pattern="[0-9]*" placeholder="Giá từ">
                            <small>-</small>
                            <input class="form-control" name="price" pattern="[0-9]*" placeholder="Giá đến">
                            <button class="button" type="submit" >Áp dụng</button>
                        </form>
                    </div>
                    <div class="filter-by-criteria flex-b flex-s align-c">
                        <div class="open-filter-box is-mobile">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-funnel" viewBox="0 0 16 16">
                                <path d="M1.5 1.5A.5.5 0 0 1 2 1h12a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.128.334L10 8.692V13.5a.5.5 0 0 1-.342.474l-3 1A.5.5 0 0 1 6 14.5V8.692L1.628 3.834A.5.5 0 0 1 1.5 3.5v-2zm1 .5v1.308l4.372 4.858A.5.5 0 0 1 7 8.5v5.306l2-.666V8.5a.5.5 0 0 1 .128-.334L13.5 3.308V2h-11z"/>
                            </svg>
                            <span class="filter-icon">
                                Lọc
                            </span>
                        </div>
                        <div class="criteria-form">
                            <?php
                            $criteriaFiltet = [
                                'default' => ['Phổ biến', '?sort=default'],
                                'newest' => ['Hàng mới', '?sort=newest'],
                                'bestsaller' => ['Bán chạy', '?sort=top-seller'],
                                'price-desc' => ['Giá giảm dần', '?sort=price-desc'],
                                'price-asc' => ['Giá tăng dần', '?sort=price-asc'],
                            ]
                            ?>
                            @foreach ($criteriaFiltet as $key => $value)
                                <a class="criteria-item" href="<?= $value[1] ?>">
                                    <?= $value[0] ?>
                                </a>
                            @endforeach

                        </div>
                        {{ $products->render() }}
                    </div>
                </div>

                <div class="list-product-item">
                    @foreach ($products as $key => $product)
                    <div class="product-item-wrapper">
                        <div class="product-item-image">
                            <a class="product-item-image-link" href="{{ $product->slug}}">
                                <img src="{{ $product->image_url}}" alt="">
                            </a>
                        </div>
                        <div class="product-info">
                            <div class="product-rate flex-b align-c flex-s">
                                <div class="rating-wrap flex-b align-c flex-s">
                                    <div class="rating-star-in-list"></div>
                                    <div class="rating-star-in-list"></div>
                                    <div class="rating-star-in-list"></div>
                                    <div class="rating-star-in-list"></div>
                                    <div class="rating-star-in-list"></div>
                                </div>
                                <div class="code-wrapper">
                                    <span>Mã SP: {{ $product->code }}</span>
                                </div>
                            </div>
                            <div class="product-product-title">
                                <a class="product-product-title-link" href="#">
                                    {{ $product->title }}
                                </a>
                            </div>
                            <div class="product-price">
                                <div class="hight-price">
                                    <del>{{ $product->price }}</del>
                                    <small>Tiết kiệm: 9%</small>
                                </div>
                                <div class="sale-price">
                                    {{ $product->sale_price }}
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

                    @endforeach
                </div>
                {{ $products->render() }}
            </div>
        </main>
    </div>
</section>
@endsection
@section('js')
    <script charset="utf-8" src="/themes/tinker/assets/js/swiper.js?v={{ config('app.version') }}"></script>
    <script src="/themes/tinker/assets/js/category.js" charset="utf-8"></script>
@endsection
