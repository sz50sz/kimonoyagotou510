<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php bloginfo('name'); ?> | きもの屋五一〇</title>

    <link rel="preload" href="https://cdn.jsdelivr.net/npm/the-new-css-reset/css/reset.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

    <div class="washi-bg"></div>

    <header class="header">

        <section class="mainvisual">
            <div class="mainvisual__inner">
                <div class="mainvisual__picture pic">
                    <ul class="pic__list">
                        <li class="pic__item active">
                            <picture>
                                <source media="(min-width: 640px)" srcset="<?php echo get_template_directory_uri(); ?>/image/images/mv1_lg.webp">
                                <source media="(max-width: 639px)" srcset="<?php echo get_template_directory_uri(); ?>/image/images/mv1_sm.webp">
                                <img src="<?php echo get_template_directory_uri(); ?>/image/images/mv1_sm.webp" alt="" fetchpriority="high">
                            </picture>
                        </li>

                        <!-- 2〜4枚目も同じくパスだけWP化 -->
                        <li class="pic__item">
                            <picture>
                                <source media="(min-width: 640px)" srcset="<?php echo get_template_directory_uri(); ?>/image/images/mv2_lg.webp">
                                <source media="(max-width: 639px)" srcset="<?php echo get_template_directory_uri(); ?>/image/images/mv2_sm.webp">
                                <img src="<?php echo get_template_directory_uri(); ?>/image/images/mv2_sm.webp" alt="" loading="lazy">
                            </picture>
                        </li>
                        <li class="pic__item">
                            <picture>
                                <source media="(min-width: 640px)" srcset="<?php echo get_template_directory_uri(); ?>/image/images/mv3_lg.webp">
                                <source media="(max-width: 639px)" srcset="<?php echo get_template_directory_uri(); ?>/image/images/mv3_sm.webp">
                                <img src="<?php echo get_template_directory_uri(); ?>/image/images/mv3_sm.webp" alt="" loading="lazy">
                            </picture>
                        </li>
                        <li class="pic__item">
                            <picture>
                                <source media="(min-width: 640px)" srcset="<?php echo get_template_directory_uri(); ?>/image/images/mv4_lg.webp">
                                <source media="(max-width: 639px)" srcset="<?php echo get_template_directory_uri(); ?>/image/images/mv4_sm.webp">
                                <img src="<?php echo get_template_directory_uri(); ?>/image/images/mv4_sm.webp" alt="" loading="lazy">
                            </picture>
                        </li>
                    </ul>

                    <div class="dots">
                        <span class="dot active" data-index="0"></span>
                        <span class="dot" data-index="1"></span>
                        <span class="dot" data-index="2"></span>
                        <span class="dot" data-index="3"></span>
                    </div>
                </div>

                <a href="<?php echo home_url(); ?>" class="mainvisual__logo">
                    <h1><img src="<?php echo get_template_directory_uri(); ?>/image/logo.webp" alt="きもの屋五一〇のロゴ"></h1>
                </a>
            </div>
        </section>

        <section class="navi">
            <nav class="navi__inner">
                <ul class="navi__list">
                    <li class="navi__item"><a href="<?php echo home_url(); ?>">ホーム</a></li>
                    <li class="navi__item"><a href="https://kimonoya510.shopselect.net/">オンラインストア</a></li>
                    <li class="navi__item"><a href="">相談</a></li>
                    <li class="navi__item"><a href="<?php echo home_url('/'); ?>#introduction">店舗紹介</a></li>
                    <li class="navi__item"><a href="<?php echo home_url('/'); ?>#location">店舗一覧</a></li>
                    <li class="navi__item"><a href="<?php echo home_url('/'); ?>#news">お知らせ</a></li>
                    <li class="navi__item"><a href="<?php echo home_url('/'); ?>#banner">SNS</a></li>
                </ul>
            </nav>
        </section>

    </header>

    <main class="main">
        <section class="introduction " id="introduction">
            <div class="motif motif--left"></div>
            <div class="motif motif--right"></div>
            <div class="introduction__inner fade-in">
                <h2 class="introduction__title">店舗紹介</h2>
                <div class="introduction__info">
                    <img src="<?php echo get_template_directory_uri(); ?>/image/images/introduction.webp" alt="" class="introduction__pic" loading="lazy">
                    <div class="introduction__text">
                        <p>新品やリサイクル品、アウトレット品の着物や帯、新品の小物の販売から着物の手入れまで、全てのサービスを提供するお店です。買っていただくだけでなく、着物のお手入れに力を入れており、買っていただいたあとのアフターケアを大切にしています。<br>ごとう呉服店は創業120年以上の歴史を持ち、お客様の信頼は当店の宝物です。
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="location " id="location">
            <div class="location__inner fade-in">
                <h2 class="location__title">店舗一覧</h2>
                <div class="buttons">
                    <button class="button active" id="button1">
                        <h3 class="card__title">ごとう呉服店</h3>
                    </button>
                    <button class="button" id="button2">
                        <h3 class="card__title">岐阜店</h3>
                    </button>
                    <button class="button" id="button3">
                        <h3 class="card__title">いりなか店</h3>
                    </button>
                </div>

                <ul class="location__list">
                    <li class="location__item card">
                        <div class="card__content show" id="screen1">
                            <div class="card__inner">
                                <img src="<?php echo get_template_directory_uri(); ?>/image/images/kasamatsu.webp" alt="" class="card__pic" loading="lazy">
                                <div class="card__info">
                                    <div class="card__text">
                                        <dl>
                                            <dt>ごとう呉服店</dt>
                                            <dd>岐阜県羽島郡笠松町下本町95</dd>
                                            <dd>営業日：木、金、土　10：00〜17：00</dd>
                                            <dd>電話番号：058-387-2005</dd>
                                        </dl>
                                    </div>
                                    <div class="card__frame">
                                        <iframe class="card__map" title="ごとう呉服店の地図"
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3253.5695841075744!2d136.759101675771!3d35.36632664720852!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6003a8a46d378b41%3A0x92ea8626eaea80fb!2z44CSNTAxLTYwNTIg5bKQ6Zic55yM57695bO26YOh56yg5p2-55S65LiL5pys55S677yZ77yV!5e0!3m2!1sja!2sjp!4v1762406792347!5m2!1sja!2sjp"
                                            style="border:0;" allowfullscreen="" loading="lazy"
                                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="location__item card">
                        <div class="card__content" id="screen2">
                            <div class="card__inner">
                                <img src="<?php echo get_template_directory_uri(); ?>/image/images/gifu.webp" alt="" class="card__pic" loading="lazy">
                                <div class="card__info">
                                    <div class="card__text">
                                        <dl>
                                            <dt>きもの屋五一〇　岐阜店</dt>
                                            <dd>岐阜市橋本町岐阜シティータワー43 2階</dd>
                                            <dd>営業日：全日　11：00〜17：00</dd>
                                            <dd>電話番号：058-265-5110</dd>
                                        </dl>
                                    </div>
                                    <div class="card__frame">
                                        <iframe class="card__map" title="きもの屋五一〇　岐阜店の地図"
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3251.801488843373!2d136.75213397577275!3d35.41017074481654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6003a9362477c4d3%3A0xc1a94d79e574f5d7!2z5bKQ6Zic44K344OG44Kj44O744K_44Ov44O8NDM!5e0!3m2!1sja!2sjp!4v1762407415233!5m2!1sja!2sjp"
                                            style="border:0;" allowfullscreen="" loading="lazy"
                                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="location__item card">
                        <div class="card__content" id="screen3">
                            <div class="card__inner">
                                <img src="<?php echo get_template_directory_uri(); ?>/image/images/irinaka.webp" alt="" class="card__pic" loading="lazy">
                                <div class="card__info">
                                    <div class="card__text">
                                        <dl>
                                            <dt>きもの屋五一〇　いりなか店</dt>
                                            <dd>名古屋市昭和区滝川町59-1 五藤ビル杁中1F</dd>
                                            <dd>営業日：金、土、日、月　10：00〜17：00</dd>
                                            <dd>電話番号：052-833-5025</dd>
                                        </dl>
                                    </div>
                                    <div class="card__frame">
                                        <iframe class="card__map" title="きもの屋五一〇　いりなか店の地図"
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1058.561054902427!2d136.95695989881426!3d35.14254374955293!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60037a94b349d9d5%3A0xbbc31538a660bacb!2z44CSNDY2LTA4MjYg5oSb55-l55yM5ZCN5Y-k5bGL5biC5pit5ZKM5Yy65rud5bed55S677yV77yZ4oiS77yRIOS6lOiXpOODk-ODq-adgeS4rSAxZg!5e0!3m2!1sja!2sjp!4v1762407523784!5m2!1sja!2sjp"
                                            style="border:0;" allowfullscreen="" loading="lazy"
                                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>

            </div>
        </section>
