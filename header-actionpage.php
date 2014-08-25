<!DOCTYPE html>
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="ie8"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->
<head>
<?php          
  global $defaultoptions;
  global $options;
?>  
<title><?php wp_title( '|', true, 'right' ); ?></title> 
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ) ?>">    
    <?php  wp_head(); 
   $cssadd = '';
  
    if (isset($options['css-eigene-anweisungen'])) {
       $cssadd .= $options['css-eigene-anweisungen'];
       $cssadd .= "\n";
    }
    if ((isset($cssadd)) && (strlen(trim($cssadd))>1)) {
	echo "<style type=\"text/css\">\n";  
	echo $cssadd;  
	echo "</style>\n";  
    } ?>
</head>                      
<body <?php body_class(); ?>>
    <nav role="navigation">
            <ul id="top" class="nav skiplinks">		
                <li><a id="skiplink-nav" href="#nav"><?php _e( 'Jump to navigation.', 'piratenkleider' ); ?></a></li>
                <li><a id="skiplink-content" href="#main-content"><?php _e( 'Jump to content.', 'piratenkleider' ); ?></a></li>
            </ul>
    </nav>
    <header class="section header actionpage" role="banner">
            <div class="row">

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
                                <ul id="menu-topmenu" class="menu">  <?php  
                                foreach ( $default_toplink_liste as $entry => $listdata ) {        
                                    $value = '';
                                    $active = 0;
                                    if (isset($options['toplinkliste'][$entry]['content'])) {
                                            $value = $options['toplinkliste'][$entry]['content'];
                                    } else {
                                            $value = $default_toplink_liste[$entry]['content'];
                                     }
                                     if (isset($options['toplinkliste'][$entry]['active'])) {
                                            $active = $options['toplinkliste'][$entry]['active'];        
                                     }    
                                    if (($active ==1) && ($value)) {
                                        echo "\t\t\t";
                                        echo '<li><a class="icon_'.$entry.'" href="'.$value.'">';
                                        echo $listdata['name'].'</a></li>';
                                        echo "\n";
                                    }
                                }  ?>
                                </ul>
                                </div> 
                            <?php    
                            }
                        } 
                    } ?>
                   

                </div>       
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
            </div>
    </header>    
    <div id="content-body">


    
