<?php while (have_posts()) : the_post(); ?>
    <article <?php post_class(); ?> id="page-<?php the_ID(); ?>">
        <h1 class="page-title">
            <?php the_title(); ?>
        </h1>
        <?php if (has_post_thumbnail() && (!get_post_meta(get_the_ID(), '_ungrynerd_hide_thumb', true)) ): ?>
            <div class="featured-photo">
                <?php the_post_thumbnail('un_big'); ?>
            </div>
        <?php endif ?>
        <div class="post-content">
            <?php the_content( __('Leer m&aacute;s &raquo;', 'ungrynerd')); ?>
            <?php wp_link_pages(); ?>
        </div>
    </article>
<?php endwhile; ?>
