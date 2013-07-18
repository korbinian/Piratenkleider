<?php
/**
 * Piratenkleider Theme Optionen
 *
 * @source http://github.com/xwolfde/Piratenkleider
 * @creator xwolf
 * @version 2.17.10
 * @licence CC-BY-SA 3.0 
 */

require( get_template_directory() . '/inc/constants.php' );


$options = get_option('piratenkleider_theme_options');
$options = piratenkleider_compatibility($options);
    // adjusts variables for downwards comptability

// ** bw 2012-08-12 wordpress reverse proxy x-forwarded-for ip fix ** //
if(isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
  $xffaddrs = explode(',',$_SERVER['HTTP_X_FORWARDED_FOR']);
  $_SERVER['REMOTE_ADDR'] = $xffaddrs[0];
}    
if ($options['anonymize-user']==1) {
    /* IP-Adresse überschreiben */
    $_SERVER["REMOTE_ADDR"] = "0.0.0.0";
    /* UA-String überschreiben */
    $_SERVER["HTTP_USER_AGENT"] = "";    
    update_option('require_name_email',0);
}

if ($options['feed_cache_lifetime'] < 600) {
    $options['feed_cache_lifetime'] = 1800;
}

function feed_lifetime_cb( ) {
            global $options;
            // change the default feed cache recreation period to 2 hours
            return $options['feed_cache_lifetime'];
}
add_filter( 'wp_feed_cache_transient_lifetime' , 'feed_lifetime_cb' );
        

if ( ! isset( $content_width ) )   $content_width = $defaultoptions['content-width'];
require_once ( get_template_directory() . '/theme-options.php' );

add_action( 'after_setup_theme', 'piratenkleider_setup' );

if ( ! function_exists( 'piratenkleider_setup' ) ):
function piratenkleider_setup() {
     global $defaultoptions;
     global $options;
        // This theme styles the visual editor with editor-style.css to match the theme style.
        add_editor_style();
        // This theme uses post thumbnails
        add_theme_support( 'post-thumbnails' );
        // Add default posts and comments RSS feed links to head
        add_theme_support( 'automatic-feed-links' );
               
  
        $args = array(
            'width'         => 0,
            'height'        => 0,
            'default-image' => $defaultoptions['logo'],
            'uploads'       => true,
            'random-default' => false,                      
            'flex-height' => true,
            'flex-width' => true,
	    'header-text'   => false,
            'suggested-height' => $defaultoptions['logo-height'],
            'suggested-width' => $defaultoptions['logo-width'],
            'max-width' => 350,           
        );
       add_theme_support( 'custom-header', $args );
               
       $args = array(
	    'default-color' => $defaultoptions['background-header-color'],
	    'default-image' => $defaultoptions['background-header-image'],
	    'background_repeat'	=> 'repeat-x',
	    'background_position_x'  => 'left',
	    'background_position_y'  => 'bottom',
	    'wp-head-callback'       => 'piratenkleider_custom_background_cb',	
	);
       
	/**
	 * piratenkleider custom background callback.
	 *
	 */
	function piratenkleider_custom_background_cb() {
                 global $defaultoptions;
                 global $options;
	        // $background is the saved custom image, or the default image.
	        $background = set_url_scheme( get_background_image() );
	
	        // $color is the saved custom color.
	        // A default has to be specified in style.css. It will not be printed here.
	        $color = get_theme_mod( 'background_color' );
	
	        if ( ! $background && ! $color )
	                return;
                        
	        $style = $color ? "background-color: #$color;" : '';
	
	        if ( $background ) {
                        $image = " background-image: url('$background');";
                       
                       
	                $repeat = get_theme_mod( 'background_repeat', 'repeat-x' );
	                if ( ! in_array( $repeat, array( 'no-repeat', 'repeat-x', 'repeat-y', 'repeat' ) ) )
	                        $repeat = 'repeat-x';
	                $repeat = " background-repeat: $repeat;";
	
	                $positionx = get_theme_mod( 'background_position_x', 'left' );
	                if ( ! in_array( $positionx, array( 'center', 'right', 'left' ) ) )
	                        $positionx = 'left';
	                $positiony = get_theme_mod( 'background_position_y', 'bottom' );
	                if ( ! in_array( $positiony, array( 'top', 'bottom' ) ) )
	                        $positiony = 'bottom';
			
	                $position = " background-position: $positionx $positiony;";
	
	                $attachment = get_theme_mod( 'background_attachment', 'scroll' );
	                if ( ! in_array( $attachment, array( 'fixed', 'scroll' ) ) )
	                        $attachment = 'scroll';
	                $attachment = " background-attachment: $attachment;";
	
	                $style .= $image . $repeat . $position . $attachment;
	        } 
		
	    
	    echo '<style type="text/css" id="custom-background-css">';
	    echo '.header { '.trim( $style ).' } ';
	    echo '</style>';
	}       
       
	add_theme_support( 'custom-background', $args );
       
	if ( function_exists( 'add_theme_support' ) ) {
	    add_theme_support( 'post-thumbnails' );
	    set_post_thumbnail_size( 150, 150 ); // default Post Thumbnail dimensions   
	}

	if ( function_exists( 'add_image_size' ) ) { 
	    add_image_size( 'teaser-thumb', $options['teaser-thumbnail_width'], $options['teaser-thumbnail_height'], $options['teaser-thumbnail_crop'] ); //300 pixels wide (and unlimited height)
	}
	
        
        // Make theme available for translation
        // Translations can be filed in the /languages/ directory
        load_theme_textdomain('piratenkleider', get_template_directory() . '/languages');
        $locale = get_locale();
        $locale_file = get_template_directory() . "/languages/$locale.php";
        if ( is_readable( $locale_file ) )
                require_once( $locale_file );

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus( array(
                'primary' => __( 'Hauptnavigation (Statische Seiten)', 'piratenkleider' ),
                'top' => __( 'Linkmenu (Links zu Webportalen wie Wiki, Forum, etc)', 'piratenkleider' ),
                'sub' => __( 'Technische Navigation (Kontakt, Impressum, etc)', 'piratenkleider' ),
        ) );


       if ($options['login_errors']==0) {
        /** Abschalten von Fehlermeldungen auf der Loginseite */      
           add_filter('login_errors', create_function('$a', "return null;"));
       }        
        /** Entfernen der Wordpressversionsnr im Header */
        remove_action('wp_head', 'wp_generator');
	
	/* Zulassen von Shortcodes in Widgets */
	add_filter('widget_text', 'do_shortcode');
}
endif;

require( get_template_directory() . '/inc/widgets.php' );

