<?php get_header() ?>
<div id="container" class="container">
	<div class="row">
		<div class="col-sm-8">
			<?php dynamic_sidebar("main-featured"); ?>
			<div class="row">
				<div class="col-sm-8">
					<?php dynamic_sidebar("column-1"); ?>
				</div>
				<div class="col-sm-4">
					<?php dynamic_sidebar("column-2"); ?>
				</div>
			</div> <!-- /.row -->
		</div>
		<div class="col-sm-4">
			<?php get_search_form() ?>
			<?php get_template_part('templates/follow-us') ?>
			<?php dynamic_sidebar("column-3"); ?>
			<?php get_template_part('templates/press') ?>
			<?php get_template_part('templates/grupos-municipales') ?>
			<?php dynamic_sidebar("sidebar-home"); ?>
		</div>
	</div> <!-- /.row -->
</div>
<?php get_footer() ?>
