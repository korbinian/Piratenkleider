<?php get_header();    
  global $options;    
?> 
<div class="section content" id="main-content">
  <div class="row">
    <div class="content-primary">
	
	<?php if ( have_posts() ) while ( have_posts() ) : the_post();         
        $custom_fields = get_post_custom();

	    $image_url = '';
	    $image_alt = '';
             $attribs = array(
                "credits" => $options['img-meta-credits'],
            );

	    if (has_post_thumbnail()) { 
		$thumbid = get_post_thumbnail_id(get_the_ID());
		$image_url_data = wp_get_attachment_image_src( $thumbid, 'full');
		$image_url = $image_url_data[0];
		$attribs = piratenkleider_get_image_attributs($thumbid);	
	    } 
	    if (!(isset($image_url) && (strlen($image_url)>4))) { 	
		if (($options['aktiv-artikelbild']==1) && (isset($options['artikelbild-src']))) {  
		    if (isset($options['artikelbild-src_id']) && ($options['artikelbild-src_id']>0)) {
			$image_url_data = wp_get_attachment_image_src( $options['artikelbild-src_id'], 'full');
			$image_url = $image_url_data[0];
			$attribs = piratenkleider_get_image_attributs($options['artikelbild-src_id']);
		    } else {
			$image_url = $options['artikelbild-src'];
		    }
		}
	    }
	    
	    if (isset($image_url) && (strlen($image_url)>4)) { 
		if ($options['artikelbild-size']==1) {
		    echo '<div class="content-header-big">';
		} else {
		    echo '<div class="content-header">';
		}
		?>  
		    <header>
			<h1 class="post-title"><span itemprop="headline"><?php the_title(); ?></span></h1>
		    </header>    
		   <div class="symbolbild"><img src="<?php echo $image_url ?>" alt="" itemprop="image">
                    <?php if (isset($attribs["credits"]) && (strlen($attribs["credits"])>1)) {
                           echo '<div class="caption">'.$attribs["credits"].'</div>';  
                        }  ?>
		   </div>
		</div>  	
	    <?php } ?>
      
      <div class="skin">
       <?php if (!(isset($image_url) && (strlen($image_url)>4))) { ?>
	    <h1 class="post-title"><span itemprop="headline"><?php the_title(); ?></span></h1>
	<?php } ?>
 
        <section <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	    <?php 
	    $show_disclaimer = get_post_meta( get_the_ID(), 'piratenkleider-show-post-disclaimer', true );
		if ( (isset($show_disclaimer)) && (isset($options['post_disclaimer']))  && ($options['post_disclaimer']<>'') 
                 && ( ($show_disclaimer==1) || ($show_disclaimer==3)) 
                ) {
		   echo '<div class="disclaimer">'.$options['post_disclaimer'].'</div>';
                }				
		echo piratenkleider_post_datumsbox();  
                ?>  
	      <article class="post-entry" itemprop="articleBody">
		<?php the_content(); ?>
	      </article>
             <?php 
            if ( (isset($show_disclaimer))  && (isset($options['post_disclaimer'])) 
                    && ($options['post_disclaimer']<>'') 
                 && ( ($show_disclaimer==2) || ($show_disclaimer==3)) 
                ) {
                echo '<div class="disclaimer">';
                echo $options['post_disclaimer'];
                echo '</div>';
                }
          ?>  
		<div class="post-meta"><p>
		       <?php 
			piratenkleider_post_pubdateinfo();    
			if ($options['aktiv-autoren']) piratenkleider_post_autorinfo();             
			echo ' ';  
			piratenkleider_post_taxonominfo();  
			?>                  
		      </p>
		</div>
		<div><?php edit_post_link( __( 'Edit', 'piratenkleider' ), '', '' ); ?></div>
        </section>
	<div class="post-nav">
		<ul>
		<?php 
		 previous_post_link('<li class="back">&#9664; %link</li>', '%title'); 
		 next_post_link('<li class="forward">%link &#9654;</li>', '%title'); 
		 ?>
		</ul>
	  </div>        
        <hr>

        <div class="post-comments" id="comments">
          <?php comments_template( '', true ); ?>
        </div>
        
        <?php if (has_filter( 'related_posts_by_category')) { ?>  
	    <div class="post-nav">
	      <h3><?php _e("More entries:", 'piratenkleider'); ?></h3>
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
		'type' => 'post',
		'message' => __('No more entries in this category found.','piratenkleider')
		)
		) ?>
          </ul>
	  </div>
          <?php } ?>
        
      </div>
	 <?php endwhile; // end of the loop. ?>
    </div>
    
    <?php 
	$nosidebar = get_post_meta( get_the_ID(), 'piratenkleider_nosidebar', true ); 
	if( !empty( $nosidebar ) && $nosidebar==1) {
	    echo "<!-- no sidebar -->\n";
	} else {
	?>
	    <div class="content-aside">
	      <div class="skin">
	       <h1 class="skip"><?php _e( 'More information', 'piratenkleider' ); ?></h1>
	       <?php

		
		echo get_piratenkleider_steckbrief();
		
		get_sidebar(); 
		?>
	      </div>
	    </div>
	<?php } ?>
  </div>
 <?php get_piratenkleider_socialmediaicons(2); ?>
</div>
<?php get_footer(); ?>
