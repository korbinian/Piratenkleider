<!DOCTYPE html>
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="ie8"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->

<head>
<?php          
  global $defaultoptions;
  $options = get_option( 'piratenkleider_theme_options' );
   if (!isset($options['defaultwerbesticker'])) 
            $options['defaultwerbesticker'] = $defaultoptions['defaultwerbesticker'];
   if (!isset($options['alle-socialmediabuttons'])) 
            $options['alle-socialmediabuttons'] = $defaultoptions['alle-socialmediabuttons'];   
   if (!isset($options['newsletter'])) 
            $options['newsletter'] = $defaultoptions['newsletter'];
   if (!isset($options['url-newsletteranmeldung'])) 
            $options['url-newsletteranmeldung'] = $defaultoptions['url-newsletteranmeldung'];
    if (!isset($options['stickerlink1-content'])) 
        $options['stickerlink1-content'] = $defaultoptions['stickerlink1-content'];
    if (!isset($options['stickerlink1-url'])) 
        $options['stickerlink1-url'] = $defaultoptions['stickerlink1-url'];
    if (!isset($options['stickerlink2-content'])) 
        $options['stickerlink2-content'] = $defaultoptions['stickerlink2-content'];
    if (!isset($options['stickerlink2-url'])) 
        $options['stickerlink2-url'] = $defaultoptions['stickerlink2-url'];
    if (!isset($options['stickerlink2-content'])) 
        $options['stickerlink3-content'] = $defaultoptions['stickerlink3-content'];
    if (!isset($options['stickerlink3-url'])) 
        $options['stickerlink3-url'] = $defaultoptions['stickerlink3-url'];
   if (!isset($options['aktiv-suche'])) 
        $options['aktiv-suche'] = $defaultoptions['aktiv-suche'];
   if (!isset($options['aktiv-linkmenu'])) 
       $options['aktiv-linkmenu'] = $defaultoptions['aktiv-linkmenu'];   
   $designspecials = get_option( 'piratenkleider_theme_designspecials' );
   if (isset($designspecials['css-default-header-height'])
        && ($designspecials['css-default-header-height'] > 0)    
        && ($designspecials['css-default-header-height'] != $defaultoptions['css-default-header-height'])) {
       $cssadd .= '.header { height: '.$designspecials['css-default-header-height'].'px; }';
       $cssadd .= "\n";
    }
    if (isset($designspecials['css-default-header-background-color'])
         && (strlen($designspecials['css-default-header-background-color'])>3)) {
        $cssadd .= '.header { background-color: '.$designspecials['css-default-header-background-color'].'; }';
        $cssadd .= "\n";
    }
    if (isset($designspecials['css-default-header-background-image'])
         && (strlen($designspecials['css-default-header-background-image'])>2)) {
        $cssadd .= '.header { background-image: '.$designspecials['css-default-header-background-image'].'; }';
        $cssadd .= "\n";
    }
     if (isset($designspecials['css-default-header-background-position'])
         && (strlen($designspecials['css-default-header-background-position'])>2)) {
        $cssadd .= '.header { background-position: '.$designspecials['css-default-header-background-position'].'; }';
        $cssadd .= "\n";
    }   
     if (isset($designspecials['css-default-header-background-repeat'])
         && (strlen($designspecials['css-default-header-background-repeat'])>2)) {
        $cssadd .= '.header { background-repeat: '.$designspecials['css-default-header-background-repeat'].'; }';
        $cssadd .= "\n";
    } 
    
    if (isset($designspecials['css-default-branding-padding-top'])
        && ($designspecials['css-default-branding-padding-top'] > 0)    
        && ($designspecials['css-default-branding-padding-top'] != $defaultoptions['css-default-branding-padding-top'])) {
       $cssadd .= '.header .branding { padding-top: '.$designspecials['css-default-branding-padding-top'].'px; }';
       $cssadd .= "\n";
    }
    if (isset($designspecials['css-eigene-anweisungen'])) {
       $cssadd .= $designspecials['css-eigene-anweisungen'];
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
if ((isset( $options['meta-keywords'] )) && ( strlen(trim($options['meta-keywords']))>1 )) { ?>
    <meta name="keywords" content="<?php echo $options['meta-keywords'] ?>">
<?php } ?>

<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon.png">
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );
	wp_head(); ?>

<!--[if lte IE 7]>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/yaml/core/iehacks.min.css" type="text/css"/>
<![endif]-->

<?php if (isset($cssadd)) {
  echo "<style type=\"text/css\">\n";  
  echo $cssadd;  
  echo "</style>\n";  
} ?>
</head>
                      
