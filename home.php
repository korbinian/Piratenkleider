<?php get_header(); ?>

<div class="section teaser">
  <div class="row">
  <?php get_sidebar( 'teaser' ); ?>
  </div>
</div>

<div class="section content" id="main-content">
  <div class="row">
    <div class="content-primary">
      <div class="skin">

      <?php
      $i = 0; $col = 0; $col_count = 3;
      $cols = array();
      while (have_posts() && $i<3) : the_post();
      $i++;
      if($col >= $col_count) $col = 0;
      ob_start();
      ?>

      <div class="post" id="post-'<?php the_ID(); ?>'">
        <div class="post-title">
          <h2>
            <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>">
              <?php the_title(); ?>
            </a>
          </h2>
        </div>
        <div class="post-info">
          <div class="commentbubble">
            <?php comments_popup_link( '0', '1', '%', 'comments-link', '-');?>
          </div>
          <div class="cal-icon">
            <span class="day"><?php the_time('j'); ?></span>
            <span class="month"><?php the_time('m.'); ?></span>
            <span class="year"><?php the_time('Y'); ?></span>
          </div>
        </div>
        <div class="post-entry">
        <?php 
            the_content_rss('', FALSE, '', 80); 
          ?>
          <a href="<?php the_permalink() ?>"><strong><?php the_title(); ?></strong> weiterlesen</a>
        </div>
      </div>

      <hr />
      <?php 
      $output = ob_get_contents();
      ob_end_clean();
      $cols[$col++] .= $output;
      endwhile;
      ?>
      <div class="columns">
      <?php
      foreach($cols as $key => $col)
      echo '<div class="column column' . $key . '">' . $col . '</div>';
      ?>
      </div>

      <?php if ( ! have_posts() ) : ?>
      <h2><?php _e( 'Nicht gefunden', 'twentyten' ); ?></h2>
      <p><?php _e( 'Entschuldigung, aber es wurde nichts gefunden. :(', 'twentyten' ); ?></p>
      <?php get_search_form(); ?>
      <?php endif; ?>

      <div class="startpage-widget-area">
        <div class="first-startpage-widget-area">
          <div class="skin">
            <?php if ( is_active_sidebar( 'first-startpage-widget-area' ) ) { ?>
                <?php dynamic_sidebar( 'first-startpage-widget-area' ); ?>
            <?php } else { ?>
              
                <div xmlns="http://www.w3.org/1999/xhtml" class="widget">

                <h3>Weitere Artikel</h3>

                <ul>
                <?php $postslist = get_posts('numberposts=5&order=DESC&offset=3'); foreach ($postslist as $post) : setup_postdata($post); ?>
                <li><a title="Post: <?php the_title(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                <span class="date"><?php the_time('d.m.Y') ?></span></li>
                <?php endforeach; ?>
                </ul>

                <a href="<?php echo home_url( '/' ); ?>category/pm/" class="all-articles">alle Artikel</a>
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
                    <h3>Schlagworte</h3>    
                    <?php wp_tag_cloud(); ?>
                </div>
            <?php } ?>
        </div>
      </div>
      </div>

      </div>
    </div>

    <div class="content-aside">
      <div class="skin">
      <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
</div>

<div class="section subcontent">
  <div class="row">
    <?php get_sidebar( 'subcontent' ); ?>
  </div>
</div>

<?php get_footer(); ?>