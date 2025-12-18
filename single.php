<?php get_header(); ?>

<body class="single">
    <div class="washi-bg"></div>

    <main class="main">
        <section class="notice">
            <div class="notice__inner">

                <!-- 記事タイトル -->
                <h2 class="notice__title"><?php the_title(); ?></h2>

                <!-- 公開日 -->
                <p class="notice__time"><?php echo get_the_date('Y年n月j日'); ?></p>

                <!-- サブタイトル（カスタムフィールドにする場合）-->
                <?php if ( get_field('subtitle') ) : ?>
                    <h3 class="notice__subtitle">
                        <?php the_field('subtitle'); ?>
                    </h3>
                <?php endif; ?>

                <!-- 記事本文 -->
                <div class="notice__text">
                    <?php the_content(); ?>
                </div>

            </div>
        </section>

        <section class="newsnavi">
            <div class="newsnavi__inner">

                <!-- 前の記事 -->
                <div class="newsnavi__back underline-animation">
                    <?php previous_post_link('%link', '＜　前の記事へ'); ?>
                </div>

                <!-- 記事一覧 -->
                <a href="<?php echo get_permalink( get_option('page_for_posts') ); ?>" class="newsnavi__all underline-animation">
                    記事一覧
                </a>

                <!-- 次の記事 -->
                <div class="newsnavi__next underline-animation">
                    <?php next_post_link('%link', '次の記事へ　＞'); ?>
                </div>

            </div>
        </section>
    </main>

<?php get_footer(); ?>