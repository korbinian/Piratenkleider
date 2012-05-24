<?php           
  global $defaultoptions;
  global $defaultplakate_liste;
  $options = get_option( 'piratenkleider_theme_options' );
  if (!isset($options['slider-defaultwerbeplakate'])) 
       $options['slider-defaultwerbeplakate'] = $defaultoptions['slider-defaultwerbeplakate'];
  
   
  
    if ( $options['newsletter'] == "1" ){
     ?>                   
        <div class="newsletter">
             <h2><?php _e("Newsletter", 'piratenkleider'); ?></h2>
                        <form method="post" action="<?php echo $options['url-newsletteranmeldung']; ?>">						
                                <label for="email-newsletter"><?php _e("Zum Newsletter anmelden", 'piratenkleider'); ?></label>
                                <input type="text" name="email-newsletter" id="email-newsletter" value="<?php _e("E-Mail-Adresse eingeben", 'piratenkleider'); ?>" placeholder="<?php _e("E-Mail-Adresse eingeben", 'piratenkleider'); ?>"
                                       onfocus="if(this.value=='<?php _e("E-Mail-Adresse eingeben", 'piratenkleider'); ?>')this.value='';" onblur="if(this.value=='')this.value='<?php _e("E-Mail-Adresse eingeben", 'piratenkleider'); ?>';">
                                <input type="submit" name="email-button" value="<?php _e("anmelden", 'piratenkleider'); ?>" id="newslettersubmit">
                                <p><?php _e("Hinweis: Beim Aufruf wird der Webauftritt verlassen.", 'piratenkleider'); ?>
                                </p>
                        </form>           
        </div>
    <?php }

    
  if ( is_active_sidebar( 'sidebar-widget-area' ) )  {
            dynamic_sidebar( 'sidebar-widget-area' );     
   }    
   

  


   if ( $options['slider-defaultwerbeplakate'] == "1" ) {     
       $plakate = get_option( 'piratenkleider_theme_defaultbilder'); 
       if ((is_array($plakate['plakate-src'])) || 
                ((isset($plakate['plakate-altadressen']))
                 && (strlen(trim($plakate['plakate-altadressen']))>5))
           ) {
            echo '<div class="flexslider fs2 no-js" style="width: '.$defaultoptions['plakate-width'].'px;">';         
            echo '<ul class="slides">';                               
                   if (is_array($plakate['plakate-src'])) {              
                     foreach ($plakate['plakate-src'] as $current) {                        
                         echo '<li class="slide">';                         
                         echo '<img src="'.$current.'" width="'.$defaultoptions['plakate-width'].'" height="'.$defaultoptions['plakate-height'].'" alt="">';                                                      
                         if ((isset($plakate['plakate-title'])) && (strlen(trim($plakate['plakate-title']))>2)) {                                                                                      
                             echo '<div class="caption"><p class="bebas">';                             
                              if ((isset($plakate['plakate-url'])) && (strlen(trim($plakate['plakate-url']))>2)) {
                                 echo '<a href="'.$plakate['plakate-url'].'">';
                             }
                             echo $plakate['plakate-title'];                                                   
                             if ((isset($plakate['plakate-url'])) && (strlen(trim($plakate['plakate-url']))>2)) {
                                 echo '</a>';
                             }
                             echo '</p></div>';     
                         }                           
                         echo '</li>';
                        
                     }
                 
                  } 
               
                  if (isset($plakate['plakate-altadressen'])) {                  
                        $alturls = preg_split("/[\n\r]+/", $plakate['plakate-altadressen']);
                        if (is_array( $alturls )) {
                            foreach ( $alturls  as $current) {
                                list($thisurl,$thistitel,$thisweb) = explode("|", $current);
                                $thisurl = esc_url( $thisurl );
                                $thisweb = esc_url ($thisweb);
                                
                                if ($thisurl <> '') {
                                
                                    echo '<li class="slide">';                         
                                    echo '<img src="'.$thisurl.'" width="'.$defaultoptions['plakate-width'].'" height="'.$defaultoptions['plakate-height'].'" alt="">';                                                      
                                    if ((isset($thistitel)) && (strlen(trim($thistitel))>2)) {                                                                                      
                                        echo '<div class="caption"><p class="bebas">';                             
                                        if ((isset($thisweb)) && (strlen(trim($thisweb))>2)) {
                                            echo '<a href="'.$thisweb.'">';
                                        }
                                        echo $thistitel;                                                   
                                        if ((isset($thisweb)) && (strlen(trim($thisweb))>2)) {
                                            echo '</a>';
                                        }
                                        echo '</p></div>';     
                                    }                           
                                    echo '</li>';
                            
                                 }            
                              }
                        }
                  }     
                ?>                   
            </ul>
        </div>
<?php }
   }
   if ( is_active_sidebar( 'sidebar-widget-area-afterplakate' ) )  {
          dynamic_sidebar( 'sidebar-widget-area-afterplakate' );     
   }    
 if ( $options['feed_twitter'] != "" ){ ?>
       
        <div class="twitterwidget">
             <hr>
                <h2><a href="https://twitter.com/#!/<?php echo $options['feed_twitter']; ?>">twitter.com/<?php echo $options['feed_twitter']; ?></a></h2>
                <ul id="tweet_container"></ul>                                                              
        </div>
<?php }?>
