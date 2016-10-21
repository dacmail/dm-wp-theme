<?php get_header() ?>
<div class="container">
	<div class="row">
        <?php get_template_part( 'templates/loop', implode('-', array_filter(array(get_post_type(), get_post_format())))); ?>
    </div>
</div>
<?php get_footer() ?>
