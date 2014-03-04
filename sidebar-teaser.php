<?php
   global $defaultoptions;
   global $defaultbilder_liste;
   global $options;  
?>          
<div class="first-teaser-widget-area">
<?php
   if ( is_active_sidebar( 'first-teaser-widget-area' ) ) {
        dynamic_sidebar( 'first-teaser-widget-area' ); 
    } else {        
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
            <h2 class="skip"><?php _e( 'Aktuelle Themen', 'piratenkleider' ); ?></h2>
            <ul class="slides">
        <?php 
        if ( have_posts() ) while ( have_posts() ) : the_post();
            echo "<li class='slide'>";
            if ($options['teaser-type'] == 'big') {
                $attribs = array(
                 "credits" => $options['img-meta-credits'],
                );
                              
                echo '<div class="bigslider">';
                if (has_post_thumbnail()) {    
                    $thumbid = get_post_thumbnail_id(get_the_ID());
                    $attribs = piratenkleider_get_image_attributs($thumbid);
                    $out = get_the_post_thumbnail(get_the_ID(),array($defaultoptions['bigslider-thumb-width'],$defaultoptions['bigslider-thumb-height']),array('alt'=> ''));
                    if (isset($out) && strlen($out)>0){
                        print $out;
                    } else {
                        $attribs = array(
                             "credits" => $options['img-meta-credits'],
                        );
                        echo '<img src="'.$defaultbildsrc.'" width="'.$defaultoptions['bigslider-thumb-width'].'" height="'.$defaultoptions['bigslider-thumb-height'].'" alt="">';                
                    }       
                } else {
                    if ((isset($defaultbildsrc)) && (strlen(trim($defaultbildsrc))>2)) {  
                        echo '<img src="'.$defaultbildsrc.'" width="'.$defaultoptions['bigslider-thumb-width'].'" height="'.$defaultoptions['bigslider-thumb-height'].'" alt="">';                
                    } else {
                        $randombild = array_rand($defaultbilder_liste,2);
                        echo '<img src="'.$defaultbilder_liste[$randombild[0]]['src'].'" width="'.$defaultoptions['bigslider-thumb-width'].'" height="'.$defaultoptions['bigslider-thumb-height'].'" alt="">'; 
                    }
                }
                echo '<div class="caption"><p class="cifont">'.$subtitle.'</p>';
                echo "<h3><a href=";
                the_permalink();
                echo ">";
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
                    if ((isset($defaultbildsrc)) && (strlen(trim($defaultbildsrc))>2)) {
                        echo '<img src="'.$defaultbildsrc.'" width="'.$defaultoptions['smallslider-thumb-width'].'" height="'.$defaultoptions['smallslider-thumb-height'].'" alt="">';                
                    } else {
                        $randombild = array_rand($defaultbilder_liste,2);
                        echo '<img src="'.$defaultbilder_liste[$randombild[0]]['src'].'" width="'.$defaultoptions['smallslider-thumb-width'].'" height="'.$defaultoptions['smallslider-thumb-height'].'" alt="">'; 
                    }
                }              
                echo "<h3><a href=";
                the_permalink();
                echo ">";
                the_title();
                echo '</a></h3><div class="teaser-excerpt">';
                echo get_piratenkleider_custom_excerpt();
                echo "</div></div>";          
            }
            
            echo "</li>";
        endwhile;
        echo "</ul>";
        echo "</div>";
        wp_reset_query(); 
    } ?>
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