function piratenkleider_scripts() {
    global $options;
    global $defaultoptions;


    wp_enqueue_script(
		'layoutjs',
		$defaultoptions['src-layoutjs'],
		array('jquery'),
                $defaultoptions['js-version']
	);
 
    if (is_singular() && ($options['aktiv-commentreplylink']==1) && get_option( 'thread_comments' )) {        
            wp_enqueue_script(
		'comment-reply',
		$defaultoptions['src-comment-reply'],
		false,
                $defaultoptions['js-version']
	);  
     }        
   

    if (is_singular() && ($options['aktiv-circleplayer']==1)) {
	 wp_enqueue_script(
		'jplayer',
		$defaultoptions['src-jplayer'],
		array('jquery'),
                $defaultoptions['js-version']
            );  
	  wp_enqueue_script(
		'transform2d',
		$defaultoptions['src-transform2d'],
		array('jplayer'),
                $defaultoptions['js-version']
            );  
	  wp_enqueue_script(
		'grab',
		$defaultoptions['src-grab'],
		array('jplayer'),
                $defaultoptions['js-version']
            );  
	  wp_enqueue_script(
		'csstransforms',
		$defaultoptions['src-csstransforms'],
		array('jplayer'),
                $defaultoptions['js-version']
            );  
	  wp_enqueue_script(
		'circleplayer',
		$defaultoptions['src-circleplayer'],
		array('jplayer'),
                $defaultoptions['js-version']
            );  
    }                    
}
add_action('wp_enqueue_scripts', 'piratenkleider_scripts');

function piratenkleider_avatar ($avatar_defaults) {
    global $defaultoptions;
    $myavatar =  $defaultoptions['src-default-avatar']; 
    $avatar_defaults[$myavatar] = "Piratenkleider";
    return $avatar_defaults;
}
add_filter( 'avatar_defaults', 'piratenkleider_avatar' );

/* Refuse spam-comments on media */
function filter_media_comment_status( $open, $post_id ) {
	$post = get_post( $post_id );
	if( $post->post_type == 'attachment' ) {
		return false;
	}
	return $open;
}
add_filter( 'comments_open', 'filter_media_comment_status', 10 , 2 );

if ( ! function_exists( 'get_piratenkleider_options' ) ) :
/*
 * Erstes Bild aus einem Artikel auslesen, wenn dies vorhanden ist
 */
function get_piratenkleider_options( $field ){
    global $defaultoptions;	    
    if (!isset($field)) {
	$field = 'piratenkleider_theme_options';
    }
    $orig = get_option($field);
    if (!is_array($orig)) {
        $orig=array();
    }
    $alloptions = array_merge( $defaultoptions, $orig  );	
    return $alloptions;
}
endif;


function piratenkleider_compatibility ($oldoptions) {
    global $defaultoptions;
    $doupdate = 0;
    
    $old_bilderarray =  get_option('piratenkleider_theme_defaultbilder');

    if (!is_array($oldoptions)) {
	$oldoptions = array();
    }
     
    if (is_array($old_bilderarray))  {      
	$newoptions = array_merge($defaultoptions,$old_bilderarray, $oldoptions);	  
	delete_option('piratenkleider_theme_defaultbilder');
	$doupdate = 1;
    } else {
	$newoptions = array_merge($defaultoptions,$oldoptions);	
    }    
    

    if ((isset($oldoptions['social_facebook'])) && (filter_var($oldoptions['social_facebook'], FILTER_VALIDATE_URL))) {
        $newoptions['sm-list']['facebook']['content'] = $oldoptions['social_facebook'];
        $newoptions['sm-list']['facebook']['active'] = 1;	
    }
    if ((isset($oldoptions['social_twitter'])) && (filter_var($oldoptions['social_twitter'], FILTER_VALIDATE_URL))) {
        $newoptions['sm-list']['twitter']['content'] = $oldoptions['social_twitter'];
        $newoptions['sm-list']['twitter']['active'] = 1;
    }    
    if ((isset($oldoptions['social_gplus'])) && (filter_var($oldoptions['social_gplus'], FILTER_VALIDATE_URL))) {
        $newoptions['sm-list']['gplus']['content'] = $oldoptions['social_gplus'];
        $newoptions['sm-list']['gplus']['active'] = 1;
    }   
    if ((isset($oldoptions['social_diaspora'])) && (filter_var($oldoptions['social_diaspora'], FILTER_VALIDATE_URL))) {
        $newoptions['sm-list']['diaspora']['content'] = $oldoptions['social_diaspora'];
        $newoptions['sm-list']['diaspora']['active'] = 1;
    }   
    if ((isset($oldoptions['social_identica'])) && (filter_var($oldoptions['social_identica'], FILTER_VALIDATE_URL))) {
        $newoptions['sm-list']['identica']['content'] = $oldoptions['social_identica'];
        $newoptions['sm-list']['identica']['active'] = 1;
    } 
    if ((isset($oldoptions['social_youtube'])) && (filter_var($oldoptions['social_youtube'], FILTER_VALIDATE_URL))) {
        $newoptions['sm-list']['youtube']['content'] = $oldoptions['social_youtube'];
        $newoptions['sm-list']['youtube']['active'] = 1;
    } 
    if ((isset($oldoptions['social_itunes'])) && (filter_var($oldoptions['social_itunes'], FILTER_VALIDATE_URL))) {
        $newoptions['sm-list']['itunes']['content'] = $oldoptions['social_itunes'];
        $newoptions['sm-list']['itunes']['active'] = 1;
    } 
    if ((isset($oldoptions['social_flickr'])) && (filter_var($oldoptions['social_flickr'], FILTER_VALIDATE_URL))) {
        $newoptions['sm-list']['flickr']['content'] = $oldoptions['social_flickr'];
        $newoptions['sm-list']['flickr']['active'] = 1;
    }     
    if ((isset($oldoptions['social_delicious'])) && (filter_var($oldoptions['social_delicious'], FILTER_VALIDATE_URL))) {
        $newoptions['sm-list']['delicious']['content'] = $oldoptions['social_delicious'];
        $newoptions['sm-list']['delicious']['active'] = 1;
    }  
    if ((isset($oldoptions['social_flattr'])) && (filter_var($oldoptions['social_flattr'], FILTER_VALIDATE_URL))) {
        $newoptions['sm-list']['flattr']['content'] = $oldoptions['social_flattr'];
        $newoptions['sm-list']['flattr']['active'] = 1;
    } 
    if ((isset($oldoptions['social_feed'])) && (filter_var($oldoptions['social_feed'], FILTER_VALIDATE_URL))) {
        $newoptions['sm-list']['feed']['content'] = $oldoptions['social_feed'];
        $newoptions['sm-list']['feed']['active'] = 1;
    }              

    if ((isset($oldoptions['category-startpageview'])) &&  $oldoptions['category-startpageview']==1) {
	if ((!isset($oldoptions['category-num-article-fullwidth'])) && (isset($oldoptions['num-article-startpage-fullwidth']))) {
	   $newoptions['category-num-article-fullwidth'] = $oldoptions['num-article-startpage-fullwidth'];
	}
	if ((!isset($oldoptions['category-num-article-halfwidth'])) && (isset($oldoptions['num-article-startpage-halfwidth']))) {
	   $newoptions['category-num-article-halfwidth'] = $oldoptions['num-article-startpage-halfwidth'];
	}
    }
    if ((isset($oldoptions['aktiv-images-instead-date'])) && ($oldoptions['aktiv-images-instead-date']==1) 
            && (!isset($oldoptions['teaser-datebox']))) {
        $oldoptions['teaser-datebox'] = 0;
    }
  
    
    
    $olddesignopt = get_option( 'piratenkleider_theme_designspecials' );
    if ((is_array($olddesignopt)) && (count($olddesignopt)>0)) {
	 $newoptions = array_merge($newoptions,$olddesignopt);
	delete_option('piratenkleider_theme_designspecials');
	$doupdate = 1;
    }
    $oldkontaktinfos = get_option( 'piratenkleider_theme_kontaktinfos' );
    if ((is_array($oldkontaktinfos)) && (count($oldkontaktinfos)>0)) {
	 $newoptions = array_merge($newoptions,$oldkontaktinfos);
	delete_option('piratenkleider_theme_kontaktinfos');
	$doupdate = 1;
    }
    
    
    
    
    if ($doupdate==1) {
	update_option('piratenkleider_theme_options', $newoptions);
    }

    return $newoptions;
}

