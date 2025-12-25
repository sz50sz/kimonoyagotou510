<?php
function my_scripts() {
    wp_enqueue_script(
        'main-js',
        get_template_directory_uri() . '/js/main.js',
        array(),
        false,
        true
    );
}
add_action('wp_enqueue_scripts', 'my_scripts');

function my_styles() {
    wp_enqueue_style(
        'main-style',
        get_template_directory_uri() . '/css/style.css',
        array(),
        false
    );
}
add_action('wp_enqueue_scripts', 'my_styles');

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