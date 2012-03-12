<?php

	if (   ! is_active_sidebar( 'first-subcontent-widget-area'  )
		&& ! is_active_sidebar( 'second-subcontent-widget-area' )
		&& ! is_active_sidebar( 'third-subcontent-widget-area' )
	)
		return;
?>

<div class="first-subcontent-widget-area">
<div class="skin">
<?php if ( is_active_sidebar( 'first-subcontent-widget-area' ) ) : ?>
<?php dynamic_sidebar( 'first-subcontent-widget-area' ); ?>
<?php endif; ?>
</div>
</div>

<div class="second-subcontent-widget-area">
<div class="skin">
<?php if ( is_active_sidebar( 'second-subcontent-widget-area' ) ) : ?>
<?php dynamic_sidebar( 'second-subcontent-widget-area' ); ?>
<?php endif; ?>
</div>
</div>

<div class="third-subcontent-widget-area">
<div class="skin">
<?php if ( is_active_sidebar( 'third-subcontent-widget-area' ) ) : ?>
<?php dynamic_sidebar( 'third-subcontent-widget-area' ); ?>
<?php endif; ?>
</div>
</div>