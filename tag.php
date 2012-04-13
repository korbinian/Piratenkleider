<?php get_header(); ?>
<div class="section content">
  <div class="row">
    <div class="content-primary">
      <div class="content-header">
          <div class="symbolbild"> 
              <img src="<?php echo get_bloginfo('template_url'); ?>/images/default-kategorien.png" alt="" width="640" height="240" >
               <div class="caption">  
                   <h2><?php printf( __( 'Schlagwörterarchiv: %s', 'twentyten' ), '' . single_cat_title( '', false ) . '' ); ?></h2>
               </div>   
           </div>   
      </div>
        <div class="skin">
	<?php get_template_part( 'loop', 'tag' );?>


       </div>
    </div>

    <div class="content-aside">
      <div class="skin">                 
         <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
