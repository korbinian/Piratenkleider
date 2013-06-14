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
    <ul role="navigation" class="nav skiplinks">		
		<li><a class="ym-skip" id="skiplink-top" href="#top"><?php _e( 'Nach oben springen.', 'piratenkleider' ); ?></a></li>
		<li><a class="ym-skip" id="skiplink-content-bottom" href="#main-content"><?php _e( 'Zum Beginn des Inhaltes springen.', 'piratenkleider' ); ?></a></li>
		<?php if ( $options['aktiv-suche'] == "1" ){ ?>
                <li><a class="ym-skip" id="skiplink-search-bottom" href="#searchform"><?php _e( 'Zur Suche springen.', 'piratenkleider' ); ?></a></li>
		<?php } ?>
	</ul>

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
       <script type="text/javascript" charset="utf-8">
        /* <![CDATA[ */
	jQuery(document).ready(function($) {
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
   
        if ($options['aktiv-dynamic-sidebar']==1) { 
            ?>
     <script type="text/javascript">
        /* <![CDATA[ */
        var $htmlOnSwitch = '<div class="switchoff"><a href="#"><abbr title="<?php _e('Leiste ausblenden','piratenkleider'); ?>">&#9654;</abbr></a></div>';
        var $htmlOffSwitch = '<div class="switchon" ><a href="#"><abbr title="<?php _e('Leiste anzeigen','piratenkleider'); ?>">&#9664;</abbr></a></div>';
        /* ]]> */
    </script> 
       <?php }
    
   if (isset($options['html-eigene-anweisungen'])
        && strlen(trim($options['html-eigene-anweisungen'])) > 0) {
       echo $options['html-eigene-anweisungen'];     
   }  ?>       
</body>
</html>