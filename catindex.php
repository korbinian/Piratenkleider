<?php
/* 
 Template Name: Kategorieindex
 */
?><?php get_header();    
  global $options;  

  
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

      
          
          
      <?php
      $foundarticles=0;
      $i = 0; 
      $col = 0; 
      $cols = array();
     
      global $wp_query;

      
      
	$cat_array = array();
	$args=array(
	  'post_type' => 'post',
	  'post_status' => 'publish',
	  'posts_per_page' => 20,
	  'ignore_sticky_posts'=> 1
	  );
	$my_query = null;
	$my_query = new WP_Query($args);
	if( $my_query->have_posts() ) {
	  while ($my_query->have_posts()) : $my_query->the_post();
		$cat_args=array('orderby' => 'none');
		$cats = wp_get_post_terms( $post->ID , 'category', $cat_args);
		foreach($cats as $cat) {
		  $cat_array[$cat->term_id] = $cat->term_id;
		}
	  endwhile;
	}
	
	$num = $options['categoryindex-numlinklist'] + 1;
        wp_reset_query();
        $subcatquery = array(); 
	if ($cat_array) {
	  foreach($cat_array as $cat) {
		$category = get_term_by('ID',$cat, 'category');
                $title = '<h2>' . $category->name.'</h2>';
                
                $subcatquery =array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'posts_per_page' => $num,
                    'cat' => $cat,
                    'ignore_sticky_posts'=> 1
                );           
                $i=0;
                $my_query = null;
                $my_query = new WP_Query($subcatquery);
                $catblock = '';
                $liste = '';
                $topentry = '';
                $catfound = 0;
                if( $my_query->have_posts() ) {
                  while ($my_query->have_posts()) : $my_query->the_post();
                    $foundarticles =1;
                    $catfound = 1;
                    if ($i==0) {
                       	$topentry = piratenkleider_category_teaser($my_query);
                        $i=1;
                    } else {
                        $liste .= '<li><a href="'.get_permalink().'" rel="bookmark">';
                        $liste .= get_the_title();
                        $liste .= "</a></li>\n";
                    }
                  endwhile;
                  
                  if ($catfound==1) {
                      echo '<div class="categorybox cat-'.$cat.'">';
                      echo $title;
                      echo $topentry;
                      if (strlen($liste)>0) {
                        echo '<h3 class="skip">Weitere Artikel aus dem Bereich '.$category->name.'</h3>';  
                        echo "\n";
                        echo '<ul class="catliste">';
                        echo $liste;
                        echo "</ul>\n";
                        echo '<p><a href="' . esc_attr(get_term_link($category, 'category'))
                        . '" title="' . sprintf( __( "Nachrichten der Kategorie %s zeigen" , 'piratenkleider'), $category->name ) 
                        . '" ' . '>'.__('Weitere Meldungen...','piratenkleider').'</a>'.'</p>';

                      }                      
                      echo "</div>\n";
                   }
                  
                  
                }
                 wp_reset_query();
                
	  }
	}
	


      
    

        
	if ($foundarticles==0) { ?>
            <h2><?php _e("Nichts gefunden", 'piratenkleider'); ?></h2>
            <p>
            <?php _e("Es konnten keine Artikel gefunden werden. Bitte versuchen Sie es nochmal mit einer Suche.", 'piratenkleider'); ?>
            </p>
            <?php get_search_form(); 
            echo "<hr>\n"; 

	}
        ?>

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