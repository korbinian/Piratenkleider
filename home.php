<?php get_header();    
  global $options;  

  
   $options['artikelstream-type'] = 2;
    /* 0: Default: Alle Artikel + Linktipps
     * 1: Alle Artikel, ohne LInktipps
     * 2: Alle Artikel aus Kategorien bis auf definierte Cats und ohne Linktipps
     */
   $options['artikelstream-exclusive-catliste'] = array(125,118,122); // "-125,-118";
    /* Ids der Categorien */
   $options['artikelstream-maxnum-main'] = $options['num-article-startpage-fullwidth'] + $options['num-article-startpage-halfwidth']; 
   $options['artikelstream-maxnum-rest'] = 2;
   $options['artikelstream-maxnum-linktipps'] = 2;
   
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

          <?php if ( is_active_sidebar( 'startpage-intro-area' ) ) { 
                 dynamic_sidebar( 'startpage-intro-area' );
           } ?>          
          <h1 class="skip"><?php _e("Aktuelle Artikel", 'piratenkleider'); ?></h1>
          
      <?php
      $i = 0; 
      $col = 0; 
      $col_count = 3; 
      $cols = array();
     
      global $wp_query;
     
      if ($options['artikelstream-type']==1) {
           /* 1: Alle Artikel, ohne Linktipps */
           $args =  $wp_query->query;
      } elseif ($options['artikelstream-type']==2) {
          /* 2: Alle Artikel aus Kategorien bis auf definierte Cats und ohne Linktipps */
          if (isset($options['artikelstream-exclusive-catliste']) 
                  && (is_array($options['artikelstream-exclusive-catliste']))) {  
                  $catliste = '';
                  $poscatliste  = '';
                  foreach ($options['artikelstream-exclusive-catliste'] as $cat) {
                      if (strlen($catliste)>1) {
                          $catliste .= ",";
                          $poscatliste .= ",";
                      }
                      $catliste.= '-'.$cat;
                      $poscatliste .= $cat;
                  }
                $args = 'cat='.$catliste;      
          } else {
                $args = $wp_query->query;
          }
      } else {
        if ($options['aktiv-linktipps']) {	    
	    $args = array_merge( $wp_query->query, array( 'post_type' => array('linktipps','post') ) );	    
        } else {
            $args =  $wp_query->query;
        }
      }

      query_posts( $args ); 
      $numentries = $options['artikelstream-maxnum-main'];
     
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
      // Reset Query
       wp_reset_query();
              
       if ( ! have_posts() ) {   ?>
            <h2><?php _e("Nichts gefunden", 'piratenkleider'); ?></h2>
            <p>
            <?php _e("Es konnten keine Artikel gefunden werden. Bitte versuchen Sie es nochmal mit einer Suche.", 'piratenkleider'); ?>
            </p>
            <?php get_search_form(); ?>
            <hr>
       <?php }  else {
           
           if ($options['artikelstream-type']==2) {
                echo '<div class="main-stream">';
           }
               
           
            echo '<div class="columns">';
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
            echo "</div>\n";
            
             if ($options['artikelstream-type']==2) {
                echo '</div>';
           }
        }

        if ($options['artikelstream-type']>0) {
              /* Zuerst Linktipps */
            
             query_posts(  array( 'post_type' => array('linktipps') ) ); 
             global $post;
             $linktippout = '';
             $i=0;
             while (have_posts() && $i<$options['artikelstream-maxnum-linktipps']) : the_post();
                 $i++;    
                 $out = linktipp_display($post);
                 $linktippout .= $out;
             endwhile;
             wp_reset_query();
             if (isset($linktippout) && strlen($linktippout)>1) {
                 echo '<div class="linktipp-stream">';
                 echo $linktippout;
                 echo "</div>\n";
             }
             

             if ($options['artikelstream-type']==2) {
                 /* Ausnahme-Cats */
                 
                  query_posts( 'cat='.$poscatliste ); 
                    $numentries = $options['artikelstream-maxnum-rest'];
                    $i=0;
                    $restlist = '';
                  while (have_posts() && $i<$numentries) : the_post();
                      $i++;
                      $output = '';
                      $output = piratenkleider_post_teaser($options['teaser-titleup'],$options['teaser-datebox'],$options['teaser-dateline'],$options['teaser_maxlength'],$options['teaser-thumbnail_fallback'],$options['teaser-floating']);
                      if (isset($output)) {
                        $restlist .= $output;
                      }
                  endwhile;
                    if (isset($restlist) && strlen($restlist)>1) {
                        echo '<div class="second-stream">';
                        echo $restlist;
                        echo "</div>\n";
                    }
             }
            
        }
        
        
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