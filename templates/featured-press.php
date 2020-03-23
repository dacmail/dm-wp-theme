<?php if (!empty($selected_post)): ?>
    <?php
        $press = new WP_Query(array('p' => $selected_post, 'post_type' => array('un_press')));
    ?>
    <?php if ( $press->have_posts() ) : while ( $press->have_posts() ) : $press->the_post(); ?>
        <article <?php post_class('column-1 post-home post-column') ?>>
            <?php if (has_post_thumbnail()): ?>
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('un_medium'); ?></a>
            <?php endif ?>
            <div class="blog-name-wrapper">
              <a  href="<?php echo get_post_type_archive_link('un_press') ?>" class="blog-name">
                Nota de prensa
              </a>
            </div>
            <?php the_first_tag(); ?>
            <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <div class="post-author"><?php the_gallery_icon(); ?><strong><?php the_time(get_option('date_format')); ?></strong></div>
            <div class="post-content">
                <?php the_excerpt(); ?>
            </div>
            <?php get_template_part('templates/post-share') ?>
        </article>
    <?php endwhile; ?>
    <?php endif; ?>
<?php endif ?>
