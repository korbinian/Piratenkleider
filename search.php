<?php get_header(); ?>

<div class="section content">
	<div class="row">
		<div class="content-primary">
			<div class="skin">

			<?php if ( have_posts() ) : ?>
				<h1><?php printf( __( 'Suchergebnisse für: %s', 'twentyten' ), '' . get_search_query() . '' ); ?></h1>
				<?php
				/* Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called loop-search.php and that will be used instead.
				 */
				 get_template_part( 'loop', 'search' );
				?>
<?php else : ?>
					<h2><?php _e( 'Nothing Found', 'twentyten' ); ?></h2>
					<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'twentyten' ); ?></p>
					<?php get_search_form(); ?>
<?php endif; ?>

			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
