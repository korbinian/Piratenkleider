<?php 
    global $options;
    global $defaultoptions;
 ?>   
</div>

<div class="section footer">
    <div class="row">
        <?php get_sidebar( 'footer' ); ?>
        <?php get_sidebar( 'footer-secondary' ); ?>  
    </div>
    <nav role="navigation">
        <ul class="nav skiplinks">		
		<li><a class="ym-skip" id="skiplink-top" href="#top"><?php _e( 'Nach oben springen.', 'piratenkleider' ); ?></a></li>
		<li><a class="ym-skip" id="skiplink-content-bottom" href="#main-content"><?php _e( 'Zum Beginn des Inhaltes springen.', 'piratenkleider' ); ?></a></li>
		<?php if ( $options['aktiv-suche'] == "1" ){ ?>
                <li><a class="ym-skip" id="skiplink-search-bottom" href="#searchform"><?php _e( 'Zur Suche springen.', 'piratenkleider' ); ?></a></li>
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
          || (($options['slider-aktiv']==1) && is_category() && ($options['category-startpageview']==1))
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
                nextText: "<?php _e('Vor','piratenkleider'); ?>",
                prevText: "<?php _e('Zur&uuml;ck','piratenkleider'); ?>",
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
	    if( empty( $nosidebar ) || $nosidebar==0) {
		
	    
            ?>
     <script type="text/javascript">
        /* <![CDATA[ */
         $htmlOnSwitch = '<div class="switchoff"><a href="#"><abbr title="<?php _e('Leiste ausblenden','piratenkleider'); ?>">&#9654;</abbr></a></div>';
         $htmlOffSwitch = '<div class="switchon" ><a href="#"><abbr title="<?php _e('Leiste anzeigen','piratenkleider'); ?>">&#9664;</abbr></a></div>';
        /* ]]> */
    </script> 
	<?php } }
    if ((isset($options['aktiv-wombat'])) && ($options['aktiv-wombat']==1)) { ?>
	<div id="wombat">
	    <img src="<?php echo get_template_directory_uri() ?>/images/wombat-orange-klein.png" alt="">
	</div>   
   <?php }   
    
   if (isset($options['html-eigene-anweisungen'])
        && strlen(trim($options['html-eigene-anweisungen'])) > 0) {
       echo $options['html-eigene-anweisungen'];     
   }  ?>       
</body>
</html>