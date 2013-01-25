<?php
/**
*  If 'Default Events Template' is selected in Settings -> The Events Calendar -> Theme Settings -> Events Template, 
*  then this file loads the page template for all for the individual 
*  event view.  Generally, this setting should only be used if you want to manually 
*  specify all the shell HTML of your ECP pages in this template file.  Use one of the other Theme 
*  Settings -> Events Template to automatically integrate views into your 
*  theme.
*
* You can customize this view by putting a replacement file of the same name (ecp-single-template.php) in the events/ directory of your theme.
*/

// Don't load directly
if ( !defined('ABSPATH') ) { die('-1'); }
?>
<?php get_header();
 $options = get_option( 'piratenkleider_theme_options' );  
 $kontaktinfos = get_option( 'piratenkleider_theme_kontaktinfos' );  
 $bilderoptions = get_option( 'piratenkleider_theme_defaultbilder' ); 
   if (!isset($bilderoptions['src-default-symbolbild'])) 
            $bilderoptions['src-default-symbolbild'] = $defaultoptions['src-default-symbolbild'];
?>
<?php tribe_events_before_html() ?>
<div class="section content" id="main-content">
  <div class="row">
    <div class="content-primary">
      <div class="content-header">
        <h1 id="page-title"><span><?php tribe_events_title();  the_title() ?></span></h1>   
        <?php if (has_post_thumbnail()) { 
            echo '<div class="symbolbild">';
              the_post_thumbnail(); 
            echo '</div>';  
        } else {            
           if ($options['aktiv-platzhalterbilder-indexseiten']) { ?>         
            <div class="symbolbild"> 
              <img src="<?php echo $bilderoptions['src-default-symbolbild']?>" alt="" >
           </div>                                 
          <?php }     
            }   
         ?>
      </div>
      <div class="skin">
          
          

<div id="container">
	<div id="content" class="tribe-events-event widecolumn">
		<?php the_post(); global $post; ?>
		<div id="post-<?php the_ID() ?>" <?php post_class() ?>>
			<h2 class="entry-title"><?php the_title() ?></h2>
			<?php include(tribe_get_current_template()) ?>
			<?php edit_post_link(__('Edit','tribe-events-calendar'), '<span class="edit-link">', '</span>'); ?>
		</div><!-- post -->
		<?php if(tribe_get_option('showComments','no') == 'yes'){ comments_template();} ?>
	</div><!-- #content -->
</div><!--#container-->

   </div>
    </div>

    <div class="content-aside">
      <div class="skin">

        <h1 class="skip"><?php _e( 'Weitere Informationen', 'piratenkleider' ); ?></h1>   
            <?php
            if (!isset($options['zeige_subpagesonly'])) 
            $options['zeige_subpagesonly'] = $defaultoptions['zeige_subpagesonly'];
  
            if (!isset($options['zeige_sidebarpagemenu'])) 
            $options['zeige_sidebarpagemenu'] = $defaultoptions['zeige_sidebarpagemenu'];
           
 		    if (!isset($options['seitenmenu_mode'])) 
            $options['seitenmenu_mode'] = $defaultoptions['seitenmenu_mode'];
            get_piratenkleider_seitenmenu($options['zeige_sidebarpagemenu'],$options['zeige_subpagesonly'],$options['seitenmenu_mode']);

        
            get_sidebar(); ?>
      </div>
    </div>
  </div>
</div>
      
<?php tribe_events_after_html() ?>
<?php get_footer(); ?>

             