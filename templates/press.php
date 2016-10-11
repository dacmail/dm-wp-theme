<?php $press = new WP_Query(array('post_type' => array('post'), 'posts_per_page' => 5)); ?>
<?php if ( $press->have_posts() ) : ?>
    <div class="press-posts">
        <h2 class="title">Notas <br>de prensa</h2>
        <?php while ( $press->have_posts() ) : $press->the_post(); ?>
            <?php the_date('d/m/Y', '<h2 class="date">', '</h2>'); ?>
            <h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <?php endwhile; ?>
        <a href="#" class="more">+ notas de prensa</a>
    </div>
<?php endif; ?>

