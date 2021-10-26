<?php include 'layout/head.php';?>
<!-- home page style -->
</head>
<body>
    <?php include 'layout/header.php'; ?>
    <main class="js-category-page">
        <?php include 'common/products/recommendation.php'; ?>
        <div class="site-w">
            <section class="category-wrapper flex-b flex-w">
                <aside class="sidebar">
                    <?php include 'common/products/filter-product.php'; ?>
                </aside>
                <section class="category-content">
                    <?php include 'common/products/list-product.php'; ?>
                </section>
            </section>
        </div>
    </main>
    <?php include 'layout/footer.php'; ?>
    <div id="show-product-info"></div>
</body>
</html>
