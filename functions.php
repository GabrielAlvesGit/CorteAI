<?php
/*=============== Funções para Limpar o Header ===============*/
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');
remove_action('rest_api_init', 'create_initial_rest_routes', 99); // Não permitir pessoa de fora ver os usuários


/*=============== Rotas ===============*/
/* Altera o prefixo da REST API do WordPress de 'wp-json' para 'json' */

function change_api()
{
  return 'json';
}

add_filter('rest_url_prefix', 'change_api');

/*=============== Importação do CSS dentro da function - (Sem uso do Href='/style' no header) ===============*/
 function head_css()
 {
   wp_enqueue_style('style_css', get_template_directory_uri() . '/style.css');
   wp_enqueue_style('head-style');
 }

 add_action('wp_enqueue_scripts', 'head_css');

 add_filter('body_class', 'custom_body_classes');
function custom_body_classes($classes) {
    // Código que modifica $classes
    return $classes;
}

/*=============== Register Menu  ===============*/
add_theme_support('menus');

/*=============== Menu  ===============*/
function register_my_menu() {
    register_nav_menu('menu-primary', __('Primary Menu'));
}
add_action('init', 'register_my_menu');



function registrar_cpt_header(){
  register_post_type('Header', array(
    'label' => 'Header',
    'description' => 'Header',
    'public' => true,
    'show_uri' => true,
    'capability_type' => 'post',
    'rewrite' => array('slug' => 'header', 'with_front' => true),
    'query_var' => true,
    'supports' => array('custom-fields', 'author', 'title'),
    'public_queryable' => true
  ));
}

add_action('init', 'registrar_cpt_header');
?>