<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>見出し</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/the-new-css-reset/css/reset.min.css">
    <?php wp_head(); ?>
</head>

<body class="single">
    <?php wp_body_open(); ?>
    <div class="washi-bg"></div>
    <header class="header">
        <section class="header__logo">
            <h1><img src="<?php echo get_template_directory_uri(); ?>/image/logo.webp" alt="きもの屋五一〇のロゴ"></h1>
        </section>
        <section class="navi">
            <nav class="navi__inner">
                <ul class="navi__list">
                    <li class="navi__item"><a href="<?php echo home_url('/'); ?>">ホーム</a></li>
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
