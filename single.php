<?php get_header();    
  $options = get_option( 'piratenkleider_theme_options' );  
?> 
<div class="section content">
  <div class="row">
    <div class="content-primary">
      <div class="skin">
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <div class="post" id="post-'<?php the_ID(); ?>'">
          <div class="post-title">
            <h1><?php the_title(); ?></h1>
          </div>
          <div class="post-info">
            <div class="commentbubble">
              <?php comments_popup_link( '0', '1', '%', 'comments-link', '-'); ?>
            </div>
            <div class="cal-icon">
              <span class="day"><?php the_time('j'); ?></span>
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
            <div><?php edit_post_link( __( 'Bearbeiten', 'twentyten' ), '', '' ); ?></div>
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
          <h3><?php _e('Das könnte dich auch interessieren:') ?></h3>
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
      <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>