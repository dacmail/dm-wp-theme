<div class="col-md-8 col-md-offset-2">
    <?php while (have_posts()) : the_post(); ?>
        <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
            <h1 class="post-title">
                <?php the_title(); ?>
            </h1>
            <div class="post-content">
                <?php the_content( __('Leer m&aacute;s &raquo;', 'ungrynerd')); ?>
                <?php wp_link_pages(); ?>
            </div>
        </article>
    <?php endwhile; ?>
</div>
