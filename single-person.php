<?php get_header();    
  global $options;    
?> 
<div class="section content" id="main-content">
  <div class="row">
    <div class="content-primary">
	
	<?php if ( have_posts() ) while ( have_posts() ) : the_post();         
        $custom_fields = get_post_custom();

	    $image_url = '';
	    $image_alt = '';
             $attribs = array(
                "credits" => $options['img-meta-credits'],
            );

	    if (has_post_thumbnail()) { 
		$thumbid = get_post_thumbnail_id(get_the_ID());
		$image_url_data = wp_get_attachment_image_src( $thumbid, 'full');
		$image_url = $image_url_data[0];
		$attribs = piratenkleider_get_image_attributs($thumbid);	
	     } 
	     if (!(isset($image_url) && (strlen($image_url)>4))) { 	
		 if (($options['aktiv-platzhalterbilder-indexseiten']==1) && (isset($options['src-default-symbolbild-person']))) {  
		    if (isset($options['src-default-symbolbild-person_id']) && ($options['src-default-symbolbild-person_id'] >0)) {
			$image_url_data = wp_get_attachment_image_src( $options['src-default-symbolbild-person_id'], 'full');
			$image_url = $image_url_data[0];
			$attribs = piratenkleider_get_image_attributs($options['src-default-symbolbild-person_id']);
		    } else {
			$image_url = $options['src-default-symbolbild-person'];
		    }		    
		}
	    }
	    
	    if (isset($image_url) && (strlen($image_url)>4)) { 
		if ($options['artikelbild-size']==1) {
		    echo '<div class="content-header-big">';
		} else {
		    echo '<div class="content-header">';
		}
		?>  
		    <header>
			<h1 class="post-title"><span><?php the_title(); ?></span></h1>
		    </header>    
		   <div class="symbolbild"><img src="<?php echo $image_url ?>" alt="">
                    <?php if (isset($attribs["credits"]) && (strlen($attribs["credits"])>1)) {
                           echo '<div class="caption">'.$attribs["credits"].'</div>';  
                        }  ?>
		   </div>
		</div>  	
	    <?php } ?>
      
      <div class="skin">
       <?php if (!(isset($image_url) && (strlen($image_url)>4))) { ?>
	    <h1 class="post-title"><span><?php the_title(); ?></span></h1>
	<?php } ?>
 
        <section class="person">
    
		<?php echo piratenkleider_display_person($post->ID, 'full',0); ?>

		<div><?php edit_post_link( __( 'Edit', 'piratenkleider' ), '', '' ); ?></div>
        </section>
       
        
      </div>
	 <?php endwhile; // end of the loop. ?>
    </div>
    


    <div class="content-aside">
      <div class="skin">
       <h1 class="skip"><?php _e( 'More information', 'piratenkleider' ); ?></h1>
       <?php		
	get_sidebar(); 
	?>
      </div>
    </div>

  </div>
 <?php get_piratenkleider_socialmediaicons(2); ?>
</div>
<?php get_footer(); ?>
