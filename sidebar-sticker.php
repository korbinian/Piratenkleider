<div class="sticker-widget-area">
<?php if ( is_active_sidebar( 'sticker-widget-area' ) )  {
 dynamic_sidebar( 'sticker-widget-area' );
} else { 
    $options = get_option( 'piratenkleider_theme_options' );
    if ( $options['defaultwerbesticker'] == "1" ){
    ?>
   <div class="widget">			
       <div class="textwidget">
           <h3 class="visuallyhidden">Sticker</h3>
           <ul>
               <li><a class="member" href="https://www.piratenpartei.de/mitmachen/mitglied-werden/">werde Pirat!</a></li>
               <li><a class="spenden"  href="https://www.piratenpartei.de/mitmachen/spenden/">Unterstütze uns mit deiner Spende!</a></li>                                  
           </ul>                      
      </div> 
   </div>    
<?php  } } ?>
</div>
