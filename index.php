<?php get_header() ?>
<div class="container">
	<div class="row">
		<div class="col-sm-8">
			<section class="clearfix">
				<header>
					<?php the_archive_title( '<h1 class="term-title">', '</h1>' ); ?>
				</header>
				<?php while ( have_posts() ) : the_post(); ?>
				    <article <?php post_class('clearfix') ?>>
				    	<?php the_post_thumbnail('un_square') ?>
				    	<div class="post-wrapper">
					        <?php the_first_tag(); ?>
					        <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					        <div class="post-author"><strong><?php the_time(get_option('date_format')); ?></strong> por <?php get_template_part('templates/post-author') ?></div>
					        <div class="post-content">
					            <?php the_excerpt(); ?>
					        </div>
					        <?php get_template_part('templates/post-share') ?>
				        </div>
				    </article>
				<?php endwhile; ?>
			</section>
			<div class="pagination-wrap">
				<?php ungrynerd_pagination(); ?>
			</div>
		</div>
		<div class="col-sm-4">
            <?php get_sidebar(); ?>
        </div>
	</div> <!-- /.row -->
</div>
<?php get_footer() ?>
