<?php
/**
 * Piratenkleider Theme Optionen
 *
 * @origin author: IT-Website-Crew, http://wiki.piratenpartei.de/Website-Team
 * @source http://github.com/xwolfde/Piratenkleider
 * @creator xwolf
 * @version 2.1
 * @licence CC-BY-SA 3.0 
 */


$defaultoptions = array(
    'content-width'                 => 665,
    'logo'                          => get_template_directory_uri() .'/images/logo.png',
    'logo-width'                    => 300,
    'logo-height'                   => 130,
    'thumb-width'                   => 705,
    'thumb-height'                  => 240,
    'src-jquery'                    => get_template_directory_uri(). "/js/jquery.min.js",
    'src-layoutjs'                  => get_template_directory_uri(). "/js/layout.js",
    'src-comment-reply'             => get_template_directory_uri(). "/js/comment-reply.js",
    'src-yaml-focusfix'             => get_template_directory_uri(). "/yaml/core/js/yaml-focusfix.js",
    'src-default-symbolbild-big'    => get_template_directory_uri() .'/images/default-vorlage.png',
    'src-default-symbolbild'        => get_template_directory_uri() .'/images/default-vorlage-705x150.png',
    'slider-aktiv'                  => 1,
    'aktiv-defaultseitenbild'       => 0,
    'aktiv-suche'                   => 1,
    'slider-defaultwerbeplakate'    => 1,
    'slider-numberarticle'          => 3,
    'slider-slideshowSpeed'         => 8000,
    'slider-animationDuration'      => 600,
    'defaultwerbesticker'           => 1,
    'aktiv-autoren'                 => 1,
    'newsletter'                    => 1,
    'alle-socialmediabuttons'       => 1,
    'aktiv-platzhalterbilder-indexseiten'   => 0,
    'aktiv-linkmenu'                 => 1,
    'aktiv-avatar'                   => 1,
    'src-default-avatar'             =>  get_template_directory_uri(). '/images/avataricon.gif',
    'zeige_subpagesonly'             => 1,
    'zeige_sidebarpagemenu'          => 1,
    'feed_twitter_numberarticle'            => 3,
    'num-article-startpage-fullwidth'       => 1,
    'num-article-startpage-halfwidth'       => 4,
    'url-newsletteranmeldung'       => 'https://service.piratenpartei.de/subscribe/newsletter',
    'teaser_maxlength'              => 300,
    'teaser-title-maxlength'        => 50,
    'teaser-subtitle'               => 'Topthema',
    'teaser-title-words'            => 10,
    'css-default-header-height'     => 225,
    'css-default-branding-padding-top'  => 40,
    'anonymize-user'                => 0,
    'anonymize-user-commententries' => 0,
    'aktiv-commentreplylink'        => 0,
    
    
    'teaserlink1-title'             => 'Informiere dich',
    'teaserlink1-untertitel'        => '&uuml;ber unsere Themen &amp; Ziele!',            
    'teaserlink1-url'               => 'https://www.piratenpartei.de/politik/themen/', 
    'teaserlink1-symbol'            => 'idee',
    
    'teaserlink2-title'             => 'Unterst&uuml;tze uns',
    'teaserlink2-untertitel'        => 'mit deinem Engagement!',            
    'teaserlink2-url'               => 'http://www.piratenpartei.de/unterstutze-uns/', 
    'teaserlink2-symbol'            => 'herz',
    
    'teaserlink3-title'             => 'Werde Pirat!',
    'teaserlink3-untertitel'        => 'jetzt Mitglied werden!',            
    'teaserlink3-url'               => 'https://www.piratenpartei.de/mitmachen/mitglied-werden', 
    'teaserlink3-symbol'            => 'steuerrad',
    
    'stickerlink1-content'          => '<img src="'.get_template_directory_uri().'/images/werde-pirat.png" width="88" height="56" alt="Werde Pirat!">',
    'stickerlink1-url'              => 'https://www.piratenpartei.de/mitmachen/mitglied-werden/',
    'stickerlink2-content'          => '<img src="'.get_template_directory_uri().'/images/spenden.png" width="104" height="68" alt="Hilf uns mit einer Spende">',
    'stickerlink2-url'              => 'https://www.piratenpartei.de/mitmachen/spenden/',
    'stickerlink3-content'          => '',
    'stickerlink3-url'              => '',    
    
);
/**
 * Liste der Defaultbilder fuer Seiten und Slider
 */
