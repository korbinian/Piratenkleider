<div class="second-footer-widget-area">
	<div class="skin">
		<?php if ( is_active_sidebar( 'second-footer-widget-area' ) ) : ?>
		<?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
		<?php endif; ?>
		<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'sub' ) ); ?>
	</div>
</div>
