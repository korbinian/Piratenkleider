<?php
/* 
 Template Name: Actionpage
 */
?>
<?php get_header('actionpage');
    global $options;
?>

<div class="section content actionpage" id="main-content">
  <div class="row">
    <div class="content-primary">     	
	<div class="skin">
	<?php 
	   if ( have_posts() ) while ( have_posts() ) : the_post(); ?>         	     
		<header><h1><?php the_title(); ?></h1></header>
                <?php 
		echo '<article>';
		   the_content(); 
		echo '</article>';
                
              edit_post_link( __( 'Edit', 'piratenkleider' ), '', '' );    
              
	    if ($options['aktiv-commentsonpages']==1) {
		echo '<div class="post-comments" id="comments">';
		 comments_template( '', true );
		echo '</div>';  
	    }    
	  
        endwhile; 
	?>

        </div>
    </div>
  </div>
 <?php get_piratenkleider_socialmediaicons(2); ?>
</div>

<?php get_footer('actionpage'); ?>
 