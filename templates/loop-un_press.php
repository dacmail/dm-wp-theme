<div class="col-md-8 col-md-offset-2">
    <?php while (have_posts()) : the_post(); ?>
        <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
            <img class="madrid-logo" alt="Ayuntamiento de Madrid" src="<?php ungrynerd_path('/images/ayto_madrid.jpg') ?>">
            <div class="post-cat-wrapper">
                <a class="post-cat" href="<?php echo get_post_type_archive_link('un_press'); ?>">Nota de prensa</a>
            </div>
            <h1 class="post-title">
                <?php the_title(); ?>
            </h1>
            <?php $intro = get_post_meta(get_the_ID(), '_ungrynerd_intro', true); ?>
            <?php if (!empty($intro)): ?>
                <div class="post-intro">
                    <?php echo apply_filters('the_content', $intro); ?>
                </div>
            <?php endif ?>
            <div class="post-date">
                <?php the_time(get_option('date_format')); ?>
            </div>
            <div class="post-content">
                <?php the_content( __('Leer m&aacute;s &raquo;', 'ungrynerd')); ?>
                <?php wp_link_pages(); ?>
            </div>

            <?php $links = get_post_meta(get_the_ID(), '_ungrynerd_links', true); ?>
            <?php if (!empty($links)) : ?>
                <div class="post-links">
                    <h3>Enlaces de interés</h3>
                    <ul>
                    <?php foreach ($links as $link) : ?>
                        <li><a href="<?php echo esc_url($link[1]) ?>"><?php echo $link[0] ?></a></li>
                    <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif ?>

            <div class="report-error">
                <a href="<?php echo add_query_arg(array('articulo' => get_the_title()), get_permalink(7294)); ?>" target="_blank"><i class="icon-ico_reportar"></i> Comunicar error en la información</a>
            </div>
            <div class="text-center">
                <div class="share-on">
                    Compartir en
                    <?php get_template_part('templates/post-share') ?>
                </div>
            </div>
        </article>
    <?php endwhile; ?>
</div>
