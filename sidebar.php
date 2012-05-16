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
    ?>
     
     <div class="flexslider fs2 no-js">
        
            <ul class='slides'>
                <?php 
                $plakate = get_option( 'piratenkleider_theme_defaultbilder'); 

                   if (is_array($plakate['plakate-src'])) {
                     foreach ($plakate['plakate-src'] as $current) {
                         ?>
                         <li class="slide"><img src="<?php echo $current ?>" width="277" height="391" alt=""></li>
                        <?php 
                     }
                 
                  } else {

                      if (strlen(trim($plakate['plakate-altadressen']))<2) {
                        foreach ( $defaultplakate_liste as $dthis ) {    
                            if (isset($dthis['src'])) {
                            ?>
                            <li class="slide"><img src="<?php echo $dthis['src'] ?>" width="277" height="391" alt=""></li>
                            <?php       

                            }
                        }
                      }
                  }
                  if (isset($plakate['plakate-altadressen'])) {
                      $alturls = preg_split("/[\s,]+/", $plakate['plakate-altadressen']);
                      if (is_array( $alturls )) {
                        foreach ( $alturls  as $current) {
                            $thisurl = esc_url( $current );
                            if ($thisurl <> '') {
                               ?>
                              <li class="slide"><img src="<?php echo  $thisurl ?>" width="277" height="391" alt=""></li>
                             <?php  
                            }
                        
                         }
                     }
                  }
                ?>                   
            </ul>
        </div>
<?php }
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
