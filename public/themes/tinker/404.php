<?php include 'layout/head.php';?>
    <!-- home page style -->
    <link rel="stylesheet" href="/assets/css/home.css?v=<?= $ver?>">
    <link rel="stylesheet" href="/assets/css/slider.css?v=<?= $ver?>">
    <script src="/assets/js/slider.js?v=<?= $ver?>" charset="utf-8"></script>
</head>
<body>
    <?php include 'layout/header.php';?>
    <?php include 'layout/navigation.php';?>
    <div class="error404page">
        <article class="post" id="post-content">
            <style type="text/css">
            .error-wall {display: flex;justify-content: center;align-items: center;flex-wrap: wrap;}
            .error-wall svg {width: 280px; height: 280px;}
            .error-wall{padding:45px 0;text-align: left}.error-container{width:90%;max-width:600px;margin:0 15px;font-size:21px;line-height:1.3em;font-weight:500}.error-container h1{font-size:21px;line-height: 39px;font-weight:600;color:#e91e62;margin-bottom: 25px}.error-container h2{font-size:19px;line-height:25px;font-weight:500;color:#0078b6}.error-container h3{font-size:17px;line-height:21px;font-weight:500;color:#75787b}.button-error-contain{display:flex;justify-content:flex-start;align-items:center;flex-wrap:wrap;padding:15px 0}.button-error-contain a{margin:7px 15px 7px 0;background-color:transparent;border:1px solid #75787b;color:#75787b;padding:7px 10px;border-radius:3px;font-size:15px;min-width:140px;transition:all 250ms ease;display:flex;justify-content: center;align-items: center;line-height: 1.4;}.button-error-contain a:hover{color:#e91e62;border-color:#e91e62}.button-error-contain svg { width: 16px; height: 16px; margin: 0 5px}
            </style>
            <div class="error-wall load-error">
                <svg height="512" viewBox="0 0 128 128" width="512" xmlns="http://www.w3.org/2000/svg">
                        <g fill="#fd637b">
                            <path d="m17.5 123.25a1.749 1.749 0 0 1 -1.75-1.75v-25a1.75 1.75 0 0 1 3.5 0v25a1.749 1.749 0 0 1 -1.75 1.75z"></path>
                            <path d="m53 123.25a1.749 1.749 0 0 1 -1.75-1.75v-25a1.75 1.75 0 0 1 3.5 0v25a1.749 1.749 0 0 1 -1.75 1.75z"></path>
                            <path d="m53 102.417h-35.5a1.75 1.75 0 0 1 0-3.5h35.5a1.75 1.75 0 0 1 0 3.5z"></path>
                            <path d="m57.5 112.583h-44.5a1.75 1.75 0 0 1 0-3.5h44.5a1.75 1.75 0 0 1 0 3.5z"></path>
                        </g>
                        <path d="m76.25 91h6v30.5h-6z" fill="#eaeaf0"></path>
                        <path d="m92.167 79.054c0 20.136-5.783 21.613-12.917 21.613s-12.917-1.477-12.917-21.613 5.783-51.3 12.917-51.3 12.917 31.165 12.917 51.3z" fill="#94c600"></path>
                        <path d="m91.583 91h6v30.5h-6z" fill="#eaeaf0"></path>
                        <path d="m107.5 83.426c0 16.063-5.783 17.241-12.917 17.241s-12.916-1.178-12.916-17.241 5.783-40.926 12.916-40.926 12.917 24.864 12.917 40.926z" fill="#9adb07"></path>
                        <path d="m87.673 84.25h-.023a1.75 1.75 0 0 1 -1.727-1.772c.034-2.683.216-5.518.538-8.426a1.75 1.75 0 1 1 3.478.385c-.309 2.8-.483 5.516-.516 8.085a1.751 1.751 0 0 1 -1.75 1.728z" fill="#94c600"></path>
                        <path d="m121.5 123.25h-115a1.75 1.75 0 0 1 0-3.5h115a1.75 1.75 0 0 1 0 3.5z" fill="#d8d8d8"></path>
                        <g fill="#3ba9fd">
                            <path d="m37.38 13.953h-.027a6.675 6.675 0 0 0 -8.761-5.818 6.335 6.335 0 0 0 -10.456 3.418 7.16 7.16 0 0 0 4.333 12.866h14.911a5.235 5.235 0 0 0 0-10.469z"></path>
                            <path d="m98 18.953h.019a4.765 4.765 0 0 1 6.256-4.154 4.524 4.524 0 0 1 7.467 2.441 5.113 5.113 0 0 1 -3.094 9.187h-10.648a3.738 3.738 0 1 1 0-7.475z"></path>
                            <path d="m47.762 40.107h-.019a4.765 4.765 0 0 0 -6.256-4.154 4.524 4.524 0 0 0 -7.467 2.447 5.113 5.113 0 0 0 3.094 9.187h10.648a3.738 3.738 0 0 0 0-7.476z"></path>
                        </g>
                </svg>
                <div class="error-container">
                    <h1>Oops!!! 404 Not Found</h1>
                    <h2>Sorry! We can't seem to find that page. But since you're here, check out some of our best deals below</h2>
                    <div class="button-error-contain">
                        <a href="javascript: history.go(-1)">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                            </svg>
                            Back
                        </a>
                        <a href="/">
                            Go to home
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                                <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </article>
    </div>
    <?php include 'layout/footer.php';?>
</body>
</html>
