<?php
	// Listado de comentarios
	function comentarios($comment, $args, $depth) {
	   $GLOBALS['comment'] = $comment; ?>
	   <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
	     <article id="comment-<?php comment_ID(); ?>" class="clearfix">
		  <?php echo get_avatar($comment,$size='75' ); ?>
	    	<div class="comment-content">
	    		<h5 class="author">
					<?php comment_author_link(); ?>
					<?php if ($comment->comment_approved == '0') : ?>
			         	<em><?php _e('Your comment is awaiting moderation.', 'ungrynerd') ?></em>
			      	<?php endif; ?>
			      	<?php edit_comment_link(__('(Edit)', 'ungrynerd'),'  ','') ?>
				</h5>
	    		<?php comment_text() ?>
	    	</div>
	     </article>
	<?php
	}

	function ungrynerd_path($path='') {
		echo get_template_directory_uri() . $path;
	}

	function the_first_tag() {
		global $post;
		$posttags = get_the_tags($post->ID);
		if ($posttags) { ?>
			<div class="post-tag-wrapper">
				<a href="<?php echo get_term_link($posttags[0]) ?>" class="post-tag">
			  		<?php echo $posttags[0]->name ?>
		  		</a>
	  		</div>
		<?php
		}
	}

	function the_first_cat() {
		global $post;
		$postcats = get_the_category($post->ID);
		if ($postcats) { ?>
			<div class="post-cat-wrapper">
				<a href="<?php echo get_term_link($postcats[0]) ?>" class="post-cat">
			  		<?php echo $postcats[0]->name ?>
		  		</a>
	  		</div>
		<?php
		}
	}

	function the_blog_title($site_id) {
		global $post;
		if ($site_id!=get_current_blog_id()) {
			$blog_details = get_blog_details(get_current_blog_id());
		?>
			<div class="blog-name-wrapper">
				<a  href="<?php echo $blog_details->siteurl ?>" class="blog-name">
					<?php echo $blog_details->blogname; ?>
				</a>
			</div>
		<?php
		}
	}

	function ungrynerd_pagination($query=null) {
		global $wp_query;
		$query = $query ? $query : $wp_query;
		$big = 999999999;

		$paginate = paginate_links( array(
			'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
			'type' => 'array',
			'total' => $query->max_num_pages,
			'format' => '?paged=%#%',
			'mid_size' => 7,
			'current' => max( 1, get_query_var('paged') ),
			'prev_text' => __('<i class="fa fa-chevron-left"></i>'),
			'next_text' => __('<i class="fa fa-chevron-right"></i>'),
			)
		);

		if ($query->max_num_pages > 1) : ?>
			<ul class="pagination">
			<?php foreach ( $paginate as $page ) {
				echo '<li>' . $page . '</li>';
			} ?>
		</ul>
		<?php endif;
	}
?>
