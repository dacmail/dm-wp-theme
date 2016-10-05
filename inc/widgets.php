<?php
class widget_post_block extends WP_Widget {

    function widget_post_block() {
        parent::WP_Widget(false, $name = 'Bloque articulo');
    }

    function widget($args, $instance) {
        extract( $args );
        $title = apply_filters( 'widget_title', $instance['title'] );
        $type = $instance['type'];
        $site_id = $instance['site_id'];
        $selected_post  = $instance['selected_post'];
        ?>
            <?php include(get_template_directory() . '/templates/home-blocks.php'); ?>
        <?php
    }

    function update($new_instance, $old_instance) {
        $instance = $old_instance;
        $instance['selected_post'] = strip_tags($new_instance['selected_post']);
        $instance['type'] = strip_tags($new_instance['type']);
        $instance['site_id'] = strip_tags($new_instance['site_id']);
        $instance['title'] = get_the_title(strip_tags($new_instance['selected_post']));
        return $instance;
    }

    function form($instance) {
        if ( isset( $instance[ 'title' ] ) ) {
            $title = $instance[ 'title' ];
        }
        else {
            $title = __( 'New title', 'ungrynerd' );
        }
        $type = esc_attr($instance['type']);
        $site_id = esc_attr($instance['site_id']);
        $selected_post = esc_attr($instance['selected_post']);
        $sites = get_sites();
        ?>
            <input id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="hidden" value="<?php echo esc_attr( $title ); ?>" />
        <p>
            <label for="<?php echo $this->get_field_id('site_id'); ?>"><?php _e('Tipo', 'ungrynerd'); ?></label>
            <select id="<?php echo $this->get_field_id('site_id'); ?>" class="widefat" name="<?php echo $this->get_field_name('site_id'); ?>">
                <?php foreach ($sites as $site): ?>
                    <option value="<?php echo $site->blog_id ?>" <?php echo $site_id==$site->blog_id ? 'selected' : ''; ?>><?php echo $site->domain . $site->path ?></option>
                <?php endforeach ?>
            </select>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('type'); ?>"><?php _e('Tipo', 'ungrynerd'); ?></label>
            <select id="<?php echo $this->get_field_id('type'); ?>" class="widefat" name="<?php echo $this->get_field_name('type'); ?>">
                <option value="col-md-12" <?php echo $type=='col-md-12' ? 'selected' : ''; ?>><?php _e('3 columnas', 'ungrynerd'); ?></option>
                <option value="col-md-8" <?php echo $type=='col-md-8' ? 'selected' : ''; ?>><?php _e('2 columnas', 'ungrynerd'); ?></option>
                <option value="col-md-4"<?php echo $type=='col-md-4' ? 'selected' : ''; ?>><?php _e('1 columna', 'ungrynerd'); ?></option>
            </select>
        </p>
        <?php if (!empty($site_id)): ?>
            <?php
                $original_blog_id = get_current_blog_id();
                switch_to_blog($site_id);
                $posts = new WP_Query(array('post_type' => array('post','article'), 'posts_per_page' => -1, 'post_status' => 'publish'));
            ?>
            <p>
                <label for="<?php echo $this->get_field_id('selected_post'); ?>"><?php _e('Articulo', 'ungrynerd'); ?></label>
                <select id="<?php echo $this->get_field_id('selected_post'); ?>" class="widefat" name="<?php echo $this->get_field_name('selected_post'); ?>">
                <?php while ( $posts->have_posts() ) : $posts->the_post(); ?>
                    <option value="<?php the_ID() ?>" <?php echo (get_the_ID()==$selected_post) ? "selected" : ""; ?>><?php the_title(); ?></option>
                <?php endwhile; ?>
                </select>
                <script>
                jQuery(function($) {
                    $('#<?php echo $this->get_field_id('selected_post'); ?>').select2({
                        placeholder: "<?php _e('Selecciona el artículo', 'ungrynerd'); ?>",
                        width: "100%"
                    });
                });
                </script>
            </p>
            <?php switch_to_blog( $original_blog_id );  ?>
        <?php endif ?>

    <?php
    }
}
add_action('widgets_init', create_function('', 'return register_widget("widget_post_block");'));

?>
