<!DOCTYPE html>
<html lang="ja">

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-4PZNVGXC9E"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'G-4PZNVGXC9E');
    </script>

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
    <!-- fontAwesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.4.2/css/all.css">
    <!-- swiper.css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <!-- myself -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">

    <!-- js -->
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <!-- swiper.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <!-- gsap.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.0/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.0/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.0/MotionPathPlugin.min.js"></script>
    <!-- lenis.js -->
    <script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@1.0.19/bundled/lenis.min.js"></script>
    <!-- my -->
    <script defer type="module" src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js"></script>
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

    <div id="wrapper">
        <main>
            <section id="top" class="js-bg">
                <div class="container top__container">
                    <h2 class="top__ttl"><span class="top__rect"></span>Web Creator</h2>
                    <div class="scrolldown">
                        <span class="scrolldown__icon"></span>
                        <span class="scrolldown__icon"></span>
                    </div>
                </div>
            </section>
            <!-- /#top -->

            <section id="thisis">
                <div class="container thisis__container">
                    <h2 class="section__ttl"><span class="section__rect"></span>This website is</h2>
                    <h3 class="section__sub-ttl">- このウェブサイトについて</h3>
                    <h4 class="section__text thisis__text">
                        <p class="section__desc">
                            このウェブサイトは、ウェブクリエイターhaya.のポートフォリオ兼アウトプットサイトです。<br>
                            学んだことや、現在のトレンドの表現をアウトプットする場所も兼ねています。<br><br>
                            自分ができるようになったことを表現するのはとても楽しいので、この場を設けています。<br>
                            いつまでも「アソビゴコロ」を持ち続け、楽しみながら活動し続けたいです。
                        </p>
                    </h4>
                </div>
            </section>
            <!-- /#thisis -->

            <section id="concept">
                <div class="concept__bg js-bg"></div>
                <div class="container concept__container">
                    <h2 class="section__ttl"><span class="section__rect"></span>Concept</h2>
                    <h3 class="section__sub-ttl">- コンセプト</h3>
                    <h4 class="section__text">
                        <p class="section__desc">
                            このポートフォリオサイトのコンセプトは「グラデーション」。<br>
                            世の中、はっきり白黒区別できることもありますが、<br>
                            ほとんどの場合、境界は曖昧。<br><br>
                            考え方も表現も、生き方も。<br>
                            だからこそ、多様な考え方や視点に触れながら、<br>
                            自分で考え、グラデーションのように<br>
                            思考を柔軟に変化させていくことを大切にしています。<br><br>
                            ウェブに関しても同様。<br>
                            ただ情報を伝えるだけのウェブサイトを作るだけでなく、<br>
                            世の中の移り変わりに合わせながら、<br>
                            自分の学んできたこと、経験を活かして<br>
                            自分にしか作れないウェブサイトを制作します。
                        </p>
                    </h4>
                </div>
            </section>
            <!-- /#concept -->

            <section id="news">
                <div class="container news__container">
                    <h2 class="section__ttl"><span class="section__rect"></span>News</h2>
                    <h3 class="section__sub-ttl">- お知らせ</h3>
                    <h4 class="section__text news__text">
                        <p class="section__desc">
                            ただいま準備中です。
                        </p>
                    </h4>
                    <div class="news__area">
                        <a href="#" class="news__link">
                            <time class="news__date" datetime="">2023.10.01</time>
                            <p class="news__ttl">
                                タイトルが入ります。タイトルが入ります。タイトルが入ります。タイトルが入ります。タイトルが入ります。
                            </p>
                        </a>
                        <a href="#" class="news__link">
                            <time class="news__date" datetime="">2023.10.01</time>
                            <p class="news__ttl">
                                タイトルが入ります。
                            </p>
                        </a>
                        <a href="#" class="news__link">
                            <time class="news__date" datetime="">2023.10.01</time>
                            <p class="news__ttl">
                                タイトルが入ります。
                            </p>
                        </a>
                    </div>
                    <div class="section__more">
                        <a href="" type="button" class="more__button">お知らせ一覧を見る</a>
                    </div>
                </div>
            </section>

            <section id="service">
                <div class="container service__container">
                    <h2 class="section__ttl"><span class="section__rect"></span>Service</h2>
                    <h3 class="section__sub-ttl">- サービス</h3>
                    <h4 class="section__text">
                        <p class="section__desc">
                            サービス内容について詳しく知りたい方は、お気軽に<a href="#contact" class="service__contact">お問い合わせ <i
                                    class="fa-solid fa-arrow-up-right-from-square"></i></a>ください。
                        </p>
                    </h4>
                    <ul class="service__list">
                        <li class="service__contents">
                            <button class="service__link" type="button" aria-label="ウェブサイト制作について詳細を見る">
                                <div class="link__front">
                                    <figure class="service__figure">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/index-jpg/service1.jpg" alt="" class="service__img">
                                    </figure>
                                    <h3 class="service__head">ウェブサイト制作</h3>
                                </div>
                                <div class="link__back">
                                    <p class="service__desc">
                                        ブログのような投稿機能がついたWordPress(ワードプレス)を用いたサイト、商品を紹介するための縦長のサイト、結婚式の招待状代わりのサイト等、さまざまなタイプのウェブサイトを制作します。
                                    </p>
                                </div>
                                <div class="service__open">
                                    <span class="service__icon"></span>
                                    <span class="service__icon"></span>
                                </div>
                            </button>
                        </li>
                        <li class="service__contents">
                            <button class="service__link" type="button" aria-label="コーディングについての詳細を見る">
                                <div class="link__front">
                                    <figure class="service__figure">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/index-jpg/service2.jpg" alt="" class="service__img">
                                    </figure>
                                    <h3 class="service__head">コーディング</h3>
                                </div>
                                <div class="link__back">
                                    <p class="service__desc">
                                        すでにあるウェブサイトをWordPress化して投稿機能をつけたり、アニメーションを加えたりといった、部分的な作業も承っています。<br>
                                        コーダーとしての人手が足りない際のリソースとしても対応可能です。
                                    </p>
                                </div>
                                <div class="service__open">
                                    <span class="service__icon"></span>
                                    <span class="service__icon"></span>
                                </div>
                            </button>
                        </li>
                        <li class="service__contents">
                            <button class="service__link" type="button" aria-label="運用・保守代行について詳細を見る">
                                <div class="link__front">
                                    <figure class="service__figure">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/index-jpg/service3.jpg" alt="" class="service__img">
                                    </figure>
                                    <h3 class="service__head">運用・保守代行</h3>
                                </div>
                                <div class="link__back">
                                    <p class="service__desc">
                                        ウェブの世界は移り変わりが激しいです。ウェブやパソコンに不慣れな方に代わって、ウェブサイトの運用・保守を代行します。<br>
                                        その際、部分的なコーディング作業を承ることもできます。
                                    </p>
                                </div>
                                <div class="service__open">
                                    <span class="service__icon"></span>
                                    <span class="service__icon"></span>
                                </div>
                            </button>
                        </li>
                        <li class="service__contents">
                            <button class="service__link" type="button" aria-label="ウェブ全般について詳細を見る">
                                <div class="link__front">
                                    <figure class="service__figure">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/index-jpg/service4.jpg" alt="" class="service__img">
                                    </figure>
                                    <h3 class="service__head">ウェブ全般</h3>
                                </div>
                                <div class="link__back">
                                    <p class="service__desc">
                                        ウェブに関することならなんでもご相談に乗ります。<br>
                                        レンタルサーバーの選定やサーバー内のデータの管理、表示速度の改善など、ウェブに関することは広く対応可能です。
                                    </p>
                                </div>
                                <div class="service__open">
                                    <span class="service__icon"></span>
                                    <span class="service__icon"></span>
                                </div>
                            </button>
                        </li>
                        <li class="service__contents">
                            <button class="service__link" type="button" aria-label="レスポンシブについて詳細を見る">
                                <div class="link__front">
                                    <figure class="service__figure">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/index-jpg/service5.jpg" alt="" class="service__img">
                                    </figure>
                                    <h3 class="service__head">レスポンシブ</h3>
                                </div>
                                <div class="link__back">
                                    <p class="service__desc">
                                        サイトリニューアルにはほとんど効果がないと言われています。<br>
                                        すでにあるウェブサイトをレスポンシブ対応する(スマートフォン向けに見やすくする)ことで、多くのユーザーに対応させることができます。
                                    </p>
                                </div>
                                <div class="service__open">
                                    <span class="service__icon"></span>
                                    <span class="service__icon"></span>
                                </div>
                            </button>
                        </li>
                        <li class="service__contents">
                            <button class="service__link" type="button" aria-label="動画編集について詳細を見る">
                                <div class="link__front">
                                    <figure class="service__figure">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/index-jpg/service6.jpg" jpg="" class="service__img">
                                    </figure>
                                    <h3 class="service__head">動画編集</h3>
                                </div>
                                <div class="service__open">
                                    <span class="service__icon"></span>
                                    <span class="service__icon"></span>
                                </div>
                                <div class="link__back">
                                    <p class="service__desc">
                                        簡易な動画編集をすることができます。<br>
                                        カット・テロップ入れ、効果音まで対応可能です。
                                    </p>
                                </div>
                            </button>
                        </li>
                    </ul>
                </div>
            </section>
            <!-- /#service -->

            <section id="works">
                <div class="container works__container">
                    <h2 class="section__ttl"><span class="section__rect"></span>Works</h2>
                    <h3 class="section__sub-ttl works__sub-ttl">- 実績</h3>
                    <h4 class="section__text">
                        <p class="section__desc">
                            画面右側にある矢印を押していただくと、次の実績紹介に移ります。<br>
                            それぞれの画像を押していただくと、より詳細な情報を知ることができます。<br><br>
                            また、このポートフォリオサイトも自身でデザインからコーディングまでを行なっております。<br>
                            そのため、こちらも実績の一部とお考えください。
                        </p>
                    </h4>
                    <div class="works__swiper">
                        <ul class="swiper-wrapper">
                            <li class="swiper-slide">
                                <a href="./minami/index.html" class="works__link" aria-label="結婚式招待状の詳細を見る">
                                    <figure class="works__figure">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/index-jpg/works__minami.jpg" alt="みなみ歯科クリニック"
                                            class="works__img">
                                    </figure>
                                    <div class="works__info">
                                        <h3 class="works__ttl">みなみ歯科クリニック<br class="is-sp">(購入した教材の課題)</h3>
                                        <p class="works__tag">コーポレートサイト</p>
                                        <p class="works__tag">WordPress</p>
                                    </div>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="./invitation/index.html" class="works__link" aria-label="結婚式招待状の詳細を見る">
                                    <figure class="works__figure">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/index-jpg/works__invitation1.jpg" alt="結婚式招待状"
                                            class="works__img">
                                    </figure>
                                    <div class="works__info">
                                        <h3 class="works__ttl">結婚式招待状</h3>
                                        <p class="works__tag">LP</p>
                                    </div>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="./Sample-Corp/index.html" class="works__link" aria-label="Sample-Corpの詳細を見る">
                                    <figure class="works__figure">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/index-jpg/works__Sample-Corp1.jpg" alt="Sample-Corp"
                                            class="works__img">
                                    </figure>
                                    <div class="works__info">
                                        <h3 class="works__ttl">Sample-Corp<br class="is-sp">(購入した教材の課題)</h3>
                                        <p class="works__tag">コーポレートサイト</p>
                                    </div>
                                </a>
                            </li>
                            <li class="swiper-slide">
                                <a href="./sobolon/index.html" class="works__link" aria-label="sobolonの詳細を見る">
                                    <figure class="works__figure">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/index-jpg/works__sobolon1.jpg" alt="アクセサリーショップ"
                                            class="works__img">
                                    </figure>
                                    <div class="works__info">
                                        <h3 class="works__ttl">sobolon<br class="is-sp">(購入した教材の課題)</h3>
                                        <p class="works__tag">LP</p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="swiper__buttons">
                        <div class="swiper-button-prev">
                            <span class="works__icon1"></span>
                            <span class="works__icon2"></span>
                            <span class="works__icon3">&leftarrow;</span>
                        </div>
                        <div class="swiper-button-next">
                            <span class="works__icon1"></span>
                            <span class="works__icon2"></span>
                            <span class="works__icon3">&rightarrow;</span>
                        </div>
                    </div>
                    <div class="section__more">
                        <a href="" type="button" class="more__button">実績一覧を見る</a>
                    </div>
                </div>
            </section>
            <!-- /#works-->

            <section id="blog">
                <div class="container blog__container">
                    <h2 class="section__ttl"><span class="section__rect"></span>Blog</h2>
                    <h3 class="section__sub-ttl">- ブログ</h3>
                    <h4 class="section__text">
                        <p class="section__desc">
                            <!-- ブログも書いています。ぜひご覧ください。 -->
                            ただいま準備中です。
                        </p>
                    </h4>
                    <ul class="blog__list">
                        <li class="blog__contents">
                            <a class="blog__link" aria-label="">
                                <figure class="blog__figure">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/index-jpg/dummy.webp" alt="" class="blog__img">
                                </figure>
                                <div class="blog__info">
                                    <time class="blog__date" datetime="">2023.10.01</time>
                                    <h3 class="blog__ttl">ブログのタイトルが入ります。</h3>
                                    <div class="blog__tags">
                                        <p class="works__tag blog__tag">HTML</p>
                                        <p class="works__tag blog__tag">CSS</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="blog__contents">
                            <a class="blog__link" aria-label="">
                                <figure class="blog__figure">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/index-jpg/dummy.webp" alt="" class="blog__img">
                                </figure>
                                <div class="blog__info">
                                    <time class="blog__date" datetime="">2023.10.01</time>
                                    <h3 class="blog__ttl">ブログのタイトルが入ります。</h3>
                                    <div class="blog__tags">
                                        <p class="works__tag blog__tag">HTML</p>
                                        <p class="works__tag blog__tag">CSS</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="blog__contents">
                            <a class="blog__link" aria-label="">
                                <figure class="blog__figure">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/index-jpg/dummy.webp" alt="" class="blog__img">
                                </figure>
                                <div class="blog__info">
                                    <time class="blog__date" datetime="">2023.10.01</time>
                                    <h3 class="blog__ttl">ブログのタイトルが入ります。</h3>
                                    <div class="blog__tags">
                                        <p class="works__tag blog__tag">HTML</p>
                                        <p class="works__tag blog__tag">CSS</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="blog__contents">
                            <a class="blog__link" aria-label="">
                                <figure class="blog__figure">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/index-jpg/dummy.webp" alt="" class="blog__img">
                                </figure>
                                <div class="blog__info">
                                    <time class="blog__date" datetime="">2023.10.01</time>
                                    <h3 class="blog__ttl">ブログのタイトルが入ります。</h3>
                                    <div class="blog__tags">
                                        <p class="works__tag blog__tag">HTML</p>
                                        <p class="works__tag blog__tag">CSS</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="blog__contents">
                            <a class="blog__link" aria-label="">
                                <figure class="blog__figure">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/index-jpg/dummy.webp" alt="" class="blog__img">
                                </figure>
                                <div class="blog__info">
                                    <time class="blog__date" datetime="">2023.10.01</time>
                                    <h3 class="blog__ttl">ブログのタイトルが入ります。</h3>
                                    <div class="blog__tags">
                                        <p class="works__tag blog__tag">HTML</p>
                                        <p class="works__tag blog__tag">CSS</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="blog__contents">
                            <a class="blog__link" aria-label="">
                                <figure class="blog__figure">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/index-jpg/dummy.webp" jpg="" class="blog__img">
                                </figure>
                                <div class="blog__info">
                                    <time class="blog__date" datetime="">2023.10.01</time>
                                    <h3 class="blog__ttl">ブログのタイトルが入ります。</h3>
                                    <div class="blog__tags">
                                        <p class="works__tag blog__tag">HTML</p>
                                        <p class="works__tag blog__tag">CSS</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <div class="section__more">
                        <a href="" type="button" class="more__button">ブログ一覧を見る</a>
                    </div>
                </div>
            </section>
            <!-- /#service -->

            <section id="contact">
                <div class="contact__ttls js-bg">
                    <h2 class="section__ttl">Contact</h2>
                    <h3 class="section__sub-ttl">- お問い合わせ</h3>
                </div>
                <div class="container contact__container">
                    <h4 class="section__text">
                        <p class="section__desc">
                            ウェブに関することならなんでもご相談に乗ります。<br>
                            お気軽にお問い合わせください。可能な限り早く返信いたします。
                        </p>
                    </h4>
                    <form class="contact__form" id="js-form"
                        action="https://docs.google.com/forms/u/0/d/e/1FAIpQLSeZ9vGsNVXBqaX6et500z5LzjMCC_TJqWWrc_1wtvpBfov8mQ/formResponse"
                        method="post">
                        <div class="contact__list">
                            <dl class="contact__row">
                                <dt class="contact__label">
                                    <div>Name</div>
                                    <span class="contact__required">!</span>
                                </dt>
                                <dd class="contact__input name--error">
                                    <input type="text" name="entry.584176652" placeholder="山田　太郎" aria-label="名前を入力する"
                                        autocomplete="off">
                                </dd>
                            </dl>
                            <dl class="contact__row">
                                <dt class="contact__label">
                                    <div>Email</div>
                                    <span class="contact__required">!</span>
                                </dt>
                                <dd class="contact__input email--error">
                                    <input type="email" name="emailAddress" placeholder="sample@gmail.com"
                                        aria-label="メールアドレスを入力する" autocomplete="off">
                                </dd>
                            </dl>
                            <dl class="contact__row">
                                <dt class="contact__label">
                                    <div>Message</div>
                                    <span class="contact__required">!</span>
                                </dt>
                                <dd class="contact__input textarea--error">
                                    <textarea name="entry.1113212062" aria-label="メッセージを入力する"></textarea>
                                </dd>
                            </dl>
                            <div class="contact__submit is-disabled" id="contact__submit">
                                <input class="submit__btn" id="js-submit" type="submit" aria-label="入力内容を送信する"
                                    value="送信" disabled>
                            </div>
                        </div>
                    </form>
                    <div class="contact__message" id="js-success">
                        <p class="contact__text">
                            送信完了いたしました<br>
                            内容を確認次第、返信いたします<br>
                            しばらくお待ちください
                        </p>
                    </div>
                    <div class="contact__message" id="js-error">
                        <p class="contact__text">
                            送信失敗しました<br>
                            ページを更新後、再度送信してください
                        </p>
                    </div>
                </div>
            </section>
            <!-- /#contact -->

        </main>
        <!-- /.main -->


    </div>
    <!-- /.wrapper -->

    <footer class="footer" id="footer">
        <p class="footer__copyright"><small lang="en" class="copyright">&copy; haya. Portfolio All Rights
                Reserved.</small></p>
    </footer>
    <!-- /.footer -->
</body>

</html>