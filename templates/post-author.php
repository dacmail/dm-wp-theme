<?php $author = get_post_meta(get_the_ID(), '_ungrynerd_author', true); ?>
<?php if (!empty($author)): ?>
    <?php echo $author; ?>
<?php else: ?>
    <?php the_author_posts_link(); ?>
<?php endif ?>
