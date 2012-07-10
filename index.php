<?php get_header(); ?>
<div class="section content" id="main-content">
  <div class="row">
    <div class="content-primary">
      <div class="content-header">
           <h1><?php the_title(); ?></h1>
          <div class="symbolbild">                   
              <?php 
              if (has_post_thumbnail()) {
                  the_post_thumbnail(); 
              } else {  ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/images/default-wissen.png" alt=""  >
                <?php  }  ?>                            
           </div>   
      </div>
        <div class="skin">
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
        <?php wp_link_pages( array( 'before' => '' . __( 'Seiten:', 'piratenkleider' ), 'after' => '' ) ); ?>
        <?php edit_post_link( __( 'Bearbeiten', 'piratenkleider' ), '', '' ); ?>
        <?php endwhile; ?>
       </div>
    </div>

    <div class="content-aside">
      <div class="skin">       
          <h1 class="skip"><?php _e( 'Weitere Informationen', 'piratenkleider' ); ?></h1>
        <?php 
       if ( has_nav_menu( 'primary' ) ) {
            wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary', 'walker'  => new My_Walker_Nav_Menu()) );      
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
     <?php 
   if ( $options['alle-socialmediabuttons'] == "2" ){
 ?> 
    <div id="socialmedia_iconbar">                             
     <ul class="socialmedia">
            <?php if ( $options['social_facebook'] != "" ){ ?><li class="facebook"><a href="<?php echo$options['social_facebook']; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/social-media/facebook-24x24.png" width="24" height="24" alt="Facebook"></a></li><?php } ?>
            <?php if ( $options['social_twitter'] != "" ){ ?><li class="twitter"><a href="<?php echo$options['social_twitter']; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/social-media/twitter-24x24.png" width="24" height="24" alt="Twitter"></a></li><?php } ?>					
            <?php if ( $options['social_gplus'] != "" ){ ?><li class="gplus"><a href="<?php echo$options['social_gplus']; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/social-media/gplus-24x24.png" width="24" height="24" alt="Google+"></a></li><?php } ?>
            <?php if ( $options['social_diaspora'] != "" ){ ?><li class="diaspora"><a href="<?php echo$options['social_diaspora']; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/social-media/diaspora-24x24.png" width="24" height="24" alt="Diaspora"></a></li><?php } ?>
            <?php if ( $options['social_identica'] != "" ){ ?><li class="identica"><a href="<?php echo$options['social_identica']; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/social-media/identica-24x24.png" width="24" height="24" alt="identi.ca"></a></li><?php } ?>															
            <?php if ( $options['social_youtube'] != "" ){ ?><li class="youtube"><a href="<?php echo$options['social_youtube']; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/social-media/youtube-24x24.png" width="24" height="24" alt="YouTube"></a></li><?php } ?>
            <?php if ( $options['social_itunes'] != "" ){ ?><li class="itunes"><a href="<?php echo$options['social_itunes']; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/social-media/itunes-24x24.png" width="24" height="24" alt="iTunes"></a></li><?php } ?>
            <?php if ( $options['social_flickr'] != "" ){ ?><li class="flickr"><a href="<?php echo$options['social_flickr']; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/social-media/flickr-24x24.png" width="24" height="24" alt="flickr"></a></li><?php } ?>		
            <?php if ( $options['social_delicious'] != "" ){ ?><li class="delicious"><a href="<?php echo$options['social_delicious']; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/social-media/delicious-24x24.png" width="24" height="24" alt="Delicious"></a></li><?php } ?>		
            <?php if ( $options['social_flattr'] != "" ){ ?><li class="delicious"><a href="<?php echo$options['social_flattr']; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/social-media/flattr-24x24.png" width="24" height="24" alt="Flattr"></a></li><?php } ?>		
    </ul>
    </div>                           
<?php } ?>
</div>

<?php get_footer(); ?>