<section class="news" id="news">
            <div class="news__inner fade-in">
                <div class="news__item">
                    <h3 class="news__title">お知らせ</h3>

                    <ul class="news__list">
                        <li class="news__item">

                        <?php
                        $news = new WP_Query(array(
                            'post_type' => 'post',
                            'posts_per_page' => 3
                        ));

                        if ($news->have_posts()) :
                            while ($news->have_posts()) : $news->the_post(); ?>

<a href="<?php the_permalink(); ?>" class="article">

    <?php if (has_post_thumbnail()) : ?>
        <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="article__pic" loading="lazy">
    <?php else : ?>
        <img src="<?php echo get_template_directory_uri(); ?>/image/images/news.webp" alt="" class="article__pic" loading="lazy">
    <?php endif; ?>

    <div class="article__info">
        <h3 class="article__title underline-animation"><?php the_title(); ?></h3>
        <p class="article__text">
            <?php echo wp_trim_words(get_the_excerpt(), 20, '…'); ?>
        </p>
    </div>

</a>
                        <?php endwhile; endif; wp_reset_postdata(); ?>

                        </li>
                    </ul>

                    <a href="<?php echo home_url('/news'); ?>" class="more underline-animation">もっと見る＞</a>
                </div>
            </div>
        </section>        <section class="banner " id="banner">
            <div class="banner__inner fade-in">
                <ul class="banner__list">
                    <li>
                        <a href="https://www.instagram.com/kimonoya510/" class="banner__item">
                            <picture>
                                <source media="(min-width: 640px)" srcset="<?php echo get_template_directory_uri(); ?>/image/banner/banner_instagram-lg.webp">
                                <source media="(max-width: 639px)" srcset="<?php echo get_template_directory_uri(); ?>/image/banner/banner_instagram-sm.webp">
                                <img src="<?php echo get_template_directory_uri(); ?>/image/banner/banner_instagram-sm.webp" alt="INSTAGRAMはこちら" loading="lazy">
                            </picture>
                        </a>
                    </li>
                    <li>
                        <a href="https://x.com/kimonoya510/" class="banner__item">
                            <picture>
                                <source media="(min-width: 640px)" srcset="<?php echo get_template_directory_uri(); ?>/image/banner/banner_twitter-lg.webp">
                                <source media="(max-width: 639px)" srcset=" <?php echo get_template_directory_uri(); ?>/image/banner/banner_twitter-sm.webp">
                                <img src="<?php echo get_template_directory_uri(); ?>/image/banner/banner_twitter-sm.webp" alt="Xはこちら" loading="lazy">
                            </picture>
                        </a>
                    </li>
                    <li>
                        <a href="https://kimonoya510.shopselect.net/" class="banner__item">
                            <picture>
                                <source media="(min-width: 640px)" srcset="<?php echo get_template_directory_uri(); ?>/image/banner/banner_onlinestore-lg.webp">
                                <source media="(max-width: 639px)" srcset="<?php echo get_template_directory_uri(); ?>/image/banner/banner_onlinestore-sm.webp">
                                <img src="<?php echo get_template_directory_uri(); ?>/image/banner/banner_onlinestore-sm.webp" alt="オンラインストアはこちら" loading="lazy">
                            </picture>
                        </a>
                    </li>
                </ul>
            </div>
        </section>
        <section class="consultation ">
            <div class="consultation__inner fade-in">
                <h2 class="consultation__title">相談</h2>
                <div class="consultation__text">
                    <p>
                        着物に関するお手入れ全般「悉皆」や「TPO」「買取」などの知識に関すること全て相談を承ります！<br>
                        創業100余年の老舗呉服店ならではの確かな技術を持った職人が丁寧に仕上げます。当店の商品でなくても承ります。まずはお気軽にご相談ください！
                    </p>
                </div>
                <a href="" class="btn">相談する</a>
            </div>
        </section>
    </main>
    <footer class="footer ">
        <div class="footer__inner fade-in">
            <a href="#"><img class="footer__logo" src="<?php echo get_template_directory_uri(); ?>/image/logo.webp" alt="きもの屋五一〇のロゴ" loading="lazy"></a><br>
            <div class="footer__info">
                <div class="footer__link">
                    <a href="" class="footer__onlinestore underline-animation">きもの屋五一〇　ONLINE STORE</a>
                    <div class="footer__sns">
                        <a href="https://www.instagram.com/kimonoya510/" class="footer__instagram">
                            <img src="<?php echo get_template_directory_uri(); ?>/image/Instagram_Glyph_White.png" alt="きもの屋五一〇のINSTAGRAMへ飛ぶボタン" loading="lazy">
                        </a>
                        <a href="https://x.com/kimonoya510/" class="footer__x">
                            <img src="<?php echo get_template_directory_uri(); ?>/image/logo-white.png" alt="きもの屋五一〇のXへ飛ぶボタン" loading="lazy">
                        </a>
                    </div>
                </div>
                <div class="footer__shop">
                    <dl class="footer__location">
                        <dt class="footer__location__name">ごとう呉服店</dt>
                        <dd class="footer__location__info">岐阜県羽島郡笠松町下本町95</dd>
                        <dd class="footer__location__info">058-388-0151</dd>
                    </dl>
                    <dl class="footer__location">
                        <dt class="footer__location__name">きもの屋五一〇　岐阜店</dt>
                        <dd class="footer__location__info">岐阜市橋本町岐阜シティータワー43 2階</dd>
                        <dd class="footer__location__info">058-265-5110</dd>
                    </dl>
                    <dl class="footer__location">
                        <dt class="footer__location__name">きもの屋五一〇　いりなか店</dt>
                        <dd class="footer__location__info">名古屋市昭和区滝川町59-1 五藤ビル杁中1F</dd>
                        <dd class="footer__location__info">052-833-5025</dd>
                    </dl>
                </div>
            </div>
            <small class="footer__copy">copyright kimonoya510</small>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>

</html>