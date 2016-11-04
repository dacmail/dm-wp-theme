<?php
    $current_blog = get_current_blog_id();
    switch_to_blog($site_id);
    $post_block = new WP_Query(array('p' => $selected_post, 'post_type' => array('post')));
?>
<?php if ( $post_block->have_posts() ) : while ( $post_block->have_posts() ) : $post_block->the_post(); ?>
    <article <?php post_class('column-1 post-home post-column') ?>>
        <?php the_post_thumbnail('un_medium'); ?>
        <?php the_blog_title($current_blog); ?>
        <?php the_first_tag(); ?>
        <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <div class="post-author"><strong><?php the_time(get_option('date_format')); ?></strong></div>
        <div class="post-content">
            <?php the_excerpt(); ?>
        </div>
        <?php get_template_part('templates/post-share') ?>
    </article>
<?php endwhile; ?>
<?php endif; ?>
<?php switch_to_blog($current_blog); ?>
