<?php get_header(); 
global $options;  
?>
<div class="section content" id="main-content">
  <div class="row">
    <div class="content-primary">	
	<?php 

	if ( have_posts() ) while ( have_posts() ) : the_post();         
	    $custom_fields = get_post_custom();
        ?>
	<?php
	    $image_url = '';	  
	     $attribs = array(
                 "credits" => $options['img-meta-credits'],
                );
	    if (($options['aktiv-platzhalterbilder-indexseiten']==1) && (isset($options['src-default-symbolbild']))) {  
		    if (isset($options['src-default-symbolbild_id']) && ($options['src-default-symbolbild_id'] >0)) {
			$image_url_data = wp_get_attachment_image_src( $options['src-default-symbolbild_id'], 'full');
			$image_url = $image_url_data[0];
			$attribs = piratenkleider_get_image_attributs($options['src-default-symbolbild_id']);
		    } else {
			$image_url = $options['src-default-symbolbild'];
		    }		    
		}
   
	    if (isset($image_url) && (strlen($image_url)>4)) { 
		if ($options['indexseitenbild-size']==1) {
		    echo '<div class="content-header-big">';
		} else {
		    echo '<div class="content-header">';
		}
		?>    		    		    		        
		   <h1 class="post-title"><span><?php the_title(); ?></span></h1>
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
	<?php }  
	
 
         the_content(); ?>
        <?php wp_link_pages( array( 'before' => '' . __( 'Pages:', 'piratenkleider' ), 'after' => '' ) ); ?>
        <?php edit_post_link( __( 'Edit', 'piratenkleider' ), '', '' ); ?>
        <?php endwhile; ?>
       </div>
    </div>

    <div class="content-aside">
      <div class="skin">       
          <h1 class="skip"><?php _e( 'More information', 'piratenkleider' ); ?></h1>
        <?php 
       if ( has_nav_menu( 'primary' ) ) {
            wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary', 'walker'  => new Piratenkleider_Menu_Walker()) );      
        } else { 
        ?>
          <ul class="menu">
              <?php  wp_page_menu( ); ?>
          </ul>
         <?php } ?>
         <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
 <?php get_piratenkleider_socialmediaicons(2); ?>

</div>

<?php get_footer(); ?>