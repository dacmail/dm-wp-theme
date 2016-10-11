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
				<div class="post-tag">
			  		<?php echo $posttags[0]->name ?>
		  		</div>
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
?>