$defaultbilder_liste = array(
	'0' => array(
		'src' =>	get_template_directory_uri().'/images/defaultbild-grundgesetz.jpg',
		'label' => __( 'Plakat Grundgesetz', 'piratenkleider' )
	),
	'1' => array(
		'src' =>	get_template_directory_uri().'/images/defaultbild-medien.jpg',
		'label' => __( 'Medien', 'piratenkleider' )
	),
	'2' => array(
		'src' =>	get_template_directory_uri().'/images/defaultbild-mitmachen.jpg',
		'label' => __( 'Mitmachen', 'piratenkleider' )
	),
        '3' => array(
		'src' =>	get_template_directory_uri().'/images/defaultbild-piraten.jpg',
		'label' => __( 'Piraten', 'piratenkleider' )
	),
        '4' => array(
		'src' =>	get_template_directory_uri().'/images/defaultbild-plakate.jpg',
		'label' => __( 'Plakate', 'piratenkleider' )
	),
        '5' => array(
		'src' =>	get_template_directory_uri().'/images/defaultbild-presse.jpg',
		'label' => __( 'Presse', 'piratenkleider' )
	),
        '6' => array(
		'src' =>	get_template_directory_uri().'/images/defaultbild-protest.jpg',
		'label' => __( 'Protest', 'piratenkleider' )
	),
         '7' => array(
		'src' =>	get_template_directory_uri().'/images/defaultbild-datenschutz.jpg',
		'label' => __( 'Datenschutz', 'piratenkleider' )
	),
);

/**
 * Liste der Default-Plakate fer die Sidebar
 */
