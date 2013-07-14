<?php get_header();    
  global $options;  
  global $wp_query;
      $cat_obj = $wp_query->get_queried_object();
      $thisCat = $cat_obj->term_id;
      $thisCatName =  get_cat_name($thisCat);
      
  if (($options['category-teaser']) || (($options['category-startpageview']) && ( $options['slider-aktiv'] == "1" ))) { 
    echo '<div class="section teaser"><div class="row">';   
    get_sidebar( 'teaser' );
    echo '</div></div>';    
  } else {
    $image_url = '';	  
    if (($options['aktiv-platzhalterbilder-indexseiten']==1) && (isset($options['src-default-symbolbild-category']))) {  
	$image_url = $options['src-default-symbolbild-category'];		    
    }	    

    if (isset($image_url) && (strlen($image_url)>4)) { 
	if ($options['indexseitenbild-size']==1) {
	    echo '<div class="content-header-big">';
	} else {
	    echo '<div class="content-header">';
	}
	?>    		    		    		        
	   <h1 class="post-title"><span><?php printf( __( 'Kategorie %s', 'piratenkleider' ), '' . single_cat_title( '', false ) . '' ); ?></span></h1>
	   <div class="symbolbild"><img src="<?php echo $image_url ?>" alt=""></div>
	</div>  	
    <?php } 
  }
  ?>
  <div class="section content" id="main-content">
     <div class="row">
	<div class="content-primary">
	    <div class="skin">
	  
		<?php 
	  if (($options['category-teaser']) || (($options['category-startpageview']) && ( $options['slider-aktiv'] == "1" ))) { 	  
		echo '<h1 class="skip">'.__("Aktuelle Artikel", 'piratenkleider').' ';
		printf( __( 'Kategorie %s', 'piratenkleider' ), '' . single_cat_title( '', false ) . '' );
		echo '</h1>';	    
	  } else {
	      if (!(isset($image_url) && (strlen($image_url)>4))) {
		echo '<h1 class="post-title"><span>';
		printf( __( 'Kategorie %s', 'piratenkleider' ), '' . single_cat_title( '', false ) . '' );
		echo '</span></h1>';
	      }
	  }
	 
      
      

      $i = 0; 
      $col = 0; 
      
      $numentries = $options['category-num-article-fullwidth'] + $options['category-num-article-halfwidth']; 
      $col_count = 3; 
      $cols = array();
     
      global $query_string;
      query_posts( $query_string . '&cat=$thisCat' );
 
      while (have_posts() && $i<$numentries) : the_post();
      $i++;
      ob_start();      
      piratenkleider_post_teaser($options['category-teaser-titleup'],$options['category-teaser-datebox'],$options['category-teaser-dateline'],$options['category-teaser-maxlength'],$options['teaser-thumbnail_fallback']);
 //     piratenkleider_post_teaser(0,1,1,250,1);
      

      ?>
 
      

      <?php 
      $output = ob_get_contents();
      ob_end_clean();
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
      <?php endif; ?>   
	
	
      
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
