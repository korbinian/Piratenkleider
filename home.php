<?php get_header();    
  global $options;  

  
   $options['artikelstream-type'] = 0;
    /* 0: Default: Alle Artikel + Linktipps
     * 1: Alle Artikel, ohne LInktipps
     * 2: Nur diverse Kategorien; Welche: artikelstream-catliste
     */
    $options['artikelstream-catliste'] = array(1,2,3,4);
    /* Ids der Categorien */
   
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

	  
	  
          <?php if ( is_active_sidebar( 'startpage-intro-area' ) ) { ?>
                <?php dynamic_sidebar( 'startpage-intro-area' ); ?>
            <?php } ?>          
          <h1 class="skip"><?php _e("Aktuelle Artikel", 'piratenkleider'); ?></h1>
          
      <?php
      $i = 0; 
      $col = 0; 
      
      $numentries = $options['num-article-startpage-fullwidth'] + $options['num-article-startpage-halfwidth']; 
      $col_count = 3; 
      $cols = array();
     
     if ($options['aktiv-linktipps']) {
	    global $wp_query;
	    $args = array_merge( $wp_query->query, array( 'post_type' => array('linktipps','post') ) );
	    query_posts( $args );
     }
      while (have_posts() && $i<$numentries) : the_post();
	  $i++;
          $output = '';
	  if (( isset($options['num-article-startpage-fullwidth']))
		    && ($options['num-article-startpage-fullwidth']>=$i )) {
		$output = piratenkleider_post_teaser($options['teaser-titleup'],$options['teaser-datebox'],$options['teaser-dateline'],$options['teaser_maxlength'],$options['teaser-thumbnail_fallback'],$options['teaser-floating']);
	  } else {
		$output =piratenkleider_post_teaser($options['teaser-titleup-halfwidth'],$options['teaser-datebox-halfwidth'],$options['teaser-dateline-halfwidth'],$options['teaser-maxlength-halfwidth'],$options['teaser-thumbnail_fallback'],$options['teaser-floating-halfwidth']);
	  }
	  if (isset($output)) {
	    $cols[$col++] = $output;
	  }
      endwhile;
      ?>
      <div class="columns">
        <?php
        $z=1;
        foreach($cols as $key => $col) {
            if (( isset($options['num-article-startpage-fullwidth']))
                && ($options['num-article-startpage-fullwidth']>$key )) {
                    echo $col;                                               
                } else {          
                     if (( isset($options['num-article-startpage-fullwidth']))
                            && ($options['num-article-startpage-fullwidth']==$key )
                             && ($options['num-article-startpage-fullwidth']>0 )) {
                         echo '<hr>';
                        }                                              
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
            <?php _e("Es konnten keine Artikel gefunden werden. Bitte versuchen Sie es nochmal mit einer Suche.", 'piratenkleider'); ?>
        </p>
        <?php get_search_form(); ?>
        <hr>
      <?php endif; 
      
      get_sidebar( 'startpage-contentfooter' ); ?>
     


      </div>
    </div>

    <div class="content-aside">
      <div class="skin">
          <h1 class="skip"><?php _e( 'Weitere Informationen', 'piratenkleider' ); ?></h1>
            <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
  <?php  get_piratenkleider_socialmediaicons(2); ?>

</div>

<?php get_footer(); ?>