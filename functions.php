<?php

function My_Theme_styles()
{

    // wp_enqueue_script( 'main_js', get_theme_file_uri(  )) 

    
    wp_enqueue_style('swiper_style', "https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css", []);
    wp_enqueue_style('main_style', get_theme_file_uri('src/css/style.css'), []);
    wp_enqueue_style('base_style', get_theme_file_uri('src/css/base_style.css'), []);
    wp_enqueue_style('editor_style', get_theme_file_uri('src/css/editor-style.css'), []);
    wp_enqueue_script('swiper', "https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js", [], null, true);
    wp_enqueue_script('jquery');
    wp_enqueue_script('main_script', get_theme_file_uri('src/js/script.js'), ['swiper'], '1.0', true);


}
add_action('wp_enqueue_scripts', 'My_Theme_styles');

add_theme_support('title-tag');
add_theme_support('post-thumbnails');
add_theme_support('menus');
add_theme_support('automatic-feed-link');

// カスタム投稿タイプ「blog」を登録

function post_has_archive($args, $post_type)
{
    if ('post' == $post_type) {
        $args['rewrite'] = true;
        $args['has_archive'] = 'works';
        $args['label'] = '実績一覧';
        $args['slug'] = 'works';
    }
    return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);

// Contact Form 7で自動挿入されるPタグ、brタグを削除
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false() {
  return false;
} 

add_action( 'after_setup_theme' , 'my_editor_suport' );
function my_editor_suport() {
  add_theme_support( 'editor-styles' );
  add_editor_style( 'css/esitor-style.css');
}


// メニューに「説明文」を追加表示
add_filter('walker_nav_menu_start_el', function ($item_output, $item, $depth, $args) {
    if (!empty($item->description)) {
        $item_output .= '<span class="menu-description">' . esc_html($item->description) . '</span>';
    }
    return $item_output;
}, 10, 4);

// aタグにclassを追加
function add_menu_link_class( $atts, $item, $args ) {
    if (property_exists($args, 'link_class')) {
      $atts['class'] = $args->link_class;
    }
    return $atts;
  }
  add_filter('nav_menu_link_attributes', 'add_menu_link_class', 1, 3);
  

  add_filter('wpcf7_autop_or_not', '__return_false');
