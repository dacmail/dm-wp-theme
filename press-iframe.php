<?php
/*
 * Template Name: Press iframe
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <style>
        html {
            margin: 0 !important;
            padding: 0;
        }
        .press-posts {
            margin: 0 !important;
        }
    </style>
</head>

<body <?php body_class(); ?>>
    <?php $press = new WP_Query(array('post_type' => array('un_press'), 'posts_per_page' => 5)); ?>
    <?php if ($press->have_posts()) : ?>
        <div class="press-posts">
            <h2 class="title">Notas <br>de prensa</h2>
            <?php while ($press->have_posts()) : $press->the_post(); ?>
                <?php the_date('d/m/Y', '<h2 class="date">', '</h2>'); ?>
                <h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <?php endwhile; ?>
            <a href="<?php echo get_post_type_archive_link('un_press'); ?>" class="more">+ notas de prensa</a>
        </div>
    <?php endif; ?>
</body>
</html>
