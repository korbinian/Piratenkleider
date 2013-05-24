<?php get_header();    
  global $options;  
?> 
<div class="section content" id="main-content">
  <div class="row">
    <div class="content-primary">
	<?php if ( have_posts() ) the_post(); ?>
	<?php
	    $image_url = '';	  
	    if (($options['aktiv-platzhalterbilder-indexseiten']==1) && (isset($options['src-default-symbolbild-author']))) {  
		    $image_url = $options['src-default-symbolbild-author'];		    
	    }	    
	    
	    if (isset($image_url) && (strlen($image_url)>4)) { 
		if ($options['indexseitenbild-size']==1) {
		    echo '<div class="content-header-big">';
		} else {
		    echo '<div class="content-header">';
		}
		?>    		    		    		        
		   <h1 class="post-title"><span><?php printf( __( '%s', 'piratenkleider' ), get_the_author() ); ?></span></h1>
		   <div class="symbolbild"><img src="<?php echo $image_url ?>" alt="">		  
		   </div>
		</div>  	
	    <?php } ?>
	
      <div class="skin">
	  
	  <?php if (!(isset($image_url) && (strlen($image_url)>4))) { ?>
	    <h1 class="post-title"><span><?php printf( __( '%s', 'piratenkleider' ), get_the_author() ); ?></span></h1>
	<?php }  
	
	if ( get_the_author_meta( 'description' ) ) : ?>   
	    <?php the_author_meta( 'description' ); ?>
	   <hr>
	<?php endif; ?>

	<?php rewind_posts(); get_template_part( 'loop', 'author' ); ?>


       </div>
    </div>

    <div class="content-aside">
      <div class="skin">      
          <h1 class="skip"><?php _e( 'Weitere Informationen', 'piratenkleider' ); ?></h1>
         <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
  <?php get_piratenkleider_socialmediaicons(2); ?>
</div>

<?php get_footer(); ?>
