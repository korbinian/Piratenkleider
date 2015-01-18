<?php 
    get_header();    
    global $options;  
?> 
<div class="section content" id="main-content">
  <div class="row">
    <div class="content-primary">
	
	
	<?php
	    $image_url = '';
	    $attribs = array("credits" => $options['img-meta-credits'] );
	    if (($options['aktiv-platzhalterbilder-indexseiten']==1) && (isset($options['src-default-symbolbild-archive']))) {  
		     if (isset($options['src-default-symbolbild-archive_id']) && ($options['src-default-symbolbild-archive_id']>0)) {
			$image_url_data = wp_get_attachment_image_src( $options['src-default-symbolbild-archive_id'], 'full');
			$image_url = $image_url_data[0];
			$attribs = piratenkleider_get_image_attributs($options['src-default-symbolbild-archive_id']);
		    } else {
			$image_url = $options['src-default-symbolbild-archive'];
		    }
	    }
	    
	    if (isset($image_url) && (strlen($image_url)>4)) { 
		if ($options['indexseitenbild-size']==1) {
		    echo '<div class="content-header-big">';
		} else {
		    echo '<div class="content-header">';
		}
		?>    		    		    		        
		   <h1 class="post-title"><span itemprop="name"><?php if ( is_day() ) : ?>
                        <?php printf( __( 'Archive by day: %s', 'piratenkleider' ), get_the_date() ); ?>
                     <?php elseif ( is_month() ) : ?>
                        <?php printf( __( 'Archive by month: %s', 'piratenkleider' ), get_the_date('F Y') ); ?>
                     <?php elseif ( is_year() ) : ?>
                        <?php printf( __( 'Archive by year: %s', 'piratenkleider' ), get_the_date('Y') ); ?>
                     <?php else : 
                         if ( 'person'== get_post_type()  ) {
                             _e( 'Person page', 'piratenkleider' ); 
                         } else {
                            _e( 'Archive', 'piratenkleider' ); 
                         } 
                        endif; ?></span></h1>
		   <div class="symbolbild"><img src="<?php echo $image_url ?>" alt="" itemprop="image">
			<?php if (isset($attribs["credits"]) && (strlen($attribs["credits"])>1)) {
                           echo '<div class="caption">'.$attribs["credits"].'</div>';  
                        }  ?>		       
		   </div>
		</div>  
                <div class="skin" itemprop="mainContentOfPage">
	    <?php } else { ?>
                <div class="skin" itemprop="mainContentOfPage">
                 <h1 class="post-title"><span itemprop="name"><?php if ( is_day() ) : ?>
                        <?php printf( __( 'Archive by day: %s', 'piratenkleider' ), get_the_date() ); ?>
                     <?php elseif ( is_month() ) : ?>
                        <?php printf( __( 'Archive by month: %s', 'piratenkleider' ), get_the_date('F Y') ); ?>
                     <?php elseif ( is_year() ) : ?>
                        <?php printf( __( 'Archive by year: %s', 'piratenkleider' ), get_the_date('Y') ); ?>
                     <?php else : 
                         if ( 'person'== get_post_type()  ) {
                             _e( 'Person page', 'piratenkleider' ); 
                         } else {
                            _e( 'Archive', 'piratenkleider' ); 
                         } 
                         endif; ?></span></h1>
            <?php }
            rewind_posts(); 
            get_template_part( 'loop', 'archive' );
            ?>
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
