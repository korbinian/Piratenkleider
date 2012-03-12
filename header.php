<!DOCTYPE html>
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html <?php language_attributes(); ?> class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<meta name="description" content="Stärkung der Bürgerrechte, mehr Demokratie und Mitbestimmung, Reform des Urheber- und Patentrechts, Grundeinkommen, freier Wissensaustausch, informationelle Selbstbestimmung, mehr Transparenz und Informationsfreiheit, freie Bildung">
<meta name="author" content="Korbinian Polk">

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
			<a href="<?php echo home_url( '/' ); ?>" title="Link zur Startseite" rel="home" class="logo">
				<img src="<?php echo get_bloginfo('template_url'); ?>/assets/logo.png" alt="Logo <?php bloginfo( 'name' ); ?>">
			</a>
			<h1 class="visuallyhidden"><?php bloginfo( 'name' ); ?></h1>
			<p class="visuallyhidden"><?php bloginfo( 'description' ); ?></p>
			</div>
			<div class="sticker">
				<div class="skin">
					<?php get_sidebar( 'sticker' ); ?>
				</div>
			</div>
			<div class="nav-top" role="navigation">
				<?php get_search_form(); ?>
				<h2 class="visuallyhidden">Topnavigation</h2>
				<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'top' ) ); ?>
				<ul class="socialmedia">
					<li class="facebook"><a href="http://www.facebook.com/PiratenparteiDeutschland">Facebook</a></li>
					<li class="twitter"><a href="https://twitter.com/#!/piratenpartei">Twitter</a></li>
					<li class="youtube"><a href="http://www.youtube.com/user/piratenpartei">Youtube</a></li>
					<li class="gplus"><a href="http://www.youtube.com/user/piratenpartei">G+</a></li>
					<li class="diaspora"><a href="https://joindiaspora.com/u/piratenpartei">Diaspora</a></li>
					<li class="identica"><a href="http://identi.ca/piratenpartei">identi.ca</a></li>
				</ul>
			</div>
			<div class="newsletter">
				<div class="skin">
					<form Method=POST ACTION="https://service.piratenpartei.de/subscribe/newsletter">
						<legend>Piratenpartei-Newsletter</legend>
						<input type="text" name="email" placeholder="E-mail">
                        <input type="submit" name="email-button" value="abonnieren" id="newslettersubmit">
					</form>
				</div>
			</div>
			<div class="nav-main" role="navigation" id="nav">
				<h2 class="visuallyhidden">Hauptnavigation</h2>
				<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary', 'walker'  => new My_Walker_Nav_Menu()) ); ?>
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

	

	

