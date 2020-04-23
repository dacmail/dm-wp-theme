<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
  <meta charset="<?php bloginfo('charset');?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head();?>
</head>
<body <?php body_class();?>>
	<aside class="pre-header">
		<div class="container">
			Noticias del Ayuntamiento de Madrid
			<a href="https://diario.madrid.es"><img class="logo-madrid" src="<?php ungrynerd_path('/images/logo_madrid.png')?>" alt="Ayuntamiento de Madrid"></a>
		</div>
	</aside>

	<div class="container">
		<header class="navbar header" id="header">
			<?php if (get_post_format() == 'gallery' && is_single()): ?>
				<a href="<?php echo esc_url(home_url('/')); ?>" class="logo"><img src="<?php ungrynerd_path('/images/logo-dark.png')?>" alt="Diario de Madrid"></a>
			<?php else: ?>
				<a href="<?php echo esc_url(home_url('/')); ?>" class="logo"><img src="<?php ungrynerd_path('/images/logo.png')?>" alt="Diario de Madrid"></a>
			<?php endif?>

			<a href="#" class="menu-switch js-menu">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="text"><?php esc_html__('Menú', 'ungrynerd')  ?></span>
      </a>
		</header>
	</div>

	<div class="container">
		<nav class="nav-primary">
    <?php wp_nav_menu(
        array(
          'theme_location' => 'primary-navigation',
          'menu_class' => 'menu',
          'container' => false
        )
    ); ?>
		</nav>
	</div>
