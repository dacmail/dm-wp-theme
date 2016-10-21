<div class="col-sm-12">
    <?php while (have_posts()) : the_post(); ?>
        <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <?php the_first_cat(); ?>
                    <h1 class="post-title">
                        <?php the_title(); ?>
                    </h1>
                    <?php $intro = get_post_meta(get_the_ID(), '_ungrynerd_intro', true); ?>
                    <?php if (!empty($intro)): ?>
                        <div class="post-intro">
                            <?php echo apply_filters('the_content', $intro); ?>
                        </div>
                    <?php endif ?>
                    <div class="post-meta clearfix">
                        <?php the_time(get_option('date_format')); ?>
                        <?php get_template_part('templates/post-share') ?>
                    </div>
                    <div class="post-author">
                        <?php get_template_part('templates/post-author') ?>
                    </div>
                </div>
            </div>
            <div class="post-content">
                <?php the_content( __('Leer m&aacute;s &raquo;', 'ungrynerd')); ?>
                <?php wp_link_pages(); ?>
            </div>
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <?php $links = get_post_meta(get_the_ID(), '_ungrynerd_links', true); ?>
                    <?php if (!empty($links)) : ?>
                        <div class="post-links">
                            <h3>Enlaces de interes</h3>
                            <ul>
                            <?php foreach ($links as $link) : ?>
                                <li><a href="<?php echo esc_url($link[1]) ?>"><?php echo $link[0] ?></a></li>
                            <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endif ?>
                    <?php the_tags('<div class="post-tags"><h3>Archivado en</h3>', '', '</div>'); ?>
                    <div class="report-error">
                        <a href="http://www.madrid.es/portales/munimadrid/es/Inicio/Actualidad?vgnextchannel=1578e3d5d3e07010VgnVCM100000dc0ca8c0RCRD&vgnextoid=ae50a76d7388f410VgnVCM1000000b205a0aRCRD" target="_blank"><i class="icon-ico_megafono"></i> Comunicar error en la información</a>
                    </div>
                    <div class="text-center">
                        <div class="share-on">
                            Compartir en
                            <?php get_template_part('templates/post-share') ?>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    <?php endwhile; ?>
</div>
