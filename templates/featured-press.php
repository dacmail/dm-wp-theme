<?php if (!empty($selected_post)): ?>
    <?php
        $press = new WP_Query(array('p' => $selected_post, 'post_type' => array('un_press')));
    ?>
    <?php if ( $press->have_posts() ) : while ( $press->have_posts() ) : $press->the_post(); ?>
        <article <?php post_class('column-1 post-home post-column') ?>>
            <a href="<?php echo get_post_type_archive_link('un_press') ?>" class="press-title">
                <img class="madrid-logo" alt="Ayuntamiento de Madrid" src="<?php ungrynerd_path('/images/ayto_madrid.jpg') ?>">
                Nota de prensa
            </a>
            <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <div class="post-author"><?php the_gallery_icon(); ?><strong><?php the_time(get_option('date_format')); ?></strong></div>
            <?php get_template_part('templates/post-share') ?>
        </article>
    <?php endwhile; ?>
    <?php endif; ?>
<?php endif ?>
