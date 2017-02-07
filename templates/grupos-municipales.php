<div class="widget grupos-municipales">
    <h3 class="title">Grupos municipales</h3>
<?php
    $current_blog = get_current_blog_id();
    $blogs = explode(',', get_option('grupos_municipales'));
    foreach ($blogs as $site_id) :
        if (!empty($site_id)) :
            switch_to_blog($site_id);
            $blog_posts = new WP_Query(array('ignore_sticky_posts' => 1, 'posts_per_page' => 1, 'post_type' => array('post')));
    ?>
            <?php while ( $blog_posts->have_posts() ) : $blog_posts->the_post(); ?>
                <?php $blog_details = get_blog_details($site_id); ?>
                <h3 <?php post_class('blog-' . $site_id); ?>><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <p class="more"><a href="<?php echo $blog_details->siteurl ?>">Ver más</a></p>
            <?php endwhile; ?>
        <?php endif;
    endforeach;
    switch_to_blog($current_blog);
?>
</div>
