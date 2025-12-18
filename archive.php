<?php get_header(); ?>

<main class="main">
    <section class="newsall">
        <div class="newsall__inner">

            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>

                    <a href="<?php the_permalink(); ?>" class="newsall__card ncard">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <?php the_post_thumbnail('medium', ['class' => 'ncard__pic']); ?>
                        <?php else : ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/image/images/news.webp" class="ncard__pic" alt="">
                        <?php endif; ?>

                        <h2 class="ncard__title"><?php the_title(); ?></h2>
                        <p class="ncard__time"><?php echo get_the_date('Y年n月j日'); ?></p>
                    </a>

                <?php endwhile; ?>
            <?php endif; ?>

        </div>
    </section>

    <section class="allnavi">
        <div class="allnavi__inner">
            <div class="allnavi__back underline-animation">
                <?php previous_posts_link('＜ 前のページへ'); ?>
            </div>
            <div class="allnavi__next underline-animation">
                <?php next_posts_link('次のページへ ＞'); ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>