$defaultplakate_liste = array(
	'0' => array(
		'src' =>	get_template_directory_uri().'/plakate/LTWNRW12_Plakat_A01.jpg',
		'label' => __( 'Plakat LTWNRW12 A01', 'piratenkleider' )
	),
	'1' => array(
		'src' =>	get_template_directory_uri().'/plakate/LTWNRW12_Plakat_B03.jpg',
		'label' => __( 'Plakat LTWNRW12_Plakat_B03', 'piratenkleider' )
	),
	'2' => array(
		'src' =>	get_template_directory_uri().'/plakate/LTWNRW12_Plakat_C01.jpg',
		'label' => __( 'Plakat LTWNRW12_Plakat_C01', 'piratenkleider' )
	),
        '3' => array(
		'src' =>	get_template_directory_uri().'/plakate/LTWNRW12_Plakat_D01.jpg',
		'label' => __( 'Plakat LTWNRW12_Plakat_D01', 'piratenkleider' )
	),
        '4' => array(
		'src' =>	get_template_directory_uri().'/plakate/LTWNRW12_Plakat_E01.jpg',
		'label' => __( 'Plakat LTWNRW12_Plakat_E01', 'piratenkleider' )
	),
        '5' => array(
		'src' =>	get_template_directory_uri().'/plakate/LTWNRW12_Plakat_F03.jpg',
		'label' => __( 'Plakat LTWNRW12_Plakat_F03', 'piratenkleider' )
	),
	'6' => array(
		'src' =>	get_template_directory_uri().'/plakate/LTWSH12_Echte-Mitbestimmung.jpg',
		'label' => __( 'Plakat LTWSH12_Echte-Mitbestimmung', 'piratenkleider' )
	),
	'7' => array(
		'src' =>	get_template_directory_uri().'/plakate/LTWSH12_Fehmarnbelt.jpg',
		'label' => __( 'Plakat LTWSH12_Fehmarnbelt', 'piratenkleider' )
	),
        '8' => array(
		'src' =>	get_template_directory_uri().'/plakate/LTWSH12_Freies-Wissen.jpg',
		'label' => __( 'Plakat LTWSH12_Freies-Wissen', 'piratenkleider' )
	),
        '9' => array(
		'src' =>	get_template_directory_uri().'/plakate/LTWSH12_Ich-will-so-leben.jpg',
		'label' => __( 'Plakat LTWSH12_Ich-will-so-leben', 'piratenkleider' )
	),
       '10' => array(
		'src' =>	get_template_directory_uri().'/plakate/LTWSH12_Inseln-allgemein.jpg',
		'label' => __( 'Plakat LTWSH12_Inseln-allgemein', 'piratenkleider' )
	),
        '11' => array(
		'src' =>	get_template_directory_uri().'/plakate/LTWSH12_Naechster-Halt.jpg',
		'label' => __( 'Plakat LTWSH12_Naechster-Halt', 'piratenkleider' )
	),
	'12' => array(
		'src' =>	get_template_directory_uri().'/plakate/LTWSH12_Orange_isst_gesund.jpg',
		'label' => __( 'Plakat LTWSH12_Orange_isst_gesund', 'piratenkleider' )
	),
	'13' => array(
		'src' =>	get_template_directory_uri().'/plakate/LTWSH12_Transparenz.jpg',
		'label' => __( 'Plakat LTWSH12_Transparenz', 'piratenkleider' )
	),
        '14' => array(
		'src' =>	get_template_directory_uri().'/plakate/LTWSH12_Trau-keinem-Plakat.jpg',
		'label' => __( 'Plakat LTWSH12_Trau-keinem-Plakat', 'piratenkleider' )
	),
        '15' => array(
		'src' =>	get_template_directory_uri().'/plakate/LTWSH12_Warum_haenge_ich_hier.jpg',
		'label' => __( 'Plakat LTWSH12_Warum_haenge_ich_hier', 'piratenkleider' )
	),
       '16' => array(
		'src' =>	get_template_directory_uri().'/plakate/LTWSH12_Wir_sind_Romantiker.jpg',
		'label' => __( 'Plakat LTWSH12_Wir_sind_Romantiker', 'piratenkleider' )
	),    
        
);

/* 
 * Auswahlliste fuer Textsymbole fuer den Teaser
 */
$defaultplakate_textsymbolliste = array(
    'idee'  => "0021",
    'person'  => "263A",
    'herz'  => "2665",
    'email'  => "2709",
    'at'  => "0040",
    'check'  => "2713",
    'nocheck'  => "2717",
    'telefon'  => "2706",
    'anker'  => "2693",
    'skull'  => "2620",
    'female'  => "2640",
    'male'  => "2642",
    'malefemale'  => "26A5",
    'schreiben'  => "270D",
    'rollstuhl'  => "267F",
    'steuerrad'  => "2638",
    'musiknote'  => "266B",
    'paragraph'  => "00A7",
    'play'  => "25B6",
    'save'  => "2714",
    'spark'  => "2737",
    'star'  => "2605",
    'eins'  => "2460",
    'zwei'  => "2461",    
    'drei'  => "2462", 
    'euro'  => "20AC",
    'dollar'  => "0024",
    'copyright'  => "00A9",
    
    
);


// Aus gestalerischen Gr&uuml;nden m&uuml;ssen Plakate auf der Website exakt 277 Pixel breit sein. Die H&ouml;he ist
// flexibel, sollte jedoch auch gleich sein. In diesem Fall  391 Pixel.

$options = get_option( 'piratenkleider_theme_options' );
if (!isset($options['anonymize-user'])) 
            $options['anonymize-user'] = $defaultoptions['anonymize-user'];


