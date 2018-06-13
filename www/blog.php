<?php include('partials/head.php'); ?>

<body id="blog" data-hijacking="off" data-animation="parallax">
    <?php include('partials/navigation.php'); ?>

    <!-- start of #home-page -->
    <main>

        <div class="row">

            <aside class="sidebar col-3">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </aside>

            <section class="article-feed col-6">
                <?php foreach (range(1, 5) as $x) : ?>
                <article class="article">
                    <header class="article-header">
                        <h2 class="article-title">
                            <a href="#">Hell world!</a>
                        </h2>

                        <div class="article-information">

                            <div class="date">
                                <span class="date-number">
                                    12
                                </span>

                                <a href="#" class="date-month">
                                    <time datetime="2018-06-12T20:38:26+00:00">
                                        June<span class="hidden">12</span>, <strong>2018</strong>
                                    </time>
                                </a>
                            </div>

                            <a href="#" class="article-information-category">
                                Category
                            </a>

                            <div class="article-information-tags">
                                <a href="#">style</a>,
                                <a href="#">web design</a>
                            </div>
                        </div>
                    </header>

                    <div class="article-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </article>
                <?php endforeach; ?>
            </section>

        </div>

    </main> <!-- .container -->

    <?php include('components/cta.php'); ?>

    <script src="/js/main.js"></script> <!-- Resource jQuery -->
<!-- end of #home-page -->
<?php include('partials/footer.php') ?>