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
       if ( ((isset($plakate['plakate-src']) && (is_array($plakate['plakate-src'])))) || 
            ((isset($plakate['plakate-altadressen'])) && (strlen(trim($plakate['plakate-altadressen']))>5))
           ) {
            echo '<div class="flexslider fs2 no-js" style="width: '.$defaultoptions['plakate-width'].'px;">';         
            echo '<ul class="slides">';                               
                   if (is_array($plakate['plakate-src'])) {              
                     foreach ($plakate['plakate-src'] as $current) {                        
                         echo '<li class="slide">';                         
                                                
			 if ((isset($plakate['plakate-url'])) && (strlen(trim($plakate['plakate-url']))>2)) {
			     echo '<a href="'.$plakate['plakate-url'].'">';
			     echo '<img src="'.$current.'" width="'.$defaultoptions['plakate-width'].'" height="'.$defaultoptions['plakate-height'].'" alt="';                                                      
			     if ((isset($plakate['plakate-title'])) && (strlen(trim($plakate['plakate-title']))>2)) {   
				   echo $plakate['plakate-title'];     
			     }
			     echo '">';                                                      			     
			     echo '</a>';   
			 } else {
			      echo '<img src="'.$current.'" width="'.$defaultoptions['plakate-width'].'" height="'.$defaultoptions['plakate-height'].'" alt="">';                                                      
			 }
			     
			                           
                         echo '</li>';                        
                     }                 
                  } 
               
                  if ((isset($plakate['plakate-altadressen'])) && (strlen(trim($plakate['plakate-altadressen']))>2)) {                  
                        $alturls = preg_split("/[\n\r]+/", $plakate['plakate-altadressen']);
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
                                    echo '<img src="'.$thisurl.'" width="'.$defaultoptions['plakate-width'].'" height="'.$defaultoptions['plakate-height'].'" alt="';
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
 if ( $options['feed_twitter'] != "" ){
      
       if (!isset($options['feed_twitter_numberarticle'])) {
           $options['feed_twitter_numberarticle'] = 5;
       }
       if ($options['feed_twitter_numberarticle']==0) {
           $options['feed_twitter_numberarticle'] =5;
       }

       $name = trim($options['feed_twitter']);

       $fetchlink = $defaultoptions['url-twitterapi'].'?screen_name='.$name.'&count='.$options['feed_twitter_numberarticle'];
        // Get a SimplePie feed object from the specified feed source.
 

       if (!isset($options['twitter_cache_lifetime'])) {
             $options['twitter_cache_lifetime'] = $defaultoptions['twitter_cache_lifetime'];             
             if ($options['twitter_cache_lifetime'] <= 0) $options['twitter_cache_lifetime'] = 43200;
        }
        $lifetime = $options['twitter_cache_lifetime'];
        $maxitems = 0;       
        $rss = piratenkleider_fetch_feed($fetchlink,$lifetime);
        if (!is_wp_error( $rss ) ) : // Checks that the object is created correctly 
            // Figure out how many total items there are, but limit it to 5. 
            $maxitems = $rss->get_item_quantity($options['feed_twitter_numberarticle']); 

            // Build an array of all the items, starting with element 0 (first element).
            $rss_items = $rss->get_items(0, $maxitems); 
        endif;   ?>

        <div class="twitterwidget">
             <hr>
             <h2><img src="<?php echo get_template_directory_uri(); ?>/images/social-media/twitter-24x24.png" width="24" height="24" alt=""><a href="https://twitter.com/<?php echo $name; ?>">twitter.com/<?php echo $name; ?></a></h2>

            <ul>
                <?php if ($maxitems == 0) echo '<li>'.__( 'Es konnten keine Tweets geladen werden', 'piratenkleider' ).'</li>'; 
                else
                // Loop through each feed item and display each item as a hyperlink.
                foreach ( $rss_items as $item ) : 
                    echo '<li>';
                   
                     $thisentry = esc_attr( $item->get_title() ); 
  
                    $thisentry = preg_replace("/^$name: /i", '', $thisentry);
                    $thisentry = preg_replace('/\b((ftp|https?):\/\/[a-z0-9A-Z\-_\.\/]+)\b/i', ' <a href="$1">$1</a>', $thisentry);                      
                    $thisentry = preg_replace('/#([A-Za-z0-9]+)\b/i', '<a href="http://search.twitter.com/search?q=$1">#$1</a>', $thisentry);
                    $thisentry = preg_replace('/\@([A-Za-z0-9_]+)\b/i', '<a href="http://www.twitter.com/$1">@$1</a>', $thisentry);
                    echo $thisentry;
                    if ($options['feed_twitter_showdate']==1) {
                        echo '<span class="feed_date">(';                        
                        echo '<a href="'.esc_url( $item->get_permalink()).'">';
                        echo date_i18n(get_option('date_format').", ".get_option('time_format'),strtotime($item->get_date()));
                        echo ' '.__( 'Uhr', 'piratenkleider' );                            
                        echo '</a>)</span> ';
                    }
                    
                    echo "</li>";
                endforeach;
                ?>
            </ul>
        </div>      
        
        
     <?php }?>   
        
   