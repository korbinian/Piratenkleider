﻿﻿<?php
/*
Template Name: blog
*/
?>
<?php get_header(); ?>


	<div class="section content">
		<div class="row">
			<div class="content-primary">
				<div class="skin">
				
					<?php
    					$lastposts = get_posts('showposts=5');
    						foreach($lastposts as $post) :
    						setup_postdata($post);
							?>
 
							<h2><?php the_title(); ?></h2>
 							<?php the_excerpt(); ?>
							<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>