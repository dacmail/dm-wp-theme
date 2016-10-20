<?php get_header() ?>
<div class="container">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <?php get_template_part( 'templates/loop', get_post_type()); ?>
        </div>
    </div>
</div>
<?php get_footer() ?>
