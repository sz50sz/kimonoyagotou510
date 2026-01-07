<?php

function add_ogp_tags() {
    if (is_front_page()) {
        $title = 'きもの屋五一〇';
        $desc  = 'きもの屋五一〇 公式サイト｜kimonoya510';
        $url   = home_url('/');
        $image = get_template_directory_uri() . '/image/ogp.png';
        $type  = 'website';
    } elseif (is_single()) {
        global $post;
        $title = get_the_title();
        $desc  = wp_strip_all_tags(get_the_excerpt());
        $url   = get_permalink();
        $image = has_post_thumbnail()
            ? get_the_post_thumbnail_url($post, 'full')
            : get_template_directory_uri() . '/image/ogp.png';
        $type  = 'article';
    } else {
        return;
    }
    ?>
    <meta property="og:title" content="<?php echo esc_attr($title); ?>">
    <meta property="og:description" content="<?php echo esc_attr($desc); ?>">
    <meta property="og:type" content="<?php echo esc_attr($type); ?>">
    <meta property="og:url" content="<?php echo esc_url($url); ?>">
    <meta property="og:image" content="<?php echo esc_url($image); ?>">
    <meta property="og:site_name" content="きもの屋五一〇">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo esc_attr($title); ?>">
    <meta name="twitter:description" content="<?php echo esc_attr($desc); ?>">
    <meta name="twitter:image" content="<?php echo esc_url($image); ?>">
    <?php
}
add_action('wp_head', 'add_ogp_tags');

function my_scripts() {

    wp_enqueue_style(
        'main-style',
        get_template_directory_uri() . '/css/style.css',
        array(),
        '1.0.0'
    );

    wp_enqueue_script(
        'main-js',
        get_template_directory_uri() . '/js/main.js',
        array(),
        false,
        true
    );
}
add_action('wp_enqueue_scripts', 'my_scripts');
add_filter('register_post_type_args', function($args, $post_type) {
  if ($post_type === 'post') {
    $slug = 'news';
    $args['labels'] = array(
      'name' => 'お知らせ'
    );
    $args['has_archive'] = $slug;
    $args['rewrite'] = array(
      'slug' => $slug,
      'with_front' => false,
    );
  }
  return $args;
}, 10, 2);

add_theme_support('post-thumbnails');

SCF::add_options_page( '営業時間', '営業時間', 'manage_options', 'theme-options' );
