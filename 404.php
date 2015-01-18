<?php get_header(); 
  global $options;
 ?>

<div class="section content" id="main-content">
  <div class="row">
    <div class="content-primary">
	

	<?php
	    $image_url = '';	  
	    $attribs = array("credits" => $options['img-meta-credits'] );
	    if (($options['aktiv-platzhalterbilder-indexseiten']==1) && (isset($options['src-default-symbolbild-404']))) {  
		     if (isset($options['src-default-symbolbild-404_id']) && ($options['src-default-symbolbild-404_id']>0)) {
			$image_url_data = wp_get_attachment_image_src( $options['src-default-symbolbild-404_id'], 'full');
			$image_url = $image_url_data[0];
			$attribs = piratenkleider_get_image_attributs($options['src-default-symbolbild-404_id']);
		    } else {
			$image_url = $options['src-default-symbolbild-404'];
		    }
	    }
	      
	    
	    if (isset($image_url) && (strlen($image_url)>4)) { 
		if ($options['indexseitenbild-size']==1) {
		    echo '<div class="content-header-big">';
		} else {
		    echo '<div class="content-header">';
		}
		?>    		    		    		        
		   <h1 class="post-title"><span><?php _e("Page not found",'piratenkleider'); ?></span></h1>
		   <div class="symbolbild"><img src="<?php echo $image_url ?>" alt="">
		       <?php if (isset($attribs["credits"]) && (strlen($attribs["credits"])>1)) {
                           echo '<div class="caption">'.$attribs["credits"].'</div>';  
                        }  else { ?>
		    <div class="caption">  
		     <p style="font-size: 2em;" class="cifont">404</p>                  
		     </div> 	
			<?php } ?>
		   </div>
		</div>  	
	    <?php } ?>
	
      <div class="skin">
	  
	  <?php if (!(isset($image_url) && (strlen($image_url)>4))) { ?>
	    <h1 class="post-title"><span><?php _e("Page not found",'piratenkleider'); ?></span></h1>
	<?php } ?>
	  
         <p>
            <?php _e("No matching pages or entries found. Please try to search with another term.", 'piratenkleider'); ?>
         </p>              
	 
         <?php get_search_form(); ?>
      </div>
    </div>

    <div class="content-aside">
      <div class="skin">
        <h1 class="skip"><?php _e( 'More information', 'piratenkleider' ); ?></h1>
         <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
       <?php get_piratenkleider_socialmediaicons(2); ?>
</div>

<?php get_footer(); ?>
