<?php
	//Theme setup
	function ungrynerd_setup() {
		load_theme_textdomain('ungrynerd', get_template_directory() . '/languages');

		//Add support to RSS links in head
		add_theme_support('automatic-feed-links');

		//Add title tag support
		add_theme_support('title-tag');

		// Soporte para miniaturas y definición de tamaños
		add_theme_support('post-thumbnails');
		if ( function_exists('add_image_size')) {
			add_image_size('un_huge', 1500, 1000, false);
			add_image_size('un_big', 750, 500, false);
			add_image_size('un_medium', 460, 300, false);
			add_image_size('un_small', 270, 175, false);
		}

		// Definición menús
		if ( function_exists('register_nav_menus')) {
			register_nav_menus(
				array(
				  'main-column-1' => esc_html__('Menu principal (Columna 1)', 'ungrynerd'),
				  'main-column-2' => esc_html__('Menu principal (Columna 2)', 'ungrynerd'),
				  'main-column-3' => esc_html__('Menu principal (Columna 3)', 'ungrynerd'),
				)
			);
		}

		//HTML markup
		add_theme_support('html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		));

	}
	add_action('after_setup_theme', 'ungrynerd_setup');

	// Content width
	function ungrynerd_content_width() {
		$GLOBALS['content_width'] = apply_filters('ungrynerd_content_width', 640);
	}
	add_action('after_setup_theme', 'ungrynerd_content_width', 0);

	// Widgets zones definition
	function ungrynerd_widgets_init() {
		register_sidebar(array(
			'id' => 'main-featured',
		    'before_widget' => '<div id="%1$s" class="widget %2$s">',
		    'after_widget' => '</div>',
		    'before_title' => '<h2 class="title">',
		 	'after_title' => '</h2>',
		 	'name' => esc_html__('Destacado principal', 'ungrynerd')
		));
		register_sidebar(array(
			'id' => 'column-1',
		    'before_widget' => '<div id="%1$s" class="widget %2$s">',
		    'after_widget' => '</div>',
		    'before_title' => '<h2 class="title">',
		 	'after_title' => '</h2>',
		 	'name' => esc_html__('Columna 1', 'ungrynerd')
		));
		register_sidebar(array(
			'id' => 'column-2',
		    'before_widget' => '<div id="%1$s" class="widget %2$s">',
		    'after_widget' => '</div>',
		    'before_title' => '<h2 class="title">',
		 	'after_title' => '</h2>',
		 	'name' => esc_html__('Columna 2', 'ungrynerd')
		));
		register_sidebar(array(
			'id' => 'column-3',
		    'before_widget' => '<div id="%1$s" class="widget %2$s">',
		    'after_widget' => '</div>',
		    'before_title' => '<h2 class="title">',
		 	'after_title' => '</h2>',
		 	'name' => esc_html__('Columna 3', 'ungrynerd')
		));
		register_sidebar(array(
			'id' => 'sidebar-1',
		    'before_widget' => '<div id="%1$s" class="widget %2$s">',
		    'after_widget' => '</div>',
		    'before_title' => '<h2 class="title">',
		 	'after_title' => '</h2>',
		 	'name' => esc_html__('Barra Lateral', 'ungrynerd')
		));
	}
	add_action('widgets_init', 'ungrynerd_widgets_init');
?>
