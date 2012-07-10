<?php get_header();    
  $options = get_option( 'piratenkleider_theme_options' );  
?> 
<div class="section content" id="main-content">
  <div class="row">
    <div class="content-primary">
      <div class="skin">
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
          <div class="post-title">
            <h1><?php the_title(); ?></h1>
          </div>
          <div class="post-info">
            <div class="commentbubble">
              <?php comments_popup_link( '0', '1', '%', 'comments-link', ''); ?>
            </div>
            <div class="cal-icon">
              <span class="day"><?php the_time('j.'); ?></span>
              <span class="month"><?php the_time('m.'); ?></span>
              <span class="year"><?php the_time('Y'); ?></span>
            </div>
          </div>
          <div class="post-entry">
            <?php the_content(); ?>
          </div>
          <div class="post-meta">
            <div>
               <?php 
                piratenkleider_post_pubdateinfo();    
                if ($options['aktiv-autoren']) piratenkleider_post_autorinfo();             
                 piratenkleider_post_taxonominfo();  
                ?>        
            </div>
            <div><?php edit_post_link( __( 'Bearbeiten', 'piratenkleider' ), '', '' ); ?></div>
          </div>
        </div>

        <hr>

        <div class="post-comments">
          <?php comments_template( '', true ); ?>
        </div>

        <div class="post-nav">
          <ul>
          <?php previous_post_link('<li class="back">%link</li>', '%title', $in_same_cat = false, $excluded_categories = ''); ?>
          <?php next_post_link('<li class="forward">%link</li>', '%title', $in_same_cat = false, $excluded_categories = ''); ?>
          </ul>
            
           <?php if (has_filter( 'related_posts_by_category')) { ?>   
          <h3><?php _e("Weitere Artikel in diesem Themenkreis:", 'piratenkleider'); ?></h3>
          <ul class="related">
            <?php do_action(
            'related_posts_by_category',
            array(
            'orderby' => 'post_date',
            'order' => 'DESC',
            'limit' => 5,
            'echo' => true,
            'before' => '<li>',
            'inside' => '',
            'outside' => '',
            'after' => '</li>',
            'rel' => 'follow',
            'type' => 'post',
            'image' => array(1, 1),
            'message' => 'Keine Treffer'
            )
            ) ?>
          </ul>
          <?php } ?>
        </div>

        <?php endwhile; // end of the loop. ?>
      </div>
    </div>

    <div class="content-aside">
      <div class="skin">
       <h1 class="skip"><?php _e( 'Weitere Informationen', 'piratenkleider' ); ?></h1>
       <?php
       $custom_fields = get_post_custom();
        if ((($custom_fields['image_url'][0]<>'') && ($custom_fields['text'][0]<>''))
           || (($custom_fields['text'][0]<>'') && (has_post_thumbnail())))             
            {   ?>
            <div id="steckbrief">   
                <?php
                if ($custom_fields['image_url'][0]<>'') {
                    echo wp_get_attachment_image( $custom_fields['image_url'][0], array(300,300) ); 
                } else {
                     the_post_thumbnail(array(300,300));
                } ?>
                
                <div class="text">
                    <?php echo $custom_fields['text'][0]; ?>
                </div>
           </div>
           <?php 
        }         
        get_sidebar(); 
        ?>
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