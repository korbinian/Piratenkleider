<?php get_header();    
  global $options;  
    global $wp_query;
      $cat_obj = $wp_query->get_queried_object();
      $thisCat = $cat_obj->term_id;
      $thisCatName =  get_cat_name($thisCat);
?> 
<div class="section content" id="main-content">
  <div class="row">
    <div class="content-primary">
	<?php if ( have_posts() ) the_post(); ?>
	<?php
	    $image_url = '';	  
	    if (($options['aktiv-platzhalterbilder-indexseiten']==1) && (isset($options['src-default-symbolbild-author']))) {  
		    $image_url = $options['src-default-symbolbild-author'];		    
	    }	    
	    
	    if (isset($image_url) && (strlen($image_url)>4)) { 
		if ($options['indexseitenbild-size']==1) {
		    echo '<div class="content-header-big">';
		} else {
		    echo '<div class="content-header">';
		}
		?>    		    		    		        
		   <h1 class="post-title"><span><?php printf( __( '%s', 'piratenkleider' ), get_the_author() ); ?></span></h1>
		   <div class="symbolbild"><img src="<?php echo $image_url ?>" alt="">		  
		   </div>
		</div>  	
	    <?php } ?>
	
      <div class="skin">
	  
	  <?php if (!(isset($image_url) && (strlen($image_url)>4))) { ?>
	    <h1 class="post-title"><span><?php printf( __( '%s', 'piratenkleider' ), get_the_author() ); ?></span></h1>
	<?php }  
	
	if ( get_the_author_meta( 'description' ) ) : ?>   
	    <?php the_author_meta( 'description' ); ?>
	   <hr>
	<?php endif; ?>

	<?php rewind_posts(); 
        
    $i = 0; 
      $col = 0; 
      
      $numentries = $options['category-num-article-fullwidth'] + $options['category-num-article-halfwidth']; 
      $cols = array();
     
      global $query_string;
      $args = $query_string;
      $args .= '&cat='.$thisCat;
      $args .= '&posts_per_page='.$numentries;
      query_posts( $args ); 
 
      while (have_posts() && $i<$numentries) : the_post();
      $i++;
      $output = '';     
      if (( isset($options['category-num-article-fullwidth']))
                && ($options['category-num-article-fullwidth']>=$i )) {
		$output =  piratenkleider_post_teaser($options['category-teaser-titleup'],$options['category-teaser-datebox'],$options['category-teaser-dateline'],$options['category-teaser-maxlength'],$options['teaser-thumbnail_fallback'],$options['category-teaser-floating']);
      } else {
		$output =  piratenkleider_post_teaser($options['category-teaser-titleup-halfwidth'],$options['category-teaser-datebox-halfwidth'],$options['category-teaser-dateline-halfwidth'],$options['category-teaser-maxlength-halfwidth'],$options['teaser-thumbnail_fallback'],$options['category-teaser-floating-halfwidth']);  
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
            if (( isset($options['category-num-article-fullwidth']))
                && ($options['category-num-article-fullwidth']>$key )) {
                    echo $col;                              
                } else {                       
                     if (( isset($options['category-num-article-fullwidth']))
                            && ($options['category-num-article-fullwidth']==$key )
                            && ($options['category-num-article-fullwidth']>0) ) {
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

                   <?php if (  $wp_query->max_num_pages > 1 ) : ?>
                    <div class="archiv-nav"><p>
                            <?php next_posts_link( __( '&larr; &Auml;ltere Beitr&auml;ge', 'piratenkleider' ) ); ?>
                            <?php previous_posts_link( __( 'Neuere Beitr&auml;ge &rarr;', 'piratenkleider' ) ); ?>
                        </p></div>       
                <?php endif; 


	   
	    if ( is_active_sidebar( 'indexpages-widget-area' ) ) { 
		    dynamic_sidebar( 'indexpages-widget-area' ); 
	    } ?>
	   
       </div>
    </div>

    <div class="content-aside">
      <div class="skin">      
          <h1 class="skip"><?php _e( 'Weitere Informationen', 'piratenkleider' ); ?></h1>
         <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
  <?php get_piratenkleider_socialmediaicons(2); ?>
</div>

<?php get_footer(); ?>
