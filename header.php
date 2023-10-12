<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>haya. Portfolio</title>
    <meta name="description" content="hayaのポートフォリオウェブサイトです">
    <meta property="og:url" content="https://hayaportfolio202301.falconportfolio.site">
    <meta property="og:type" content="website">
    <meta property="og:title" content="haya. Portfolio">
    <meta property="og:description" content="hayaのポートフォリオウェブサイトです">
    <meta property="og:img" content="https://hayaportfolio202301.falconportfolio.site/assets/img/index-jpg/ogp.jpg">

    <!-- Twitterカード -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@haya_1029384756" />
    <meta name="twitter:creator" content="@haya_1029384756" />
    <meta name="twitter:domain" content="hayaportfolio202301.falconportfolio.site" />
    <meta name="twitter:title" content="haya. Portfolio" />
    <meta name="twitter:description" content="hayaのポートフォリオウェブサイトです" />
    <meta name="twitter:image"
        content="https://hayaportfolio202301.falconportfolio.site/assets/img/index-jpg/ogp.jpg" />

    <!-- favicon & icon -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/favicon_package_v0.16/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/favicon_package_v0.16/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/assets/favicon_package_v0.16/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/assets/favicon_package_v0.16/site.webmanifest">
    <link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/assets/favicon_package_v0.16/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- css -->
    <!-- google-font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Bruno+Ace&family=Noto+Sans+JP:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Sawarabi+Gothic" rel="stylesheet">

    <?php wp_head(); ?>
</head>

<body>
    <div id="mouse-stalker"></div>

    <!-- <div id="splash">
        <div id="splash__text"></div>
        <canvas id="space"></canvas>
    </div> -->
    <!-- /#splash -->

    <header class="header" id="header">
        <div class="header__left">
            <h1 class="header__logo"><span class="top__rect"></span>haya<strong class="text--accent">.</strong></h1>
        </div>
        <nav class="header__nav">
            <ul id="nav__list">
                <li class="nav__item">
                    <a href="#news" class="nav__link" aria-label="お知らせ"><span class="nav__link-en">News</span><span
                            class="nav__link-ja">お知らせ</span></a>
                </li>
                <li class="nav__item">
                    <a href="#service" class="nav__link" aria-label="サービス内容"><span
                            class="nav__link-en">Service</span><span class="nav__link-ja">サービス</span></a>
                </li>
                <li class="nav__item">
                    <a href="#works" class="nav__link" aria-label="これまでの実績"><span class="nav__link-en">Works</span><span
                            class="nav__link-ja">実績</span></a>
                </li>
                <li class="nav__item">
                    <a href="#blog" class="nav__link" aria-label="ブログ"><span class="nav__link-en">Blog</span><span
                            class="nav__link-ja">ブログ</span></a>
                </li>
                <li class="nav__item">
                    <a href="#contact" class="nav__link nav__contact" aria-label="連絡する"><span
                            class="nav__link-en">Contact</span><span class="nav__link-ja">お問い合わせ</span></a>
                </li>
            </ul>
        </nav>
        <div class="header__hamburger is-sp">
            <button type="button" class="hamburger__menu" aria-label="メニュー" aria-expanded="false"
                aria-controls="nav__list">
                <span class="hamburger__icon"></span>
                <span class="hamburger__icon"></span>
                <span class="hamburger__icon"></span>
            </button>
        </div>
        <div class="drawer-background is-sp" id="drawer-background"></div>
    </header>
    <!-- /.header -->