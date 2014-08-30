<?php           
  global $defaultoptions;
  global $options;
 
     
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
			     echo '<img src="'.$current.'" style="max-width: '.$defaultoptions['plakate-width'].'px;" alt="';                                                      
			     if ((isset($options['plakate-title'])) && (strlen(trim($options['plakate-title']))>2)) {   
				   echo $options['plakate-title'];     
			     }
			     echo '">';                                                      			     
			     echo '</a>';   
			 } else {
			      echo '<img src="'.$current.'" style="max-width: '.$defaultoptions['plakate-width'].'px;" alt="">';                                                      
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
                                    echo '<img src="'.$thisurl.'" style="max-width: '.$defaultoptions['plakate-width'].'px;" alt="';
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
 
        
   