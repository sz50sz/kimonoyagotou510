<?php get_header(); ?>

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

    <div class="washi-bg"></div>

    <main class="main">
        <section class="notice">
            <div class="notice__inner">

                <!-- 記事タイトル -->
                <h2 class="notice__title"><?php the_title(); ?></h2>

                <!-- 公開日 -->
                <p class="notice__time"><?php echo get_the_date('Y年n月j日'); ?></p>

                <!-- サブタイトル（カスタムフィールド） -->
                <?php if ( function_exists('get_field') && get_field('subtitle') ) : ?>
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

                <div class="newsnavi__back underline-animation">
                    <?php previous_post_link('%link', '＜　前の記事へ'); ?>
                </div>

<a href="<?php echo home_url('/news'); ?>" class="newsnavi__all underline-animation">
    記事一覧
</a>
                <div class="newsnavi__next underline-animation">
                    <?php next_post_link('%link', '次の記事へ　＞'); ?>
                </div>

            </div>
        </section>
    </main>

<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>