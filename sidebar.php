<?php                    
  $options = get_option( 'piratenkleider_theme_options' );
  if (!isset($options['slider-defaultwerbeplakate'])) 
       $options['slider-defaultwerbeplakate'] = $defaultoptions['slider-defaultwerbeplakate'];
  
  if ( is_active_sidebar( 'sidebar-widget-area' ) )  {
            dynamic_sidebar( 'sidebar-widget-area' );     
   }    
   if ( $options['slider-defaultwerbeplakate'] == "1" ) {
    ?>
    <hr>
    <div class="flexslider fs2">
            <ul class='slides'>
                <?php 
                $plakate = get_option( 'piratenkleider_theme_defaultbilder'); 
                   if (is_array($plakate['plakate-src'])) {
                     foreach ($plakate['plakate-src'] as $current) {
                         ?>
                         <li class="slide"><img src="<?php echo $current ?>" width="277" height="391" alt=""></li>
                        <?php 
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
       ?>
    <hr>
   <?php 
            dynamic_sidebar( 'sidebar-widget-area-afterplakate' );     
   }    
 if ( $options['feed_twitter'] != "" ){ ?>
<script>
var twitter_name = "<?php echo $options['feed_twitter']; ?>";
var twitter_count = <?php echo $options['feed_twitter_numberarticle']; ?>;
</script>
<hr>
<div class="twitterwidget">
	<h3><a href="https://twitter.com/#!/<?php echo $options['feed_twitter']; ?>">twitter.com/<?php echo $options['feed_twitter']; ?></a></h3>
	<ul id="tweet_container"></ul>
</div>
<?php }?>