<?php get_header();    
  $options = get_option( 'piratenkleider_theme_options' );  
  if (!isset($options['slider-aktiv'])) 
        $options['slider-aktiv'] = $defaultoptions['slider-aktiv'];
  if ( $options['slider-aktiv'] == "1" ){ ?>  
    <div class="section teaser">
        <div class="row">
            <?php get_sidebar( 'teaser' ); ?>
        </div>  
    </div>
<?php } ?>
<div class="section content" id="main-content">
  <div class="row">
    <div class="content-primary">
      <div class="skin">

          <h1 class="skip"><?php echo $defaultoptions['default_text_home_title_articles']; ?></h1>
          
      <?php
      $i = 0; 
      $col = 0; 
      if (!isset($options['num-article-startpage-fullwidth'])) 
            $options['num-article-startpage-fullwidth'] = $defaultoptions['num-article-startpage-fullwidth'];
      if (!isset($options['num-article-startpage-halfwidth'])) 
            $options['num-article-startpage-halfwidth'] = $defaultoptions['num-article-startpage-halfwidth'];       
      $numentries = $options['num-article-startpage-fullwidth'] + $options['num-article-startpage-halfwidth']; 
      $col_count = 3; 
      $cols = array();
      while (have_posts() && $i<$numentries) : the_post();
      $i++;
      ob_start();
      ?>

      <div <?php post_class(); ?> id="post-<?php the_ID(); ?>" >
        <div class="post-title">
          <h2>
            <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>">
              <?php the_title(); ?>
            </a>
          </h2>
        </div>
        <div class="post-info">
          <div class="commentbubble">
            <?php comments_popup_link( '0<span class="skip"> Kommentare</span>', '1<span class="skip"> Kommentar</span>', '%<span class="skip"> Kommentare</span>', 'comments-link', '');?>
          </div>
          <div class="cal-icon">
            <span class="day"><?php the_time('j.'); ?></span>
            <span class="month"><?php the_time('m.'); ?></span>
            <span class="year"><?php the_time('Y'); ?></span>
          </div>
        </div>
        <div class="post-entry">
        <?php echo get_piratenkleider_custom_excerpt(); ?>         
        </div>
      </div>

      <?php 
      $output = ob_get_contents();
      ob_end_clean();
      $cols[$col++] .= $output;
      endwhile;
      ?>
      <div class="columns">
        <?php
        $z=1;
        foreach($cols as $key => $col) {
            if (( isset($options['num-article-startpage-fullwidth']))
                && ($options['num-article-startpage-fullwidth']>$key )) {
                    echo '<div class="column0">' . $col . '<hr></div>';                              
                } else {                                        
                    echo '<div class="column'.$z.'">' . $col . '</div>';                            
                    $z++;
                    if ($z>2) {
                        $z=1;
                        echo '<hr style="clear: both;">';
                    }
                }            
        }
        ?>     
      </div>

      
      
      
      <?php if ( ! have_posts() ) : ?>
       <h2><?php _e("Nichts gefunden", 'piratenkleider'); ?></h2>
                        <p>
                            <?php _e("Es konnten keine Seiten oder Artikel gefunden werden, 
                            die zu der Sucheingabe passten.
                            Bitte versuchen Sie es nochmal mit einer 
                            Suche.", 'piratenkleider'); ?>
                            
                        </p>
        <?php get_search_form(); ?>
        <hr>
      <?php endif; ?>

           
        
      
      <div class="startpage-widget-area">
          <h2 class="skip"><?php echo $defaultoptions['default_text_home_title_further']; ?></h2>
        <div class="first-startpage-widget-area">
          <div class="skin">
            <?php if ( is_active_sidebar( 'first-startpage-widget-area' ) ) { ?>
                <?php dynamic_sidebar( 'first-startpage-widget-area' ); ?>
            <?php } else { ?>
              
                <div class="widget">
                

                <ul>
                <?php 
                $postslist = get_posts("numberposts=5&order=DESC&offset=$numentries"); 
                if (isset($postslist)) {
                    echo '<h3>'.$defaultoptions['default_text_home_title_prevarticle'].'</h3>';
                }
                foreach ($postslist as $post) : setup_postdata($post); 
                ?>
                <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                <span class="date"><?php the_time('d.m.Y') ?></span></li>
                <?php endforeach; ?>
                </ul>
                </div>
                <div class="widget">
                <h3><?php echo $defaultoptions['default_text_home_title_categories']; ?></h3>
                <ul>
                    <?php wp_list_categories('title_li='); ?>
                </ul>
                

                </div>
             <?php } ?>
          </div>
        </div>

        <div class="second-startpage-widget-area">
        <div class="skin">
            <?php if ( is_active_sidebar( 'second-startpage-widget-area' ) ) { ?>
                <?php dynamic_sidebar( 'second-startpage-widget-area' ); ?>
            <?php } else { ?>    
                <div  class="widget">
                    <?php $tags = get_tags();
                        if (isset($tags)) {
                            echo '<h3>'.$defaultoptions['default_text_home_title_tags'].'</h3>';
                        }
                     ?>
                      <div class="tagcloud">            
                        <?php wp_tag_cloud(array('smallest'  => 14, 'largest'   => 28)); ?>
                      </div>
                </div>
            <?php } ?>
        </div>
      </div>
      </div>

      </div>
    </div>

    <div class="content-aside">
      <div class="skin">
          <h1 class="skip"><?php echo $defaultoptions['default_text_title_sidebar']; ?></h1>
            <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
</div>


<?php get_footer(); ?>