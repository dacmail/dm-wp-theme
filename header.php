<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<aside class="pre-header">
		<div class="container">
			Noticias del Ayuntamiento de Madrid
			<img class="logo-madrid" src="<?php ungrynerd_path('/images/logo_madrid.png') ?>" alt="Ayuntamiento de Madrid">
		</div>
	</aside>
	<header class="navbar header" id="header">
		<div class="container">
			<a href="<?php echo esc_url(home_url('/')); ?>" class="logo">Diario de Madrid</a>
			<button class="menu-toggle" type="button" data-toggle="collapse" data-target="#menus">
				<span class="sr-only"><?php _e('Menu', 'ungrynerd'); ?></span>
				<i class="fa fa-bars"></i>
			</button>
		</div>
	</header>
	<div class="container">
		<nav id="menus" class="collapse">
			<div class="row">
				<div class="col-sm-4">
					<?php wp_nav_menu(array('menu_class' => 'nav navbar-nav',
									'theme_location' => 'main-column-1',
									'fallback_cb' => false)); ?>
				</div>
				<div class="col-sm-4">
					<?php wp_nav_menu(array('menu_class' => 'nav navbar-nav',
									'theme_location' => 'main-column-2',
									'fallback_cb' => false)); ?>
				</div>
				<div class="col-sm-4">
					<?php wp_nav_menu(array('menu_class' => 'nav navbar-nav',
									'theme_location' => 'main-column-3',
									'fallback_cb' => false)); ?>
				</div>
			</div>
		</nav>
		<div class="tag-cloud">
			<span class="title">Destacados</span>
			<div class="tag-carousel owl-carousel">
				<?php wp_tag_cloud() ?>
			</div>
		</div>
	</div>
