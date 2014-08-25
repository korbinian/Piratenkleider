<?php 
    global $options;
    global $defaultoptions;
 ?>   

</div> <!-- #content-body --> 
<div class="section footer">
    <div class="row">
        <?php get_sidebar( 'footer' ); ?>
        <?php get_sidebar( 'footer-secondary' ); ?>  
    </div>
    <nav role="navigation">
        <ul class="nav skiplinks">		
		<li><a class="p3-skip" id="skiplink-top" href="#top"><?php _e( 'Back to top.', 'piratenkleider' ); ?></a></li>
		<li><a class="p3-skip" id="skiplink-content-bottom" href="#main-content"><?php _e( 'Back to start of content.', 'piratenkleider' ); ?></a></li>
		<?php if ( $options['aktiv-suche'] == "1" ){ ?>
                <li><a class="p3-skip" id="skiplink-search-bottom" href="#searchform"><?php _e( 'Back to search form.', 'piratenkleider' ); ?></a></li>
		<?php } ?>
	</ul>
    </nav>
  </div>

<?php 
    wp_footer();     
   
      $slideshowSpeed = $options['slider-slideshowSpeed'];    
      $animationDuration = $options['slider-animationDuration'];    
      $slideDirection = $options['slider-Direction']; 
      $animationType = $options['slider-animationType']; 

       if  ( (($options['slider-aktiv']==1) && (is_home() || is_front_page()))
          || (is_category() && ($options['category-teaser']==1))
          || ( get_page_template_slug( ) )     
	  || ($options['slider-defaultwerbeplakate']==1)  ) {
        if ($slideshowSpeed <1000) {$slideshowSpeed=8000;}
        if ($animationDuration <100) {$animationDuration=600;}
        if (! isset($slideDirection)) $slideDirection = 'horizontal';
        if (! isset($animationType)) $animationType = 'slide';        
        ?>
       <script src="<?php echo $defaultoptions['src-flexslider'] ?>"></script>      
       <script type="text/javascript">
        /* <![CDATA[ */
	jQuery(document).ready(function($) {
         <?php if ($options['slider-aktiv']==1) { ?>        
	 $('.flexslider').flexslider({
	    slideshowSpeed: <?php echo $slideshowSpeed ?>,
	    animationSpeed: <?php echo $animationDuration ?>,
	    direction: "<?php echo $slideDirection ?>",
	    animation: "<?php echo $animationType ?>",
	    pausePlay: true,
	    keyboard: true,
	    multipleKeyboard: true,
	    touch: true,
            directionNav: false,
            controlNav: true,     
            pauseText: "<?php _e('Stop','piratenkleider'); ?>",
            playText: "<?php _e('Start','piratenkleider'); ?>",            
           });	   
         <?php } 
         if ($options['slider-defaultwerbeplakate']==1) { ?>
                 
          var breite = $(window).width();
          if (breite > 600) {        
             $('.slidersidebar').flexslider({
                slideshowSpeed: <?php echo $slideshowSpeed ?>,
                animationSpeed: <?php echo $animationDuration ?>,
                animation: "fade",
                pausePlay: true,
                keyboard: true,
                multipleKeyboard: true,
                touch: true,
                smoothHeight: true, 
                directionNav: true,
                controlNav: false,
                nextText: "<?php _e('Next','piratenkleider'); ?>",
                prevText: "<?php _e('Back','piratenkleider'); ?>",
                pauseText: "<?php _e('Stop','piratenkleider'); ?>",
                playText: "<?php _e('Start','piratenkleider'); ?>",
               });
           }
	   <?php } ?>
	});        
	
    /* ]]> */
      </script> 
    <?php }  
   
        if ($options['aktiv-dynamic-sidebar']==1) { 
	    $nosidebar = get_post_meta( get_the_ID(), 'piratenkleider_nosidebar', true );
	    if( empty( $nosidebar ) || $nosidebar==0) {  ?>
     <script type="text/javascript">
        /* <![CDATA[ */
         $htmlOnSwitch = '<div class="switchoff"><a href="#"><abbr title="<?php _e('Hide sidebar','piratenkleider'); ?>">&#9654;</abbr></a></div>';
         $htmlOffSwitch = '<div class="switchon" ><a href="#"><abbr title="<?php _e('Show sidebar','piratenkleider'); ?>">&#9664;</abbr></a></div>';
        /* ]]> */
    </script> 
	<?php } }  
    
   if (isset($options['html-eigene-anweisungen'])
        && strlen(trim($options['html-eigene-anweisungen'])) > 0) {
       echo $options['html-eigene-anweisungen'];     
   }  ?>       
</body>
</html>