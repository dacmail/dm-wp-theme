<?php
class widget_post_block extends WP_Widget {

    function __construct() {
        parent::__construct(false, $name = 'Bloque articulo', array('description' => 'Atículo para portada, muestra imagen destacada si la hay'));
    }

    function widget($args, $instance) {
        extract( $args );
        $title = apply_filters( 'widget_title', $instance['title'] );
        $site_id = $instance['site_id'];
        $selected_post  = $instance['selected_post'];
        ?>
            <?php include(get_template_directory() . '/templates/' . $args['id'] . '.php'); ?>
        <?php
    }

    function update($new_instance, $old_instance) {
        $instance = $old_instance;
        $instance['selected_post'] = strip_tags($new_instance['selected_post']);
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
        $site_id = esc_attr($instance['site_id']);
        $selected_post = esc_attr($instance['selected_post']);
        $sites = get_sites();
        ?>
            <input id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="hidden" value="<?php echo esc_attr( $title ); ?>" />
        <p>
            <label for="<?php echo $this->get_field_id('site_id'); ?>"><?php _e('Sitio', 'ungrynerd'); ?></label>
            <select id="<?php echo $this->get_field_id('site_id'); ?>" class="widefat" name="<?php echo $this->get_field_name('site_id'); ?>">
                <?php foreach ($sites as $site): ?>
                    <option value="<?php echo $site->blog_id ?>" <?php echo $site_id==$site->blog_id ? 'selected' : ''; ?>><?php echo $site->domain . $site->path ?></option>
                <?php endforeach ?>
            </select>
        </p>
        <?php if (!empty($site_id)): ?>
            <?php
                $original_blog_id = get_current_blog_id();
                switch_to_blog($site_id);
                $posts = new WP_Query(array('post_type' => array('post'), 'posts_per_page' => -1, 'post_status' => 'publish'));
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

class widget_press_block extends WP_Widget {

    function __construct() {
        parent::__construct('widget_press_block', 'Bloque Nota de prensa', array('description' => 'Nota de prensa destacada en portada'));
    }

    function widget($args, $instance) {
        extract( $args );
        $title = apply_filters( 'widget_title', $instance['title'] );
        $selected_post  = $instance['selected_post'];
        ?>
            <?php include(get_template_directory() . '/templates/featured-press.php'); ?>
        <?php
    }

    function update($new_instance, $old_instance) {
        $instance = $old_instance;
        $instance['selected_post'] = strip_tags($new_instance['selected_post']);
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
        $selected_post = isset($instance['selected_post']) ? esc_attr($instance['selected_post']) : 0;
        ?>
        <input id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="hidden" value="<?php echo esc_attr( $title ); ?>" />
        <?php
            $posts = new WP_Query(array('post_type' => array('un_press'), 'posts_per_page' => -1, 'post_status' => 'publish'));
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('selected_post'); ?>"><?php _e('Nota de prensa', 'ungrynerd'); ?></label>
            <select id="<?php echo $this->get_field_id('selected_post'); ?>" class="widefat" name="<?php echo $this->get_field_name('selected_post'); ?>">
            <?php while ( $posts->have_posts() ) : $posts->the_post(); ?>
                <option value="<?php the_ID() ?>" <?php echo (get_the_ID()==$selected_post) ? "selected" : ""; ?>><?php the_title(); ?></option>
            <?php endwhile; ?>
            </select>
            <script>
            jQuery(function($) {
                $('#<?php echo $this->get_field_id('selected_post'); ?>').select2({
                    placeholder: "<?php _e('Selecciona la nota de prensa', 'ungrynerd'); ?>",
                    width: "100%"
                });
            });
            </script>
        </p>
    <?php
    }
}
add_action('widgets_init', create_function('', 'return register_widget("widget_post_block");'));
add_action('widgets_init', create_function('', 'return register_widget("widget_press_block");'));

?>
