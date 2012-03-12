<?php get_header(); ?>

<div class="section content">
	<div class="row">
		<div class="content-primary">
			<div class="skin">
				<?php if ( have_posts() ) the_post(); ?>
				<h1>
				<?php if ( is_day() ) : ?>
					<?php printf( __( 'Tagesarchiv: %s', 'twentyten' ), get_the_date() ); ?>
				<?php elseif ( is_month() ) : ?>
					<?php printf( __( 'Monatsarchiv: %s', 'twentyten' ), get_the_date('F Y') ); ?>
				<?php elseif ( is_year() ) : ?>
					<?php printf( __( 'Jahresarchiv: %s', 'twentyten' ), get_the_date('Y') ); ?>
				<?php else : ?>
					<?php _e( 'Blogarchiv', 'twentyten' ); ?>
				<?php endif; ?>
				</h1>

				<?php rewind_posts(); get_template_part( 'loop', 'archive' ); ?>
			</div>
		</div>
	</div>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>