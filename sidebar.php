<?php           
  global $defaultoptions;
  global $options;
 
  
    if ( $options['newsletter'] == "1" ){
     ?>                   
        <div class="newsletter">
             <h2><?php _e("Newsletter", 'piratenkleider'); ?></h2>
                        <form method="post" action="<?php echo $options['url-newsletteranmeldung']; ?>">						
                                <label for="email-newsletter"><?php _e("Zum Newsletter anmelden", 'piratenkleider'); ?></label>
                                <input type="text" name="email" id="email-newsletter" value="<?php _e("E-Mail-Adresse eingeben", 'piratenkleider'); ?>" 
				       placeholder="<?php _e("E-Mail-Adresse eingeben", 'piratenkleider'); ?>"
                                       onfocus="if(this.value=='<?php _e("E-Mail-Adresse eingeben", 'piratenkleider'); ?>')this.value='';" 
				       onblur="if(this.value=='')this.value='<?php _e("E-Mail-Adresse eingeben", 'piratenkleider'); ?>';">
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
       if ( ((isset($options['plakate-src']) && (is_array($options['plakate-src'])))) || 
            ((isset($options['plakate-altadressen'])) && (strlen(trim($options['plakate-altadressen']))>5))
           ) {
            echo '<div class="slidersidebar fs2 no-js" style="width: '.$defaultoptions['plakate-width'].'px;">';         
            echo '<ul class="slides">';                               
                   if (is_array($options['plakate-src'])) {              
                     foreach ($options['plakate-src'] as $current) {                        
                         echo '<li class="slide">';                         
                                                
			 if ((isset($options['plakate-url'])) && (strlen(trim($options['plakate-url']))>2)) {
			     echo '<a href="'.$options['plakate-url'].'">';
			     echo '<img src="'.$current.'" style="max-width: '.$defaultoptions['plakate-width'].';" alt="';                                                      
                             // width="'.$defaultoptions['plakate-width'].'" height="'.$defaultoptions['plakate-height'].'" 
			     if ((isset($options['plakate-title'])) && (strlen(trim($options['plakate-title']))>2)) {   
				   echo $options['plakate-title'];     
			     }
			     echo '">';                                                      			     
			     echo '</a>';   
			 } else {
			      echo '<img src="'.$current.'" style="max-width: '.$defaultoptions['plakate-width'].';" alt="">';                                                      
                              // width="'.$defaultoptions['plakate-width'].'" height="'.$defaultoptions['plakate-height'].'"
			 }
			     
			                           
                         echo '</li>';                        
                     }                 
                  } 
               
                  if ((isset($options['plakate-altadressen'])) && (strlen(trim($options['plakate-altadressen']))>2)) {                  
                        $alturls = preg_split("/[\n\r]+/", $options['plakate-altadressen']);
                        if (is_array( $alturls )) {
                            foreach ( $alturls  as $current) {
                                list($thisurl,$thistitel,$thisweb) = explode("|", $current);
                                $thisurl = esc_url( $thisurl );
                                $thisweb = esc_url ($thisweb);
                                
                                if ($thisurl <> '') {                                
                                    echo '<li class="slide">';      
				    if ((isset($thisweb)) && (strlen(trim($thisweb))>2)) {
                                            echo '<a href="'.$thisweb.'">';
                                    }					
                                    echo '<img src="'.$thisurl.'" style="max-width: '.$defaultoptions['plakate-width'].';" alt="';
                                    // width="'.$defaultoptions['plakate-width'].'" height="'.$defaultoptions['plakate-height'].'"
				     if ((isset($thistitel)) && (strlen(trim($thistitel))>2)) {  
					 echo wp_filter_nohtml_kses($thistitel);     
				     }
				    echo '">';                                                      

				    if ((isset($thisweb)) && (strlen(trim($thisweb))>2)) {
                                            echo '</a>';
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
 
        
   