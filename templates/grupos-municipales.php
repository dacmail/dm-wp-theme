<?php $press = new WP_Query(array('cat' => '24,25,26,27', 'post_type' => array('post'), 'posts_per_page' => 4)); ?>
<?php if ( $press->have_posts() ) : ?>
<div class="widget grupos-municipales">
    <h3 class="title">Grupos municipales</h3>
    <?php while ( $press->have_posts() ) : $press->the_post(); ?>
        <h3 <?php post_class(); ?>><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    <?php endwhile; ?>
</div>
<?php endif; ?>
