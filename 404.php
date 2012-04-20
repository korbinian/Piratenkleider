<?php get_header(); ?>

<div class="section content">
  <div class="row">
    <div class="content-primary">
      <div class="content-header">
          <h1>Seite nicht gefunden</h1>
         <div class="symbolbild">                   
              <img src="<?php echo get_bloginfo('template_url'); ?>/images/404.png" alt=""  >
               <div class="caption">  
                   <p style="font-size: 2em;" class="bebas">404</p>                  
               </div>   
           </div> 
         
      </div>
      <div class="skin">
          <p> 
              Die von Ihnen gesuchte Seite konnte nicht gefunden werden.
          </p>
         <p>
             Möchten Sie stattdessen im Webauftritt suchen?
         </p>    
              
         <?php get_search_form(); ?>
      </div>
    </div>

    <div class="content-aside">
      <div class="skin">
        <h1 class="skip">Weitere Informationen</h1>
         <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
