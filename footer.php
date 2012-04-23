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
      
      $slideshowSpeed = $options['slider-slideshowSpeed'];    
      $animationDuration = $options['slider-animationDuration'];    
      $slideDirection = $options['slider-Direction']; 
      $animationType = $options['slider-animationType']; 

      if (($options['slider-aktiv']==1) || ($options['slider-defaultwerbeplakate']==1)) {
        if ($slideshowSpeed <1000) {$slideshowSpeed=8000;}
        if ($animationDuration <100) {$animationDuration=600;}
        if (! isset($slideDirection)) $slideDirection = 'horizontal';
        if (! isset($animationType)) $animationType = 'slide';
        
     ?>
    <script src="<?php echo get_bloginfo('template_url'); ?>/js/flexslider.js"></script>  
    
    <script type="text/javascript">
        /* <![CDATA[ */
    $(window).load(function() {
       $('.flexslider').flexslider({
         slideshowSpeed: <?php echo $slideshowSpeed ?>,
         animationDuration: <?php echo $animationDuration ?>,
         slideDirection: "<?php echo $slideDirection ?>",
         animation: "<?php echo $animationType ?>",
         pausePlay: true,
       });
    });    
    /* ]]> */
    </script> 
    <?php } ?>
    <?php if ( $options['feed_twitter'] != "" ){ ?>     
     <script type="text/javascript">
        /* <![CDATA[ */
        var twitter_name = "<?php echo $options['feed_twitter']; ?>";
        var twitter_count = <?php echo $options['feed_twitter_numberarticle']; ?>;
        /* ]]> */
        </script>
    <script src="<?php echo get_bloginfo('template_url'); ?>/js/twitter.js"></script>
    
    <?php } ?>
</body>
</html>