if ( ! function_exists( 'piratenkleider_filter_wp_title' ) ) :   
/*
 * Sets the title
 */    
function piratenkleider_filter_wp_title( $title, $separator ) {
        // Don't affect wp_title() calls in feeds.
        if ( is_feed() )
                return $title;

        // The $paged global variable contains the page number of a listing of posts.
        // The $page global variable contains the page number of a single post that is paged.
        // We'll display whichever one applies, if we're not looking at the first page.
        global $paged, $page;

        if ( is_search() ) {
                // If we're a search, let's start over:
                $title = sprintf( __( 'Suchergebnisse f&uuml;r %s', 'piratenkleider' ), '"' . get_search_query() . '"' );
                // Add a page number if we're on page 2 or more:
                if ( $paged >= 2 )
                        $title .= " $separator " . sprintf( __( 'Seite %s', 'piratenkleider' ), $paged );
                // Add the site name to the end:
                $title .= " $separator " . get_bloginfo( 'name', 'display' );
                // We're done. Let's send the new title back to wp_title():
                return $title;
        }

        // Otherwise, let's start by adding the site name to the end:
        $title .= get_bloginfo( 'name', 'display' );

        // If we have a site description and we're on the home/front page, add the description:
        $site_description = get_bloginfo( 'description', 'display' );
        if ( $site_description && ( is_home() || is_front_page() ) )
                $title .= " $separator " . $site_description;

        // Add a page number if necessary:
        if ( $paged >= 2 || $page >= 2 )
                $title .= " $separator " . sprintf( __( 'Seite %s', 'piratenkleider' ), max( $paged, $page ) );

        // Return the new title to wp_title():
        return $title;
}
endif;
add_filter( 'wp_title', 'piratenkleider_filter_wp_title', 10, 2 );


function piratenkleider_excerpt_length( $length ) {
	global $defaultoptions;
        return $defaultoptions['teaser_maxlength'];
}
add_filter( 'excerpt_length', 'piratenkleider_excerpt_length' );

function piratenkleider_continue_reading_link() {
        return ' <a class="nobr" title="'.strip_tags(get_the_title()).'" href="'. get_permalink() . '">' . __( 'Weiterlesen <span class="meta-nav">&rarr;</span>', 'piratenkleider' ) . '</a>';
}

function piratenkleider_auto_excerpt_more( $more ) {
        return ' &hellip;' . piratenkleider_continue_reading_link();
}
add_filter( 'excerpt_more', 'piratenkleider_auto_excerpt_more' );


function piratenkleider_custom_excerpt_more( $output ) {
       if ( has_excerpt() && ! is_attachment() ) {      
                $output .= piratenkleider_continue_reading_link();
        }
        return $output;
}
add_filter( 'get_the_excerpt', 'piratenkleider_custom_excerpt_more' );



function piratenkleider_remove_gallery_css( $css ) {
        return preg_replace( "#<style type='text/css'>(.*?)</style>#s", '', $css );
}
add_filter( 'gallery_style', 'piratenkleider_remove_gallery_css' );


function honor_ssl_for_attachments($url) {
	$http = site_url(FALSE, 'http');
	$https = site_url(FALSE, 'https');
        return is_ssl() ? str_replace($http, $https, $url) : $url;
}
add_filter('wp_get_attachment_url', 'honor_ssl_for_attachments');

if ( ! function_exists( 'piratenkleider_comment' ) ) :
/**
 * Template for comments and pingbacks.
 */
function piratenkleider_comment( $comment, $args, $depth ) {
        $GLOBALS['comment'] = $comment;
        global $defaultoptions;
        global $options;         
        
        switch ( $comment->comment_type ) :
                case '' :
        ?>
        <li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
                <div id="comment-<?php comment_ID(); ?>">
                <div class="comment-details">
                    
                <div class="comment-author vcard">
                    <?php if ($options['aktiv-avatar']==1) {
                        echo '<div class="avatar">';
                        echo get_avatar( $comment, 48, $defaultoptions['src-default-avatar']); 
                        echo '</div>';   
                    } 
                    printf( __( '%s <span class="says">meinte am</span>', 'piratenkleider' ), sprintf( '<cite class="fn">%s</cite>', get_comment_author_link() ) ); 
                    ?>
                </div><!-- .comment-author .vcard -->
                <?php if ( $comment->comment_approved == '0' ) : ?>
                        <em><?php _e( 'Der Kommentar wartet auf die Freischaltung.', 'piratenkleider' ); ?></em>
                        <br />
                <?php endif; ?>

                <div class="comment-meta commentmetadata"><a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>">
                   <?php
                          /* translators: 1: date, 2: time */
                       printf( __( '%1$s um %2$s', 'piratenkleider' ), get_comment_date(),  get_comment_time() ); ?></a> Folgendes:<?php edit_comment_link( __( '(Edit)', 'piratenkleider' ), ' ' );
                    ?>
                </div><!-- .comment-meta .commentmetadata -->
                </div>

                <div class="comment-body"><?php comment_text(); ?></div>
                <?php if ($options['aktiv-commentreplylink']) { ?>
                <div class="reply">
                        <?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>                       
                </div> <!-- .reply -->
                <?php } ?>


        </div><!-- #comment-##  -->

        <?php
                        break;
                case 'pingback'  :
                case 'trackback' :
        ?>
        <li class="post pingback">
                <p><?php _e( 'Pingback:', 'piratenkleider' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __('(Edit)', 'piratenkleider'), ' ' ); ?></p>
        <?php
                        break;
        endswitch;
}
endif;




