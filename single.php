<?php get_header();    
  $options = get_option( 'piratenkleider_theme_options' );    
?> 
<div class="section content" id="main-content">
  <div class="row">
    <div class="content-primary">
      <div class="skin">
        <?php if ( have_posts() ) while ( have_posts() ) : the_post();         
        $custom_fields = get_post_custom();
        ?>

        <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
          <div class="post-title">
            <h1><?php the_title(); ?></h1>
          </div>
          
           <?php 
            if ( (isset($custom_fields['show-post-disclaimer']))
                 && ($custom_fields['show-post-disclaimer'][0]<>'') 
                 && ($options['post_disclaimer']<>'') 
                 && ( ($custom_fields['show-post-disclaimer'][0]==1) || ($custom_fields['show-post-disclaimer'][0]==3)) 
                ) {
                echo '<div class="disclaimer">';
                echo $options['post_disclaimer'];
                echo '</div>';
                }
          ?>  
          <div class="post-info">           
              <?php 
                $num_comments = get_comments_number();
                if (!isset($options['zeige_commentbubble_null'])) 
                    $options['zeige_commentbubble_null'] = $defaultoptions['zeige_commentbubble_null'];   
                if (($num_comments>0) || ( $options['zeige_commentbubble_null'])) { ?>
         <div class="commentbubble"> 
            <?php 
                if ($num_comments>0) {
                   comments_popup_link( '0<span class="skip"> Kommentar</span>', '1<span class="skip"> Kommentar</span>', '%<span class="skip"> Kommentare</span>', 'comments-link', '%<span class="skip"> Kommentare</span>');           
                } else {
                    // Wenn der Zeitraum abgelaufen ist UND keine Kommentare gegeben waren, dann
                    // liefert die Funktion keinen Link, sondern nur den Text . Daher dieser
                    // Woraround:
                    $link = get_comments_link();
                    echo '<a href="'.$link.'">0<span class="skip"> Kommentar</span></a>';
              }
            ?>
          </div> 
          <?php } ?>                       
            <div class="cal-icon">
              <span class="day"><?php the_time('j.'); ?></span>
              <span class="month"><?php the_time('m.'); ?></span>
              <span class="year"><?php the_time('Y'); ?></span>
            </div>
          </div>
            
          
            
          <div class="post-entry">
            <?php the_content(); ?>
          </div>
             <?php 
            if ( (isset($custom_fields['show-post-disclaimer']))
                 &&   ($custom_fields['show-post-disclaimer'][0]<>'') 
                 && ($options['post_disclaimer']<>'') 
                 && ( ($custom_fields['show-post-disclaimer'][0]==2) || ($custom_fields['show-post-disclaimer'][0]==3)) 
                ) {
                echo '<div class="disclaimer">';
                echo $options['post_disclaimer'];
                echo '</div>';
                }
          ?>  
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

        <div class="post-comments" id="comments">
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
                     <?php echo do_shortcode(get_post_meta($post->ID, 'text', $single = true)); ?>
                </div>
           </div>
           <?php 
        }  
       
        piratenkleider_echo_player();       
        get_sidebar(); 
        ?>
      </div>
    </div>
  </div>
 <?php get_piratenkleider_socialmediaicons(2); ?>
</div>
<?php get_footer(); ?>