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
			<?php dynamic_sidebar("column-3"); ?>
		</div>
	</div> <!-- /.row -->
</div>
<?php get_footer() ?>
