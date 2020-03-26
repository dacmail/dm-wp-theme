<?php if (!empty($selected_cat)): ?>

<?php $posts = new WP_Query(array('cat' => $selected_cat, 'posts_per_page' => $limit)); ?>
<?php if ( $posts->have_posts() ) : ?>
    <div class="featured-category">
      <h2 class="title"><?php echo get_cat_name($selected_cat) ?></h2>
      <?php while ( $posts->have_posts() ) : $posts->the_post(); ?>
        <article <?php post_class('column-3 post-home post-column') ?>>
          <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <div class="post-author"><?php the_gallery_icon(); ?><strong><?php the_time(get_option('date_format')); ?></strong></div>
        </article>
      <?php endwhile; ?>
      <a href="<?php echo get_category_link($selected_cat); ?>" class="more">+ <?php echo get_cat_name($selected_cat) ?></a>
    </div>
<?php endif; ?>

<?php endif ?>
