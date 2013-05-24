<?php get_header(); 
  global $options;
 ?>

<div class="section content">
  <div class="row">
    <div class="content-primary">
	

	<?php
	    $image_url = '';	  
	    if (($options['aktiv-platzhalterbilder-indexseiten']==1) && (isset($options['src-default-symbolbild-404']))) {  
		    $image_url = $options['src-default-symbolbild-404'];		    
	    }	    
	    
	    if (isset($image_url) && (strlen($image_url)>4)) { 
		if ($options['indexseitenbild-size']==1) {
		    echo '<div class="content-header-big">';
		} else {
		    echo '<div class="content-header">';
		}
		?>    		    		    		        
		   <h1 class="post-title"><span><?php _e("Seite nicht gefunden",'piratenkleider'); ?></span></h1>
		   <div class="symbolbild"><img src="<?php echo $image_url ?>" alt="">		  
		    <div class="caption">  
		     <p style="font-size: 2em;" class="bebas">404</p>                  
		     </div> 
		   <div class="aaarh">
		    <p><?php _e("AAARH!<br>Ihr werdet sie nicht finden!",'piratenkleider'); ?></p>
		    </div>
		   </div>
		</div>  	
	    <?php } ?>
	
      <div class="skin">
	  
	  <?php if (!(isset($image_url) && (strlen($image_url)>4))) { ?>
	    <h1 class="post-title"><span><?php _e("Seite nicht gefunden",'piratenkleider'); ?></span></h1>
	<?php } ?>
	  
         <p>
           <?php _e("Es konnten keine Seiten oder Artikel gefunden werden, die zu eingegebene Adresse passte. Bitte versuchen Sie es nochmal mit einer Suche.", 'piratenkleider'); ?>
         </p>              
         <?php get_search_form(); ?>
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
