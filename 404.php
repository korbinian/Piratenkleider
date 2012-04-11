<?php get_header(); ?>

<div class="section content">
  <div class="row">
    <div class="content-primary">
      <div class="content-header">       
         <div class="symbolbild"> 
              <img src="<?php echo get_bloginfo('template_url'); ?>/images/404.png" alt="" width="640" height="240" >
               <div class="caption">  
                   <h3>Datei nicht gefunden</h3>
                   <h2>404</h2>
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

          
        <?php 
       if ( has_nav_menu( 'primary' ) ) {
            wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary', 'walker'  => new My_Walker_Nav_Menu()) );      
        } else { 
        ?>
          <ul class="menu">
              <?php  wp_page_menu( ); ?>
          </ul>
           <?php 
         } 
       
         ?>
         <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
