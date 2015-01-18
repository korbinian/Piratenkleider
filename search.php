<?php
/*
Template Name: Search Page
*/
?>
<?php get_header();    
  global $options;  
  global $wp_query;
?> 
<div class="section content" id="main-content">
  <div class="row">
    <div class="content-primary">

	<?php
	    $image_url = '';
	    $attribs = array("credits" => $options['img-meta-credits'] );
	    if (($options['aktiv-platzhalterbilder-indexseiten']==1) && (isset($options['src-default-symbolbild-search']))) {  
		     if (isset($options['src-default-symbolbild-search_id']) && ($options['src-default-symbolbild-search_id']>0)) {
			$image_url_data = wp_get_attachment_image_src( $options['src-default-symbolbild-search_id'], 'full');
			$image_url = $image_url_data[0];
			$attribs = piratenkleider_get_image_attributs($options['src-default-symbolbild-search_id']);
		    } else {
			$image_url = $options['src-default-symbolbild-search'];
		    }
	    }	    
	    
	    if (isset($image_url) && (strlen($image_url)>4)) { 
		if ($options['indexseitenbild-size']==1) {
		    echo '<div class="content-header-big">';
		} else {
		    echo '<div class="content-header">';
		}
		?>    		    		    		        
		   <h1 class="post-title"><span><?php printf( __( 'Search entries for "%s"', 'piratenkleider' ), '' .get_search_query() . '' ); ?></span></h1>
		   <div class="symbolbild"><img src="<?php echo $image_url ?>" alt="">	
		    <?php if (isset($attribs["credits"]) && (strlen($attribs["credits"])>1)) {
                           echo '<div class="caption">'.$attribs["credits"].'</div>';  
                        }  ?>		       
		   </div>
		</div>  	
	    <?php } ?>
	
      <div class="skin">
	  
	  <?php if (!(isset($image_url) && (strlen($image_url)>4))) { ?>
	    <h1 class="post-title"><span><?php printf( __( 'Search entries for "%s"', 'piratenkleider' ), '' .get_search_query() . '' ); ?></span></h1>
	<?php }  
	
        $query_args = explode("&", $query_string);
        $search_query = array(
                   'post_status' => 'publish',
                   'posts_per_page' => $options['suche-treffer_pro_seite'],
                   'ignore_sticky_posts'=> 1
            
        );

        foreach($query_args as $key => $string) {
            $query_split = explode("=", $string);
            if (count($query_split) > 1) {
                $search_query[$query_split[0]] = urldecode($query_split[1]);
            }
        } // foreach
        

        $search = new WP_Query($search_query);
        $total_results = $search->found_posts;
        
        
	if ($search->have_posts() ) { 
          $out = $output = '';  
          while ($search->have_posts()) : $search->the_post();
              $out = piratenkleider_search_teaser($options['suche-excerptlength'],0,1,$s);        
              if (isset($out)) {
                $output .= $out;
              }
          endwhile;

          if (isset($output)) {   
              get_search_form();

              echo "<p>";
              if ($total_results>1) {
                printf( __( 'Found %s matching hits.', 'piratenkleider' ), $total_results );
              } else {
                  _e('Found one matching hit.','piratenkleider');
              }
              echo "</p>\n";         
              echo '<ul class="searchresults">';
              echo $output;
              echo "</ul>";
          }  
     
          
          
          
         if (  $wp_query->max_num_pages > 1 ) { ?>
                <div class="archiv-nav">
                    <ul>
                        
                    <?php 
                    $page = (int)get_query_var('paged');
                    if ($page>1) {
                        echo '<li class="prev">';
                        echo '<a href="'.get_pagenum_link(1).'">'.__( '&larr; First page', 'piratenkleider' ).'</a>';
                        echo "</li>\n";
                    }
                    echo '<li class="pages">';
                    piratenkleider_paging_bar($total_results,$options['suche-treffer_pro_seite']);
                    echo "</li>\n";   
                    $last = intval($total_results/$options['suche-treffer_pro_seite']);
                    if ($page < $last) {
                        
                        echo '<li class="next">';
                        echo '<a href="'.get_pagenum_link($last).'">'.__( 'Last page &rarr;', 'piratenkleider' ).'</a>';
                        echo "</li>\n";
                    }
                    ?>                                
                </ul></div> 
         <?php 
         }                      
      } else {  ?>
                        <h2><?php _e("Nothing found", 'piratenkleider'); ?></h2>
                        <p>
                            <?php _e("No matching pages or entries found. Please try with another term.", 'piratenkleider'); ?>
                            
                        </p>
                        <?php get_search_form(); ?>
                        
                        <p>
                            <?php _e("Alternativly try the following links:", 'piratenkleider'); ?>
                                      
                        </p>
                        
                        <div class="widget">
                            <h3><?php _e("Archive by month", 'piratenkleider'); ?></h3>                           
                            <?php wp_get_archives('type=monthly'); ?>               
                        </div>
                        <?php 
                        $posttags = get_the_tags();
                        if ($posttags) { ?>                          
                         <div  class="widget">
                            <h3><?php _e("Entries by tags", 'piratenkleider'); ?></h3>    
                            <div class="tagcloud">
                             <?php wp_tag_cloud(array('format'=> 'list','smallest'  => 12, 'largest'   => 28)); ?>
                             </div>
                        </div>
                        <?php } ?>
                        <div class="widget">
                        <h3><?php _e("Categories", 'piratenkleider'); ?></h3>
                        <ul>                            
                          <?php wp_list_categories('title_li='); ?>                               
                        </ul>
                         </div>
                        
                        
            <?php } ?>

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
