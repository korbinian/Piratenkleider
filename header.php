<!DOCTYPE html>
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="ie8"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->

<head>
<?php          
  global $defaultoptions;
  global $options;

   
   $cssadd = '';
   if (isset($options['css-default-header-height'])
        && ($options['css-default-header-height'] > 0)    
        && ($options['css-default-header-height'] != $defaultoptions['css-default-header-height'])) {
       $cssadd .= '.header { height: '.$options['css-default-header-height'].'px; }';
       $cssadd .= "\n";
    }
    if (isset($options['css-default-branding-padding-top'])
        && ($options['css-default-branding-padding-top'] > 0)    
        && ($options['css-default-branding-padding-top'] != $defaultoptions['css-default-branding-padding-top'])) {
       $cssadd .= '.header .branding { padding-top: '.$options['css-default-branding-padding-top'].'px; }';
       $cssadd .= "\n";
    }
    if (isset($options['css-eigene-anweisungen'])) {
       $cssadd .= $options['css-eigene-anweisungen'];
       $cssadd .= "\n";
    }
?>  
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <!--[if IE]> <meta http-equiv="X-UA-Compatible" content="IE=9"> <![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
<?php
if ((isset( $options['meta-description'] )) && ( strlen(trim($options['meta-description']))>1 )) { ?>
    <meta name="description" content="<?php echo $options['meta-description'] ?>">
<?php }
if ((isset( $options['meta-author'] )) && ( strlen(trim($options['meta-author']))>1 )) { ?>
    <meta name="author" content="<?php echo $options['meta-author'] ?>">
<?php }
    piratenkleider_keywords(); ?>
    
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon.png">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
    <link rel="profile" href="http://gmpg.org/xfn/11" />
<?php 
  
   wp_head(); 
    
    echo '  <link rel="pingback" href="'.get_bloginfo( 'pingback_url' ).'">';    

?>

<!--[if lte IE 7]>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/yaml/core/iehacks.min.css" type="text/css"/>
<![endif]-->

<?php if ((isset($cssadd)) && (strlen(trim($cssadd))>1)) {
  echo "<style type=\"text/css\">\n";  
  echo $cssadd;  
  echo "</style>\n";  
} ?>
</head>
                      
<body <?php body_class(); ?>>
        <nav role="navigation">
            <ul id="top" class="nav skiplinks">		
		<li><a class="ym-skip" id="skiplink-nav" href="#nav"><?php _e( 'Zur Navigation springen.', 'piratenkleider' ); ?></a></li>
		<li><a class="ym-skip" id="skiplink-content" href="#main-content"><?php _e( 'Zum Inhalt springen.', 'piratenkleider' ); ?></a></li>
		<?php if ( $options['aktiv-suche'] == "1" ){ ?>
                <li><a class="ym-skip" id="skiplink-search" href="#searchform"><?php _e( 'Zur Suche springen.', 'piratenkleider' ); ?></a></li>
		<?php } ?>
            </ul>
        </nav>

	<div class="section header">
		<div class="row">
			<div class="branding">
                            <?php if ( ! is_home() ) { ?>
                            <a href="<?php echo home_url( '/' ); ?>" title="<?php echo $defaultoptions['default_text_title_home_backlink']; ?>" rel="home" class="logo">
                            <?php } ?>                                                             
                                <h1><img src="<?php header_image(); ?>" alt="<?php bloginfo( 'name' ); ?>"></h1>
                            <?php                                
                              if ( ! is_home() ) { ?> </a>  <?php } 
                              if (strlen(trim(get_bloginfo( 'description' )))>1) { ?> 
                            <p class="description slogan"><?php bloginfo( 'description' ); ?></p>
                            <?php } ?>
			</div>
                      
			<div class="nav-top" role="navigation">				                                                        
                            <h2 class="skip"><?php _e( 'Service-Navigation', 'piratenkleider' ); ?></h2>

                                <?php  
                                   get_piratenkleider_socialmediaicons(1);  

                                if ( $options['aktiv-linkmenu'] == "1" ){
                                    if ( has_nav_menu( 'top' ) ) {
                                        wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'top' ) );
                                    } else {
                                        global $default_toplink_liste;   

                                        if (is_array($default_toplink_liste)) {     ?>
                                            <div class="menu-header">
                                            <ul id="menu-topmenu" class="menu">
                                            <?php  
                                            foreach($default_toplink_liste as $i => $value) {
                                                echo '<li><a href="'.$value.'">';                                                                                                        
                                                echo $i.'</a></li>';
                                            }  
                                            ?>
                                            </ul>
                                        </div> 
                                        <?php    
                                        }
                                } 

                                } 
                                if ( $options['aktiv-suche'] == "1" ){ ?>
                                    <div id="searchform">
                                    <h2 class="skip"><?php _e("Suche", 'piratenkleider'); ?></h2>
                                    <form method="get" class="searchform" action="<?php echo home_url(); ?>/">
                                            <label class="visuallyhidden" for="s"><?php _e("Suche nach", 'piratenkleider'); ?>:</label>
                                            <input type="text" value="<?php the_search_query(); ?>" name="s" id="s" placeholder="<?php _e("Suchbegriff eingeben", 'piratenkleider'); ?>"  
                                                onfocus="if(this.value=='<?php _e("Suchbegriff eingeben", 'piratenkleider'); ?>')this.value='';" onblur="if(this.value=='')this.value='<?php _e("Suchbegriff eingeben", 'piratenkleider'); ?>';" />
                                            <input type="submit" class="searchsubmit" value="<?php _e("Suchen", 'piratenkleider'); ?>" />
                                    </form>
                                    </div>
                                 <?php } ?>
                                
			</div>
                        <nav role="navigation">
			<div class="nav-main"  id="nav">
				<h2 class="skip"><?php _e( 'Navigation', 'piratenkleider' ); ?></h2>
				<?php 
                                if ( has_nav_menu( 'primary' ) ) {
                                    wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary', 'walker'  => new My_Walker_Nav_Menu()) );      
                                } else { ?>
                                    <div class="menu-header">
                                        <ul id="menu-mainmenu" class="menu">      
                                            <?php  wp_page_menu( array(
                                        'sort_column' => 'menu_order, post_title',
                                        'echo'        => 1,
                                        'show_home'   => 1 ) ); ?>          
                                        </ul>
                                    </div>
                                <?php  } ?>
                                                                     
			</div>
                        </nav>        
                    <?php if ( $options['defaultwerbesticker'] == "1" ){ ?>
         
			<div class="sticker">
                            <div class="skin">   
                               <h2 class="skip"><?php _e( 'Sticker', 'piratenkleider' ); ?></h2>                             
                               <ul>
                                   <?php if (isset($options['stickerlink1-content']) && (strlen($options['stickerlink1-content']) > 1)
                                           && isset($options['stickerlink1-url']) && (strlen($options['stickerlink1-url']) > 5) ) {
                                       echo '<li><a href="'.$options['stickerlink1-url'].'">'.$options['stickerlink1-content'].'</a></li>';
                                   } ?>
                                   <?php if (isset($options['stickerlink2-content']) && (strlen($options['stickerlink2-content']) > 1)
                                           && isset($options['stickerlink2-url']) && (strlen($options['stickerlink2-url']) > 5) ) {
                                       echo '<li><a href="'.$options['stickerlink2-url'].'">'.$options['stickerlink2-content'].'</a></li>';
                                   } ?>
                                   <?php if (isset($options['stickerlink3-content']) && (strlen($options['stickerlink3-content']) > 1)
                                           && isset($options['stickerlink3-url']) && (strlen($options['stickerlink3-url']) > 5) ) {
                                       echo '<li><a href="'.$options['stickerlink3-url'].'">'.$options['stickerlink3-content'].'</a></li>';
                                   } ?>                                                                                                                         

                               </ul>                      
                            </div>                                                                                            
			</div>
                            
                    <?php   } ?>
		</div>
	</div>

	<div class="section breadcrumbs">
		<div class="row">
			<div class="skin">
				<?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
			</div>
		</div>
	</div>


	<div class="chrome-container">

