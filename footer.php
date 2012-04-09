<div class="section footer">
    <div class="row">
        <?php get_sidebar( 'footer' ); ?>
        <?php get_sidebar( 'footer-secondary' ); ?>  
    </div>
  </div>



<?php 
    wp_footer();     
    if ( is_home() ) { 
      $options = get_option( 'piratenkleider_theme_options' );
      $slideshowSpeed = $options['slider-slideshowSpeed'];    
      $animationDuration = $options['slider-animationDuration'];    
      if ($slideshowSpeed <1000) {$slideshowSpeed=8000;}
      if ($animationDuration <100) {$animationDuration=600;}
     ?>
    <script src="<?php echo get_bloginfo('template_url'); ?>/js/flexslider.js"></script>  
    <script type="text/javascript" charset="utf-8">
    $(window).load(function() {
       $('.flexslider').flexslider({
         slideshowSpeed: <?php echo $slideshowSpeed ?>,
         animationDuration: <?php echo $animationDuration ?>
       });
    });    

    </script>
    <?php } ?>
    <script src="<?php echo get_bloginfo('template_url'); ?>/js/twitter.js"></script>
</body>
</html>