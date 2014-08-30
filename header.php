<!DOCTYPE html>
<!--[if IE 8 ]>  <html <?php language_attributes(); ?> class="ie8"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html <?php echo piratenkleider_html_tag_schema(); ?> <?php language_attributes(); ?>> <!--<![endif]-->
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
    <nav aria-label="Skiplinks">
	<ul id="top" class="nav skiplinks">		
	    <li><a id="skiplink-nav" href="#nav"><?php _e( 'Jump to navigation.', 'piratenkleider' ); ?></a></li>
	    <li><a id="skiplink-content" href="#main-content"><?php _e( 'Jump to content.', 'piratenkleider' ); ?></a></li>
	    <?php if ( $options['aktiv-suche'] == "1" ){ ?><li><a id="skiplink-search" href="#searchform"><?php _e( 'Jump to search form.', 'piratenkleider' ); ?></a></li><?php } ?>
	</ul>
    </nav>
    <header class="section header">
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
                            if (is_array($default_toplink_liste)) {  ?>
                                <div class="menu-header">
                                <ul id="menu-topmenu" class="menu"><?php  
				echo "\n";
                                foreach ( $default_toplink_liste as $entry => $listdata ) {        
                                    $value = '';
                                    $active = 0;
                                    if ((isset($options['toplinkliste'])) && 
                                            (isset($options['toplinkliste'][$entry]['content']))) {
                                            $value = $options['toplinkliste'][$entry]['content'];
                                            if (isset($options['toplinkliste'][$entry]['active'])) {
                                                $active = $options['toplinkliste'][$entry]['active'];        
                                            } 
                                    } else {
                                            $value = $default_toplink_liste[$entry]['content'];
                                            $active = $default_toplink_liste[$entry]['active'];                                                    
                                     }
                                        
                                    if (($active ==1) && ($value)) {
                                        echo "\t\t\t\t\t\t";
                                        echo '<li><a class="icon_'.$entry.'" href="'.$value.'">';
                                        echo $listdata['name'].'</a></li>';
                                        echo "\n";
                                    }
                                }  
				?>
				</ul>
                            </div> 
                            <?php    
                            }
                        } 
                    } 
                    if ( $options['aktiv-suche'] == "1" ){ ?>
                        <div class="search-top">
			    <h2 class="skip"><?php _e("Search", 'piratenkleider'); ?></h2>
			    <form method="get" class="searchform" action="<?php echo home_url('','relative'); ?>/" role="search">
				    <label class="skip" for="s"><?php _e("Searching for", 'piratenkleider'); ?>:</label>
				    <input type="text" value="<?php the_search_query(); ?>" name="s" id="s" placeholder="<?php _e("Enter search term", 'piratenkleider'); ?>"  
					onfocus="if(this.value=='<?php _e("Enter search term", 'piratenkleider'); ?>')this.value='';" onblur="if(this.value=='')this.value='<?php _e("Enter search term", 'piratenkleider'); ?>';" />
				    <input type="submit" class="searchsubmit" value="<?php _e("Search", 'piratenkleider'); ?>" />
			    </form>
                        </div>
                     <?php } ?>
                </div>
		<div class="branding" role="banner" itemprop="publisher" itemscope itemtype="http://schema.org/Organization">
        <?php if ( ! is_home() ) { ?>
                  <a itemprop="url" href="<?php echo home_url( '/' ); ?>" title="<?php echo $defaultoptions['default_text_title_home_backlink']; ?>" rel="home" class="logo">
              <?php } ?>                                                             
              <h1><img itemprop="logo" src="<?php header_image(); ?>" alt="<?php bloginfo( 'name' ); ?>"></h1>
              <meta itemprop="name" content="<?php echo esc_attr(piratenkleider_tag_schema_org_name()); ?>" />              
              <?php if ( ! is_home() ) { ?>
                  </a>
              <?php } if (strlen(trim(get_bloginfo( 'description' )))>1) { ?>
                  <p class="description slogan" itemprop="description"><?php echo esc_attr(piratenkleider_tag_schema_org_desc()); ?></p>
              <?php } ?>
    </div>
	       
                <div class="sticker" aria-hidden="true">
                        <?php if ( $options['defaultwerbesticker'] == "1" ){ ?> 
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
                         <?php   } ?>
                </div>
                
                <nav aria-label="<?php _e( 'Navigation', 'piratenkleider' ); ?>" class="nav-main" id="nav" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
                            <h2 class="skip"><?php _e( 'Navigation', 'piratenkleider' ); ?></h2>
                            <?php 
                            if ( has_nav_menu( 'primary' ) ) {
                                wp_nav_menu( array(  'theme_location' => 'primary', 'walker'  => new Piratenkleider_Menu_Walker()) );      
                            } else { ?>
                                <div class="menu-hauptmenu-container">
                                    <ul id="menu-mainmenu" class="menu">      
                                        <?php  wp_page_menu( array(
                                            'menu_class'  => '',
                                    'sort_column' => 'menu_order, post_title',
                                    'echo'        => 1,
                                    'show_home'   => 1 ) ); ?>          
                                    </ul>
                                </div>
                            <?php  } ?>
                </nav>        
               
        </div>
    </header>    

<?php if ($options['zeige_breadcrump']==1) { ?>
<div id="content-body" class="with-breadcrumb">
	<div class="section breadcrumbs">
	    <div class="row"><div class="skin">
		<?php if (function_exists('piratenkleider_breadcrumb')) piratenkleider_breadcrumb(); 
	    ?>
	    </div></div>
	</div>
<?php } else { ?>
<div id="content-body">
<?php } ?>


    
