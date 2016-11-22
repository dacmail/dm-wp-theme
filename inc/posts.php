<?php
/* ARTICLES POST TYPE */
add_action('init', 'ugnrynerd_press_post_type');
function ugnrynerd_press_post_type()  {
  $labels = array(
    'name' => __('Notas de prensa', 'ungrynerd'),
    'singular_name' => __('Nota de prensa', 'ungrynerd'),
    'add_new' => __('Añadir nota de prensa', 'ungrynerd'),
    'add_new_item' => __('Añadir nota de prensa', 'ungrynerd'),
    'edit_item' => __('Editar nota de prensa', 'ungrynerd'),
    'new_item' => __('Nuevo nota de prensa', 'ungrynerd'),
    'view_item' => __('Ver notas de prensa', 'ungrynerd'),
    'search_items' => __('Buscar notas de prensa', 'ungrynerd'),
    'not_found' =>  __('No se han encontrado notas de prensa ', 'ungrynerd'),
    'not_found_in_trash' => __('No hay notas de prensa en la papelera', 'ungrynerd'),
    'parent_item_colon' => ''
  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'query_var' => true,
    'capability_type' => 'post',
    'show_in_nav_menus' => false,
    'hierarchical' => false,
    'exclude_from_search' => true,
    'menu_position' => 5,
    'rewrite' => array( 'slug' => 'notas-de-prensa' ),
    'taxonomies' => array(),
    'has_archive' => true,
    'supports' => array('title', 'editor', 'excerpt', 'author')
  );
  register_post_type('un_press',$args);
}