if ($options['anonymize-user']==1) {
    /* IP-Adresse überschreiben */
    $_SERVER["REMOTE_ADDR"] = "0.0.0.0";
    /* UA-String überschreiben */
    $_SERVER["HTTP_USER_AGENT"] = "";
    
    update_option('require_name_email',0);
}

if ( ! isset( $content_width ) )   $content_width = $defaultoptions['content-width'];
require_once ( get_stylesheet_directory() . '/theme-options.php' );


/** Tell WordPress to run twentyten_setup() when the 'after_setup_theme' hook is run. */
add_action( 'after_setup_theme', 'piratenkleider_setup' );

if ( ! function_exists( 'piratenkleider_setup' ) ):

function piratenkleider_setup() {
     global $defaultoptions;
        // This theme styles the visual editor with editor-style.css to match the theme style.
        add_editor_style();

        // This theme uses post thumbnails
        add_theme_support( 'post-thumbnails' );

        // Add default posts and comments RSS feed links to head
        add_theme_support( 'automatic-feed-links' );

        
        /* 
         * Header-Kontrolle, bis WP 3.3
         */ 
     
        define('HEADER_TEXTCOLOR', '');
        define('HEADER_IMAGE', $defaultoptions['logo']); 
        define('HEADER_IMAGE_WIDTH',  $defaultoptions['logo-width'] ); // choose any number you like here
        define('HEADER_IMAGE_HEIGHT', $defaultoptions['logo-height'] ); // choose any number you like here         
        define('NO_HEADER_TEXT', true );
    
         add_custom_image_header('piratenkleider_header_style', 'piratenkleider_admin_header_style');
        
        /* Folgendes erst ab WP 3.4:
            $args = array(
            'width'         => 279,
              'height'        => 88,
            'default-image' => get_template_directory_uri() . '/images/logo.png',
            'uploads'       => true,
               'random-default' => true,
                'flex-height' => true,
                'suggested-height' => 90,
                'flex-width' => true,
                'max-width' => 350,
                'suggested-width' => 300,
                
            );
            add_theme_support( 'custom-header', $args );
             */
        
        
        // Make theme available for translation
        // Translations can be filed in the /languages/ directory
        load_theme_textdomain( 'piratenkleider', TEMPLATEPATH . '/languages' );

        $locale = get_locale();
        $locale_file = TEMPLATEPATH . "/languages/$locale.php";
        if ( is_readable( $locale_file ) )
                require_once( $locale_file );

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus( array(
                'primary' => __( 'Hauptnavigation <br />&nbsp; (Statische Seiten)', 'piratenkleider' ),
                'top' => __( 'Linkmenu <br />&nbsp; (Links zu Webportalen wie Wiki, Forum, etc)', 'piratenkleider' ),
                'sub' => __( 'Technische Navigation <br />&nbsp; (Kontakt, Impressunm, etc)', 'piratenkleider' ),
        ) );

        set_post_thumbnail_size( $defaultoptions['thumb-width'], $defaultoptions['thumb-height'], true );
        
        /** Abschalten von Fehlermeldungen auf der Loginseite */      
        // add_filter('login_errors', create_function('$a', "return null;"));
        
        
        /** Entfernen der Wordpressversionsnr im Header */
        remove_action('wp_head', 'wp_generator');
}
endif;

add_filter( 'avatar_defaults', 'piratenkleider_avatar' );

function piratenkleider_avatar ($avatar_defaults) {
    global $defaultoptions;
    $myavatar =  $defaultoptions['src-default-avatar']; 
    $avatar_defaults[$myavatar] = "Piratenkleider";
    return $avatar_defaults;
}


if ( ! function_exists( 'piratenkleider_admin_header_style' ) ) :
/**
 * Styles the header image displayed on the Appearance > Header admin panel.
 *
 * Referenced via add_custom_image_header() in twentyten_setup().
 *
 * @since Twenty Ten 1.0
 */
