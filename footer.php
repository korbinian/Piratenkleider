<div class="section footer">
    <div class="row">
        <?php get_sidebar( 'footer' ); ?>
        <?php get_sidebar( 'footer-secondary' ); ?>  
    </div>
  </div>



<?php 
    wp_footer();     
   
      $options = get_option( 'piratenkleider_theme_options' );
      $slideshowSpeed = $options['slider-slideshowSpeed'];    
      $animationDuration = $options['slider-animationDuration'];    
      $slideDirection = $options['slider-Direction']; 
      $animationType = $options['slider-animationType']; 
      
      if ($slideshowSpeed <1000) {$slideshowSpeed=8000;}
      if ($animationDuration <100) {$animationDuration=600;}
      if (! isset($slideDirection)) $slideDirection = 'horizontal';
      if (! isset($animationType)) $animationType = 'slide';
     ?>
    <script src="<?php echo get_bloginfo('template_url'); ?>/js/flexslider.js"></script>  
    <script type="text/javascript" charset="utf-8">
    $(window).load(function() {
       $('.flexslider').flexslider({
         slideshowSpeed: <?php echo $slideshowSpeed ?>,
         animationDuration: <?php echo $animationDuration ?>,
         slideDirection: "<?php echo $slideDirection ?>",
         animation: "<?php echo $animationType ?>"
       });
    });    
    </script> 
    <script src="<?php echo get_bloginfo('template_url'); ?>/js/twitter.js"></script>
</body>
</html>