<body <?php body_class(); ?>>

	<ul role="navigation" class="nav skiplinks">		
		<li><a class="ym-skip" href="#nav"><?php echo $defaultoptions['default_text_title_skiplink_mainnav']; ?></a></li>
		<li><a class="ym-skip" href="#main-content"><?php echo $defaultoptions['default_text_title_skiplink_content']; ?></a></li>
                <li><a class="ym-skip" href="#searchform"><?php echo $defaultoptions['default_text_title_skiplink_search']; ?></a></li>
	</ul>


	<div class="section header">
		<div class="row">
			<div class="branding">
                            <?php if ( ! is_home() ) { ?>
                            <a href="<?php echo home_url( '/' ); ?>" title="<?php echo $defaultoptions['default_text_title_home_backlink']; ?>" rel="home" class="logo">
                            <?php }                                 
                               function piratenkleider_header_style() {} 
                            ?>                                                             
                                <h1><img src="<?php header_image(); ?>" alt="<?php bloginfo( 'name' ); ?>"></h1>
                            <?php if ( ! is_home() ) { ?> </a>  <?php } ?> 
			</div>
                      
			<div class="nav-top" role="navigation">				                                                        
				<h2 class="skip"><?php echo $defaultoptions['default_text_title_techmenu']; ?></h2>
                                 <?php 
                                    if ( $options['alle-socialmediabuttons'] == "1" ){
                                 ?> 
                                 <ul class="socialmedia">
					<?php if ( $options['social_facebook'] != "" ){ ?><li class="facebook"><a href="<?php echo$options['social_facebook']; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/social-media/facebook-24x24.png" width="24" height="24" alt="Facebook"></a></li><?php } ?>
					<?php if ( $options['social_twitter'] != "" ){ ?><li class="twitter"><a href="<?php echo$options['social_twitter']; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/social-media/twitter-24x24.png" width="24" height="24" alt="Twitter"></a></li><?php } ?>
					<?php if ( $options['social_youtube'] != "" ){ ?><li class="youtube"><a href="<?php echo$options['social_youtube']; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/social-media/youtube-24x24.png" width="24" height="24" alt="YouTube"></a></li><?php } ?>
					<?php if ( $options['social_gplus'] != "" ){ ?><li class="gplus"><a href="<?php echo$options['social_gplus']; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/social-media/gplus-24x24.png" width="24" height="24" alt="Google+"></a></li><?php } ?>
					<?php if ( $options['social_diaspora'] != "" ){ ?><li class="diaspora"><a href="<?php echo$options['social_diaspora']; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/social-media/diaspora-24x24.png" width="24" height="24" alt="Diaspora"></a></li><?php } ?>
					<?php if ( $options['social_identica'] != "" ){ ?><li class="identica"><a href="<?php echo$options['social_identica']; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/social-media/identica-24x24.png" width="24" height="24" alt="identi.ca"></a></li><?php } ?>															
                                        <?php if ( $options['social_flickr'] != "" ){ ?><li class="flickr"><a href="<?php echo$options['social_flickr']; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/social-media/flickr-24x24.png" width="24" height="24" alt="flickr"></a></li><?php } ?>		
                                        <?php if ( $options['social_delicious'] != "" ){ ?><li class="delicious"><a href="<?php echo$options['social_delicious']; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/social-media/delicious-24x24.png" width="24" height="24" alt="Delicious"></a></li><?php } ?>		
				</ul>
                                
				<?php
                                    }
                                    if ( $options['aktiv-linkmenu'] == "1" ){
                                     if ( has_nav_menu( 'top' ) ) {
                                            wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'top' ) );
                                        } else { ?>
                                    <div class="menu-header">
                                        <ul id="menu-topmenu" class="menu">
                                            <li><a href="https://wiki.piratenpartei.de">Wiki</a></li>
                                            <li><a href="https://lqfb.piratenpartei.de">Liquid Feedback</a></li>                                           
                                            <li><a href="http://news.piratenpartei.de">Forum</a></li>
                                            <li><a href="http://flaschenpost.piratenpartei.de/">Flaschenpost</a></li>
                                        </ul>
                                    </div>                                                                                
                                 <?php } } 
                                 if ( $options['aktiv-suche'] == "1" ){
                                    get_search_form(); 
                                 }
                                   ?>
                                
			</div>
                   
			<div class="nav-main" role="navigation" id="nav">
				<h2 class="skip"><?php echo $defaultoptions['default_text_title_mainnav']; ?></h2>
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

                    <?php if ( $options['defaultwerbesticker'] == "1" ){ ?>
         
			<div class="sticker">
                            <div class="skin">   
                               <h2 class="skip"><?php echo $defaultoptions['default_text_title_sticker']; ?></h2>
                               <?php 
                               
                               
                                ?>
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
    
    
    

	

	

