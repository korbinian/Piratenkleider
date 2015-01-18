<?php
   global $defaultoptions;
   global $options;  
?>          
<div class="first-teaser-widget-area">
<?php
     
         $defaultbildsrc = $options['slider-defaultbildsrc'];                        
         $cat = $options['slider-catid'];
	 global $thisCat;
	 if (isset($thisCat)) {
	     $cat = $thisCat;
	 }
         if (!isset($cat) ) $cat = 1;         
         $numberarticle = $options['slider-numberarticle'];
         if (!isset($numberarticle) )  $numberarticle =3;   
	 
	 global $thisCatName;

	$subtitle =  $options['teaser-subtitle'];
        if (isset($thisCatName)) {
	    $subtitle = $thisCatName;
	}

        query_posts( array( 'cat' => "$cat", 'posts_per_page' => $numberarticle) );
        ?>
        <div class="flexslider">
            <h2 class="skip"><?php _e( 'Information slides', 'piratenkleider' ); ?></h2>
            <ul class="slides">
        <?php 
        if ( have_posts() ) while ( have_posts() ) : the_post();
            echo '<li class="slide">';
            if ($options['teaser-type'] == 'big') {
                $attribs = array(
                 "credits" => $options['img-meta-credits'],
                );
                              
                echo '<div class="bigslider">';
                if (has_post_thumbnail()) {    
                    $thumbid = get_post_thumbnail_id(get_the_ID());
                    $image_url_data = wp_get_attachment_image_src( $thumbid, 'full');
                    $image_url = $image_url_data[0];
                    $attribs = piratenkleider_get_image_attributs($thumbid);
                    if (isset($image_url) && strlen($image_url)>0){                        
                        echo '<img src="'.$image_url.'" alt="">';
                    } else {
			if (isset($options['slider-defaultbildsrc_id'])) {
			    $image_url_data = wp_get_attachment_image_src( $options['slider-defaultbildsrc_id'], 'full');
			    $image_url = $image_url_data[0];
			    $attribs = piratenkleider_get_image_attributs($options['slider-defaultbildsrc_id']);
			} else {
			    $image_url = $options['slider-defaultbildsrc'];
			    $attribs = array("credits" => $options['img-meta-credits'] );
			}
                       
                        echo '<img src="'.$image_url.'" width="'.$options['bigslider-thumb-width'].'" height="'.$options['bigslider-thumb-height'].'" alt="">';                
                    }       
                } else {
		    if (isset($options['slider-defaultbildsrc_id'])) {
			    $image_url_data = wp_get_attachment_image_src( $options['slider-defaultbildsrc_id'], 'full');
			    $image_url = $image_url_data[0];
			    $attribs = piratenkleider_get_image_attributs($options['slider-defaultbildsrc_id']);			    
		    } 
		    if (!isset($image_url)) {
			    $image_url = $options['slider-defaultbildsrc'];
			    $attribs = array("credits" => $options['img-meta-credits'] );
		    }
                     echo '<img src="'.$image_url.'" width="'.$options['bigslider-thumb-width'].'" height="'.$options['bigslider-thumb-height'].'" alt="">';                
                  
                }
                echo '<div class="caption"><p class="cifont">'.$subtitle.'</p>';
                echo '<h3><a href="';
                the_permalink();
                echo '">';
                echo short_title('&hellip;', $options['teaser-title-words'], $options['teaser-title-maxlength']);
                echo "</a></h3></div>";   
                                
                if (($options['teaser-showcredits']==1) && isset($attribs["credits"]) && (strlen($attribs["credits"])>1)) {
                    echo '<div class="credits">'.$attribs["credits"].'</div>';
                } 
                echo "</div>";    
            } else {
                echo '<div class="textslider">';
                if (has_post_thumbnail()) {           
                    the_post_thumbnail(array($defaultoptions['smallslider-thumb-width'],$defaultoptions['smallslider-thumb-height']),array('alt'=> ''));                
               } else {
		   if (isset($options['slider-defaultbildsrc_id']) && ($options['slider-defaultbildsrc_id']>0)) {
			    $image_url_data = wp_get_attachment_image_src( $options['slider-defaultbildsrc_id'], 'full');
			    $image_url = $image_url_data[0];
			    $attribs = piratenkleider_get_image_attributs($options['slider-defaultbildsrc_id']);
		    } else {
			    $image_url = $options['slider-defaultbildsrc'];
			    $attribs = array("credits" => $options['img-meta-credits'] );
		    }
                     echo '<img src="'.$image_url.'" width="'.$options['smallslider-thumb-width'].'" height="'.$options['smallslider-thumb-height'].'" alt="">';                
                }              
                echo '<h3><a href="';
                the_permalink();
                echo '">';
                the_title();
                echo '</a></h3><div class="teaser-excerpt">';
                echo get_piratenkleider_custom_excerpt();
                echo "</div></div>";          
            }
            
            echo "</li>\n";
        endwhile;
        echo "</ul>";
        echo "</div>";
        wp_reset_query(); 
     ?>
</div>
<div class="second-teaser-widget-area">
<div class="skin">
    <?php if ( is_active_sidebar( 'second-teaser-widget-area' ) ) { ?>
        <?php dynamic_sidebar( 'second-teaser-widget-area' ); ?>
    <?php } else {  ?>    
        <div class="teaserlinks">
            <ul>
                <li><a class="symbol symbol-<?php echo $options['teaserlink1-symbol'] ?>" href="<?php echo $options['teaserlink1-url'] ?>"><?php echo $options['teaserlink1-title'] ?> <span><?php echo $options['teaserlink1-untertitel'] ?></span></a></li>
                <li><a class="symbol symbol-<?php echo $options['teaserlink2-symbol'] ?>" href="<?php echo $options['teaserlink2-url'] ?>"><?php echo $options['teaserlink2-title'] ?> <span><?php echo $options['teaserlink2-untertitel'] ?></span></a></li>
                <li><a class="symbol symbol-<?php echo $options['teaserlink3-symbol'] ?>" href="<?php echo $options['teaserlink3-url'] ?>"><?php echo $options['teaserlink3-title'] ?> <span><?php echo $options['teaserlink3-untertitel'] ?></span></a></li>
            </ul>
        </div>

    <?php }  ?>
</div>
</div>