function piratenkleider_admin_header_style() {
?>
<style type="text/css">
/* Shows the same border as on front end */
#headimg {
        border-bottom: 1px solid #000;
        border-top: 4px solid #000;
        background-repeat: no-repeat;
}
</style>
<?php
}
endif;


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
                        $title .= " $separator " . sprintf( __( 'Page %s', 'piratenkleider' ), $paged );
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
                $title .= " $separator " . sprintf( __( 'Page %s', 'piratenkleider' ), max( $paged, $page ) );

        // Return the new title to wp_title():
        return $title;
}
add_filter( 'wp_title', 'piratenkleider_filter_wp_title', 10, 2 );


function piratenkleider_excerpt_length( $length ) {
        return $defaultoptions['teaser_maxlength'];
}
add_filter( 'excerpt_length', 'piratenkleider_excerpt_length' );

function piratenkleider_continue_reading_link() {
        return ' <a title="Zum Artikel '.strip_tags(get_the_title()).'" href="'. get_permalink() . '">' . __( 'Weiterlesen <span class="meta-nav">&rarr;</span>', 'piratenkleider' ) . '</a>';
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




if ( ! function_exists( 'piratenkleider_comment' ) ) :
/**
 * Template for comments and pingbacks.
 *
 * To override this walker in a child theme without modifying the comments template
 * simply create your own twentyten_comment(), and that function will be used instead.
 *
 * Used as a callback by wp_list_comments() for displaying the comments.
 *
 * @since Twenty Ten 1.0
 */
function piratenkleider_comment( $comment, $args, $depth ) {
        $GLOBALS['comment'] = $comment;
        global $defaultoptions;
        
         $options = get_option( 'piratenkleider_theme_options' );  
         if (!isset($options['aktiv-avatar'])) 
            $options['aktiv-avatar'] = $defaultoptions['aktiv-avatar'];
        if (!isset($options['aktiv-commentreplylink'])) 
            $options['aktiv-commentreplylink'] = $defaultoptions['aktiv-commentreplylink'];
        
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


function piratenkleider_widgets_init() {

       // Sidebar
        register_sidebar( array(
                'name' => __( 'Sidebar (Rechte Spalte)', 'piratenkleider' ),
                'id' => 'sidebar-widget-area',
                'description' => __( 'Dieser Bereich befindet sich rechts vom Inhaltsbereich. 
                    Er ist geeignet f&uuml;r Werbeplakate, Hinweise und &auml;hnliches.
                    Wenn leer, werden als Alternative einige der allgemeinen Standardplakate 
                    gezeigt.', 'piratenkleider' ),
                'before_widget' => '<div class="widget">',
                'after_widget' => '</div>',
                'before_title' => '<h2>',
                'after_title' => '</h2>',
        ) );
       // Sidebar2
        register_sidebar( array(
                'name' => __( 'Sidebar 2 (Rechts unter Plakaten)', 'piratenkleider' ),
                'id' => 'sidebar-widget-area-afterplakate',
                'description' => __( 'Dieser Bereich befindet sich rechts vom Inhaltsbereich.
                    Er ist nach den Werbeplakaten positioniert, die &uuml;ber die 
                    Optionen ein- oder abgeschaltet werden k&ouml;nnen.', 'piratenkleider' ),
                'before_widget' => '<div class="widget">',
                'after_widget' => '</div>',
                'before_title' => '<h2>',
                'after_title' => '</h2>',
        ) );

        // Sliderbereich
        register_sidebar( array(
                'name' => __( 'Startseite: Sliderbereich', 'piratenkleider' ),
                'id' => 'first-teaser-widget-area',
                'description' => __( 'Bereich oberhalb der 3 Artikelbilder.
                    Wenn leer, erscheinen hier wechselnden Bilder 
                    und Verlinkung mit Artikeln der Kategorie "Slider". 
                    Angezeigt werden die Artikelbilder.', 'piratenkleider' ),
                'before_widget' => '<div class="widget">',
                'after_widget' => '</div>',
                'before_title' => '<h3 class="widget-title">',
                'after_title' => '</h3>',
        ) );

        // Rechter Aktionlinkbereich, neben Slider
        register_sidebar( array(
                'name' => __( 'Startseite: Rechter Aktionlinkbereich', 'piratenkleider' ),
                'id' => 'second-teaser-widget-area',
                'description' => __( 'Dieser Bereich ist rechts neben den Slider
                    und dem Hauptcontent positioniert. Wenn leer, werden hier
                    die 3 Links zur Piratenwebsite gezeigt zum Mitmachen
                    oder Spenden', 'piratenkleider' ),
                'before_widget' => '<div class="widget">',
                'after_widget' => '</div>',
                'before_title' => '<h3 class="widget-title">',
                'after_title' => '</h3>',
        ) );

        

        // Startseite: Links unterhalb der 3 Artikel, per default Anzeige
        // der weiteren Artikel 
        register_sidebar( array(
                'name' => __( 'Startseite: Links unten', 'piratenkleider' ),
                'id' => 'first-startpage-widget-area',
                'description' => __( 'Bereich links unterhalb der 3 Presseartikel. 
                        Wenn leer, werden hier weitere Artikel aus
                        der Kategorie "pm" gezeigt. ', 'piratenkleider' ),
                'before_widget' => '<div class="widget">',
                'after_widget' => '</div>',
                'before_title' => '<h3>',
                'after_title' => '</h3>',
        ) );
        // Startseite: Rechts  unterhalb der 3 Artikel, per default Anzeige
        //  der Schlagwortliste
        register_sidebar( array(
                'name' => __( 'Startseite: Rechts unten', 'piratenkleider' ),
                'id' => 'second-startpage-widget-area',
                'description' => __( 'Bereich rechts unterhalb der drei Presseartikel.
                         Wenn leer, wird hier eine Schlagwortliste 
                         gezeigt.', 'piratenkleider' ),
                'before_widget' => '<div class="widget">',
                'after_widget' => '</div>',
                'before_title' => '<h3 class="widget-title">',
                'after_title' => '</h3>',
        ) );

        // Linke Seite der Fu&szlig;zeile
        register_sidebar( array(
                'name' => __( 'Fu&szlig;bereich: Linke Seite', 'piratenkleider' ),
                'id' => 'first-footer-widget-area',
                'description' => __( 'Bereich im Fu&szlig;teil unter dem Haupttextbereich.
                   Dieser Bereich eignet sich insbesondere f&uuml;r externe Links zu
                   anderen Piratenwebsites auf regionaler oder &uuml;beregionaler Ebene.
                   Diese werden dann als Menu mit externen Links definiert und
                   dann als Widget dieser Sidebar zugeordnet.
                   Wenn leer, wird hier nichts angezeigt.', 'piratenkleider' ),
                'before_widget' => '<div class="widget">',
                'after_widget' => '</div>',
                'before_title' => '<h2>',
                'after_title' => '</h2>',
        ) );

        // Rechte Seite der Fu&szlig;zeile
        register_sidebar( array(
                'name' => __( 'Fu&szlig;bereich: Rechte Spalte', 'piratenkleider' ),
                'id' => 'second-footer-widget-area',
                'description' => __( 'Rechte Spalte im Fu&szlig;bereich. Wenn leer, erscheint hier das
                    technische Menu (siehe Men&uuml;s). Wenn auch dieses nicht definiert ist, wird 
                    die Blogadresse und dessen RSS-Feedadresse gezeigt', 'piratenkleider' ),
                'before_widget' => '<div class="widget">',
                'after_widget' => '</div>',
                'before_title' => '<h2>',
                'after_title' => '</h2>',
        ) );

}
add_action( 'widgets_init', 'piratenkleider_widgets_init' );


function piratenkleider_remove_recent_comments_style() {
        global $wp_widget_factory;
        remove_action( 'wp_head', array( $wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style' ) );
}
add_action( 'widgets_init', 'piratenkleider_remove_recent_comments_style' );



if ( ! function_exists( 'piratenkleider_post_pubdateinfo' ) ) :
/**
 * Fusszeile unter Artikeln: Ver&ouml;ffentlichungsdatum
 */
function piratenkleider_post_pubdateinfo() {
        printf( __( '<span class="meta-prep">Ver&ouml;ffentlicht am</span> %1$s ', 'piratenkleider' ),
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
        printf( __( '<span class="meta-prep-author">von</span> %1$s ', 'piratenkleider' ),               
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


add_theme_support( 'post-thumbnails' );


/**
 * Replaces items with '-' as title with li class="menu_separator"
 *
 * @author Thomas Scholz (toscho)
 */
class My_Walker_Nav_Menu extends Walker_Nav_Menu
{
    /**
     * Start the element output.
     *
     * @param  string $output Passed by reference. Used to append additional content.
     * @param  object $item   Menu item data object.
     * @param  int $depth     Depth of menu item. May be used for padding.
     * @param  array $args    Additional strings.
     * @return void
     */
    public function start_el( &$output, $item, $depth, $args )
    {
        if ( '-' === $item->title )
        {
            // you may remove the <hr> here and use plain CSS.
            $output .= '<li class="menu_separator"><hr>';
        }
        else
        {
            parent::start_el( &$output, $item, $depth, $args );
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

function get_piratenkleider_seitenmenu( $zeige_sidebarpagemenu = 1 , $zeige_subpagesonly =1 ){
  global $defaultoptions;
  global $post;
  


          if ($zeige_sidebarpagemenu==1) {   
           if ($zeige_subpagesonly==1) {
                //if the post has a parent

                if($post->post_parent){
                    //collect ancestor pages
                    $relations = get_post_ancestors($post->ID);
                    //get child pages
                    $result = $wpdb->get_results( "SELECT ID FROM wp_posts WHERE post_parent = $post->ID AND post_type='page'" );
                    if ($result){
                        foreach($result as $pageID){
                            array_push($relations, $pageID->ID);
                        }
                    }
                    //add current post to pages
                    array_push($relations, $post->ID);
                    //get comma delimited list of children and parents and self
                    $relations_string = implode(",",$relations);
                    //use include to list only the collected pages. 
                    $sidelinks = wp_list_pages("sort_column=menu_order&title_li=&echo=0&include=".$relations_string);
                }else{
                    // display only main level and children
                    $sidelinks = wp_list_pages("sort_column=menu_order&title_li=&echo=0&depth=1&child_of=".$post->ID);
                }

                if ($sidelinks) { 
                    echo '<ul class="menu">';                   
                    echo $sidelinks; 
                    echo '</ul>';         
                } 
                             
             } else {
          
                if ( has_nav_menu( 'primary' ) ) {
                    wp_nav_menu( array('depth' => 0, 'container_class' => 'menu-header', 'theme_location' => 'primary', 'walker'  => new My_Walker_Nav_Menu()) );      
                } else { 
                    echo '<ul class="menu">';   
                     wp_page_menu( ); 
                   echo '</ul>';                        
                } 
             }
          }
  
}


function get_piratenkleider_custom_excerpt( ){
  global $defaultoptions;
  global $post;
  
 
  if (has_excerpt()) {
      return  get_the_excerpt();
  } else {
      $excerpt = get_the_content();
       if (!isset($excerpt)) {
          $excerpt = 'Kein Inhalt';
        }
  }
  
  $excerpt = strip_shortcodes($excerpt);
  $excerpt = strip_tags($excerpt); 
  if (strlen($excerpt)<5) {
      $excerpt = 'Kein Inhalt';
  }
// $excerpt =  closetags(strip_html_tags( $excerpt ));
  if (strlen($excerpt) >  $defaultoptions['teaser_maxlength']) {
    $the_str = substr($excerpt, 0, $defaultoptions['teaser_maxlength']);
    $the_str .= "...";
  }  else {
      $the_str = $excerpt;
  }
  $the_str .= piratenkleider_continue_reading_link();
  return $the_str;
}



function short_title($after = '...', $length = 6, $textlen = 60) {
   $mytitle = explode(' ', get_the_title(), $length);
   if (count($mytitle)>=$length) {
       array_pop($mytitle);
       $morewords = 1;
   } else {       
       $morewords = 0;
   }
   $mytitle = implode(" ",$mytitle);
   if (strlen($mytitle)> $textlen) {
       $mytitle = substr($mytitle, 0, $textlen);
       $mytitle .= $after;
   } elseif ($morewords==1) {
       $mytitle .= $after;
   }   
   return $mytitle;
}

function wpi_linkexternclass($content)
    {
        return preg_replace_callback('/<a[^>]+/', 'wpi_linkexternclass_callback', $content);
    }
 
function wpi_linkexternclass_callback($matches)
    {
        $link = $matches[0];
        $site_link = get_bloginfo('url');
 
            if (strpos($link, 'class') === false)
            {
                $link = preg_replace("%(href=\S(?!$site_link))%i", 'class="extern" $1', $link);
            }       
        return $link;
    }
add_filter('the_content', 'wpi_linkexternclass');



function dimox_breadcrumbs() {
  global $defaultoptions;
  $delimiter = '/';
  $home = 'Startseite'; // text for the 'Home' link
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
      echo $before . 'Kategorie "' . single_cat_title('', false) . '"' . $after;
 
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
        echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
        echo $before . get_the_title() . $after;
      }
 
    } elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
      $post_type = get_post_type_object(get_post_type());
      echo $before . $post_type->labels->singular_name . $after;
 
    } elseif ( is_attachment() ) {
      $parent = get_post($post->post_parent);
      $cat = get_the_category($parent->ID); $cat = $cat[0];
      echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
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
      echo $before . 'Suchergebnisse f&uuml;r "' . get_search_query() . '"' . $after;
 
    } elseif ( is_tag() ) {
      echo $before . 'Artikel mit Schlagwort "' . single_tag_title('', false) . '"' . $after;
 
    } elseif ( is_author() ) {
       global $author;
      $userdata = get_userdata($author);
      echo $before . 'Artikel von ' . $userdata->display_name . $after;
 
    } elseif ( is_404() ) {
      echo $before . 'Fehler 404' . $after;
    }
 
    if ( get_query_var('paged') ) {
      if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ' (';
      echo __('Page', 'piratenkleider') . ' ' . get_query_var('paged');
      if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ')';
    }
 
    echo '</div>';
 
  }
}



 
if( !is_admin()){

        wp_deregister_script('jquery');
        wp_register_script('jquery', $defaultoptions['src-jquery'] , false);
        wp_enqueue_script('jquery');

        wp_register_script('layoutjs', $defaultoptions['src-layoutjs'] , false);
        wp_enqueue_script('layoutjs');
       wp_register_script('yaml-focusfix', $defaultoptions['src-yaml-focusfix'] , false);
       wp_enqueue_script('yaml-focusfix');
       
       /* Eigenes comment-reply, welches bei Focus zum Anfang des Formulars 
        * springt und nicht in das Texteingabefeld, damit Tastaturbenutzer nicht 
        * umständlich zurücktabben mussen
        */

       wp_deregister_script('comment-reply');
       if (!isset($options['aktiv-commentreplylink'])) 
            $options['aktiv-commentreplylink'] = $defaultoptions['aktiv-commentreplylink'];
       if ($options['aktiv-commentreplylink']==1) {        
            wp_register_script('comment-reply', $defaultoptions['src-comment-reply'] , false);
            wp_enqueue_script('comment-reply');
       }
       
        
}

function custom_login() { 
    echo '<link rel="stylesheet" type="text/css" href="'.get_template_directory_uri().'/css/custom-login.css" />'; 
}
add_action('login_head', 'custom_login');

