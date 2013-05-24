<?php get_header();    
    global $options;  
?> 
<div class="section content" id="main-content">
  <div class="row">
    <div class="content-primary">
	
	<?php
	    $image_url = '';	  
	    if (($options['aktiv-platzhalterbilder-indexseiten']==1) && (isset($options['src-default-symbolbild-tag']))) {  
		    $image_url = $options['src-default-symbolbild-tag'];		    
	    }	    
	    
	    if (isset($image_url) && (strlen($image_url)>4)) { 
		if ($options['indexseitenbild-size']==1) {
		    echo '<div class="content-header-big">';
		} else {
		    echo '<div class="content-header">';
		}
		?>    		    		    		        
		   <h1 class="post-title"><span><?php printf( __( 'Schlagwort %s', 'piratenkleider' ), '' . single_cat_title( '', false ) . '' ); ?></span></h1>
		   <div class="symbolbild"><img src="<?php echo $image_url ?>" alt="">		  		    		  
		   </div>
		</div>  	
	    <?php } ?>
	
      <div class="skin">
	  
	  <?php if (!(isset($image_url) && (strlen($image_url)>4))) { ?>
	    <h1 class="post-title"><span><?php printf( __( 'Schlagwort %s', 'piratenkleider' ), '' . single_cat_title( '', false ) . '' ); ?></span></h1>	
	

            <?php }
	    get_template_part( 'loop', 'tag' ); ?>
             
             
              <div class="widget">
                <h2><?php _e( '&Uuml;bersicht &uuml;ber die Schlagworte', 'piratenkleider' ); ?></h2>
                <div class="tagcloud">                   
                  <?php wp_tag_cloud(array('smallest'  => 14, 'largest'   => 28)); ?>                  
                </div>    
            </div> 
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
