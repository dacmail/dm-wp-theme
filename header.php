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

	<div class="container">
		<header class="navbar header" id="header">
			<?php if (get_post_format()=='gallery' && is_single()): ?>
				<a href="<?php echo esc_url(home_url('/')); ?>" class="logo"><img  src="<?php ungrynerd_path('/images/logo-dark.png') ?>" alt="Diario de Madrid"></a>
			<?php else: ?>
				<a href="<?php echo esc_url(home_url('/')); ?>" class="logo"><img  src="<?php ungrynerd_path('/images/logo.png') ?>" alt="Diario de Madrid"></a>
			<?php endif ?>
			<button class="menu-toggle" type="button" data-toggle="collapse" data-target="#menus">
				<span class="sr-only"><?php _e('Menu', 'ungrynerd'); ?></span>
				<i class="fa fa-bars"></i>
			</button>
		</header>
	</div>

	<div class="container">
		<nav id="menus" class="menus collapse">
			<div class="row">
				<div class="col-md-4 col-sm-3">
					<?php wp_nav_menu(array('menu_class' => 'nav navbar-nav',
									'theme_location' => 'main-column-1',
									'fallback_cb' => false)); ?>
				</div>
				<div class="col-md-4 col-sm-3">
					<?php wp_nav_menu(array('menu_class' => 'nav navbar-nav',
									'theme_location' => 'main-column-2',
									'fallback_cb' => false)); ?>
				</div>
				<div class="col-md-4 col-sm-6">
					<?php wp_nav_menu(array('menu_class' => 'nav navbar-nav',
									'theme_location' => 'main-column-3',
									'fallback_cb' => false)); ?>
				</div>
			</div>
		</nav>
		<div class="tag-cloud">
			<span class="title"><i class="icon-ico_tendencias"></i> Destacados</span>
			<?php wp_nav_menu(array(
						'container' => 'div',
						'items_wrap' => '%3$s',
						'container_class' => 'tag-carousel owl-carousel',
						'theme_location' => 'tags',
						'walker' => new ungrynerd_walker_nav_menu));
			?>
		</div>
	</div>
