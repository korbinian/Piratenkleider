<!DOCTYPE html>
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html <?php language_attributes(); ?> class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->

<head>
<?php                    
  $options = get_option( 'piratenkleider_theme_options' );
?>  
<meta charset="<?php bloginfo( 'charset' ); ?>">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<?php if (isset( $options['meta-description'] ) ) { ?>
    <meta name="description" content="<?php echo $options['meta-description'] ?>">
<?php }
if (isset( $options['meta-author'] ) ) { ?>
    <meta name="author" content="<?php echo $options['meta-author'] ?>">
<?php }
if (isset( $options['meta-keywords'] ) ) { ?>
    <meta name="keywords" content="<?php echo $options['meta-keywords'] ?>">
<?php } ?>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width">
<meta http-equiv="cleartype" content="on">
<link rel="apple-touch-icon" href="<?php echo get_bloginfo('template_url'); ?>/apple-touch-icon.png">
<link rel="shortcut icon" href="<?php echo get_bloginfo('template_url'); ?>/favicon.ico">

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>">
<!--[if lt IE 9 ]>  <link rel="stylesheet" type="text/css" media="all" href="<?php echo get_bloginfo('template_url'); ?>/ie.css">  <![endif]-->
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );
	wp_head(); ?>
</head>
                      
<body <?php body_class(); ?>>

	<ul role="navigation" class="nav skiplinks">
		<li><a href="#searchform" title="zur Suche springen">zur Suche springen</a></li>
		<li><a href="#nav" title="zur Navigation springen">zur Navigation springen</a></li>
		<li><a href="#main-content" title="zum Inhalt springen">zum Inhalt springen</a></li>
	</ul>


	<div class="section header">
		<div class="row">
			<div class="branding">
                            <?php if ( ! is_home() ) { ?>
                            <a href="<?php echo home_url( '/' ); ?>" rel="home" class="logo">
                            <?php }                                 
                               function piratenkleider_header_style() {} 
                            ?>                                                             
                                <img src="<?php header_image(); ?>" alt="Logo <?php bloginfo( 'name' ); ?>">
                            <?php if ( ! is_home() ) { ?> </a>  <?php } ?> 
                            <h1 class="visuallyhidden"><?php bloginfo( 'name' ); ?></h1>
                            <p class="visuallyhidden"><?php bloginfo( 'description' ); ?></p>
			</div>
                      <?php if ( $options['defaultwerbesticker'] == "1" ){ ?>
			<div class="sticker">
                            <div class="skin">   
                               <h3 class="visuallyhidden">Sticker</h3>
                               <ul>
                                   <li><a class="member" href="https://www.piratenpartei.de/mitmachen/mitglied-werden/">werde Pirat!</a></li>
                                   <li><a class="spenden" href="https://www.piratenpartei.de/mitmachen/spenden/">Unterstütze uns mit deiner Spende!</a></li>                                  
                               </ul>                      
                            </div>                                     
			</div>
                        <?php   } ?>
			<div class="nav-top" role="navigation">
				<?php get_search_form(); ?>
				<h2 class="visuallyhidden">Topnavigation</h2>
				<?php
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
                                    <?php }
                                    if ( $options['alle-socialmediabuttons'] == "1" ){
                                 ?> 
                                 <ul class="socialmedia">
					<?php if ( $options['social_facebook'] != "" ){ ?><li class="facebook"><a href="<?php echo$options['social_facebook']; ?>">Facebook</a></li><?php } ?>
					<?php if ( $options['social_twitter'] != "" ){ ?><li class="twitter"><a href="<?php echo$options['social_twitter']; ?>">Twitter</a></li><?php } ?>
					<?php if ( $options['social_youtube'] != "" ){ ?><li class="youtube"><a href="<?php echo$options['social_youtube']; ?>">Youtube</a></li><?php } ?>
					<?php if ( $options['social_gplus'] != "" ){ ?><li class="gplus"><a href="<?php echo$options['social_gplus']; ?>">G+</a></li><?php } ?>
					<?php if ( $options['social_diaspora'] != "" ){ ?><li class="diaspora"><a href="<?php echo$options['social_diaspora']; ?>">Diaspora</a></li><?php } ?>
					<?php if ( $options['social_identica'] != "" ){ ?><li class="identica"><a href="<?php echo$options['social_identica']; ?>">identi.ca</a></li><?php } ?>															
				</ul>
                                 <?php }?>
			</div>
                    <?php 
                       if ( $options['newsletter'] == "1" ){
                     ?>               

			<div class="newsletter">
				<div class="skin">
					<form method="post" action="https://service.piratenpartei.de/subscribe/newsletter">
						<legend>Piratenpartei-Newsletter</legend>
						<input type="text" name="email" placeholder="E-mail">
                                                <input type="submit" name="email-button" value="abonnieren" id="newslettersubmit">
					</form>
				</div>
			</div>
                    <?php }?>
			<div class="nav-main" role="navigation" id="nav">
				<h2 class="visuallyhidden">Hauptnavigation</h2>
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
		</div>
	</div>

	<div class="section breadcrumbs">
		<div class="row">
			<div class="skin">
				<?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
			</div>
		</div>
	</div>

	

	

