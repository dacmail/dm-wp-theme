	<footer id="footer" class="footer">
        <div class="container">
            <nav class="menus" id="menus-footer">
                <div class="row">
                    <div class="col-sm-4">
                        <?php wp_nav_menu(array('menu_class' => 'nav navbar-nav',
                                        'theme_location' => 'main-column-1',
                                        'fallback_cb' => false)); ?>
                    </div>
                    <div class="col-sm-4">
                        <?php wp_nav_menu(array('menu_class' => 'nav navbar-nav',
                                        'theme_location' => 'main-column-2',
                                        'fallback_cb' => false)); ?>
                    </div>
                    <div class="col-sm-4">
                        <?php wp_nav_menu(array('menu_class' => 'nav navbar-nav',
                                        'theme_location' => 'main-column-3',
                                        'fallback_cb' => false)); ?>
                    </div>
                </div>
            </nav>
        </div>
	</footer>
    <div class="copy">
        <div class="container">
            &copy; Ayuntamiento de Madrid CC by
            <?php wp_nav_menu(array(
                        'container' => 'span',
                        'items_wrap' => '%3$s',
                        'container_class' => '',
                        'theme_location' => 'footer',
                        'walker' => new ungrynerd_walker_nav_menu));
            ?>
            <div class="pull-right">
                 <a href="https://www.facebook.com/pages/Ayuntamiento-de-Madrid" target="_blank">facebook</a>,
                <a href="http://instagram.com/madrid" target="_blank">instagram</a>,
                <a href="http://twitter.com/Madrid" target="_blank">twitter</a>,
                <a href="https://www.youtube.com/channel/UCYY0va5t-KZncOOctoGva7A" target="_blank">youtube</a>
            </div>
        </div>
    </div>
	<?php wp_footer(); ?>
</body>
</html>