function piratenkleider_remove_recent_comments_style() {
        global $wp_widget_factory;
        remove_action( 'wp_head', array( $wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style' ) );
}
add_action( 'widgets_init', 'piratenkleider_remove_recent_comments_style' );

if ( ! function_exists( 'piratenkleider_post_teaser' ) ) :
/**
 * Erstellung eines Artikelteasers
 */
function piratenkleider_post_teaser($titleup = 1, $showdatebox = 1, $showdateline = 0, $teaserlength = 200, $thumbfallback = 1) {
  global $options;
  global $post;
  
  $output = '';  
  $sizeclass='';
 $leftbox = '';
  
 
  
  if (($showdatebox>1)  && ($showdatebox<5)) {
       $sizeclass = 'ym-column withthumb';      
       // Generate Thumb/Pic or Video first to find out which class we need
       
     
	    $leftbox .=  '<div class="infoimage">';	    
	    $sizeclass = 'ym-column withthumb'; 
	    $thumbnailcode = '';	
	    $firstpic = '';
	    $firstvideo = '';
	    if (has_post_thumbnail()) {
		$thumbnailcode = get_the_post_thumbnail($post->ID, 'teaser-thumb');
	    }
	    if ($showdatebox==1) {
		$output = $thumbnailcode;
	    } else {
		   
		$firstpic = get_piratenkleider_firstpicture();
		$firstvideo = get_piratenkleider_firstvideo();
		$fallbackimg = '<img src="'.$options['src-teaser-thumbnail_default'].'" alt="">';
		if ($showdatebox==1) {
		    if (isset($thumbnailcode)) {
			$output = $thumbnailcode;
		    } elseif (isset($firstpic)) {
			$output = $firstpic;
		    } elseif (isset($firstvideo)) {
			$output = $firstvideo;
			$sizeclass = 'ym-column withvideo';    
		    } else {
			$output = $fallbackimg;
		    }
		} elseif ($showdatebox==2) {
		    if (isset($firstpic)) {
			$output = $firstpic;
		    } elseif (isset($thumbnailcode)) {
			$output = $thumbnailcode;
		    } elseif (isset($firstvideo)) {
			$output = $firstvideo;
			$sizeclass = 'ym-column withvideo'; 
		    } else {
			$output = $fallbackimg;
		    }
		    
		} elseif ($showdatebox==3) {
		    if (isset($firstvideo)) {
			$output = $firstvideo;
			$sizeclass = 'ym-column withvideo'; 
		    } elseif (isset($thumbnailcode)) {
			$output = $thumbnailcode;
		    } elseif (isset($firstpic)) {
			$output = $firstpic;
		    } else {
			$output = $fallbackimg;
		    }
		} elseif ($showdatebox==4) {
		    if (isset($firstvideo)) {
			$output = $firstvideo;
			$sizeclass = 'ym-column withvideo'; 
		    } elseif (isset($firstpic)) {
			$output = $firstpic;
		    } elseif (isset($thumbnailcode)) {
			$output = $thumbnailcode;
		    } else {
			$output = $fallbackimg;
		    }
		} else {
		    $output = $fallbackimg; 
		}	
	    }
    	    
	    $leftbox .= $output;
	    $leftbox .=  '</div>'; 
  } else {
       $sizeclass = 'ym-column';
  }
  
  ?> 
  <div <?php post_class($sizeclass); ?> id="post-<?php the_ID(); ?>" >
    <?php 
        
     if ($titleup==1) { ?>
        <div class="post-title ym-cbox"><h2>          
            <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>">
              <?php the_title(); ?>
            </a>
	</h2></div>
       
       <div class="ym-column"> 
     <?php }	
   /* 0 = Datebox, 
	 * 1 = Thumbnail (or: first picture, first video, fallback picture),
	 * 2 = First picture (or: thumbnail, first video, fallback picture),
	 * 3 = First video (or: thumbnail, first picture, fallback picture),
	 * 4 = First video (or: first picture, thumbnail, fallback picture),
	 * 5 = Nothing */
     
    if ($showdatebox<5) { 
	echo '<div class="post-info ym-col1"><div class="ym-cbox">';
	if ($showdatebox==0) {		 
	      $num_comments = get_comments_number();           
	      if (($num_comments>0) || ( $options['zeige_commentbubble_null'])) { 
		echo '<div class="commentbubble">'; 	
		    if ($num_comments>0) {
		       comments_popup_link( '0<span class="skip"> Kommentar</span>', '1<span class="skip"> Kommentar</span>', '%<span class="skip"> Kommentare</span>', 'comments-link', '%<span class="skip"> Kommentare</span>');           
		    } else {
			// Wenn der Zeitraum abgelaufen ist UND keine Kommentare gegeben waren, dann
			// liefert die Funktion keinen Link, sondern nur den Text . Daher dieser
			// Woraround:
			$link = get_comments_link();
			echo '<a href="'.$link.'">0<span class="skip"> Kommentar</span></a>';
		  }
		 echo '</div>'; 
	       }
	       ?>
	       <div class="cal-icon">
			<span class="day"><?php the_time('j.'); ?></span>
			<span class="month"><?php the_time('m.'); ?></span>
			<span class="year"><?php the_time('Y'); ?></span>
		</div>

		<?php    
	} else {	
	    echo $leftbox;
	} ?>
	   </div>	
	</div>
	<?php 
	    echo '<div class="post-entry ym-col3">';
	    echo '<div class="ym-cbox ym-clearfix">';	
	} else {
	     echo '<div class="post-entry ym-cbox">';
	}
	  if ($titleup==0) { ?>       
	    <div class="post-title"><h2>          
	        <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>">
	          <?php the_title(); ?>
                </a>
	    </h2></div>
	   <?php }
	   
	   if (($showdatebox!=0) && ($showdateline==1)) { ?>
	    <p class="pubdateinfo"><?php piratenkleider_post_pubdateinfo(0); ?></p>	  	  
	   <?php }
	   
	   echo get_piratenkleider_custom_excerpt($teaserlength); ?>     
	  <?php if (($showdatebox>1)  && ($showdatebox<5)) {	?>  
	 </div>    	
	     <!-- .ym-ie-clearing only needed for IE6 & 7 support -->
	    <div class="ym-ie-clearing">&nbsp;</div>	
	<?php } ?>
    </div>
    
    <?php if ($titleup==1) { echo '</div>'; }       
    echo '</div>'; 

}
endif;

if ( ! function_exists( 'piratenkleider_post_datumsbox' ) ) :
/**
 * Erstellung der Datumsbox
 */
function piratenkleider_post_datumsbox() {
    global $options;
    echo '<div class="post-info">';
          $num_comments = get_comments_number();           
          if (($num_comments>0) || ( $options['zeige_commentbubble_null'])) { ?>
         <div class="commentbubble"> 
            <?php 
                if ($num_comments>0) {
                   comments_popup_link( '0<span class="skip"> Kommentar</span>', '1<span class="skip"> Kommentar</span>', '%<span class="skip"> Kommentare</span>', 'comments-link', '%<span class="skip"> Kommentare</span>');           
                } else {
                    // Wenn der Zeitraum abgelaufen ist UND keine Kommentare gegeben waren, dann
                    // liefert die Funktion keinen Link, sondern nur den Text . Daher dieser
                    // Woraround:
                    $link = get_comments_link();
                    echo '<a href="'.$link.'">0<span class="skip"> Kommentar</span></a>';
              }
            ?>
          </div> 
          <?php } 

          if ($options['aktiv-images-instead-date']) {                                                    
            $firstpic = get_piratenkleider_firstpicture();
            if (!empty($firstpic)) { ?>                       
                <div class="infoimage">                    
                        <?php echo $firstpic ?>
                </div>
            <?php } else { ?>                        
                <div class="cal-icon">
                    <span class="day"><?php the_time('j.'); ?></span>
                    <span class="month"><?php the_time('m.'); ?></span>
                    <span class="year"><?php the_time('Y'); ?></span>
                </div>
                <?php 
            }
          } else { ?>
              <div class="cal-icon">
                <span class="day"><?php the_time('j.'); ?></span>
                <span class="month"><?php the_time('m.'); ?></span>
                <span class="year"><?php the_time('Y'); ?></span>
            </div>
          <?php }  
     
         
    echo '</div>';
    
    
}
endif;

if ( ! function_exists( 'piratenkleider_keywords' ) ) :
/**
 * Fusszeile unter Artikeln: Ver&ouml;ffentlichungsdatum
 */
function piratenkleider_keywords($maxlength = 140, $maxwords = 15 ) {
    global $options;
   
    $csv_tags = '';
    $tags = '';
    if ($options['aktiv-autokeywords']) {   

	$posttags = get_tags(array('number'=> $maxwords, 'orderby' => 'count', 'order'=> 'DESC'));
	$tags = '';
	    if (isset($posttags)) {
		foreach($posttags as $tag) {
		    $csv_tags .= $tag->name . ',';
		}	
		$tags = substr( $csv_tags,0,-2);
	    }
	if ((isset($options['meta-keywords'])) && (strlen(trim($options['meta-keywords']))>1 )) {
	    $tags = $options['meta-keywords'].', '.$tags;
	}
    } else {
	if ((isset($options['meta-keywords'])) && (strlen(trim($options['meta-keywords']))>1 )) {
	    $tags = $options['meta-keywords'];
	}	
    }
    if ((isset($tags)) && (strlen(trim($tags))>2 )) {
	if (strlen(trim($tags))>$maxlength) {
	    $tags = substr($tags,0,strpos($tags,",",$maxlength));
	}	
	echo '	<meta name="keywords" value="'.$tags.'">';
    }
   
}
endif;

if ( ! function_exists( 'piratenkleider_post_pubdateinfo' ) ) :
/**
 * Fusszeile unter Artikeln: Ver&ouml;ffentlichungsdatum
 */
function piratenkleider_post_pubdateinfo($withtext = 1) {
    if ($withtext==1) {
	echo '<span class="meta-prep">';
        echo __('Ver&ouml;ffentlicht am', 'piratenkleider' );
	echo '</span> ';
    }
    printf('%1$s',
                sprintf( '<span class="entry-date">%1$s</span>',
                        get_the_date()
                )
        );
}
endif;

if ( ! function_exists( 'piratenkleider_post_autorinfo' ) ) :
/**
 * Fusszeile unter Artikeln: Autorinfo
 */
function piratenkleider_post_autorinfo() {
        printf( __( ' <span class="meta-prep-author">von</span> %1$s ', 'piratenkleider' ),               
                sprintf( '<span class="author vcard"><a class="url fn n" href="%1$s" title="%2$s">%3$s</a></span> ',
                        get_author_posts_url( get_the_author_meta( 'ID' ) ),
                        sprintf( esc_attr__( 'Artikel von %s', 'piratenkleider' ), get_the_author() ),
                        get_the_author()
                )
        );
}
endif;

if ( ! function_exists( 'piratenkleider_post_taxonominfo' ) ) :
/**
 * Fusszeile unter Artikeln: Taxonomie
 */
function piratenkleider_post_taxonominfo() {
         $tag_list = get_the_tag_list( '', ', ' );
        if ( $tag_list ) {
                $posted_in = __( 'unter %1$s und tagged %2$s. <br>Hier der permanente <a href="%3$s" title="Permalink to %4$s" rel="bookmark">Link</a> zu diesem Artikel.', 'piratenkleider' );
        } elseif ( is_object_in_taxonomy( get_post_type(), 'category' ) ) {
                $posted_in = __( 'unter %1$s. <br><a href="%3$s" title="Permalink to %4$s" rel="bookmark">Permanenter Link</a> zu diesem Artikel.', 'piratenkleider' );
        } else {
                $posted_in = __( '<a href="%3$s" title="Permalink to %4$s" rel="bookmark">Permanenter Link</a> zu diesem Artikel.', 'piratenkleider' );
        }
        // Prints the string, replacing the placeholders.
        printf(
                $posted_in,
                get_the_category_list( ', ' ),
                $tag_list,
                get_permalink(),
                the_title_attribute( 'echo=0' )
        );
}
endif;

// this function initializes the iframe elements 
// maybe wont work on multisite installations. please use plugins instead.
function piratenkleider_change_mce_options($initArray) {
    $ext = 'iframe[align|longdesc|name|width|height|frameborder|scrolling|marginheight|marginwidth|src]';
    if ( isset( $initArray['extended_valid_elements'] ) ) {
        $initArray['extended_valid_elements'] .= ',' . $ext;
    } else {
        $initArray['extended_valid_elements'] = $ext;
    }
    // maybe; set tiny paramter verify_html
    $initArray['verify_html'] = false;
    return $initArray;
}
add_filter('tiny_mce_before_init', 'piratenkleider_change_mce_options');




class My_Walker_Nav_Menu extends Walker_Nav_Menu {
    /**
     * Start the element output.
     *
     * @param  string $output Passed by reference. Used to append additional content.
     * @param  object $item   Menu item data object.
     * @param  int $depth     Depth of menu item. May be used for padding.
     * @param  array $args    Additional strings.
     * @return void
     */
    public function start_el( &$output, $item, $depth, $args ) {
        if ( '-' === $item->title )
        {
            // you may remove the <hr> here and use plain CSS.
            $output .= '<li class="menu_separator"><hr>';
        } else{
            parent::start_el( $output, $item, $depth, $args );
        }
    }
    /* Klasse has_children einfuegen */
    public function display_element($el, &$children, $max_depth, $depth = 0, $args, &$output){
        $id = $this->db_fields['id'];

        if(isset($children[$el->$id]))
            $el->classes[] = 'has_children';

        parent::display_element($el, $children, $max_depth, $depth, $args, $output);
    }
}

if ( ! function_exists( 'get_piratenkleider_socialmediaicons' ) ) :
/**
 * Displays Social Media Icons
 */
function get_piratenkleider_socialmediaicons( $darstellung = 1 ){
    global $options;
    global $default_socialmedia_liste;
    $zeigeoption = $options['alle-socialmediabuttons'];
    
    if ($darstellung ==0) {
        /* Keine Links */
        return; 
    } 
    if ($darstellung!=$zeigeoption) {
        /* Nichts anzeigen, da wir im falschen Modus sind */
        return;
    }
 
    if ($zeigeoption ==2) {    
           /* Links an der Seite */
            echo '<div id="socialmedia_iconbar">';
    }
   
    echo '<ul class="socialmedia">';       
    foreach ( $default_socialmedia_liste as $entry => $listdata ) {        
        
        $value = '';
        $active = 0;
        if (isset($options['sm-list'][$entry]['content'])) {
                $value = $options['sm-list'][$entry]['content'];
        } else {
                $value = $default_socialmedia_liste[$entry]['content'];
         }
         if (isset($options['sm-list'][$entry]['active'])) {
                $active = $options['sm-list'][$entry]['active'];
        }        
        if (($active ==1) && ($value)) {
            echo '<li><a class="icon_'.$entry.'" href="'.$value.'">';
            echo $listdata['name'].'</a></li>';
        }
    }
    echo '</ul>';
       
    if ($zeigeoption ==2) {    
           /* Links an der Seite */
            echo '</div>';
    }
}
endif;


if ( ! function_exists( 'get_piratenkleider_seitenmenu' ) ) :
/*
 * Anzeige des Sidebar-Menus
 */
function get_piratenkleider_seitenmenu( $zeige_sidebarpagemenu = 1 , $zeige_subpagesonly =1 , $seitenmenu_mode = 0 ){
  global $post;
  $sidelinks = '';
    if ($zeige_sidebarpagemenu==1) {   
		if (($seitenmenu_mode == 1) || (!has_nav_menu( 'primary' ))) {
			if ($zeige_subpagesonly==1) {
				//if the post has a parent

				if($post->post_parent){
				   if($post->ancestors) {
						$ancestors = end($post->ancestors);
						$sidelinks = wp_list_pages("title_li=&child_of=".$ancestors."&echo=0");
					} else {                
						$sidelinks .= wp_list_pages("sort_column=menu_order&title_li=&echo=0&depth=5&child_of=".$post->post_parent);              
					} 
				}else{
					// display only main level and children
					$sidelinks .= wp_list_pages("sort_column=menu_order&title_li=&echo=0&depth=5&child_of=".$post->ID);
				}

				if ($sidelinks) { 
					echo '<ul class="menu">';                   
					echo $sidelinks; 
					echo '</ul>';         
				} 

			} else {
				echo '<ul class="menu">';   
					wp_page_menu( ); 
				echo '</ul>';                        
			} 
		} else {
				if ($zeige_subpagesonly==1) {
					wp_nav_menu( array('depth' => 0, 'container_class' => 'menu-header subpagesonly', 'theme_location' => 'primary', 'walker'  => new My_Walker_Nav_Menu()) );      
				} else { 
					wp_nav_menu( array('depth' => 0, 'container_class' => 'menu-header', 'theme_location' => 'primary', 'walker'  => new My_Walker_Nav_Menu()) );      
				}
		}
    }
  
}
endif;

if ( ! function_exists( 'get_piratenkleider_firstpicture' ) ) :
/*
 * Erstes Bild aus einem Artikel auslesen, wenn dies vorhanden ist
 */
function get_piratenkleider_firstpicture(){
    global $post;
    $first_img = '';
    ob_start();
    ob_end_clean();
    preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
    if ((is_array($matches[1])) && (isset($matches [1][0]))) {
        $first_img = $matches [1][0];
        if (!empty($first_img)){
            $site_link =  home_url();  
            $first_img = preg_replace("%$site_link%i",'', $first_img); 
            $imagehtml = '<img src="'.$first_img.'" alt="" >';
            return $imagehtml;    
        }
    }
}
endif;


if ( ! function_exists( 'get_piratenkleider_firstvideo' ) ) :
/*
 * Erstes Bild aus einem Artikel auslesen, wenn dies vorhanden ist
 */
function get_piratenkleider_firstvideo($width = 300, $height = 169, $nocookie =1){
    global $post;
    ob_start();
    ob_end_clean();
    $matches = array();
    preg_match('/src="([^\'"]*www\.youtube[^\'"]+)/i', $post->post_content, $matches);
   // var_dump($matches);
    if ((is_array($matches)) && (isset($matches[1]))) {
        $entry = $matches[1];	
	// echo "HEYJA!<br>";
	// echo $entry;
        if (!empty($entry)){
	    if ($nocookie==1) {
		$entry = preg_replace('/youtube.com/','youtube-nocookie.com',$entry);
	    }
            $htmlout = '<iframe width="'.$width.'" height="'.$height.'" src="'.$entry.'" frameborder="0" allowfullscreen></iframe>';
            return $htmlout;    
        }

    }
}
endif;



if ( ! function_exists( 'get_piratenkleider_custom_excerpt' ) ) :
/*
 * Erstellen des Extracts
 */
function get_piratenkleider_custom_excerpt($length = 0, $continuenextline = 1){
  global $options;
  global $post;
      
  if (has_excerpt()) {
      return  get_the_excerpt();
  } else {
      $excerpt = get_the_content();
       if (!isset($excerpt)) {
          $excerpt = __( 'Kein Inhalt', 'piratenkleider' );
        }
  }
  if ($length==0) {
      $length = $options['teaser_maxlength'];
  }
  $excerpt = strip_shortcodes($excerpt);
  $excerpt = strip_tags($excerpt); 
  if (mb_strlen($excerpt)<5) {
      $excerpt = __( 'Kein Inhalt', 'piratenkleider' );
  }

  if (mb_strlen($excerpt) >  $length) {
    $the_str = mb_substr($excerpt, 0, $length);
    $the_str .= "...";
  }  else {
      $the_str = $excerpt;
  }
  $the_str = '<p>'.$the_str;
  if ($continuenextline==1) {
      $the_str .= '<br>';
  }
  $the_str .= piratenkleider_continue_reading_link();
  $the_str .= '</p>';
  return $the_str;
}
endif;

if ( ! function_exists( 'short_title' ) ) :
/*
 * Erstellen des Kurztitels
 */
function short_title($after = '...', $length = 6, $textlen = 10) {
   $thistitle =   get_the_title();  
   $mytitle = explode(' ', get_the_title());
   if ((count($mytitle)>$length) || (mb_strlen($thistitle)> $textlen)) {
       while(((count($mytitle)>$length) || (mb_strlen($thistitle)> $textlen)) && (count($mytitle)>1)) {
           array_pop($mytitle);
           $thistitle = implode(" ",$mytitle);           
       }       
       $morewords = 1;
   } else {              
       $morewords = 0;
   }
   if (mb_strlen($thistitle)> $textlen) {
      $thistitle = mb_substr($thistitle, 0, $textlen);
      $morewords = 1;     
   }
   if ($morewords==1) {
       $thistitle .= $after;
   }   
   return $thistitle;
}
endif;

if ( ! function_exists( 'piratenkleider_fetch_feed' ) ) :
/*
 * Feet holen mit direkter Angabe der SimplePie-Parameter
 */
function piratenkleider_fetch_feed($url,$lifetime=0) {
    global $defaultoptions;
    global $options;


    if ($lifetime==0){
        $lifetime=  $options['feed_cache_lifetime'];
    }
    if ($lifetime < 600) $lifetime = 1800;
    // Das holen von feeds sollte auf keinen Fall haeufiger als alle 10 Minuten erfolgen

    require_once  (ABSPATH . WPINC . '/class-feed.php');

    $feed = new SimplePie();
    if ($defaultoptions['use_wp_feed_defaults']) {
        $feed->set_cache_class('WP_Feed_Cache');
        $feed->set_file_class('WP_SimplePie_File');
    } else {
        if ((isset($defaultoptions['dir_feed_cache'])) && (!empty($defaultoptions['dir_feed_cache']))) {
            if (is_dir($defaultoptions['dir_feed_cache'])) { 
                $feed->set_cache_location($defaultoptions['dir_feed_cache']);
            } else {
                mkdir($defaultoptions['dir_feed_cache']);
                if (!is_dir($defaultoptions['dir_feed_cache'])) {
                    echo "Wasnt able to create Feed-Cache directory";
                } else {
                    $feed->set_cache_location($defaultoptions['dir_feed_cache']);
                }
            }
        }  
    }
    $feed->set_feed_url($url);
    $feed->set_cache_duration($lifetime);
    
    do_action_ref_array( 'wp_feed_options', array( $feed, $url ) );
    $feed->init();
    $feed->handle_content_type();

    if ( $feed->error() )
        return new WP_Error('simplepie-error', $feed->error());

    return $feed;
}
endif;


function wpi_linkexternclass($content){
        return preg_replace_callback('/<a[^>]+/', 'wpi_linkexternclass_callback', $content);
    }
 
function wpi_linkexternclass_callback($matches) {
        $link = $matches[0];
        $site_link = home_url();  
        if ((strpos($link, 'class') === false)
		   && (strpos($link, 'mailto:') === false)
           && (strpos($link, $site_link) === false)) {
            $link = preg_replace("%(href=\S(?!($site_link|#)))%i", 'class="extern" $1', $link);
        }       
        return $link;
    }
add_filter('the_content', 'wpi_linkexternclass');

/*
 * Disabled. Will be replaced wih Wordpress HTTPS plugin.
 * Makes problems with directory based multiside installations
add_action( 'template_redirect', 'rw_relative_urls' );
    function rw_relative_urls() {
        // Don't do anything if:
        // - In feed
        // - In sitemap by WordPress SEO plugin
         // - Not if Wordpress HTTPS is activated

        $wphttpsactive = in_array('wordpress-https/wordpress-https.php', (array) get_option('active_plugins', array() ) );
        if ( is_feed() || get_query_var( 'sitemap' ) || $wphttpsactive )
               return;
        $filters = array(
            'post_link',
            'post_type_link',
            'page_link',
            'attachment_link',
            'get_shortlink',
            'post_type_archive_link',
            'get_pagenum_link',
            'get_comments_pagenum_link',
            'term_link',
            'search_link',
            'day_link',
            'month_link',
            'year_link',
        );
        foreach ( $filters as $filter ) {
         add_filter( $filter, 'wp_make_link_relative' );
        }
    }
 
*/

 function wpi_relativeurl($content){
        return preg_replace_callback('/<a[^>]+/', 'wpi_relativeurl_callback', $content);
    }
 
function wpi_relativeurl_callback($matches) {
        $link = $matches[0];
        $site_link =  wp_make_link_relative(home_url());  
        $link = preg_replace("%href=\"$site_link%i", 'href="', $link);                 
        return $link;
    }
 add_filter('the_content', 'wpi_relativeurl');
   

function dimox_breadcrumbs() {
  global $defaultoptions;
  $delimiter = '/';
  $home = __( 'Startseite', 'piratenkleider' ); // text for the 'Home' link
  $before = '<span class="current">'; // tag before the current crumb
  $after = '</span>'; // tag after the current crumb
 
  if ( !is_home() && !is_front_page() || is_paged() ) {
 
    echo '<div id="crumbs">';
 
    global $post;
    $homeLink = home_url('/');
    echo '<a href="' . $homeLink . '">' . $home . '</a> ' . $delimiter . ' ';
 
    if ( is_category() ) {
      global $wp_query;
      $cat_obj = $wp_query->get_queried_object();
      $thisCat = $cat_obj->term_id;
      $thisCat = get_category($thisCat);
      $parentCat = get_category($thisCat->parent);
      if ($thisCat->parent != 0) echo(get_category_parents($parentCat, TRUE, ' ' . $delimiter . ' '));
      echo $before . __( 'Artikel der Kategorie ', 'piratenkleider' ). '"' . single_cat_title('', false) . '"' . $after;
 
    } elseif ( is_day() ) {
      echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
      echo '<a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a> ' . $delimiter . ' ';
      echo $before . get_the_time('d') . $after;
 
    } elseif ( is_month() ) {
      echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
      echo $before . get_the_time('F') . $after;
 
    } elseif ( is_year() ) {
      echo $before . get_the_time('Y') . $after;
 
    } elseif ( is_single() && !is_attachment() ) {
      if ( get_post_type() != 'post' ) {
        $post_type = get_post_type_object(get_post_type());
        $slug = $post_type->rewrite;
        echo '<a href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a> ' . $delimiter . ' ';
        echo $before . get_the_title() . $after;
      } else {
        $cat = get_the_category(); $cat = $cat[0];
        echo is_wp_error( $cat_parents = get_category_parents($cat, TRUE, ' ' . $delimiter . ' ') ) ? '' : $cat_parents;
        echo $before . get_the_title() . $after;
      }
 
    } elseif ( !is_single() && !is_page() && !is_search() && get_post_type() != 'post' && !is_404() ) {
      $post_type = get_post_type_object(get_post_type());
      echo $before . $post_type->labels->singular_name . $after;
 
    } elseif ( is_attachment() ) {
      $parent = get_post($post->post_parent);
      $cat = get_the_category($parent->ID); $cat = $cat[0];
      echo is_wp_error( $cat_parents = get_category_parents($cat, TRUE, ' ' . $delimiter . ' ') ) ? '' : $cat_parents;
      echo '<a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a> ' . $delimiter . ' ';
      echo $before . get_the_title() . $after;
 
    } elseif ( is_page() && !$post->post_parent ) {
      echo $before . get_the_title() . $after;
 
    } elseif ( is_page() && $post->post_parent ) {
      $parent_id  = $post->post_parent;
      $breadcrumbs = array();
      while ($parent_id) {
        $page = get_page($parent_id);
        $breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
        $parent_id  = $page->post_parent;
      }
      $breadcrumbs = array_reverse($breadcrumbs);
      foreach ($breadcrumbs as $crumb) echo $crumb . ' ' . $delimiter . ' ';
      echo $before . get_the_title() . $after;
 
    } elseif ( is_search() ) {
      echo $before . __( 'Suche nach ', 'piratenkleider' ).'"' . get_search_query() . '"' . $after;
 
    } elseif ( is_tag() ) {
      echo $before . __( 'Artikel mit Schlagwort ', 'piratenkleider' ). '"' . single_tag_title('', false) . '"' . $after;
 
    } elseif ( is_author() ) {
       global $author;
      $userdata = get_userdata($author);
      echo $before . __( 'Artikel von ', 'piratenkleider' ). $userdata->display_name . $after;
 
    } elseif ( is_404() ) {
      echo $before . '404' . $after;
    }
 /*
    if ( get_query_var('paged') ) {
      if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ' (';
      echo __('Page', 'piratenkleider') . ' ' . get_query_var('paged');
      if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ')';
    }
 */
    echo '</div>'; 
  }
}



 

function piratenkleider_header_style() {} 

function piratenkleider_admin_head() {
    echo '<link rel="stylesheet" type="text/css" href="'.get_template_directory_uri().'/css/admin.css" />'; 
}
add_action('admin_head', 'piratenkleider_admin_head');

function custom_login() { 
    echo '<link rel="stylesheet" type="text/css" href="'.get_template_directory_uri().'/css/custom-login.css" />'; 
}
add_action('login_head', 'custom_login');



/* Circleplayer-Import
 *    von Bejamin Stöcker (@EinfachBen)
 */

function get_post_audio_enclosure($information) {
	$custom_keys = get_post_custom_keys();
	// $allowed_output = array('mp3', 'oga', 'ogg', 'mp4','m4a','ogv','m4v');
	$allowed_output = array('mp3', 'oga', 'ogg');
	    
	if (is_array($custom_keys) && in_array('enclosure',$custom_keys)) {
		$custom_fields  = get_post_custom();
		$enclosures = 	$custom_fields['enclosure'];
                if (!isset($enclosures)) $enclosures= $custom_fields['_encloseme'];;

		foreach($enclosures as $thatValue){
			$encdata = explode( "\n", $thatValue );
			$extension = pathinfo( $encdata[0], PATHINFO_EXTENSION );
			// $len = $encdata[1];
			// $type = $encdata[2];						
			if (in_array($extension, $allowed_output)) {
			    $information[$extension] = $encdata[0];				  		    
			}
			/* 			
			if(strstr($thatValue, 'audio/ogg')!="")	{
				$ende = strpos($thatValue,".ogg");
				$url =  substr($thatValue,0,$ende+4);
				filter_var($url, FILTER_VALIDATE_URL);
				$information['ogg'] = $url;
			} else if(strstr($thatValue, 'audio/mpeg')!="")	{
				$ende = strpos($thatValue,".mp3");
				$url =  substr($thatValue,0,$ende+4);
				filter_var($url, FILTER_VALIDATE_URL);
				$information['mp3'] = $url;
			}
			*/
		}
		
		
	}
	return $information;
}
function get_post_audio_fields($information) {
	$custom_fields = get_post_custom();
	if (isset($custom_fields['audio_disable']) && ($custom_fields['audio_disable'][0] == true)){
		$information["mp3"] = "";
		$information["ogg"] = "";
		$information["text"] = "";
		return $information;
	} else {
		if (isset($custom_fields['audio_mp3']) && (filter_var($custom_fields['audio_mp3'][0], FILTER_VALIDATE_URL)))
			$information["mp3"] = $custom_fields['audio_mp3'][0];
		if (isset($custom_fields['audio_ogg']) && (filter_var($custom_fields['audio_ogg'][0], FILTER_VALIDATE_URL)))
			$information["ogg"] = $custom_fields['audio_ogg'][0];
		if (isset($custom_fields['audio_text']) && ($custom_fields['audio_text'][0]<>''))
			$information["text"] = $custom_fields['audio_text'][0];
	}
	return $information;
}

add_filter('get_post_audio_information','get_post_audio_enclosure',5);
add_filter('get_post_audio_information','get_post_audio_fields',15);

function piratenkleider_echo_player() {
    global $options;
    global $defaultoptions;
      
    if ($options['aktiv-circleplayer']!=1) {
	return;
    }
 
    
    $information =  array('ogg'=>"",'mp3'=>"",'text'=>"");
    $information = apply_filters("get_post_audio_information",$information);
    
    
    if (($options['circleplayer-require-mp3fallback']==1) 
		&& (!isset($information['mp3'])) 
		&& (empty($information['mp3']))) {
	return;
    }
    if	((isset($information['mp3']) && (!empty($information['mp3'])))
	    || (isset($information['oga'])  && (!empty($information['oga'])))
	    || (isset($information['ogg'])  && (!empty($information['ogg'])))
	    || (isset($information['mp4'])  && (!empty($information['mp4'])))
	    || (isset($information['m4a'])  && (!empty($information['m4a'])))
	    || (isset($information['m4v'])  && (!empty($information['m4v'])))
	    || (isset($information['ogv']) && (!empty($information['ogv'])))
	) {	    	  
	 
    ?>
		
    <div class="widget" id="AudioPlayer">
	<h3><?php _e( 'Diesen Beitrag anh&ouml;ren', 'piratenkleider' ); ?></h3>

	<script type="text/javascript">	   
	//<![CDATA[
	$(document).ready(function(){
	var myCirclePlayer = new CirclePlayer("#jquery_jplayer_1", 
	{	
	<?php 
	    if (isset($information['mp3'])) { 
		echo '"mp3": "'.$information['mp3'].'",';
		$supplied = 'mp3,';	
	    }
	    if ((isset($information['m4a'])) && (!empty($information['m4a']))) { 		
		echo 'm4a: "'.$information['m4a'].'",';	    
		$supplied = $supplied . 'm4a,';
	    } else if ( (isset($information['mp4'])) && (!empty($information['mp4']))) { 
		echo 'm4a: "'.$information['mp4'].'",';
		$supplied = $supplied . 'm4a,';
	    } 	    
	    if ((isset($information['oga'])) && (!empty($information['oga']))) { 		
		echo '"oga": "'.$information['oga'].'",';
		$supplied = $supplied . 'oga,';
	    } else if ((isset($information['ogg'])) && (!empty($information['ogg']))) { 
		echo '"oga": "'.$information['ogg'].'",';
		$supplied = $supplied . 'oga,';
	    } 
	    
	    $supplied =rtrim($supplied,','); 

	echo "}, {";
        echo ' cssSelectorAncestor: "#cp_container_1", swfPath: "js",
		wmode: "window", supplied: "'.$supplied.'",';
	echo '});
	});
	//]]>
	</script>';
        
	echo '<div id="jquery_jplayer_1" class="cp-jplayer"></div>';	
	echo '<div id="cp_container_1" class="cp-container">';
	echo '<div class="cp-buffer-holder"> <!-- .cp-gt50 only needed when buffer is > than 50% -->
		<div class="cp-buffer-1"></div>
		<div class="cp-buffer-2"></div>
	    </div>
	    <div class="cp-progress-holder"> <!-- .cp-gt50 only needed when progress is > than 50% -->
		<div class="cp-progress-1"></div>
		<div class="cp-progress-2"></div>
	    </div>
	    <div class="cp-circle-control"></div>
	    <ul class="cp-controls">
		<li style="padding:0;"><a class="cp-play" tabindex="1">play</a></li>
		<li style="padding:0;"><a class="cp-pause" style="display:none;" tabindex="1">pause</a></li> <!-- Needs the inline style here, or jQuery.show() uses display:inline instead of display:block -->
	    </ul>
	</div>';
	
	_e( 'Download:', 'piratenkleider' ); 
	$links = "";
	foreach($information as $key=>$value){
	    if ($key == 'text') { continue; }
	    $links = $links . "<a href=\"$value\">$key</a>, ";
	}
	$links =rtrim($links,', '); 
	echo $links; 		
	echo '<br>';
	if(strlen(trim($information['text']))>2) { 
	  echo $information['text']." <br/>";
	 } 
	 echo '</div>';
    }	
}
