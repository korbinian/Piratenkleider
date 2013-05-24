<?php 
    get_header();    
    global $options;  
?> 
<div class="section content" id="main-content">
  <div class="row">
    <div class="content-primary">
	
	
	<?php
	    $image_url = '';	  
	    if (($options['aktiv-platzhalterbilder-indexseiten']==1) && (isset($options['src-default-symbolbild-archive']))) {  
		    $image_url = $options['src-default-symbolbild-archive'];		    
	    }	    
	    
	    if (isset($image_url) && (strlen($image_url)>4)) { 
		if ($options['indexseitenbild-size']==1) {
		    echo '<div class="content-header-big">';
		} else {
		    echo '<div class="content-header">';
		}
		?>    		    		    		        
		   <h1 class="post-title"><span><?php if ( is_day() ) : ?>
                        <?php printf( __( 'Tagesarchiv: %s', 'piratenkleider' ), get_the_date() ); ?>
                     <?php elseif ( is_month() ) : ?>
                        <?php printf( __( 'Monatsarchiv: %s', 'piratenkleider' ), get_the_date('F Y') ); ?>
                     <?php elseif ( is_year() ) : ?>
                        <?php printf( __( 'Jahresarchiv: %s', 'piratenkleider' ), get_the_date('Y') ); ?>
                     <?php else : ?>
                         <?php _e( 'Blogarchiv', 'piratenkleider' ); ?>
                      <?php endif; ?></span></h1>
		   <div class="symbolbild"><img src="<?php echo $image_url ?>" alt="">		  		    		  
		   </div>
		</div>  	
	    <?php } ?>
	
      <div class="skin">
	  
	  <?php if (!(isset($image_url) && (strlen($image_url)>4))) { ?>
	    <h1 class="post-title"><span><?php if ( is_day() ) : ?>
                        <?php printf( __( 'Tagesarchiv: %s', 'piratenkleider' ), get_the_date() ); ?>
                     <?php elseif ( is_month() ) : ?>
                        <?php printf( __( 'Monatsarchiv: %s', 'piratenkleider' ), get_the_date('F Y') ); ?>
                     <?php elseif ( is_year() ) : ?>
                        <?php printf( __( 'Jahresarchiv: %s', 'piratenkleider' ), get_the_date('Y') ); ?>
                     <?php else : ?>
                         <?php _e( 'Blogarchiv', 'piratenkleider' ); ?>
                      <?php endif; ?></span></h1>
	<?php } 
            rewind_posts(); 
            get_template_part( 'loop', 'archive' ); 
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
     <?php get_piratenkleider_socialmediaicons(2); ?>
</div>

<?php get_footer(); ?>
