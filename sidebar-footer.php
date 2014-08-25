<div class="first-footer-widget-area">
    <div class="skin">
        <?php if ( is_active_sidebar( 'first-footer-widget-area' ) ) { ?>
            <?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
        <?php } else { 
                  
	    global $default_footerlink_liste;   
	    global $defaultoptions;
	    global $options;
        
            if ((is_array($default_footerlink_liste)) && ($options['default_footerlink_show']==1)) {     
                  $bereich = $options['default_footerlink_key'];
                  if (!isset($default_footerlink_liste[$bereich]['sublist'])) {
                      $bereich =  $defaultoptions['default_footerlink_key'];
                  }
                  if (isset($default_footerlink_liste[$bereich]['sublist'])) {
                    $title =   $default_footerlink_liste[$bereich]['title'];
                    $url =   $default_footerlink_liste[$bereich]['url'];


                    if ((isset($url)) && (strlen($url)>5)) {
                            echo '<h2><a href="'.$url.'">'.$title.'</a></h2>';
                    } else {
                            echo "<h2>".$title."</h2>";
                    }
                    echo '<ul class="default_footerlinks">';
                    foreach($default_footerlink_liste[$bereich]['sublist'] as $i => $value) {
                        echo '<li><a href="'.$value.'">';                                                                                                        
                        echo $i.'</a></li>';
                        echo "\n";
                    }            
                    echo '</ul>';  
                  }
           }
        } ?>      
    </div>
</div>
