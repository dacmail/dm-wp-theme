<?php /* Template Name: Página sin sidebar */ ?>
<?php get_header() ?>
<div class="container">
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
            <?php get_template_part( 'templates/loop', 'page'); ?>
        </div>
    </div>
</div>
<?php get_footer() ?>
