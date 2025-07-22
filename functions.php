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
