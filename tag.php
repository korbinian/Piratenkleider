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
	
	<?php
	    $image_url = '';	  
	    $attribs = array(  "credits" => $options['img-meta-credits'] );
	    if (($options['aktiv-platzhalterbilder-indexseiten']==1) && (isset($options['src-default-symbolbild-tag']))) {  
		 if (isset($options['src-default-symbolbild-tag_id']) && ($options['src-default-symbolbild-tag_id']>0)) {
			$image_url_data = wp_get_attachment_image_src( $options['src-default-symbolbild-tag_id'], 'full');
			$image_url = $image_url_data[0];
			$attribs = piratenkleider_get_image_attributs($options['src-default-symbolbild-tag_id']);
		    } else {
			$image_url = $options['src-default-symbolbild-tag'];
		    }
	    }	    
	    
	    if (isset($image_url) && (strlen($image_url)>4)) { 
		if ($options['indexseitenbild-size']==1) {
		    echo '<div class="content-header-big">';
		} else {
		    echo '<div class="content-header">';
		}
		?>    		    		    		        
		   <h1 class="post-title"><span><?php printf( __( 'Tag %s', 'piratenkleider' ), '' . single_cat_title( '', false ) . '' ); ?></span></h1>
		   <div class="symbolbild"><img src="<?php echo $image_url ?>" alt="" itemprop="image">	
		    <?php if (isset($attribs["credits"]) && (strlen($attribs["credits"])>1)) {
                           echo '<div class="caption">'.$attribs["credits"].'</div>';  
                        }  ?>		       
		   </div>
		</div>  	
	    <?php } ?>
	
      <div class="skin" itemprop="mainContentOfPage">
	  
	  <?php if (!(isset($image_url) && (strlen($image_url)>4))) { ?>
	    <h1 class="post-title"><span itemprop="name"><?php printf( __( 'Tag %s', 'piratenkleider' ), '' . single_cat_title( '', false ) . '' ); ?></span></h1>	
            <?php }
            
      $i = 0; 
      $col = 0; 
      
      $numentries = $options['category-num-article-fullwidth'] + $options['category-num-article-halfwidth']; 
      $cols = array();
     
      global $query_string;
      $args = $query_string;
      $args .= '&posts_per_page='.$numentries;
      query_posts( $args ); 
      
      
      while (have_posts() && $i<$numentries) : the_post();
      $i++;
      $output = '';     
      if (( isset($options['category-num-article-fullwidth']))
                && ($options['category-num-article-fullwidth']>=$i )) {
	 $output =  piratenkleider_post_teaser($options['category-teaser-titleup'],$options['category-teaser-datebox'],$options['category-teaser-dateline'],$options['category-teaser-maxlength'],$options['teaser-thumbnail_fallback'],$options['category-teaser-floating']);
      } else {
	 $output = piratenkleider_post_teaser($options['category-teaser-titleup-halfwidth'],$options['category-teaser-datebox-halfwidth'],$options['category-teaser-dateline-halfwidth'],$options['category-teaser-maxlength-halfwidth'],$options['teaser-thumbnail_fallback'],$options['category-teaser-floating-halfwidth']);  
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
                            <?php next_posts_link( __( '&larr; Older Entries', 'piratenkleider' ) ); ?>
                            <?php previous_posts_link( __( 'Newer Entries &rarr;', 'piratenkleider' ) ); ?>
                          </p></div>       
                <?php endif;  
		
		if ( is_active_sidebar( 'indexpages-widget-area' ) ) { 
		    dynamic_sidebar( 'indexpages-widget-area' ); 
		} ?>
            

       </div>
    </div>

    <div class="content-aside">
      <div class="skin">       
          <h1 class="skip"><?php _e( 'More information', 'piratenkleider' ); ?></h1>
         <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
 <?php get_piratenkleider_socialmediaicons(2); ?>
</div>

<?php get_footer(); ?>
