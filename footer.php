</div>

<div class="section footer">
    <div class="row">
        <?php get_sidebar( 'footer' ); ?>
        <?php get_sidebar( 'footer-secondary' ); ?>  
    </div>
  </div>

<?php 
    global $defaultoptions;
    wp_footer();     
   
      $options = get_option( 'piratenkleider_theme_options' );
      
        if (!isset($options['slider-slideshowSpeed'])) 
            $options['slider-slideshowSpeed'] = $defaultoptions['slider-slideshowSpeed'];
        if (!isset($options['slider-animationDuration'])) 
            $options['slider-animationDuration'] = $defaultoptions['slider-animationDuration'];
        if (!isset($options['slider-Direction'])) 
            $options['slider-Direction'] = $defaultoptions['slider-Direction'];
        if (!isset($options['slider-animationType'])) 
            $options['slider-animationType'] = $defaultoptions['slider-animationType'];
        if (!isset($options['slider-aktiv'])) 
            $options['slider-aktiv'] = $defaultoptions['slider-aktiv'];
        if (!isset($options['slider-defaultwerbeplakate'])) 
            $options['slider-defaultwerbeplakate'] = $defaultoptions['slider-defaultwerbeplakate'];
        if (!isset($options['category-startpageview'])) 
            $options['category-startpageview'] = $defaultoptions['category-startpageview'];  
      
        
       
      $slideshowSpeed = $options['slider-slideshowSpeed'];    
      $animationDuration = $options['slider-animationDuration'];    
      $slideDirection = $options['slider-Direction']; 
      $animationType = $options['slider-animationType']; 

       if  ( (($options['slider-aktiv']==1) && (is_home() || is_front_page()))
          || (($options['slider-aktiv']==1) && is_category() && ($options['category-startpageview']==1))
	  || ($options['slider-defaultwerbeplakate']==1)  ) {
        if ($slideshowSpeed <1000) {$slideshowSpeed=8000;}
        if ($animationDuration <100) {$animationDuration=600;}
        if (! isset($slideDirection)) $slideDirection = 'horizontal';
        if (! isset($animationType)) $animationType = 'slide';        
        ?>
       <script src="<?php echo get_template_directory_uri(); ?>/js/flexslider.js"></script>      
       <script type="text/javascript">
        /* <![CDATA[ */
    $(window).load(function() {
       $('.flexslider').flexslider({
         slideshowSpeed: <?php echo $slideshowSpeed ?>,
         animationDuration: <?php echo $animationDuration ?>,
         slideDirection: "<?php echo $slideDirection ?>",
         animation: "<?php echo $animationType ?>",
         pausePlay: true
       });
    });    
    /* ]]> */
      </script> 
    <?php }  
        if (!isset($options['aktiv-dynamic-sidebar'])) 
          $options['aktiv-dynamic-sidebar'] = $defaultoptions['aktiv-dynamic-sidebar'];      
        if ($options['aktiv-dynamic-sidebar']==1) { 
            ?>
     <script type="text/javascript">
        /* <![CDATA[ */
        var $htmlOnSwitch = '<div class="switchoff"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/ausblenden.png" width="18" height="18" alt="<?php _e('Leiste ausblenden','piratenkleider'); ?>"></a></div>';
        var $htmlOffSwitch = '<div class="switchon" ><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/einblenden.png" width="18" height="18" alt="<?php _e('Leiste anzeigen','piratenkleider'); ?>"></a></div>';
        /* ]]> */
    </script> 
       <?php }
    
   $designspecials = get_option( 'piratenkleider_theme_designspecials' );
   if (isset($designspecials['html-eigene-anweisungen'])
        && strlen(trim($designspecials['html-eigene-anweisungen'])) > 0) {
       echo $designspecials['html-eigene-anweisungen'];     
   }  ?>       
</body>
</html>