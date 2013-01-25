<?php get_header();
global $defaultoptions;
$options = get_option( 'piratenkleider_theme_options' );
if (!isset($options['aktiv-defaultseitenbild'])) 
            $options['aktiv-defaultseitenbild'] = $defaultoptions['aktiv-defaultseitenbild'];

?>

<div class="section content" id="main-content">
  <div class="row">
    <div class="content-primary">     
        <div class="content-header">            
          <h1 id="page-title"><span><?php the_title(); ?></span></h1>
        
        <?php if (has_post_thumbnail()) { 
            echo '<div class="symbolbild">';
              the_post_thumbnail(); 
            echo '</div>';  
        } else {            
           if ($options['aktiv-defaultseitenbild']==1) {   
                $bilderoptions = get_option( 'piratenkleider_theme_defaultbilder' ); 
                $defaultbildsrc = $bilderoptions['seiten-defaultbildsrc'];
                if (isset($defaultbildsrc) && (strlen($defaultbildsrc)>4)) {
                  echo '<div class="symbolbild">';
                  echo '<img src="'.$defaultbildsrc.'"  alt="">';                        
                  echo '</div>';  
                }
           }            
        }   
         ?>
      </div>
      <div class="skin">
        
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
          
        <div class="post-comments" id="comments">
          <?php comments_template( '', true ); ?>
        </div>
          
          
        <?php wp_link_pages( array( 'before' => '' . __( 'Seiten:', 'piratenkleider' ), 'after' => '' ) ); ?>                    
        <?php edit_post_link( __( 'Bearbeiten', 'piratenkleider' ), '', '' ); ?>
        <?php endwhile; ?>
      </div>
    </div>

    <div class="content-aside">
      <div class="skin">                
          <h1 class="skip"><?php _e( 'Weitere Informationen', 'piratenkleider' ); ?></h1>
          
            <?php
            
            if (!isset($options['zeige_subpagesonly'])) 
            $options['zeige_subpagesonly'] = $defaultoptions['zeige_subpagesonly'];
  
            if (!isset($options['zeige_sidebarpagemenu'])) 
            $options['zeige_sidebarpagemenu'] = $defaultoptions['zeige_sidebarpagemenu'];
            
			if (!isset($options['seitenmenu_mode'])) 
            $options['seitenmenu_mode'] = $defaultoptions['seitenmenu_mode'];
            get_piratenkleider_seitenmenu($options['zeige_sidebarpagemenu'],$options['zeige_subpagesonly'],$options['seitenmenu_mode']);
        

             if ( get_post_meta($post->ID, 'right_column', true) )
             echo do_shortcode(get_post_meta($post->ID, 'right_column', $single = true));
             

        if (!isset($options['aktiv-circleplayer'])) 
            $options['aktiv-circleplayer'] = $defaultoptions['aktiv-circleplayer']; 
        if ($options['aktiv-circleplayer']==1) {
            piratenkleider_echo_player();
        }
         get_sidebar(); ?>
      </div>
    </div>
  </div>
 <?php get_piratenkleider_socialmediaicons(2); ?>
</div>

<?php get_footer(); ?>
