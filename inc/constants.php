<?php
/**
 * Piratenkleider Constants
 *
 **/ 

$defaultoptions = array(
    'js-version'                    => '3.3',
    'content-width'                 => 665,
    'yt-content-width'              => 665,
    'yt-content-height'             => 500,
    'logo'                          => get_template_directory_uri() .'/images/logo.png',
    'logo-width'                    => 300,
    'logo-height'                   => 130,
    'background-header-image'	    => get_template_directory_uri() .'/images/default-header-background.png',
    'background-header-color'	    => 'eeeeee',
    'smallslider-thumb-width'       => 220,
    'smallslider-thumb-height'      => 185,
    'bigslider-thumb-width'         => 705,
    'bigslider-thumb-height'        => 240,
    'bigslider-thumb-crop'          => 1,
    'highslider-width'              => 1024,
    'highslider-height'             => 348,
    'highslider-crop'               => 1,
    
    'plakate-width'                 => 300,
    'plakate-height'                => 416,
    'plakate-title'		    => '',
    'plakate-url'		    => 'https://www.piratenpartei.de',
    'plakate-altadressen'	    => '',
    'plakate-src'		    => array(),

    'src-flexslider'                => get_template_directory_uri(). "/js/jquery.flexslider.min.js",
    'src-layoutjs'                  => get_template_directory_uri(). "/js/layout.min.js",
    'src-comment-reply'             => get_template_directory_uri(). "/js/comment-reply.min.js",
    'src-default-symbolbild'        => get_template_directory_uri() .'/images/defaultbild-wikinger.jpg',
    'src-default-symbolbild-404'    => get_template_directory_uri() .'/images/default-404.jpg',
    'src-default-symbolbild-category'   => get_template_directory_uri() .'/images/default-vorlage.jpg',
    'src-default-symbolbild-search' => get_template_directory_uri() .'/images/default-vorlage.jpg',
    'src-default-symbolbild-tag'    => get_template_directory_uri() .'/images/default-vorlage.jpg',
    'src-default-symbolbild-author' => get_template_directory_uri() .'/images/default-vorlage.jpg',
    'src-default-symbolbild-archive' => get_template_directory_uri() .'/images/default-vorlage.jpg',
    'src-default-artikel-symbolbild' => get_template_directory_uri() .'/images/default-vorlage.jpg',  
    'src-default-symbolbild-person' => get_template_directory_uri() .'/images/default-vorlage.jpg',  
    'slider-defaultbildsrc'	    => get_template_directory_uri() .'/images/default-vorlage.jpg',  
    'src-linkicons-css'		    => get_template_directory_uri() .'/css/basemod_linkicons.min.css',        
    'src-hamburger-css'		    => get_template_directory_uri() .'/css/hamburger.min.css',     
    'src-hamburger-js'		    => get_template_directory_uri() .'/js/hamburger.min.js',    
    'src-adminjs'                   => get_template_directory_uri() .'/js/admin.min.js', 
    'src-admincss'                   => get_template_directory_uri() .'/css/admin.min.css', 
    'src-customlogincss'            => get_template_directory_uri() .'/css/custom-login.min.css', 

    'dir-default-plakate'	    => '/plakate',
    'login_errors'		    => 1,
    'slider-aktiv'                  => 1,    
    'aktiv-defaultseitenbild'       => 0,
    'seitenbild-size'		    => 1,
    'seitenbild-url'		    => '',
    'aktiv-artikelbild'		    => 1,
    'artikelbild-size'		    => 1,    
    'aktiv-commentsonpages'	    => 0,
    'aktiv-platzhalterbilder-indexseiten'   => 0,
    'indexseitenbild-size'	    => 1,
    'continuelink'		    => 0,
    'aktiv-suche'                   => 1,   
    'slider-defaultwerbeplakate'    => 1,
    'slider-numberarticle'          => 3,
    'slider-animationType'          => 'fade',
    'slider-Direction'              => 'horizontal',
    'slider-slideshowSpeed'         => 8000,
    'slider-animationDuration'      => 600,
    'slider-catid'                  => 1,
    'defaultwerbesticker'                   => 1,
    'aktiv-autoren'                         => 1,
    'newsletter'                            => 1,
    'alle-socialmediabuttons'               => 1,
    'aktiv-linkicons'			    => 1,
    'aktiv-linkmenu'                        => 1,
    'aktiv-startseite-kategorien'           => 0,
    'aktiv-startseite-tags'                 => 0,
    'aktiv-avatar'                          => 0,
    'aktiv-autokeywords'		    => 0,
    'aktiv-hamburger'			    => 0,
    'src-default-avatar'                    => get_template_directory_uri(). '/images/avataricon.gif',
    'seitenmenu_mode'			    => 0,
    'zeige_subpagesonly'                    => 1,
    'zeige_sidebarpagemenu'                 => 1,
    'zeige_commentbubble_null'              => 0,
    'zeigerechtsvorschriften'               => 1,
    

    'artikelstream-type'		    => 0,
    'artikelstream-exclusive-catliste'	    => array(), 
    /* Ids of categories */
    'artikelstream-maxnum-main'             =>  5,
    'artikelstream-maxnum-second'	    =>  1,
    'artikelstream-maxnum-linktipps'	    =>  1,
    'artikelstream-title-main'		    =>  __("Current entries", 'piratenkleider'),
    'artikelstream-title-maincontinuelist'  =>  __("More entries", 'piratenkleider'),
    'artikelstream-title-linktipps'	    =>  __("Bookmarks", 'piratenkleider'),
    'artikelstream-title-linktippcontinuelist'=>  __("More bookmarks", 'piratenkleider'),
    'artikelstream-title-second'	    =>  __("Other entries", 'piratenkleider'),
    'artikelstream-title-secondcontinuelist'=>  __("More entries", 'piratenkleider'),
    'artikelstream-show-second'		    => 1,
    'artikelstream-show-linktipps'	    => 1,
    'artikelstream-nextnum-main'	    => 5,
    'artikelstream-nextnum-second'	    => 5,
    'artikelstream-nextnum-linktipps'	    => 5,    
    'artikelstream-numfullwidth-main'       => 1,
    'artikelstream-numfullwidth-second'     => 1,
    'artikelstream-show-widget'		    => 0,
    'artikelstream-content-allow3column'    => 0, 
    'categoryindex-teaserlength'            => 170,
    'categoryindex-numlinklist'		    => 5,
    
    'category-teaser'			    => 1,
    'category-num-article-fullwidth'	    => 10,
    'category-num-article-halfwidth'	    => 0,
    
    'category-teaser-maxlength'		    => 500,            
    'category-teaser-titleup'		    => 1, /* Titles up */ 
    'category-teaser-datebox'		    => 4, 
	/* 0 = Datebox, 
	 * 1 = Thumbnail (or: first picture, first video, fallback picture),
	 * 2 = First picture (or: thumbnail, first video, fallback picture),
	 * 3 = First video (or: thumbnail, first picture, fallback picture),
	 * 4 = First video (or: first picture, thumbnail, fallback picture),
	 * 5 = Nothing */ 
    'category-teaser-floating'		    => 0,
    'category-teaser-dateline'		    => 1,
        /* 1 = show Date on line up of the text if no datebox */
    'category-teaser-maxlength-halfwidth'   => 200,        
    'category-teaser-titleup-halfwidth'	    => 1, 
        /* 1= Titles up */ 
    'category-teaser-datebox-halfwidth'	    => 4, 
    'category-teaser-floating-halfwidth'    => 1,
    'category-teaser-dateline-halfwidth'    => 2, 
        /* 1 = show Date on line up of the text if no datebox */    
    'teaser-thumbnail_width'		    => 120,
    'teaser-thumbnail_height'		    => 120,
    'teaser-thumbnail_crop'		    => 1,
    
    'linktipp-thumbnail_width'		    => 320,
    'linktipp-thumbnail_height'		    => 320,
    'linktipp-thumbnail_crop'		    => 0,
    
    'person-thumbnail_width'		    => 200,
    'person-thumbnail_height'		    => 300,
    'person-thumbnail_crop'		    => 1,

    
    'sidebar-thumbnail_width'		    => 270,
    'sidebar-thumbnail_height'		    => 360,
    'sidebar-thumbnail_crop'		    => 1,
    'sidebar-thumbnail_name'		    => 'sidebar-thumb',

    'bannerlink-width'			    => 300,
    'bannerlink_name'			    => 'bannerlink-thumb',
    

    
    'src-teaser-thumbnail_default'	    => get_template_directory_uri() .'/images/default-teaserthumb.gif',
    'teaser-thumbnail_fallback'		    => 1,
    
    'teaser-type'			    => 'big',    
    'teaser-title-maxlength'		    => 120,
    'teaser-subtitle'			    => __( 'Trending Topics', 'piratenkleider' ),
    'teaser-title-words'		    => 7,

    'teaser_maxlength'			    => 500,
    'teaser-showcredits'                    => 1,
    'teaser-titleup'			    => 1, 
        /* Titles up */ 
    'teaser-datebox'			    => 4,
    'teaser-floating'			    => 0,
    'teaser-dateline'			    => 1, 
        /* 1 = show Date on line up of the text if no datebox */
    'teaser-maxlength-halfwidth'	    => 200,        
    'teaser-titleup-halfwidth'		    => 1, 
        /* Titles up */ 
    'teaser-datebox-halfwidth'		    => 4, 
    'teaser-floating-halfwidth'		    => 1,
    'teaser-dateline-halfwidth'		    => 1, 
        /* 1 = show Date on line up of the text if no datebox */      
     
    'url-newsletteranmeldung'		    => 'https://service.piratenpartei.de/subscribe/newsletter',
    'anonymize-user'                => 0,
    'anonymize-user-commententries' => 0,
    'aktiv-commentreplylink'        => 1,
    'default_comment_notes_before'  => '<p class="comment-notes">'.__( 'Your email address won\'t be displayed. Required fields are marked with this sign: <span class="required">*</span>', 'piratenkleider' ). '</p>',
    'comments_disclaimer'           => __('Notice: Comments reflect the opinions of those who wrote them. Allowing people to comment here does not mean that we also agree with them.', 'piratenkleider' ),
    'disclaimer_post'               => '',
    'feed_cache_lifetime'           => 14400,
    'use_wp_feed_defaults'          => 1,
    'dir_feed_cache'                => '',
    'teaserlink1-title'             => __( 'Get Informed', 'piratenkleider' ),
    'teaserlink1-untertitel'        => __( 'about our topics and visions!', 'piratenkleider' ),            
    'teaserlink1-url'               => 'https://www.piratenpartei.de/politik/themen/', 
    'teaserlink1-symbol'            => 'idee',
    
    'teaserlink2-title'             => __( 'Support us', 'piratenkleider' ),
    'teaserlink2-untertitel'        => __( 'with your engagement!', 'piratenkleider' ),            
    'teaserlink2-url'               => 'https://www.piratenpartei.de/unterstutze-uns/', 
    'teaserlink2-symbol'            => 'herz',
    
    'teaserlink3-title'             => __( 'Become a Pirat!', 'piratenkleider' ),
    'teaserlink3-untertitel'        => __( 'Subscribe to the pirate party', 'piratenkleider' ),            
    'teaserlink3-url'               => 'https://www.piratenpartei.de/mitmachen/mitglied-werden', 
    'teaserlink3-symbol'            => 'steuerrad',
    
    'stickerlink1-content'          => '<span class="gedreht">Become<br><span class="cicolor">Pirat!</span></span>',
    'stickerlink1-url'              => 'https://www.piratenpartei.de/mitmachen/mitglied-werden/',
    'stickerlink2-content'          => '<span class="gedreht"><span class="cicolor">Support</span><br><span class="small">and help us</span> </span>',
    'stickerlink2-url'              => 'https://spenden.piratenpartei.de/',
    'stickerlink3-content'          => '',
    'stickerlink3-url'              => '',
    'default_footerlink_key'		    => 'International (with flags)',
    'default_footerlink_show'		    => 1,    
    'default_text_title_home_backlink'	    => __('Back to start page','piratenkleider' ), 
    'yt-alternativeembed'		    => 1,
        /* YouTube Videos ueber eigenen Embedcode gestalten und an youtbe-nocookie lenken */
    'yt-norel'				    => 1,
	/* Keine weiteren Videos vorschlagen */
    'excerpt_allowtags'			    => '<br>,<br />',        
    'zeige_breadcrump'			    => 1,
    'breadcrumb_delimiter'		    => ' / ',    
    'breadcrumb_homelinktext'		    =>  __( 'Start page', 'piratenkleider' ),
    'breadcrumb_beforehtml'		    =>  '<span class="current">',
    'breadcrumb_afterhtml'		    =>  '</span>',
    'zeige_breadcrump_frontpages'           => 0,
    
    

    
    'src-linktipp-thumbnail_default'	    => get_template_directory_uri() .'/images/default-teaserthumb.gif',
    'src-person_bild_default'		    => '',
    'linktipps-titlepos'		    => 0, // 0 = ueber Bild/Text, 1 = unter Bild/Text
    'linktipps-linkpos'			    => 0, // 0 = Link auf dem Titel, 1 = Link auf Text/Bild, 2 = URL unter Bild/Text anzeigen&verlinken
    'linktipps-subtitlepos'		    => 0, // 0 = oben, vor Titel, 1 = oben nach titel, 2 = unten
    
    'stylefile-position'		    => 0,
    'aktiv-stylefile'			    => 0,
    'fonts-headers'                         => 'none',
    'fonts-menuheaders'                     => 'none',
    'fonts-content'                         => 'none',
    'img-meta-credits'                      => '',
    'feed-overwriteauthorstring'            => '',
    'feed-addthumbnail'                     => true,
    'feed-thumb-sizename'                   => 'feedthumb',
    'feed-thumb-width'                      => 600,
    'feed-thumb-height'                     => 315,
    'feed-thumb-crop'                       => false,
    'position_sidebarbottom'                => 0,
    'suche-treffer_pro_seite'               => 10,
    'suche-excerptlength'                   => 300,
    
    'meta-maxlengthvalue'                   => 140,
    'url-wiki'				    => 'https://wiki.piratenpartei.de',
    'vcard-showfeed'                        => 1,
    'vcard-feed-maxnum'                     => 7,
    'vcard-showlocalentries'                => 1,
    'vcard-maxnum-selectlist'		    => 7,
    'sidebar-steckbrief-maxwidth'	    => 270,
    'sidebar-steckbrief-maxheight'	    => 360,
        
    'optionpage-tab-default'                => 'kopfteil',
    'open_graph-active'                   => true,
    'open_graph_excerptlength'              => 400,
);


/*
 * Social Media 
 */
$default_socialmedia_liste = array(
    'delicious' => array(
	'name' => 'Delicious',
	'content'  => '',
	'active' => 0,
    ),
    'diaspora' => array(
	'name' => 'Diaspora',
	'content'  => 'https://joindiaspora.com/u/piratenpartei',
	'active' => 0,
    ),
    'facebook' => array(
	'name' => 'Facebook',
	'content'  => 'https://www.facebook.com/PiratenparteiDeutschland',
	'active' => 1,
    ),
    'twitter' => array(
	'name' => 'Twitter',
	'content'  => 'https://twitter.com/#!/piratenpartei',
	'active' => 1,
    ),
    'gplus' => array(
	'name' => 'Google Plus',
	'content'  => 'https://plus.google.com/u/0/107862983960150496076/posts',
	'active' => 1,
    ),
    'flattr' => array(
	'name' => 'Flattr',
	'content'  => '',
	'active' => 0,
    ),
    'flickr' => array(
	'name' => 'Flickr',
	'content'  => 'https://secure.flickr.com/photos/piratenpartei/',
	'active' => 0,
    ),
  
    'identica' => array(
	'name' => 'Identica',
	'content'  => 'https://identi.ca/piratenpartei',
	'active' => 0,
    ),
    'itunes' => array(
	'name' => 'iTunes',
	'content'  => '',
	'active' => 0,
    ),
    'skype' => array(
	'name' => 'Skype',
	'content'  => '',
	'active' => 0,
    ),
    
    'youtube' => array(
	'name' => 'YouTube',
	'content'  => 'https://www.youtube.com/user/piratenpartei',
	'active' => 1,
    ),
    'xing' => array(
	'name' => 'Xing',
	'content'  => 'https://www.xing.com/net/piratenpartei',
	'active' => 0,
    ),
    'tumblr' => array(
	'name' => 'Tumblr',
	'content'  => 'http://wirstellendasmalinfrage.tumblr.com',
	'active' => 0,
    ),
    'github' => array(
	'name' => 'GitHub',
	'content'  => '',
	'active' => 0,
    ),
    'appnet' => array(
	'name' => 'App.Net',
	'content'  => '',
	'active' => 0,
    ),
    'feed' => array(
	'name' => 'RSS Feed',
	'content'  => get_bloginfo( 'rss2_url' ),
	'active' => 1,
    ),
    'friendica' => array(
        'name' => 'Friendica',
        'content'  => 'https://pirati.ca/',
        'active' => 0,
    ),
    'instagram' => array(
        'name' => 'Instagram',
        'content'  => 'https://instagram.com/piratenpartei/',
        'active' => 0,
    ),
); 


/* 
 * Default Links for Topmenu , can be overwritten bei widget  
 */
$default_toplink_liste = array(    
    'link1'  => array(
	'name'	    => __('Wiki', 'piratenkleider' ),
	'content'  => 'https://wiki.piratenpartei.de',
	'active'    => 1,
    ),
    'link2'  => array(
	'name'	    => __('BEO', 'piratenkleider' ),
	'content'  => 'https://beo.piratenpartei.de',
	'active'    => 1,
    ),
    'link3'  => array(
	'name'	    => __('Forum', 'piratenkleider' ),
	'content'  => 'https://news.piratenpartei.de',
	'active'    => 1,
    ),
    'link4'  => array(
	'name'	    => __('Chair', 'piratenkleider' ),
	'content'  => 'https://vorstand.piratenpartei.de',
	'active'    => 0,
    ),  
    'link5'  => array(
	'name'	    => __('Flaschenpost', 'piratenkleider' ),
	'content'  => 'https://flaschenpost.piratenpartei.de',
	'active'    => 1,
    ),
    'link6'  => array(
	'name'	    => __('Donating', 'piratenkleider' ),
	'content'  => 'https://spenden.piratenpartei.de',
	'active'    => 1,
    ),
    'link7'  => array(
	'name'	    => __('Shop', 'piratenkleider' ),
	'content'  => 'https://shop.piratenpartei.de',
	'active'    => 0,
    ),  
     'link8'  => array(
	'name'	    => __('Pirateninfo', 'piratenkleider' ),
	'content'  => 'http://www.pirateninfo.de',
	'active'    => 1,
    ),  
);


/**
 * Liste der Defaultbilder fuer Seiten und Slider
 */
$defaultbilder_liste = array(
	'0'=> array(
		'src' =>	get_template_directory_uri().'/images/default-vorlage.jpg',
		'label' => __( 'Default', 'piratenkleider' )
	),
	'1'=> array(
		'src' =>	get_template_directory_uri().'/images/defaultbild-wikinger.jpg',
		'label' => __( 'Wikinger', 'piratenkleider' )
	),
);




/*
 * Default color modifications for standard css style
 */
$default_colorstyles = array(
    '-'  =>  __('Default Stylesheet', 'piratenkleider' ),
    'colors_at.css' => __( 'Austria (Violet)', 'piratenkleider' ),
    'colors_lu.css' => __( 'Luxemburgh (Violet)', 'piratenkleider' ),
    'colors_hu.css' => __( 'Hungary (Violet)', 'piratenkleider' ),
    'colors_tk.css' => __( 'Turkey (Cyan)', 'piratenkleider' ),
    'colors_us.css' => __( 'USA (Violet)', 'piratenkleider' ),
    'colors_flaschenpost.css' => __( 'Flaschenpost (Light Blue)', 'piratenkleider' ),
    'colors_white.css' => __( 'White/Transparent', 'piratenkleider' ),
    'colors_ch.css' => __( 'Switzerland', 'piratenkleider' ),

 );
          


$default_fonts = array(
    'none'=> array(
        'title' => __( 'Use default font settings', 'piratenkleider' ),
        'family' => '',
    ),      
    'serifdefault' => array(
        'title' => __( 'Georgia, Times, Calibri, serif', 'piratenkleider' ),
        'family' => 'Georgia, Times, Calibri, serif',
    ),       
    'sansserifdefault' => array(
        'title' => __( 'Helvetica, Verdana, Arial, sans-serif', 'piratenkleider' ),
        'family' => 'Helvetica, Verdana, Arial, sans-serif',
        'comments'  =>  __( 'Use default sans serif font', 'piratenkleider' ),
    ),  
    'BebasNeue' => array(
        'title' => __( 'Bebas Neue', 'piratenkleider' ),
        'comments'  => '',
        'webfont'   => 1,
        'ttf'   => '/fonts/BebasNeue-webfont.ttf',
        'woff'   => '/fonts/BebasNeue-webfont.woff',
    ),
    'Awesome' => array(
        'title' => __( 'Awesome', 'piratenkleider' ),
        'comments'  => '',
        'webfont'   => 1,
        'ttf'   => '/fonts/fontawesome-webfont.ttf',
        'woff'   => '/fonts/fontawesome-webfont.woff',
    ),
    'DroidSans' => array(
        'title' => __( 'Droid Sans', 'piratenkleider' ),
        'comments'  => '',
        'webfont'   => 1,
        'eot'   => '/fonts/DroidSans.eot',
        'ttf'   => '/fonts/DroidSans.ttf',
    ),    
    'LinLibertine' => array(
        'title' => __( 'Libertine', 'piratenkleider' ),
        'comments'  => '',        
        'webfont'   => 1,
        'woff'   => '/fonts/LinLibertine_R.woff',
    ), 
    'PoliticsHead' => array(
        'title' => __( 'PoliticsHead', 'piratenkleider' ),
        'comments'  => '',        
        'webfont'   => 1,
        'woff'   => '/fonts/PoliticsHeadv1_9.woff',
        'eot'   => '/fonts/PoliticsHeadv1_9.ttf',
    ), 
    'monospace' => array(
        'title' => __( '"Courier New", Courier, monospace', 'piratenkleider' ),
        'family' => '"Courier New", Courier, monospace',
    ),    
      
);

/*
 * Default font modifications for standard css style
 */
$default_alternativestyles = array(
    'style.css'	    => __( 'Default Style', 'piratenkleider' ),
    'sample.css'    => __( 'Empty CSS', 'piratenkleider' ),
    'scapegoat.css' => __( 'Scapegoat-Adaption (1.5)', 'piratenkleider' ),
);

/*
 * default links for pirate party worldwide and in germany
 */

 $default_footerlink_liste = array(
     __( 'Germany', 'piratenkleider' )  => array(
        'title' => __( 'Pirate Party Germany', 'piratenkleider' ),
        'url'   => 'https://www.piratenpartei.de',
        'sublist'   => array(
            __('Baden-W&uuml;rttemberg', 'piratenkleider' ) => 'https://piratenpartei-bw.de/',
            __('Bayern', 'piratenkleider' ) => 'https://piratenpartei-bayern.de/',
            __('Berlin', 'piratenkleider' ) => 'http://berlin.piratenpartei.de/',
            __('Brandenburg', 'piratenkleider' ) => 'https://www.piratenbrandenburg.de/',
            __('Bremen', 'piratenkleider' ) => 'http://bremen.piratenpartei.de/',
            __('Hamburg', 'piratenkleider' ) => 'http://www.piratenpartei-hamburg.de/',
            __('Hessen', 'piratenkleider' ) => 'https://www.piratenpartei-hessen.de/',
            __('Mecklenburg-Vorpommern', 'piratenkleider' ) => 'http://www.piratenpartei-mv.de/',
            __('Niedersachsen', 'piratenkleider' ) => 'https://www.piraten-nds.de/',
            __('Nordrhein-Westfalen', 'piratenkleider' ) => 'http://www.piratenpartei-nrw.de/',
            __('Rheinland-Pfalz', 'piratenkleider' ) => 'http://www.piraten-rlp.de/',
            __('Saarland', 'piratenkleider' ) => 'https://piratenpartei-saarland.de/',
            __('Sachsen', 'piratenkleider' ) => 'http://www.piraten-sachsen.de/',
            __('Sachsen-Anhalt', 'piratenkleider' ) => 'https://www.piraten-lsa.de/',
            __('Schleswig-Holstein', 'piratenkleider' ) => 'https://landesportal.piratenpartei-sh.de/',
            __('Th&uuml;ringen', 'piratenkleider' ) => 'http://www.piraten-thueringen.de/'
        )
     ),
     __( 'Schweiz', 'piratenkleider' )  => array(
        'title' => __( 'Piratenpartei Schweiz', 'piratenkleider' ),
        'url'   => 'https://piratenpartei.ch',
        'sublist'   => array(
            __('Z&uuml;rich', 'piratenkleider' ) => 'https://zh.piratenpartei.ch/',
            __('Bern', 'piratenkleider' ) => 'https://be.piratenpartei.ch/',
            __('Beide Basel', 'piratenkleider' ) => 'http://bs.piratenpartei.ch/',
            __('Zentralschweiz', 'piratenkleider' ) => 'https://zg.piratenpartei.ch/',
            __('St. Gallen und beide Appenzell', 'piratenkleider' ) => 'http://sg.piratenpartei.ch/',
            __('Waadt', 'piratenkleider' ) => 'http://vd.partipirate.ch/',
            __('Genf', 'piratenkleider' ) => 'https://ge.partipirate.ch/',
        )
     ),
     __('International', 'piratenkleider' ) => array(
         'title' => __('Pirate Parties International', 'piratenkleider' ),
         'url'  => 'http://www.pp-international.net/',
         'sublist' => array(
             __('Australia', 'piratenkleider' ) => 'http://pirateparty.org.au/',
             __('Austria', 'piratenkleider' ) => 'http://piratenpartei.at/',
             __('Argentina', 'piratenkleider' ) => 'http://www.partidopirata.com.ar/',
             __('Belarus', 'piratenkleider' ) => 'http://pirates.by/',            
             __('Beligium', 'piratenkleider' ) => 'https://pirateparty.be/',
             __('Brazil', 'piratenkleider' ) => 'http://www.partidopirata.org/',
             __('Canada', 'piratenkleider' ) => 'http://www.piratepartyofcanada.com/',
             __('Chile', 'piratenkleider' ) => 'http://www.partidopirata.cl/',
             __('Columbia', 'piratenkleider' ) => 'http://pp.interlecto.net/',
             __('Croatia', 'piratenkleider' ) => 'https://pirati.hr/',
//             __('Cyprus', 'piratenkleider' ) => 'http://www.piratepartycyprus.com/',
             __('Czech Republic', 'piratenkleider' ) => 'http://www.ceskapiratskastrana.cz/',
             __('Denmark', 'piratenkleider' ) => 'http://piratpartiet.dk/',
             __('Estonia', 'piratenkleider' ) => 'http://piraadipartei.ee/',
             __('Finland', 'piratenkleider' ) => 'https://piraattipuolue.fi/',
             __('France', 'piratenkleider' ) => 'https://partipirate.org/',
             __('Germany', 'piratenkleider' ) => 'https://www.piratenpartei.de/', 
             __('Greece', 'piratenkleider' ) => 'https://pirateparty.gr/',
  //           __('Guatemala', 'piratenkleider' ) => 'http://partidopirata.org.gt/',
             __('Hungary', 'piratenkleider' ) => 'http://kalozpart.org/',
             __('Iceland', 'piratenkleider') => 'http://pirateparty.is/',
             __('Israel', 'piratenkleider') => 'http://piratim.org/',
             __('Italy', 'piratenkleider' ) => 'http://www.partito-pirata.it/',
             __('Japan', 'piratenkleider' ) =>  'http://www.piratepartyjapan.org/',  
             __('Kazakhstan', 'piratenkleider' ) => 'http://pirateparty.kz/',
             __('Korea, South', 'piratenkleider' ) => 'http://pirateparty.kr/',
             __('Latvia', 'piratenkleider' ) => 'http://piratupartija.lv/',
//             __('Lithuania', 'piratenkleider' ) => 'http://piratupartija.lt/',
             __('Luxembourg', 'piratenkleider' ) => 'http://www.piratepartei.lu/',
//             __('Mexico', 'piratenkleider' ) => 'http://www.partidopiratamexicano.org/',
             __('Netherlands', 'piratenkleider' ) => 'https://www.piratenpartij.nl/',
             __('New Zealand', 'piratenkleider' ) => 'http://pirateparty.org.nz/',
             __('Peru', 'piratenkleider' ) => 'http://wiki.freeculture.org/Pirata',
             __('Poland', 'piratenkleider' ) => 'https://polskapartiapiratow.pl/',
             __('Portugal', 'piratenkleider' ) => 'http://www.partidopiratapt.eu/',
             __('Romania', 'piratenkleider' ) => 'http://www.partidulpirat.ro/',
             __('Russia', 'piratenkleider' ) => 'http://pirate-party.ru/',
             __('Serbia', 'piratenkleider' ) => 'http://www.piratskapartija.com/',
             __('Sweden', 'piratenkleider' ) => 'https://www.piratpartiet.se/',
             __('Switzerland', 'piratenkleider' ) => 'https://www.piratenpartei.ch/',
             __('Slovakia', 'piratenkleider' ) => 'http://www.piratskastrana.sk/',
             __('Slovenia', 'piratenkleider' ) => 'http://www.piratskastranka.net/',
             __('Spain', 'piratenkleider' ) => 'http://www.partidopirata.es/',
             __('Turkey', 'piratenkleider' ) => 'http://www.korsanpartisi.org/',
             __('Ukraine', 'piratenkleider' ) => 'http://pp-ua.org/',
//             __('Uruguay', 'piratenkleider' ) => 'http://partidopirata.org.uy/',
             __('United Kingdom', 'piratenkleider') => 'https://pirateparty.org.uk/',
             __('United States', 'piratenkleider' ) => 'http://uspirates.org/',

         )
     ), 
      __('International (with flags)', 'piratenkleider' ) => array(
         'title' => __('Pirate Parties International', 'piratenkleider' ),
         'url'  => 'http://www.pp-international.net/',
         'sublist' => array(
            '<span class="flagicon-au"></span> '. __('Australia', 'piratenkleider' ) => 'http://pirateparty.org.au/',
            '<span class="flagicon-at"></span> '. __('Austria', 'piratenkleider' ) => 'http://piratenpartei.at/',
            '<span class="flagicon-ar"></span> '. __('Argentina', 'piratenkleider' ) => 'http://www.partidopirata.com.ar/',
            '<span class="flagicon-by"></span> '. __('Belarus', 'piratenkleider' ) => 'http://pirates.by/',            
            '<span class="flagicon-be"></span> '. __('Beligium', 'piratenkleider' ) => 'https://pirateparty.be/',
            '<span class="flagicon-br"></span> '. __('Brazil', 'piratenkleider' ) => 'http://www.partidopirata.org/',
            '<span class="flagicon-ca"></span> '. __('Canada', 'piratenkleider' ) => 'http://www.piratepartyofcanada.com/',
            '<span class="flagicon-cl"></span> '. __('Chile', 'piratenkleider' ) => 'http://www.partidopirata.cl/',
            '<span class="flagicon-co"></span> '. __('Columbia', 'piratenkleider' ) => 'http://pp.interlecto.net/',
            '<span class="flagicon-hr"></span> '. __('Croatia', 'piratenkleider' ) => 'https://pirati.hr/',
    //        '<span class="flagicon-cy"></span> '. __('Cyprus', 'piratenkleider' ) => 'http://www.piratepartycyprus.com/',
            '<span class="flagicon-cz"></span> '. __('Czech Republic', 'piratenkleider' ) => 'http://www.ceskapiratskastrana.cz/',
            '<span class="flagicon-dk"></span> '. __('Denmark', 'piratenkleider' ) => 'http://piratpartiet.dk/',
            '<span class="flagicon-ee"></span> '. __('Estonia', 'piratenkleider' ) => 'http://piraadipartei.ee/',
            '<span class="flagicon-fi"></span> '. __('Finland', 'piratenkleider' ) => 'https://piraattipuolue.fi/',
            '<span class="flagicon-fr"></span> '. __('France', 'piratenkleider' ) => 'https://partipirate.org/',
            '<span class="flagicon-de"></span> '. __('Germany', 'piratenkleider' ) => 'https://www.piratenpartei.de/', 
            '<span class="flagicon-gr"></span> '. __('Greece', 'piratenkleider' ) => 'https://pirateparty.gr/',
    //        '<span class="flagicon-gt"></span> '. __('Guatemala', 'piratenkleider' ) => 'http://partidopirata.org.gt/',
            '<span class="flagicon-hu"></span> '. __('Hungary', 'piratenkleider' ) => 'http://kalozpart.org/',
            '<span class="flagicon-is"></span> '. __('Iceland', 'piratenkleider') => 'http://pirateparty.is/',
            '<span class="flagicon-il"></span> '. __('Israel', 'piratenkleider') => 'http://piratim.org/',
            '<span class="flagicon-it"></span> '. __('Italy', 'piratenkleider' ) => 'http://www.partito-pirata.it/',
            '<span class="flagicon-jp"></span> '. __('Japan', 'piratenkleider' ) =>  'http://www.piratepartyjapan.org/',  
            '<span class="flagicon-kz"></span> '. __('Kazakhstan', 'piratenkleider' ) => 'http://pirateparty.kz/',
            '<span class="flagicon-kr"></span> '. __('Korea, South', 'piratenkleider' ) => 'http://pirateparty.kr/',
            '<span class="flagicon-lv"></span> '. __('Latvia', 'piratenkleider' ) => 'http://piratupartija.lv/',
    //        '<span class="flagicon-lt"></span> '. __('Lithuania', 'piratenkleider' ) => 'http://piratupartija.lt/',
            '<span class="flagicon-lu"></span> '. __('Luxembourg', 'piratenkleider' ) => 'http://www.piratepartei.lu/',
    //        '<span class="flagicon-mx"></span> '. __('Mexico', 'piratenkleider' ) => 'http://www.partidopiratamexicano.org/',
            '<span class="flagicon-nl"></span> '. __('Netherlands', 'piratenkleider' ) => 'https://www.piratenpartij.nl/',
            '<span class="flagicon-nz"></span>  '. __('New Zealand', 'piratenkleider' ) => 'http://pirateparty.org.nz/',
            '<span class="flagicon-pe"></span> '. __('Peru', 'piratenkleider' ) => 'http://wiki.freeculture.org/Pirata',
            '<span class="flagicon-pl"></span> '. __('Poland', 'piratenkleider' ) => 'https://polskapartiapiratow.pl/',
            '<span class="flagicon-pt"></span> '. __('Portugal', 'piratenkleider' ) => 'http://www.partidopiratapt.eu/',
            '<span class="flagicon-ro"></span> '. __('Romania', 'piratenkleider' ) => 'http://www.partidulpirat.ro/',
            '<span class="flagicon-ru"></span> '. __('Russia', 'piratenkleider' ) => 'http://pirate-party.ru/',
            '<span class="flagicon-rs"></span> '. __('Serbia', 'piratenkleider' ) => 'http://www.piratskapartija.com/',
            '<span class="flagicon-se"></span> '. __('Sweden', 'piratenkleider' ) => 'https://www.piratpartiet.se/',
            '<span class="flagicon-ch"></span> '. __('Switzerland', 'piratenkleider' ) => 'https://www.piratenpartei.ch/',
            '<span class="flagicon-sk"></span> '. __('Slovakia', 'piratenkleider' ) => 'http://www.piratskastrana.sk/',
            '<span class="flagicon-si"></span> '. __('Slovenia', 'piratenkleider' ) => 'http://www.piratskastranka.net/',
            '<span class="flagicon-es"></span> '. __('Spain', 'piratenkleider' ) => 'http://www.partidopirata.es/',
            '<span class="flagicon-tr"></span> '. __('Turkey', 'piratenkleider' ) => 'http://www.korsanpartisi.org/',
            '<span class="flagicon-ua"></span> '. __('Ukraine', 'piratenkleider' ) => 'http://pp-ua.org/',
    //        '<span class="flagicon-uy"></span> '. __('Uruguay', 'piratenkleider' ) => 'http://partidopirata.org.uy/',
            '<span class="flagicon-uk"></span> '. __('United Kingdom', 'piratenkleider') => 'https://pirateparty.org.uk/',
            '<span class="flagicon-us"></span> '. __('United States', 'piratenkleider' ) => 'http://uspirates.org/',             
         )
     ), 
     'Baden-Wuerttemberg' => array(
         'title' => __('Pirate Party Country Association','piratenkleider').' Baden-W&uuml;rttemberg',
         'url'  => 'http://www.piratenpartei-bw.de/',
         'sublist' => array(
             __('<abbr title="District Association">DA</abbr>','piratenkleider').' Freiburg' => 'https://bzv-fr.piratenpartei-bw.de/',      
             __('<abbr title="District Association">DA</abbr>','piratenkleider').' Stuttgart' => 'http://www.piraten-bzv-stuttgart.de/',
             __('<abbr title="District Association">DA</abbr>','piratenkleider').' T&uuml;bingen' => 'https://bzv.piratenpartei-tuebingen.de/',          
             __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' B&ouml;blingen' => 'https://wiki.piratenpartei.de/BW:Landkreis_B%C3%B6blingen/District Chapter',
             __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' Calw-Freudenstadt' => 'https://wiki.piratenpartei.de/BW:Kreisverband_Calw-Freudenstadt',
             __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' Heidenheim' => 'http://www.piraten-heidenheim.de',
             __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' Heilbronn' => 'http://www.piratenpartei-heilbronn.de',
             __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' Karlsruhe Land' => 'http://piraten-ka-land.de',
             __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' Karlsruhe Stadt' => 'http://www.piraten-karlsruhe.de',
             __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' Ludwigsburg' => 'http://www.piratenpartei-ludwigsburg.de',
             __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' Mannheim' => 'http://piratenpartei-mannheim.de',
             __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' Rastatt-Baden-Baden' => 'http://piraten-rastatt.de',
             __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' Ravensburg-Bodenseekreis' => 'http://www.piraten-rvfn.de',
             __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' Reutlingen-T&uuml;bingen' => 'http://piratenpartei-reutlingen-tuebingen.de',
             __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' Rhein-Neckar/Heidelberg' => 'http://piraten-rnhd.de',
             __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' Schw&auml;bisch Hall' => 'http://www.kocher-jagst-piraten.de',
             __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' Stuttgart' => 'https://www.piratenpartei-stuttgart.de',
             __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' Ulm/Alb-Donau-Kreis' => 'http://www.piratenpartei-ulm.de',            
         )
     ),  
     'Bayern' => array(
         'title' => __('Pirate Party Country Association','piratenkleider').'Bayern',
         'url'  => 'http://www.piratenpartei-bayern.de/',
         'sublist' => array(
             __('<abbr title="District Association">DA</abbr>','piratenkleider').' Mittelfranken' => 'http://piraten-mfr.de/',
             __('<abbr title="District Association">DA</abbr>','piratenkleider').' Oberbayern' => 'http://oberbayern.piratenpartei.de/',
             __('<abbr title="District Association">DA</abbr>','piratenkleider').' Oberfranken' => 'http://piraten-oberfranken.de/',
             __('<abbr title="District Association">DA</abbr>','piratenkleider').' Oberpfalz' => 'http://oberpfalz.piratenpartei.de/',
             __('<abbr title="District Association">DA</abbr>','piratenkleider').' Schwaben' => 'http://www.piraten-schwaben.de/',
             __('<abbr title="District Association">DA</abbr>','piratenkleider').' Unterfranken' => 'https://piraten-ufr.de/',
         ) 
     ), 
    'Brandenburg' => array(
        'title' => __('Pirate Party Country Association','piratenkleider').' Brandenburg',
        'url'  => 'http://www.piratenbrandenburg.de/',
        'sublist' => array(
            __('<abbr title="Town Chapter">TC</abbr>','piratenkleider').' Potsdam' => 'http://www.piraten-potsdam.de/',
            __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' Brandenburg an der Havel' => 'https://brb.piratenbrandenburg.de/',
            __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' Havelland' => 'https://hvl.piratenbrandenburg.de/',
            __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' M&auml;rkisch-Oderland' => 'https://mol.piratenbrandenburg.de/',
            __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' Oberhavel' => 'https://ohv.piratenbrandenburg.de/',
            __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' Potsdam-Mittelmark' => 'https://pm.piratenbrandenburg.de/',
            __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' Teltow-Fl&auml;ming' => 'https://tf.piratenbrandenburg.de/',
            __('<abbr title="Regional Chapter">RC</abbr>','piratenkleider').' Barnim-Uckermark' => 'https://barum.piratenbrandenburg.de/',
            __('<abbr title="Regional Chapter">RC</abbr>','piratenkleider').' Dahme-Oder-Spree' => 'https://dos.piratenbrandenburg.de/',
            __('<abbr title="Regional Chapter">RC</abbr>','piratenkleider').' Prignitz-Ruppin' => 'https://pr.piratenbrandenburg.de/',
            __('<abbr title="Regional Chapter">RC</abbr>','piratenkleider').' S&uuml;dbrandenburg' => 'https://sued.piratenbrandenburg.de/',
        )
    ),
   
    
    'Hamburg' => array(
        'title' => __('Pirate Party Country Association','piratenkleider').' Hamburg',
        'url'  => 'http://www.piratenpartei-hamburg.de/',
        'sublist' => array(
            __('<abbr title="District Association">DA</abbr>','piratenkleider').' Bergedorf' => 'http://www.piratenpartei-bergedorf.de/',
            __('<abbr title="District Association">DA</abbr>','piratenkleider').' Harburg' => 'http://www.piraten-harburg.de/',
            __('<abbr title="District Association">DA</abbr>','piratenkleider').' Hamburg-Nord' => 'https://wiki.piratenpartei.de/HH:Country Chapter_Nord',
            'Eimb&uuml;tteler Piraten' => 'https://wiki.piratenpartei.de/HH:Eimsb%C3%BCtteler_Piraten',
        )
    ),
    'Hessen' => array(
        'title' => __('Pirate Party Country Association','piratenkleider').' Hessen',
        'url'  => 'http://www.piratenpartei-hessen.de/',
        'sublist' => array(
            __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' Bergstra&szlig;e' => 'http://www.piraten-bergstrasse.de/',
            __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' Darmstadt/Darmstadt-Dieburg' => 'http://www.piratenpartei-darmstadt.de/',
            __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' Frankfurt am Main' => 'http://www.piratenpartei-frankfurt.de/',
            __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' Gie&szlig;en' => 'http://www.piraten-giessen.de/',
            __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' Gross-Gerau' => 'http://www.piratenpartei-gross-gerau.de/',
            __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' Hochtaunus' => 'http://www.piratenpartei-hochtaunus.de/',
            __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' Kassel' => 'http://www.piratenpartei-kassel.de/',
            __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' Main-Kinzig' => 'http://www.kinzigpiraten.de/',
            __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' Main-Taunus' => 'http://www.piraten-mtk.de/',
            __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' Marburg-Biedenkopf' => 'https://www.piratenpartei-marburg.de/',
            __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' Odenwald' => 'http://www.piratenpartei-odenwald.de/',                                    
            __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' Offenbach-Land' => 'http://www.kreispiraten-of.de/',
            __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' Rheingau-Taunus' => 'http://www.piratenpartei-rtk.de/',
            __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' Schwalm-Eder' => 'http://www.piraten-sek.de/',
            __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' Waldeck-Frankenberg' => 'http://www.piraten-wa-fkb.de/',
            __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' Wetterau' => 'http://www.piratenpartei-wetterau.de/',
            __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' Wiesbaden' => 'http://www.piratenpartei-wiesbaden.de/',
        )
    ),
     'Mecklenburg-Vorpommern' => array(
        'title' => __('Pirate Party Country Association','piratenkleider').'Mecklenburg-Vorpommern',
        'url'  => 'http://www.piratenpartei-mv.de/',
        'sublist' => array(
            __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' Vorpommern-Greiswald' => 'http://piraten-hgw.de/',
            'Rostock' => 'http://rostock.piratenpartei-mv.de/',
            'Neubrandenburg' => 'http://piratenpartei-mv.de/stammtisch-neubrandenburg-0',
            'Schwerin' => 'http://www.schweriner-piraten.de/',
            'Usedom' => 'http://www.piraten-usedom.de/',
           
        )
    ),
   'Niedersachsen' => array(
        'title' => __('Pirate Party Country Association','piratenkleider').' Niedersachsen',
        'url' => 'http://www.piraten-nds.de/',
        'sublist' => array(
            __('<abbr title="Town Chapter">TC</abbr>','piratenkleider').' Braunschweig' => 'http://www.piratenpartei-braunschweig.de/',
            __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' Celle' => 'http://www.piraten-celle.de/',    
            __('<abbr title="Town Chapter">TC</abbr>','piratenkleider').' Delmenhorst' => 'http://www.piratenpartei-delmenhorst.de/',    
            __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' Diepholz' => 'http://www.piratenpartei-diepholz.de/',    
            __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' Goslar' => 'http://www.piraten-goslar.de/',    
            __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' G&ouml;ttingen' => 'http://www.piratenpartei-goettingen.de/',    
            __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' Grafschaft Bentheim' => 'http://www.grafschafter-piraten.de/',    
            __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' Hameln-Pyrmont' => 'http://www.piraten-hameln.de/',    
            __('<abbr title="Regional Chapter">RC</abbr>','piratenkleider').' Hannover' =>'http://www.piratenhannover.de/', 
            __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' Helmstedt' => 'https://wiki.piratenpartei.de/NDS:Helmstedt',    
            __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' Hildesheim' => 'http://www.piratenpartei-hildesheim.de/',    
            __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' Niedersachsen-Nordost' => 'http://www.heide-piraten.de/',   
            __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' Nienburg/Weser' => 'http://www.piraten-nienburg.de/',   
            __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' Northeim' => 'http://www.piratenpartei-northeim.de/',   
            __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' Osnabr&uuml;ck' => 'https://www.piraten-osnabrueck.de',   
            __('<abbr title="Town Chapter">TC</abbr>','piratenkleider').' Oldenburg' => 'https://www.piratenpartei-oldenburg.de/',   
            __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' Oldenburg Land' => 'http://www.piratenpartei-landkreis-oldenburg.de/',   
            __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' Osterholz' => 'http://www.piraten-ohz.de/', 	    
            __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' Osterode' => 'http://www.piratenpartei-osterode.de/',   
            __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' Peine' => 'http://wiki.piratenpartei.de/NDS:Kreisverband_Peine',   
            __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' Stade' => 'http://www.piraten-stade.de/',   
            __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' Schaumburg' => 'http://www.piraten-schaumburg.de/',            
            __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' Wolfenb&uuml;ttel-Salzgitter' => 'http://www.piratenpartei-wolfenbuettel.de/',   
            __('<abbr title="Town Chapter">TC</abbr>','piratenkleider').' Wolfsburg' => 'http://wolfsburg.piratenpartei-nds.de/',   
      
        )
    ),    
    'Nordrhein-Westfalen' => array(
      'title' => __('Pirate Party Country Association','piratenkleider').' Nordrhein-Westfalen',
      'url' => 'http://www.piratenpartei-nrw.de/',
      'sublist' => array(   
        __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' Bielefeld' =>'http://www.piraten-bielefeld.de',        
        __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' Bochum' =>'http://piratenbochum.de',
        __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' Bonn' =>'https://piratenpartei-bonn.de/',
        __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' Dortmund' =>'http://piratenpartei-dortmund.de',
        __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' Duisburg' =>'http://www.piratenpartei-duisburg.de/',
        __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' D&uuml;sseldorf' =>'http://piratenpartei-duesseldorf.de/',
        __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' G&uuml;terslohe' =>'http://www.piratenpartei-guetersloh.de/',
        __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' Hagen' =>'http://piratenhagen.org',
        __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' Herford' =>'https://wiki.piratenpartei.de/NRW:Kreis_Herford',
        __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' Herne' =>'http://www.piraten-herne.de/',
        __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' Lippe' =>'http://www.piratenpartei-lippe.de',
        __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' Kleve' =>'http://www.piratenpartei-kleve.de/',
        __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' K&ouml;ln' =>'https://piratenpartei-koeln.de/',
        __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' Krefeld' =>'http://www.seidenstadt-piraten.de/',
        __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' Minden-L&uuml;bbecke' =>'http://piratenpartei-milk.de',
        __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' M&uuml;nster' =>'http://www.piratenpartei-muenster.de/',
        __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' Neukirchen-Vluyn' =>'http://www.piraten-neukirchen-vluyn.de',
        __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' Rhein-Erft' =>'https://piratenpartei-rhein-erft.de/',
        __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' Rhein-Sieg-Kreis' =>'http://www.piratenpartei-rhein-sieg.de/',
        __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' Soest' =>'http://www.piratenpartei-soest.de/',
        __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' Soest' =>'http://www.piratenpartei-soest.de/',
        __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' Wesel' =>'http://www.piraten-kreiswesel.de',
          )
    ),
      'Rheinland-Pfalz' => array(
        'title' => __('Pirate Party Country Association','piratenkleider').' Rheinland-Pfalz',
        'url'  => 'http://www.piraten-rlp.de',
        'sublist' => array(
            __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' Ahrweiler' => 'http://wiki.piratenpartei.de/RP:Kreisverband_Ahrweiler',
            __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' Altenkirchen' => 'https://wiki.piratenpartei.de/RP:Kreisverband_Altenkirchen',
            __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' Koblenz' => 'http://www.piratenpartei-koblenz.de',
            __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' Mittelhaardt' => 'http://www.piratenpartei-mittelhaardt.de',
            __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' Rhein-Pfalz' => 'http://www.piraten-rp.de',
            __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' Rheinhessen' => 'http://www.piraten-rheinhessen.de',
            __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' S&uuml;dpfalz' => 'https://wiki.piratenpartei.de/RP:Kreisverband_S%C3%BCdpfalz',
            __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' Trier/Trier-Saarburg' => 'http://piraten-trier.de',
            __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' Worms' => 'http://www.piraten-worms.de',
        )
    ),
      'Sachsen' => array(
        'title' => __('Pirate Party Country Association','piratenkleider').' Sachsen',
        'url'  => 'http://piraten-sachsen.de/',
        'sublist' => array(
            __('<abbr title="Town Chapter">TC</abbr>','piratenkleider').' Dresden Neustadt' => 'http://www.neustadtpiraten.de/',          
            __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' Bautzen' => 'http://www.piraten-bautzen.de/',
            __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' Chemnitz' => 'http://www.piraten-chemnitz.de/',
            __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' Dresden' => 'http://www.piraten-dresden.de/',
            __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' Erzgebirge' => 'http://www.piraten-erzgebirge.de/',
            __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' G&ouml;rlitz' => 'http://www.piraten-goerlitz.de/',
            __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' Leipzig' => 'http://www.piraten-leipzig.de',
            __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' Mei&szlig;en' => 'http://piraten-meissen.de/',
            __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' Mittelsachsen' => 'http://www.piraten-mittelsachsen.de/',
            __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' SOE' => 'http://www.piraten-soe.de/',
            __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' Vogtland' => 'http://www.piratenpartei-vogtland.de/',         
            __('<abbr title="Regional Chapter">RC</abbr>','piratenkleider').' Leipziger Umland' => 'http://www.piralum.de/',    
        )
    ),
      'Sachsen-Anhalt' => array(
        'title' => __('Pirate Party Country Association','piratenkleider').' Sachsen-Anhalt',
        'url'  => 'http://www.piraten-lsa.de',
        'sublist' => array(
            __('<abbr title="Regional Chapter">RC</abbr>','piratenkleider').' Altmark' => 'http://www.piraten-altmark.de/',
            __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' B&ouml;rde' => 'http://www.piraten-boerde.de/',
            'Burgenlandkreis / Saalekreis' => 'https://www.piraten-lsa.de/regionen/burgenlandkreis-saalekreis',
            'Halle (Saale)' => 'http://www.piraten-halle.de/',
            'Harz' => 'http://piraten-harz.de/',
            'Magdeburg' => 'http://www.piraten-magdeburg.de/',
            'Mansfeld-S&uuml;dharz' => 'http://www.piraten-msh.de/',
            'Wittenberg' => 'http://piratenpartei-wittenberg.de/',
        )
    ),
      'Thueringen' => array(
        'title' => __('Pirate Party Country Association','piratenkleider').' Th&uuml;ringen',
        'url'  => 'http://www.piraten-thueringen.de/',
        'sublist' => array(
            __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' Altenburger Land' => 'http://piraten-altenburger-land.de/',
            __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' Wartburgkreis' => 'http://wartburgpiraten.de/',
            __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' Erfurt' => 'http://www.piraten-erfurt.de/',
            __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' Gera' => 'http://piraten-gera.de/',
            __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' Gotha' => 'http://piraten-gotha.de/',
            __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' Ilm-Kreis' => 'http://piraten-ilmkreis.de/',
            __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' Schmalkalden-Meiningen' => 'http://piraten-schmalkalden-meiningen.de/',
            __('<abbr title="District Chapter">DC</abbr>','piratenkleider').' Jena' => 'https://jena.piraten-thueringen.de/',
        )
    ),
);

/* 
 * Teaser symbols
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



 foreach($defaultplakate_textsymbolliste as $i => $value) {
     $defaultplakate_textsymbolliste_entity[$i] = '&#x'.$value.';';
 } 
 $categories=get_categories(array('orderby' => 'name','order' => 'ASC'));
 foreach($categories as $category) {
     if (!is_wp_error( $category )) {
	$currentcatliste[$category->cat_ID] = $category->name.' ('.$category->count.' '.__('Entries','piratenkleider').')';
     }
 }        


$setoptions = array(
   'piratenkleider_theme_options'   => array(
       
       'kopfteil'   => array(
           'tabtitle'   => __('Header', 'piratenkleider'),
           'fields' => array(
              'aktiv-linkmenu' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Website Menu', 'piratenkleider' ),
                  'label'   => __( 'Display list of several websites belonging to the Pirate Party.', 'piratenkleider' ),
                  'default' => $defaultoptions['aktiv-linkmenu'],
              ),
              'aktiv-suche' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Search Form', 'piratenkleider' ),
                  'label'   => __( 'Display search form.', 'piratenkleider' ),
                  'default' => $defaultoptions['aktiv-suche'],
              ),
              'defaultwerbesticker' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Stamps', 'piratenkleider' ),
                  'label'   => __( 'Display stamps with short text or image in header', 'piratenkleider' ),
                  'default' => $defaultoptions['defaultwerbesticker'],
              ),
              'stickerlink1'  => array(
                  'type'    => 'section',
                  'title'   => __( 'Stamp 1', 'piratenkleider' ),
              ),
              'stickerlink1-content' => array(
                  'type'    => 'html',
                  'title'   => __( 'Content', 'piratenkleider' ),
                  'label'   => __( 'Text (Inline-HTML-Tags allowed)', 'piratenkleider' ),
                  'default' => $defaultoptions['stickerlink1-content'],
                  'parent'  => 'stickerlink1',
              ),
              'stickerlink1-url' => array(
                  'type'    => 'url',
                  'title'   => __( 'URL', 'piratenkleider' ),
                  'label'   => __( 'Target URL for stamp', 'piratenkleider' ),
                  'default' => $defaultoptions['stickerlink1-url'],
                  'parent'  => 'stickerlink1',
              ),
              'stickerlink2'  => array(
                  'type'    => 'section',
                  'title'   => __( 'Stamp 2', 'piratenkleider' ),
              ),
               'stickerlink2-content' => array(
                  'type'    => 'html',
                  'title'   => __( 'Content', 'piratenkleider' ),
                  'label'   => __( 'Text (Inline-HTML-Tags allowed)', 'piratenkleider' ),
                  'default' => $defaultoptions['stickerlink2-content'],
                   'parent'  => 'stickerlink2',
              ),
              'stickerlink2-url' => array(
                  'type'    => 'url',
                  'title'   => __( 'URL', 'piratenkleider' ),
                  'label'   => __( 'Target URL for stamp', 'piratenkleider' ),
                  'default' => $defaultoptions['stickerlink2-url'],
                  'parent'  => 'stickerlink2',
              ),
              'stickerlink3'  => array(
                  'type'    => 'section',
                  'title'   => __( 'Stamp 3', 'piratenkleider' ),
              ),
               'stickerlink3-content' => array(
                  'type'    => 'html',
                  'title'   => __( 'Content', 'piratenkleider' ),
                  'label'   => __( 'Text (Inline-HTML-Tags allowed)', 'piratenkleider' ),
                  'default' => $defaultoptions['stickerlink3-content'],
                   'parent'  => 'stickerlink3',
              ),
              'stickerlink3-url' => array(
                  'type'    => 'url',
                  'title'   => __( 'URL', 'piratenkleider' ),
                  'label'   => __( 'Target URL for stamp', 'piratenkleider' ),
                  'default' => $defaultoptions['stickerlink3-url'],
                  'parent'  => 'stickerlink3',
              ),
	      'toplinks'  => array(
                  'type'    => 'section',
                  'title'   => __( 'Website Menu', 'piratenkleider' ),
              ),
	      'toplinkliste'  => array(
		  'type'    => 'urlchecklist',
		  'title'   => __( 'Websites', 'piratenkleider' ),
		  'liste'   => $default_toplink_liste,
		  'parent'  => 'toplinks',
		  'label'   => __( 'Default links for websites as menu in header. Can be replaced by defining a menu in section "Website Menu"', 'piratenkleider' ),
	      ), 
               
           )
       ),
       'fussteil'   => array(
           'tabtitle'   => __('Footer', 'piratenkleider'),
           'fields' => array(
              'default_footerlink_show' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Pirate Party Links', 'piratenkleider' ),
                  'label'   => __( 'Display a list for several Pirate Party sections worldwide or be some countries.', 'piratenkleider' ),
                  'default' => $defaultoptions['default_footerlink_show'],
              ),
              'default_footerlink_key' => array(
                  'type'    => 'select',
                  'title'   => __( 'Section', 'piratenkleider' ),
                  'label'   => __( 'Select section for display', 'piratenkleider' ),
                  'default' => $defaultoptions['default_footerlink_key'],
                  'liste'   => $default_footerlink_liste,
              ),
          )
       ),
      'startseite'   => array(
           'tabtitle'   => __('Start page', 'piratenkleider'),
           'fields' => array(
                            
              'aktiv-startseite-kategorien' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Categories', 'piratenkleider' ),
                  'label'   => __( 'Display categories.', 'piratenkleider' ),
                  'default' => $defaultoptions['aktiv-startseite-kategorien'],
              ),
              'aktiv-startseite-tags' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Tags', 'piratenkleider' ),
                  'label'   => __( 'Display tagcloud.', 'piratenkleider' ),
                  'default' => $defaultoptions['aktiv-startseite-tags'],
              ),
            
              'artikelstream'  => array(
                  'type'    => 'section',
                  'title'   => __( 'Entry filter', 'piratenkleider' ),                      
              ),     
               
               'artikelstream-type' => array(
                  'type'    => 'select',
                  'title'   => __( 'Set main entry list', 'piratenkleider' ),
                  'label'   => __( 'Choose which entries are displayed on the start page.', 'piratenkleider' ),
                  'default' => $defaultoptions['artikelstream-type'],
		  'liste'   =>  array(
                    0 => __("All entries (from every category) and bookmarks together","piratenkleider"), 
                    1 => __("Only entries (from every category)","piratenkleider"), 	    
                    2 => __("All entries, except those from defined categories","piratenkleider"), 
                    ), 
                  'parent'  => 'artikelstream'
              ), 	
               
              'artikelstream-exclusive-catliste' => array(
                  'type'    => 'multiselectlist',
                  'title'   => __( 'Categories', 'piratenkleider' ),
                  'label'   => __( 'Select categories, which entries should not appear in main entry list on start page.', 'piratenkleider' ),
                  'liste'   => $currentcatliste,
                  'default' => $defaultoptions['artikelstream-exclusive-catliste'],
                  'parent'  => 'artikelstream'
              ),  
               'artikelstream-maxnum-main' => array(
                  'type'    => 'number',
                  'title'   => __( 'Number of entries', 'piratenkleider' ),
                  'label'   => __( 'Number of entries in main entry list.', 'piratenkleider' ),
                  'default' => $defaultoptions['artikelstream-maxnum-main'],
                  'parent'  => 'artikelstream'
              ), 
               'artikelstream-nextnum-main' => array(
                  'type'    => 'number',
                  'title'   => __( 'Number of elements for entries list', 'piratenkleider' ),
                  'label'   => __( 'Number of link elements for a list for further entries.', 'piratenkleider' ),
                  'default' => $defaultoptions['artikelstream-nextnum-main'],
                  'parent'  => 'artikelstream'
              ), 
               'artikelstream-numfullwidth-main' => array(
                  'type'    => 'number',
                  'title'   => __( 'Number of entries in big sized view', 'piratenkleider' ),
                  'label'   => __( 'How many entries will be displayed in 100% width of content size.', 'piratenkleider' ),
                  'default' => $defaultoptions['artikelstream-numfullwidth-main'],
                  'parent'  => 'artikelstream'
              ),
             'artikelstream-title-main' => array(
                  'type'    => 'text',
                  'title'   => __( 'Title for main entry list', 'piratenkleider' ),
                  'label'   => __( 'Sets a title above the main entry list.', 'piratenkleider' ),
                  'default' => $defaultoptions['artikelstream-title-main'],
                   'parent'  => 'artikelstream',
              ), 
              'artikelstream-title-maincontinuelist' => array(
                  'type'    => 'text',
                  'title'   => __( 'Title for more entries', 'piratenkleider' ),
                  'label'   => __( 'Sets a title for an additional entry list.', 'piratenkleider' ),
                  'default' => $defaultoptions['artikelstream-title-maincontinuelist'],
                  'parent'  => 'artikelstream',
              ),                
               
              'artikelstream-show-second' => array(
                  'type'    => 'select',
                  'title'   => __( 'Display second entry list', 'piratenkleider' ),
                  'label'   => __( 'Activates a second entry list, made by those article categories which are not part of the main article list.', 'piratenkleider' ),
                  'liste'   => array(
                      "0" => __("Hide", 'piratenkleider'), 
                      "1" => __("Show",'piratenkleider')),
                  'default' => $defaultoptions['artikelstream-show-second'],
                   'parent'  => 'artikelstream'
              ), 
               
              'artikelstream-maxnum-second' => array(
                  'type'    => 'number',
                  'title'   => __( 'Number of elements in second entry list', 'piratenkleider' ),
                  'label'   => __( 'Sets the number of entries of the second entry list.', 'piratenkleider' ),
                  'default' => $defaultoptions['artikelstream-maxnum-second'],
                  'parent'  => 'artikelstream'
              ), 
             'artikelstream-nextnum-second' => array(
                  'type'    => 'number',
                  'title'   => __( 'Number more entries', 'piratenkleider' ),
                  'label'   => __( 'Number of link elements for a list for further entries.', 'piratenkleider' ),
                  'default' => $defaultoptions['artikelstream-nextnum-second'],
                  'parent'  => 'artikelstream'
              ), 
                              
               'artikelstream-numfullwidth-second' => array(
                  'type'    => 'number',
                  'title'   => __( 'Number of entries in big sized view', 'piratenkleider' ),
                  'label'   => __( 'How many entries will be displayed in 100% width of content size. (Notice: Depends on design!)', 'piratenkleider' ),
                  'default' => $defaultoptions['artikelstream-numfullwidth-second'],
                  'parent'  => 'artikelstream'
              ), 
            'artikelstream-title-second' => array(
                  'type'    => 'text',
                  'title'   => __( 'Title second entry list', 'piratenkleider' ),
                  'label'   => __( 'Sets a title above the second entry list.', 'piratenkleider' ),
                  'default' => $defaultoptions['artikelstream-title-second'],
                   'parent'  => 'artikelstream',
              ), 
              'artikelstream-title-secondcontinuelist' => array(
                  'type'    => 'text',
                  'title'   => __( 'Title for more entries', 'piratenkleider' ),
                  'label'   => __( 'Subtitle for an additional entry list.', 'piratenkleider' ),
                  'default' => $defaultoptions['artikelstream-title-secondcontinuelist'],
                  'parent'  => 'artikelstream',
              ),                
              
               
              'artikelstream-show-linktipps' => array(
                  'type'    => 'select',
                  'title'   => __( 'Bookmarks', 'piratenkleider' ),
                  'label'   => __( 'Display a bookmark section after main entry list, forming an own entry list. This list is positioned before the second entry list.', 'piratenkleider' ),
                  'liste'   => array("0" => __("Hide", 'piratenkleider'), 
                      "1" => __("Show",'piratenkleider')),
                  'default' => $defaultoptions['artikelstream-show-linktipps'],
                   'parent'  => 'artikelstream'
              ), 
              'artikelstream-maxnum-linktipps' => array(
                  'type'    => 'number',
                  'title'   => __( 'Number of bookmarks', 'piratenkleider' ),
                  'label'   => __( 'Number of bookmarks to display.', 'piratenkleider' ),
                  'default' => $defaultoptions['artikelstream-maxnum-linktipps'],
                  'parent'  => 'artikelstream'
              ), 
             'artikelstream-nextnum-linktipps' => array(
                  'type'    => 'number',
                  'title'   => __( 'Additional bookmarks', 'piratenkleider' ),
                  'label'   => __( 'Number of additional bookmarks as a list.', 'piratenkleider' ),
                  'default' => $defaultoptions['artikelstream-nextnum-linktipps'],
                  'parent'  => 'artikelstream'
              ), 
             'artikelstream-title-linktipps' => array(
                  'type'    => 'text',
                  'title'   => __( 'Title for bookmark section', 'piratenkleider' ),
                  'label'   => __( 'Subtitle for bookmark section.', 'piratenkleider' ),
                  'default' => $defaultoptions['artikelstream-title-linktipps'],
                   'parent'  => 'artikelstream',
              ), 
              'artikelstream-title-linktippcontinuelist' => array(
                  'type'    => 'text',
                  'title'   => __( 'Title additional bookmarks', 'piratenkleider' ),
                  'label'   => __( 'Subtitle for list of additional bookmarks.', 'piratenkleider' ),
                  'default' => $defaultoptions['artikelstream-title-linktippcontinuelist'],
                  'parent'  => 'artikelstream',
              ), 
            'artikelstream-show-widget' => array(
                  'type'    => 'select',
                  'title'   => __( 'Widget', 'piratenkleider' ),
                  'label'   => __( 'Display a widget section after main entry list. This widget can be used to display text or even feeds of external sources.', 'piratenkleider' ),
                  'liste'   => array("0" => __("Hide", 'piratenkleider'), 
                      "1" => __("Show",'piratenkleider')),
                  'default' => $defaultoptions['artikelstream-show-widget'],
                   'parent'  => 'artikelstream'
              ), 

 
            
            'auszuege'  => array(
                  'type'    => 'section',
                  'title'   => __( 'Layout for entry excerpts', 'piratenkleider' ),                      
              ),     
                              
             'teaser_maxlength' => array(
                  'type'    => 'number',
                  'title'   => __( 'Length', 'piratenkleider' ),
                  'label'   => __( 'Maximum numbers of chars in excerpt.', 'piratenkleider' ),
                  'default' => $defaultoptions['teaser_maxlength'],
                 'parent'  => 'auszuege'
              ),                        
              'teaser-titleup' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Title up', 'piratenkleider' ),
                  'label'   => __( 'Title above thumbnail, date and text.', 'piratenkleider' ),
                  'default' => $defaultoptions['teaser-titleup'],
                  'parent'  => 'auszuege'
              ), 
              'teaser-datebox' => array(
                  'type'    => 'select',
                  'title'   => __( 'Layout entry info', 'piratenkleider' ),
                  'label'   => __( 'Sets a thumbnail, image, datebox, YouTube video or default image in front of excerpt.', 'piratenkleider' ),
                  'default' => $defaultoptions['teaser-datebox'],
		  'liste'   =>  array(
				0 => __("Display datebox","piratenkleider"), 
				1 => __("Display in order: "
                                        . "thumbnail, first image in content if exist, "
                                        . "embedded YouTube video (first existing YouTube link in content) "
                                        . "or default image","piratenkleider"),
                                2 => __("Display in order: "
                                        . "first image in content if exist, thumbnail, "
                                        . "embedded YouTube video (first existing YouTube link in content) "
                                        . "or default image","piratenkleider"), 
                                3 => __("Display in order: "
                                        . "embedded YouTube video (first existing YouTube link in content), "
                                        . "thumbnail, first image in content if exist, "
                                        . "or default image","piratenkleider"), 
                                4 => __("Display in order: "
                                        . "embedded YouTube video (first existing YouTube link in content), "
                                        . "first image in content if exist, thumbnail, "
                                        . "or default image","piratenkleider"),
				5 => __("Hide entry info","piratenkleider")), 
                  'parent'  => 'auszuege'
              ), 	              
	      'teaser-floating' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Floating excerpt', 'piratenkleider' ),
                  'label'   => __( 'Excerpt text will float around entry info.', 'piratenkleider' ),
                  'default' => $defaultoptions['teaser-floating'],
                  'parent'  => 'auszuege'
              ),  
               'teaser-dateline' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Date', 'piratenkleider' ),
                  'label'   => __( 'Show date as first line after title.', 'piratenkleider' ),
                  'default' => $defaultoptions['teaser-dateline'],
                  'parent'  => 'auszuege'
              ), 
               
                'teaser-maxlength-halfwidth' => array(
                  'type'    => 'number',
                  'title'   => __( 'Length', 'piratenkleider' ),
                  'label'   => __( 'Maximum numbers of chars in excerpt. (Small entry teaser in half content width).', 'piratenkleider' ),
                  'default' => $defaultoptions['teaser-maxlength-halfwidth'],
		'parent'  => 'auszuege'
              ),                 
             'teaser-titleup-halfwidth' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Title up', 'piratenkleider' ),
                  'label'   => __( 'Title above thumbnail, date and text. (Small entry teaser in half content width).', 'piratenkleider' ),
                  'default' => $defaultoptions['teaser-titleup-halfwidth'],
                  'parent'  => 'auszuege'
              ), 
              'teaser-datebox-halfwidth' => array(
                  'type'    => 'select',
                  'title'   => __( 'Layout entry info', 'piratenkleider' ),
                  'label'   => __( 'Sets a thumbnail, image, datebox, YouTube video or default image in front of excerpt. (Small entry teaser in half content width).', 'piratenkleider' ),
                  'default' => $defaultoptions['teaser-datebox'],
		  'liste'   =>  array(
				0 => __("Display datebox","piratenkleider"), 
				1 => __("Display in order: "
                                        . "thumbnail, first image in content if exist, "
                                        . "embedded YouTube video (first existing YouTube link in content) "
                                        . "or default image","piratenkleider"),
                                2 => __("Display in order: "
                                        . "first image in content if exist, thumbnail, "
                                        . "embedded YouTube video (first existing YouTube link in content) "
                                        . "or default image","piratenkleider"), 
                                3 => __("Display in order: "
                                        . "embedded YouTube video (first existing YouTube link in content), "
                                        . "thumbnail, first image in content if exist, "
                                        . "or default image","piratenkleider"), 
                                4 => __("Display in order: "
                                        . "embedded YouTube video (first existing YouTube link in content), "
                                        . "first image in content if exist, thumbnail, "
                                        . "or default image","piratenkleider"),
				5 => __("Hide entry info","piratenkleider")), 

                  'parent'  => 'auszuege'		  
              ), 
	      'teaser-floating-halfwidth' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Floating excerpt', 'piratenkleider' ),
                  'label'   => __( 'Excerpt text will float around entry info. (Small entry teaser in half content width).', 'piratenkleider' ),
                  'default' => $defaultoptions['teaser-floating-halfwidth'],
                  'parent'  => 'auszuege'
              ), 	       
	       
               'teaser-dateline-halfwidth' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Date', 'piratenkleider' ),
                  'label'   => __( 'Show date as first line after title. (Small entry teaser in half content width).', 'piratenkleider' ),
                  'default' => $defaultoptions['teaser-dateline-halfwidth'],
                  'parent'  => 'auszuege'
              ), 
                    
	      'artikelstream-content-allow3column' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Two/Three column view', 'piratenkleider' ),
                  'label'   => __( 'On big sized screen view (above 1350px resolution) use three column excerpts.', 'piratenkleider' ),
                  'default' => $defaultoptions['artikelstream-content-allow3column'],
                  'parent'  => 'auszuege'
              ), 	       
	       
	       
              'sliderpars'  => array(
                  'type'    => 'section',
                  'title'   => __( 'Slider', 'piratenkleider' ),                      
              ),
              'slider-aktiv' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Activate', 'piratenkleider' ),
                  'label'   => __( 'Activates slider for start pages.', 'piratenkleider' ),
                  'default' => $defaultoptions['slider-aktiv'],
                  'parent'  => 'sliderpars'
              ),

            'teaser-subtitle' => array(
                  'type'    => 'text',
                  'title'   => __( 'Subtitle', 'piratenkleider' ),
                  'label'   => __( 'Text in front of every slider excerpt.', 'piratenkleider' ),
                  'default' => $defaultoptions['teaser-subtitle'],
                  'parent'  => 'sliderpars'
              ),  
             'teaser-title-maxlength' => array(
                  'type'    => 'number',
                  'title'   => __( 'Title length', 'piratenkleider' ),
                  'label'   => __( 'Maximum number of chars for title in slider.', 'piratenkleider' ),
                  'default' => $defaultoptions['teaser-title-maxlength'],
                   'parent'  => 'sliderpars'
              ),   
             'teaser-title-words' => array(
                  'type'    => 'number',
                  'title'   => __( 'Number of words', 'piratenkleider' ),
                  'label'   => __( 'Maximum number of words in title. (Cannot have more chars as maximum title length).', 'piratenkleider' ),
                  'default' => $defaultoptions['teaser-title-words'],
                   'parent'  => 'sliderpars'
              ),
                              
               
               
              'slider-catid' => array(
                  'type'    => 'select',
                  'title'   => __( 'Category', 'piratenkleider' ),
                  'label'   => __( 'Select category for slider entries.', 'piratenkleider' ),
                  'liste'   => $currentcatliste,
                  'default' => $defaultoptions['slider-catid'],
                   'parent'  => 'sliderpars'
              ), 
              'slider-numberarticle' => array(
                  'type'    => 'select',
                  'title'   => __( 'Number slides', 'piratenkleider' ),
                  'label'   => __( 'Maximum number for slides to show.', 'piratenkleider' ),
                  'liste'   => array(2 => 2,3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7),
                  'default' => $defaultoptions['slider-numberarticle'],
                   'parent'  => 'sliderpars'
              ), 
              'slider-animationType' => array(
                  'type'    => 'select',
                  'title'   => __( 'Animation', 'piratenkleider' ),
                  'label'   => __( 'Type of animation', 'piratenkleider' ),
                  'liste'   => array("fade" => "fade", "slide" => "slide"),
                  'default' => $defaultoptions['slider-animationType'],
                   'parent'  => 'sliderpars'
              ), 
                 
              'slider-Direction' => array(
                  'type'    => 'select',
                  'title'   => __( 'Direction', 'piratenkleider' ),
                  'label'   => __( 'Choose direction for animated slides', 'piratenkleider' ),
                  'liste'   => array("horizontal" => "horizontal" , "vertical" => "vertical"),
                  'default' => $defaultoptions['slider-Direction'],
                   'parent'  => 'sliderpars'
              ), 
              'slider-slideshowSpeed' => array(
                  'type'    => 'number',
                  'title'   => __( 'Show Duration', 'piratenkleider' ),
                  'label'   => __( 'Duration for presenting a slide in milliseconds.', 'piratenkleider' ),
                  'default' => $defaultoptions['slider-slideshowSpeed'],
                   'parent'  => 'sliderpars'
              ), 
              'slider-animationDuration' => array(
                  'type'    => 'number',
                  'title'   => __( 'Animation duration', 'piratenkleider' ),
                  'label'   => __( 'Duration for sliding effect in milliseconds.', 'piratenkleider' ),
                  'default' => $defaultoptions['slider-animationDuration'],
                   'parent'  => 'sliderpars'
              ),  
             'teaser-type' => array(
                  'type'    => 'select',
                  'title'   => __( 'Slide Size', 'piratenkleider' ),
                  'label'   => __( 'Show slide as big thumbnail or small thumbnail with excerpt text.', 'piratenkleider' ),
                  'liste'   => array("big" => "Big thumbnail", "small" => "Small thumbnail"),
                  'default' => $defaultoptions['teaser-type'],
                   'parent'  => 'sliderpars'
              ), 
               'teaser-showcredits' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Show credits', 'piratenkleider' ),
                  'label'   => __( 'Display a line with credits/copyright info from thumbnail.', 'piratenkleider' ),
                  'default' => $defaultoptions['teaser-showcredits'],
                  'parent'  => 'sliderpars'
              ),

              'slider-defaultbildsrc' => array(
                  'type'    => 'imageurl',
                  'title'   => __( 'Default slider image', 'piratenkleider' ),
                  'label'   => __( 'Sets a default slider image in case no thumbnail is present in entry.', 'piratenkleider' ),
                  'default' => $defaultoptions['slider-defaultbildsrc'],		                     
		  'parent'  => 'sliderpars'
              ),

               
               
          )
       ), 
       'contentbereich'   => array(
           'tabtitle'   => __('Entries and pages', 'piratenkleider'),
           'fields' => array(
	                    
              'post_disclaimer' => array(
                  'type'    => 'textarea',
                  'title'   => __( 'Disclaimer', 'piratenkleider' ),
                  'label'   => __( 'Default disclaimer text.', 'piratenkleider' ),
                  'default' => $defaultoptions['disclaimer_post'],
              ),    	       
	       
	      'category'  => array(
                  'type'    => 'section',
                  'title'   => __( 'Index pages', 'piratenkleider' ),
              ),
	       
	      'category-teaser'   => array(
                  'type'    => 'bool',
                  'title'   => __( 'Slider', 'piratenkleider' ),
                  'label'   => __( 'Activate slider like on start page.', 'piratenkleider' ),
                  'default' => $defaultoptions['category-teaser'],
		  'parent'  => 'category'
              ),   	       
	       
	    'category-num-article-fullwidth' => array(
                  'type'    => 'number',
                  'title'   => __( 'Number of entries in big sized view', 'piratenkleider' ),
                  'label'   => __( 'How many entries will be displayed in 100% width of content size.', 'piratenkleider' ),
                  'default' => $defaultoptions['category-num-article-fullwidth'],
		'parent'  => 'category'
              ),
              'category-num-article-halfwidth' => array(
                  'type'    => 'select',
                  'title'   => __( 'Number of entries in half sized view', 'piratenkleider' ),
                  'label'   => __( 'How many entries will be displayed in half width of content size.', 'piratenkleider' ),
                  'liste'   => array(0 => 0, 2 => 2, 4 => 4, 6 => 6, 8 => 8, 10=>10, 12=>12, 14=>14, 16=>16),
                  'default' => $defaultoptions['category-num-article-halfwidth'],
		  'parent'  => 'category'
              ),    
	    'category-teaser-maxlength' => array(
                  'type'    => 'number',
                  'title'   => __( 'Length of excerpt', 'piratenkleider' ),
                  'label'   => __( 'Maximum numbers of chars in excerpt.', 'piratenkleider' ),
                  'default' => $defaultoptions['category-teaser-maxlength'],
		'parent'  => 'category'
              ),                 
             'category-teaser-titleup' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Title up', 'piratenkleider' ),
                  'label'   => __( 'Title above thumbnail, date and text.', 'piratenkleider' ),
                  'default' => $defaultoptions['category-teaser-titleup'],
                  'parent'  => 'category'
              ), 
              'category-teaser-datebox' => array(
                  'type'    => 'select',
                  'title'   => __( 'Layout entry info', 'piratenkleider' ),
                  'label'   => __( 'Sets a thumbnail, image, datebox, youtube-video or default image in front of excerpt. (Small entry teaser in half content width).', 'piratenkleider' ),
                  'default' => $defaultoptions['category-teaser-datebox'],
		  'liste'   =>  array(
				0 => __("Display datebox","piratenkleider"), 
				1 => __("Display in order: "
                                        . "thumbnail, first image in content if exist, "
                                        . "embedded YouTube video (first existing YouTube link in content) "
                                        . "or default image","piratenkleider"),
                                2 => __("Display in order: "
                                        . "first image in content if exist, thumbnail, "
                                        . "embedded YouTube video (first existing YouTube link in content) "
                                        . "or default image","piratenkleider"), 
                                3 => __("Display in order: "
                                        . "embedded YouTube video (first existing YouTube link in content), "
                                        . "thumbnail, first image in content if exist, "
                                        . "or default image","piratenkleider"), 
                                4 => __("Display in order: "
                                        . "embedded YouTube video (first existing YouTube link in content), "
                                        . "first image in content if exist, thumbnail, "
                                        . "or default image","piratenkleider"),
				5 => __("Hide entry info","piratenkleider")),

                  'parent'  => 'category'
              ), 
	    'category-teaser-floating' => array(
                'type'    => 'bool',
                'title'   => __( 'Floating excerpt', 'piratenkleider' ),
                'label'   => __( 'Excerpt text will float around entry info.', 'piratenkleider' ),
                'default' => $defaultoptions['category-teaser-floating'],
                'parent'  => 'category'
            ), 
	       
            'category-teaser-dateline' => array(
                'type'    => 'bool',
                'title'   => __( 'Date', 'piratenkleider' ),
                'label'   => __( 'Show date as first line after title.', 'piratenkleider' ),
                'default' => $defaultoptions['category-teaser-dateline'],
                'parent'  => 'category'
            ), 
               
            'category-teaser-maxlength-halfwidth' => array(
                'type'    => 'number',
                'title'   => __( 'Length of excerpt', 'piratenkleider' ),
                'label'   => __( 'Maximum numbers of chars in excerpt.', 'piratenkleider' ),
                'default' => $defaultoptions['category-teaser-maxlength-halfwidth'],
		'parent'  => 'category'
            ),                 
            'category-teaser-titleup-halfwidth' => array(
                'type'    => 'bool',
                'title'   => __( 'Title up', 'piratenkleider' ),
                'label'   => __( 'Title above thumbnail, date and text.', 'piratenkleider' ),
                'default' => $defaultoptions['category-teaser-titleup-halfwidth'],
                'parent'  => 'category'
            ), 
            'category-teaser-datebox-halfwidth' => array(
                'type'    => 'select',
                'title'   => __( 'Layout entry info', 'piratenkleider' ),
                'label'   => __( 'Sets a thumbnail, image, datebox, youtube-video or default image in front of excerpt. (Small entry teaser in half content width).', 'piratenkleider' ),
                'default' => $defaultoptions['category-teaser-datebox-halfwidth'],
		'liste'   =>  array(
				0 => __("Display datebox","piratenkleider"), 
				1 => __("Display in order: "
                                        . "thumbnail, first image in content if exist, "
                                        . "embedded YouTube video (first existing YouTube link in content) "
                                        . "or default image","piratenkleider"),
                                2 => __("Display in order: "
                                        . "first image in content if exist, thumbnail, "
                                        . "embedded YouTube video (first existing YouTube link in content) "
                                        . "or default image","piratenkleider"), 
                                3 => __("Display in order: "
                                        . "embedded YouTube video (first existing YouTube link in content), "
                                        . "thumbnail, first image in content if exist, "
                                        . "or default image","piratenkleider"), 
                                4 => __("Display in order: "
                                        . "embedded YouTube video (first existing YouTube link in content), "
                                        . "first image in content if exist, thumbnail, "
                                        . "or default image","piratenkleider"),
				5 => __("Hide entry info","piratenkleider")), 

                'parent'  => 'category'
            ), 
	    'category-teaser-floating-halfwidth' => array(
                'type'    => 'bool',
                'title'   => __( 'Floating excerpt', 'piratenkleider' ),
                'label'   => __( 'Excerpt text will float around entry info. (Small entry teaser in half content width).', 'piratenkleider' ),
                'default' => $defaultoptions['category-teaser-floating-halfwidth'],
                'parent'  => 'category'
            ), 
            'category-teaser-dateline-halfwidth' => array(
                'type'    => 'bool',
                'title'   => __( 'Date', 'piratenkleider' ),
                'label'   => __( 'Show date as first line after title.', 'piratenkleider' ),
                'default' => $defaultoptions['category-teaser-dateline-halfwidth'],
                'parent'  => 'category'
            ), 
	    'continuelink'   => array(
                'type'    => 'select',
                'title'   => __( 'Show Continue', 'piratenkleider' ),
                'label'   => __( 'Whether to display a continue reading link.', 'piratenkleider' ),
                'default' => $defaultoptions['category-teaser-datebox-halfwidth'],
		'liste'   =>  array(
				0 => __("Only if entry text ist longer as excerpt","piratenkleider"), 
				1 => __("Always","piratenkleider"), 	    
			        2 => __("Never","piratenkleider"), 	    
				), 
                'parent'  => 'category'
            ),  
               
    
	    'darstellungseiten'  => array(
                  'type'    => 'section',
                  'title'   => __( 'Pages', 'piratenkleider' ),
            ),
	       
	    'aktiv-defaultseitenbild' => array(
                'type'    => 'bool',
                'title'   => __( 'Default image for pages', 'piratenkleider' ),
                'label'   => __( 'Display default image for pages without own thumbnail.', 'piratenkleider' ),
                'default' => $defaultoptions['aktiv-defaultseitenbild'],
		'parent'  => 'darstellungseiten'
            ),	      
	    'seitenbild-size' => array(
                'type'    => 'select',
                'title'   => __( 'Size', 'piratenkleider' ),
                'label'   => __( 'Sets maximum height for page image', 'piratenkleider' ),
                'default' => $defaultoptions['seitenbild-size'],		                     
		'liste'   => array(0 => "small (150px)", 1 => "big (240px)"),
		'parent'  => 'darstellungseiten'
            ),	
	    'seiten-defaultbildsrc' => array(
                'type'    => 'imageurl',
                'title'   => __( 'Default image', 'piratenkleider' ),
                'label'   => __( 'Sets a default image.', 'piratenkleider' ),
                'default' => $defaultoptions['src-default-symbolbild'],		                     
		'parent'  => 'darstellungseiten',
		'maxwidth' => 705,
		'maxheight' => 240,
            ),	
	
	
	    'darstellungartikel'  => array(
                'type'    => 'section',
                'title'   => __( 'Entries', 'piratenkleider' ),
            ),
	       
	    'aktiv-artikelbild' => array(
                'type'    => 'bool',
                'title'   => __( 'Default image for entries', 'piratenkleider' ),
                'label'   => __( 'Display default image for entries without own thumbnail.', 'piratenkleider' ),		  
                'default' => $defaultoptions['aktiv-artikelbild'],
		'parent'  => 'darstellungartikel'
            ),
	    'artikelbild-size' => array(
                'type'    => 'select',
                'title'   => __( 'Size', 'piratenkleider' ),
                'label'   => __( 'Sets maximum height for page image.', 'piratenkleider' ),
                'default' => $defaultoptions['artikelbild-size'],		                     
                'liste'   => array(0 => "small (150px)", 1 => "big (240px)"),
		'parent'  => 'darstellungartikel'
            ),	

	    'artikelbild-src'  => array(
                'type'    => 'imageurl',
                'title'   => __( 'Default image', 'piratenkleider' ),
                'label'   => __( 'Sets a default image.', 'piratenkleider' ),
                'default' =>  $defaultoptions['src-default-artikel-symbolbild'],
                'parent'  => 'darstellungartikel',
		'maxwidth' => 705,
		'maxheight' => 240,
            ),
	       	       
	    'darstellungindexseiten'  => array(
                'type'    => 'section',
                'title'   => __( 'Index pages', 'piratenkleider' ),
            ),
              'aktiv-platzhalterbilder-indexseiten' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Default image on index pages', 'piratenkleider' ),
                  'label'   => __( 'Display default image for index pages (archives, tags, search, ..).', 'piratenkleider' ),
                  'default' => $defaultoptions['aktiv-platzhalterbilder-indexseiten'],
		  'parent'  => 'darstellungindexseiten'
              ),
	      'indexseitenbild-size' => array(
                  'type'    => 'select',
                  'title'   => __( 'Size', 'piratenkleider' ),
                  'label'   => __( 'Sets maximum height for page image.', 'piratenkleider' ),
                  'default' => $defaultoptions['indexseitenbild-size'],		                     
		  'liste'   => array(0 => "small (150px)", 1 => "big (240px)"),
		  'parent'  => 'darstellungindexseiten'
              ),
	      	       
	     'src-default-symbolbild-404' => array(
		    'type'    => 'imageurl',
		    'title'   => __( 'Errorpage default image', 'piratenkleider' ),
		    'label'   => __( 'Sets a default image for errorpages.', 'piratenkleider' ),
		    'default' => $defaultoptions['src-default-symbolbild-404'],
		    'parent'  => 'darstellungindexseiten',
		    'maxwidth' => 705,
		    'maxheight' => 240,
              ),
	     'src-default-symbolbild-category' => array(
                  'type'    => 'imageurl',
                  'title'   => __( 'Category default image', 'piratenkleider' ),
                  'label'   => __( 'Sets a default image for category pages.', 'piratenkleider' ),
                  'default' => $defaultoptions['src-default-symbolbild-category'],
                  'parent'  => 'darstellungindexseiten',
		  'maxwidth' => 705,
		    'maxheight' => 240,
              ), 
	      'src-default-symbolbild-tag' => array(
                  'type'    => 'imageurl',
                  'title'   => __( 'Tag page default image', 'piratenkleider' ),
                  'label'   => __( 'Sets a default image for tag and tagclound pages.', 'piratenkleider' ),
                  'default' => $defaultoptions['src-default-symbolbild-tag'],
                  'parent'  => 'darstellungindexseiten',
		   'maxwidth' => 705,
		    'maxheight' => 240,
              ), 
	       'src-default-symbolbild-author' => array(
                  'type'    => 'imageurl',
                  'title'   => __( 'Author page default image', 'piratenkleider' ),
                  'label'   => __( 'Sets a default image for an author page.', 'piratenkleider' ),
                  'default' => $defaultoptions['src-default-symbolbild-author'],
                  'parent'  => 'darstellungindexseiten',
		    'maxwidth' => 705,
		    'maxheight' => 240,
              ), 
	       'src-default-symbolbild-archive' => array(
                  'type'    => 'imageurl',
                  'title'   => __( 'Archive default image', 'piratenkleider' ),
                  'label'   => __( 'Sets a default image for archive pages.', 'piratenkleider' ),
                  'default' => $defaultoptions['src-default-symbolbild-archive'],
                  'parent'  => 'darstellungindexseiten',
		    'maxwidth' => 705,
		    'maxheight' => 240,
              ), 
	        'src-default-symbolbild-search' => array(
                  'type'    => 'imageurl',
                  'title'   => __( 'Search page default image', 'piratenkleider' ),
                  'label'   => __( 'Sets a default image for search form and result page.', 'piratenkleider' ),
                  'default' => $defaultoptions['src-default-symbolbild-search'],
                  'parent'  => 'darstellungindexseiten',
		     'maxwidth' => 705,
		    'maxheight' => 240,
              ), 
	       'src-default-symbolbild-person' => array(
                  'type'    => 'imageurl',
                  'title'   => __( 'Business card default image', 'piratenkleider' ),
                  'label'   => __( 'Sets a default image for business card pages.', 'piratenkleider' ),
                  'default' => $defaultoptions['src-default-symbolbild-person'],
                  'parent'  => 'darstellungindexseiten',
		     'maxwidth' => 705,
		    'maxheight' => 240,
              ), 
	       
	       
	      'src-default-symbolbild' => array(
                  'type'    => 'imageurl',
                  'title'   => __( 'Template default image', 'piratenkleider' ),
                  'label'   => __( 'Sets a default image for template pages.', 'piratenkleider' ),
                  'default' => $defaultoptions['src-default-symbolbild'],
                  'parent'  => 'darstellungindexseiten',
		   'maxwidth' => 705,
		    'maxheight' => 240,
              ),  

	       
	      'kommentare'  => array(
                  'type'    => 'section',
                  'title'   => __( 'Comments', 'piratenkleider' ),
              ),
	     'aktiv-commentreplylink' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Reply for comments', 'piratenkleider' ),
                  'label'   => __( 'Allow to answer directly to other comments instead of the entry only.', 'piratenkleider' ),
                  'default' => $defaultoptions['aktiv-commentreplylink'],	
		 'parent'   => 'kommentare'
              ),
	      'aktiv-commentsonpages' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Comments on pages', 'piratenkleider' ),
                  'label'   => __( 'Activates comments on pages instead of entries only.', 'piratenkleider' ),
                  'default' => $defaultoptions['aktiv-commentsonpages'],	
		 'parent'   => 'kommentare'
              ),
              'comments_disclaimer'  => array(
                  'type'    => 'html',
                  'title'   => __( 'Disclaimer', 'piratenkleider' ),
                  'label'   => __( 'Sets a default disclaimer text, which can be shown above the comment form.', 'piratenkleider' ),
                  'default' => $defaultoptions['comments_disclaimer'],
		  'parent'   => 'kommentare'
              ),               
               'zeige_commentbubble_null' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Comment Number', 'piratenkleider' ),
                  'label'   => __( 'Displays number of comments, even if there are currently none on an entry.', 'piratenkleider' ),
                  'default' => $defaultoptions['zeige_commentbubble_null'],
		   'parent'   => 'kommentare'
              ),            
	       
          )
       ),
       
       'sidebar'   => array(
           'tabtitle'   => __('Sidebar', 'piratenkleider'),
           'fields' => array(
                'seitenmenu'  => array(
                    'type'    => 'section',
                    'title'   => __( 'Menu', 'piratenkleider' ),
                ),
                'seitenmenu_mode' => array(
                    'type'    => 'select',
                    'title'   => __( 'Taxonomy', 'piratenkleider' ),
                    'label'   => __( 'Sets type of menu to display on sidebar on subpages.', 'piratenkleider' ),
                    'default' => $defaultoptions['seitenmenu_mode'],
                    'liste'   => array(
                        0 => __("Use menu", 'piratenkleider'), 
                        1 => __("Use page hierarchy", 'piratenkleider')),
                    'parent'  => 'seitenmenu',
              ),
              'zeige_subpagesonly' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Display subpages', 'piratenkleider' ),
                  'label'   => __( 'Displays submenu from current page only instead of complete menu.', 'piratenkleider' ),
                  'default' => $defaultoptions['zeige_subpagesonly'],
                  'parent'  => 'seitenmenu',
              ),
              'zeige_sidebarpagemenu' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Display full taxonomy', 'piratenkleider' ),
                  'label'   => __( 'Displays all pages in sidebar, even if they are not part of defined menu.', 'piratenkleider' ),
                  'default' => $defaultoptions['zeige_sidebarpagemenu'],
                  'parent'  => 'seitenmenu',
              ),
              
              'newsletter' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Newsletter', 'piratenkleider' ),
                  'label'   => __( 'Displays subscribe form of a defined newsletter or mailing list.', 'piratenkleider' ),
                  'default' => $defaultoptions['newsletter'],
              ),
              'url-newsletteranmeldung' => array(
                  'type'    => 'url',
                  'title'   => __( 'Newsletter / Mailing list', 'piratenkleider' ),
                  'label'   => __( 'Default URL for a subscription for a mailing list', 'piratenkleider' ),
                  'default' => $defaultoptions['url-newsletteranmeldung'],
              ), 
              'plakate'  => array(
                  'type'    => 'section',
                  'title'   => __( 'Posters', 'piratenkleider' ),
              ),
              'slider-defaultwerbeplakate' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Activate poster slider', 'piratenkleider' ),
                  'label'   => __( 'Activates a slider with defined posters or other images in sidebar.', 'piratenkleider' ),
                  'default' => $defaultoptions['slider-defaultwerbeplakate'],
                   'parent'  => 'plakate',
              ),	   
	       
	      'plakate-src' => array(
                  'type'    => 'bilddirchecklist',
                  'title'   => __( 'Select poster', 'piratenkleider' ),
                  'label'   => __( 'Select poster to display as slides in sidebar.', 'piratenkleider' ),
                  'default' => $defaultoptions['dir-default-plakate'],		                     
		  'parent'  => 'plakate'
              ), 
	       
              'plakate-title' => array(
                  'type'    => 'text',
                  'title'   => __( 'Optional alternative text', 'piratenkleider' ),
                  'label'   => __( 'Sets a text as alternative text on all poster slides.', 'piratenkleider' ),
                  'default' => $defaultoptions['plakate-title'],
                  'parent'  => 'plakate',
              ),   
              'plakate-url' => array(
                  'type'    => 'url',
                  'title'   => __( 'Optional URL', 'piratenkleider' ),
                  'label'   => __( 'Sets an URL as target on clicking on poster slides.', 'piratenkleider' ),
                  'default' => $defaultoptions['plakate-url'],
                  'parent'  => 'plakate',
              ),   
              'plakate-altadressen' => array(
                  'type'    => 'textarea',
                  'title'   => __( 'Upload and select other posters', 'piratenkleider' ),
                  'label'   => __('Manage other images to use for slider.', 'piratenkleider'),
                  'default' => $defaultoptions['plakate-altadressen'],
                  'parent'  => 'plakate',
              ),   
               
              'teaser1'  => array(
                  'type'    => 'section',
                  'title'   => __( 'Teaser 1', 'piratenkleider' ),                      
              ),
               'teaserlink1-symbol' => array(
                  'type'    => 'select',
                  'title'   => __( 'Symbol', 'piratenkleider' ),
                  'label'   => '',
                  'default' => $defaultoptions['teaserlink1-symbol'],
                  'liste'  => $defaultplakate_textsymbolliste_entity,
                  'parent'  => 'teaserlink1',
              ),
               'teaserlink1-title' => array(
                  'type'    => 'text',
                  'title'   => __( 'Title', 'piratenkleider' ),
                  'label'   => __( 'Short text as link title.', 'piratenkleider' ),
                  'default' => $defaultoptions['teaserlink1-title'],
                    'parent'  => 'teaserlink1',
              ),
               'teaserlink1-untertitel' => array(
                  'type'    => 'text',
                  'title'   => __( 'Subtitle', 'piratenkleider' ),
                  'label'   => __( 'Small text for second line.', 'piratenkleider' ),
                  'default' => $defaultoptions['teaserlink1-untertitel'],
                    'parent'  => 'teaserlink1',
              ),
               'teaserlink1-url' => array(
                  'type'    => 'url',
                  'title'   => __( 'URL', 'piratenkleider' ),
                  'label'   => __( 'Link target.', 'piratenkleider' ),
                  'default' => $defaultoptions['teaserlink1-url'],
                    'parent'  => 'teaserlink1',
              ),
              'teaser2'  => array(
                  'type'    => 'section',
                  'title'   => __( 'Teaser 2', 'piratenkleider' ),                      
              ),
               'teaserlink2-symbol' => array(
                  'type'    => 'select',
                  'title'   => __( 'Symbol', 'piratenkleider' ),
                  'label'   => '',
                  'default' => $defaultoptions['teaserlink2-symbol'],
                  'liste'  => $defaultplakate_textsymbolliste_entity,
                  'parent'  => 'teaserlink2',
              ),
               'teaserlink2-title' => array(
                  'type'    => 'text',
                  'title'   => __( 'Title', 'piratenkleider' ),
                  'label'   => __( 'Short text as link title.', 'piratenkleider' ),
                  'default' => $defaultoptions['teaserlink2-title'],
                    'parent'  => 'teaserlink2',
              ),
               'teaserlink2-untertitel' => array(
                  'type'    => 'text',
                  'title'   => __( 'Subtitle', 'piratenkleider' ),
                  'label'   => __( 'Small text for second line.', 'piratenkleider' ),
                  'default' => $defaultoptions['teaserlink2-untertitel'],
                    'parent'  => 'teaserlink2',
              ),
               'teaserlink2-url' => array(
                  'type'    => 'url',
                  'title'   => __( 'URL', 'piratenkleider' ),
                  'label'   => __( 'Link target.', 'piratenkleider' ),
                  'default' => $defaultoptions['teaserlink2-url'],
                    'parent'  => 'teaserlink2',
              ),  
                'teaser3'  => array(
                  'type'    => 'section',
                  'title'   => __( 'Teaser 3', 'piratenkleider' ),                      
              ),
               'teaserlink3-symbol' => array(
                  'type'    => 'select',
                  'title'   => __( 'Symbol', 'piratenkleider' ),
                  'label'   => '',
                  'default' => $defaultoptions['teaserlink3-symbol'],
                  'liste'  => $defaultplakate_textsymbolliste_entity,
                  'parent'  => 'teaserlink3',
              ),
               'teaserlink3-title' => array(
                  'type'    => 'text',
                  'title'   => __( 'Title', 'piratenkleider' ),
                  'label'   => __( 'Short text as link title.', 'piratenkleider' ),
                  'default' => $defaultoptions['teaserlink3-title'],
                    'parent'  => 'teaserlink3',
              ),
               'teaserlink3-untertitel' => array(
                  'type'    => 'text',
                  'title'   => __( 'Subtitle', 'piratenkleider' ),
                  'label'   => __( 'Small text for second line.', 'piratenkleider' ),
                  'default' => $defaultoptions['teaserlink3-untertitel'],
                    'parent'  => 'teaserlink3',
              ),
               'teaserlink3-url' => array(
                  'type'    => 'url',
                  'title'   => __( 'URL', 'piratenkleider' ),
                  'label'   => __( 'Link target.', 'piratenkleider' ),
                  'default' => $defaultoptions['teaserlink3-url'],
                    'parent'  => 'teaserlink3',
              ),  
               
               
          )
       ),
       
       'socialmedia'   => array(
           'tabtitle'   => __('Social Media', 'piratenkleider'),
           'fields' => array(
              
              'alle-socialmediabuttons' => array(
                  'type'    => 'select',
                  'title'   => __( 'Position', 'piratenkleider' ),
                  'label'   => __( 'Where to display the social media buttons (depending on design).', 'piratenkleider' ),
                  'liste'   => array(
		      0 => __( 'Do not display social media buttons', 'piratenkleider' ) ,  
		      1 => __( 'Header', 'piratenkleider' ), 
		      2 => __( 'Aside of content', 'piratenkleider' )),
                  'default' => $defaultoptions['alle-socialmediabuttons'],
              ),  
	      'sm-list'  => array(
		  'type'    => 'urlchecklist',
		  'title'   => __( 'Social Media sites', 'piratenkleider' ),
		  'liste'   => $default_socialmedia_liste,
	      ), 
	                      
          )
       ),
	'design'   => array(
           'tabtitle'   => __( 'Design', 'piratenkleider' ),
           'fields' => array(
            
	       'style'  => array(
                  'type'    => 'section',
                  'title'   => __( 'Stylesheet', 'piratenkleider' ),
              ),
	      'aktiv-alternativestyle' => array(
                  'type'    => 'select',
                  'title'   => __( 'Change base design', 'piratenkleider' ),
                  'label'   => __( 'Switches stylesheet to one of the following subdesigns.', 'piratenkleider' ),
                  'default' => 'style.css',
                  'liste'   =>  $default_alternativestyles,
		  'parent'  => 'style', 
              ),

	    'css-colorfile' => array(
                  'type'    => 'select',
                  'title'   => __( 'Color subset', 'piratenkleider' ),
                  'label'   => __( 'Changes colors of website (only by using Piratenkleider base stylesheet).', 'piratenkleider' ),
                  'default' => '-',
                  'liste'   => $default_colorstyles,
		   'parent'  => 'style', 
              ),
              'aktiv-stylefile' => array(
                  'type'    => 'file',
                  'title'   => __( 'CSS file', 'piratenkleider' ),
                  'label'   => __( 'Uploads an own CSS file.', 'piratenkleider' ),
		   'parent'  => 'style',   
              ),
               'stylefile-position' => array(
                  'type'    => 'select',
                  'title'   => __( 'Order for css file', 'piratenkleider' ),
                  'label'   => __( 'Sets priority and order for own css file in relation to theme files.', 'piratenkleider' ),
                  'default' => 0,
                  'liste'   => array(
		      0 => __('None (Deactive)', 'piratenkleider'),
                      1 => __('Previews (uses own css first, then theme files)', 'piratenkleider'),
                      2 => __('After (uses theme files first, then own css file)', 'piratenkleider'),
                      3 => __('Own css + colors/fonts (uses own css, do not load base css, but colors and fonts)', 'piratenkleider'),
		      4 => __('Only (do not use any other css files)', 'piratenkleider'),
                  ),
		  'parent'  => 'style', 
              ),  
              'aktiv-hamburger'  => array(
                  'type'    => 'bool',
                  'title'   => __( 'Hamburger Menu', 'piratenkleider' ),
                  'label'   => __( 'Activates hamburger menu on small screen sizes.', 'piratenkleider' ),
                  'default' => $defaultoptions['aktiv-hamburger'],
		  'parent' => 'style',
              ),	       
	       
            'background'  => array(
                  'type'    => 'section',
                  'title'   => __( 'Body background', 'piratenkleider' ),
              ),
            'alt-body-background' => array(
                  'type'    => 'imageurl',
                  'title'   => __( 'Alternative body background', 'piratenkleider' ),
                  'label'   => __( 'Sets another background image for body; overwrites setting of CSS file.', 'piratenkleider' ),
                  'default' => '',
                  'parent'  => 'background',
              ),   
             'alt-body-background-orix' => array(
                  'type'    => 'select',
                  'title'   => __( 'Horizontal orientation', 'piratenkleider' ),
                  'label'   => __( 'Defines the orientation at x-axis', 'piratenkleider' ),
                  'default' =>  'left',
                  'liste'   => array(
                      'left'=> __('left','piratenkleider'),
                      'center' => __('center','piratenkleider'),
                      'right' => __('right','piratenkleider'),
                      ),
                  'parent'  => 'background',
              ),     
              'alt-body-background-oriy' => array(
                  'type'    => 'select',
                  'title'   => __( 'Vertical orientation', 'piratenkleider' ),
                  'label'   => __( 'Defines the orientation at y-axis', 'piratenkleider' ),
                  'default' => 'top',
                  'liste'   => array(
                     'top'=> __('top','piratenkleider'),
                      'center' => __('center','piratenkleider'),
                      'bottom' => __('bottom','piratenkleider'),
                      ),
                  'parent'  => 'background',
              ), 
               'alt-body-background-repeat' => array(
                  'type'    => 'select',
                  'title'   => __( 'Repeat', 'piratenkleider' ),
                  'label'   => __( 'Repeats the background image or not', 'piratenkleider' ),
                  'default' => 'repeat',
                  'liste'   => array(
                      'repeat' => __('repeat','piratenkleider'),
                      'repeat-x' => __('repeat-x','piratenkleider'),
                      'repeat-y' => __('repeat-y','piratenkleider'),
                      'no-repeat' => __('no-repeat','piratenkleider'),
                      ),
                  'parent'  => 'background',
              ), 
               'fonts'  => array(
                  'type'    => 'section',
                  'title'   => __( 'Fonts', 'piratenkleider' ),
              ), 
              'fonts-headers' => array(
                  'type'    => 'fontselect',
                  'title'   => __( 'Title fonts', 'piratenkleider' ),
                  'label'   => __( 'Changes font at titles.', 'piratenkleider' ),
                  'default' => $defaultoptions['fonts-headers'],
                  'liste'   => $default_fonts,
		  'parent'  => 'fonts', 
              ), 
              'fonts-menuheaders' => array(
                  'type'    => 'fontselect',
                  'title'   => __( 'Menu fonts', 'piratenkleider' ),
                  'label'   => __( 'Changes font for menu items.', 'piratenkleider' ),
                  'default' => $defaultoptions['fonts-menuheaders'],
                  'liste'   => $default_fonts,
		  	  'parent'  => 'fonts', 
              ),                
              'fonts-content' => array(
                  'type'    => 'fontselect',
                  'title'   => __( 'Text font', 'piratenkleider' ),
                  'label'   => __( 'Changes font for text content.', 'piratenkleider' ),
                  'default' => $defaultoptions['fonts-content'],
                  'liste'   => $default_fonts,
		  	  'parent'  => 'fonts', 
              ),               
	     
	      'aktiv-linkicons' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Activate link icons', 'piratenkleider' ),
                  'label'   => __( 'Displays link icons at known target URLs and document types.', 'piratenkleider' ),
                  'default' => $defaultoptions['aktiv-linkicons'],         
		  	  'parent'  => 'fonts', 
              ),

             
              'breadcrumb'  => array(
                  'type'    => 'section',
                  'title'   => __( 'Breadcrumb', 'piratenkleider' ),
              ),
	      'zeige_breadcrump'  => array(
                  'type'    => 'bool',
                  'title'   => __( 'Activate', 'piratenkleider' ),
                  'label'   => __( 'Display breadcrumb', 'piratenkleider' ),
                  'default' => $defaultoptions['zeige_breadcrump'],
		  'parent' => 'breadcrumb',
              ),	       
	       'zeige_breadcrump_frontpages'  => array(
                  'type'    => 'bool',
                  'title'   => __( 'Breadcrumb on start page', 'piratenkleider' ),
                  'label'   => __( 'Display breadcrumb also on start or front pages.', 'piratenkleider' ),
                  'default' => $defaultoptions['zeige_breadcrump_frontpages'],
		   'parent' => 'breadcrumb',
              ),
	     
	       

	       
	       
	      'miscdesign'  => array(
                  'type'    => 'section',
                  'title'   => __( 'Other options', 'piratenkleider' ),
              ),
	       
	     'favicon-file' => array(
                  'type'    => 'image',
                  'title'   => __( 'Favicon', 'piratenkleider' ),
                  'label'   => __( 'Set an own favicon file for your website.', 'piratenkleider' ),
		  'parent' => 'miscdesign',
		  'maxwidth' =>  64,
		  'maxheight'=>  64,
              ),
	       'src-teaser-thumbnail_default'=> array(
                  'type'    => 'image',
                  'title'   => __( 'Fallback thumbnail', 'piratenkleider' ),
                  'label'   => __( 'Defines an image as default thumbnail for entries on index pages.', 'piratenkleider' ),
		  'parent' => 'miscdesign',
		  'maxwidth' =>  64,
		  'maxheight'=>  64,
              ),
	       
	      'css-eigene-anweisungen' => array(
                  'type'    => 'textarea',
                  'title'   => __( 'CSS', 'piratenkleider' ),
                  'label'   => __( 'Adds own CSS commands to the website.', 'piratenkleider' ),
                  'default' => '',
		    'parent' => 'miscdesign',
              ),
	       'html-eigene-anweisungen' => array(
                  'type'    => 'textarea',
                  'title'   => __( 'HTML', 'piratenkleider' ),
                  'label'   => __( 'Adds own HTML commands at the end of the page (after footer, just before &lt;/body&gt;&lt;/html&gt;).', 'piratenkleider' ),                  'default' => '',
		  'parent' => 'miscdesign',
              ),
	     
              'dimensions'  => array(
                  'type'    => 'section',
                  'title'   => __( 'Image Dimensions', 'piratenkleider' ),
              ), 
               
               
               
               'teaser-thumbnail_width' => array(
                  'type'    => 'number',
                  'title'   => __( 'Teaser Thumb Width', 'piratenkleider' ),
                  'label'   => __( 'Width in px for thumbnail in teasers.', 'piratenkleider' ),
                  'default' => $defaultoptions['teaser-thumbnail_width'],
                   'parent'  => 'dimensions',
                ), 
                'teaser-thumbnail_height' => array(
                  'type'    => 'number',
                  'title'   => __( 'Teaser Thumb Height', 'piratenkleider' ),
                  'label'   => __( 'Height in px for thumbnail in teasers.', 'piratenkleider' ),
                  'default' => $defaultoptions['teaser-thumbnail_height'],
                   'parent'  => 'dimensions',
                ),              
                'teaser-thumbnail_crop'  => array(
                  'type'    => 'bool',
                  'title'   => __( 'Crop Images', 'piratenkleider' ),
                  'label'   => __( 'Whether images should be cropped to match the desired dimensions.', 'piratenkleider' ),
                  'default' => $defaultoptions['teaser-thumbnail_crop'],
		  'parent' => 'dimensions',
                ),


                'linktipp-thumbnail_width' => array(
                  'type'    => 'number',
                  'title'   => __( 'Bookmark Thumb Width', 'piratenkleider' ),
                  'label'   => __( 'Width in px for thumbnail in bookmarks.', 'piratenkleider' ),
                  'default' => $defaultoptions['linktipp-thumbnail_width'],
                   'parent'  => 'dimensions',
                ), 
                'linktipp-thumbnail_height' => array(
                  'type'    => 'number',
                  'title'   => __( 'Bookmark Thumb Height', 'piratenkleider' ),
                  'label'   => __( 'Height in px for thumbnail in bookmarks.', 'piratenkleider' ),
                  'default' => $defaultoptions['linktipp-thumbnail_height'],
                   'parent'  => 'dimensions',
                ),  
               'linktipp-thumbnail_crop'  => array(
                  'type'    => 'bool',
                  'title'   => __( 'Crop Images', 'piratenkleider' ),
                  'label'   => __( 'Whether images should be cropped to match the desired dimensions.', 'piratenkleider' ),
                  'default' => $defaultoptions['linktipp-thumbnail_crop'],
		  'parent' => 'dimensions',
              ),
               

                'person-thumbnail_width' => array(
                  'type'    => 'number',
                  'title'   => __( 'Person Thumb Width', 'piratenkleider' ),
                  'label'   => __( 'Width in px for thumbnail in business cards', 'piratenkleider' ),
                  'default' => $defaultoptions['person-thumbnail_width'],
                   'parent'  => 'dimensions',
                ), 
                'person-thumbnail_height' => array(
                  'type'    => 'number',
                  'title'   => __( 'Person Thumb Height', 'piratenkleider' ),
                  'label'   => __( 'Height in px for thumbnail in business cards', 'piratenkleider' ),
                  'default' => $defaultoptions['person-thumbnail_height'],
                   'parent'  => 'dimensions',
                ),  
                'person-thumbnail_crop'  => array(
                  'type'    => 'bool',
                  'title'   => __( 'Crop Images', 'piratenkleider' ),
                  'label'   => __( 'Whether images should be cropped to match the desired dimensions.', 'piratenkleider' ),
                  'default' => $defaultoptions['person-thumbnail_crop'],
		  'parent' => 'dimensions',
                ),
 
                'sidebar-thumbnail_width' => array(
                  'type'    => 'number',
                  'title'   => __( 'Sidebar Thumb Width', 'piratenkleider' ),
                  'label'   => __( 'Width in px for sidebar thumbs', 'piratenkleider' ),
                  'default' => $defaultoptions['sidebar-thumbnail_width'],
                   'parent'  => 'dimensions',
                ), 
                'sidebar-thumbnail_height' => array(
                  'type'    => 'number',
                  'title'   => __( 'Sidebar Thumb Height', 'piratenkleider' ),
                  'label'   => __( 'Height in px for sidebar thumbs', 'piratenkleider' ),
                  'default' => $defaultoptions['sidebar-thumbnail_height'],
                   'parent'  => 'dimensions',
                ), 
                'sidebar-thumbnail_crop'  => array(
                  'type'    => 'bool',
                  'title'   => __( 'Crop Images', 'piratenkleider' ),
                  'label'   => __( 'Whether images should be cropped to match the desired dimensions.', 'piratenkleider' ),
                  'default' => $defaultoptions['sidebar-thumbnail_crop'],
		  'parent' => 'dimensions',
        ),
               
               
               
               
          )
       ),
       
       
       'sonstiges'   => array(
           'tabtitle'   => __('Misc', 'piratenkleider'),
           'fields' => array(
	       'reset_options' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Reset', 'piratenkleider' ),
                  'label'   => __( 'Resets all options to default.', 'piratenkleider' ),
                  'default' => 0,
		  'mark_option' => 1,
              ),    
                                                
              'login_errors' => array(
                  'type'    => 'select',
                  'title'   => __( 'Error message on login', 'piratenkleider' ),
                  'label'   => __( 'Choose whether error messages will be displayed on login screen. The error message could make it easier to guess valid login names.', 'piratenkleider' ),
                  'liste'   => array(
                      1 => __( 'Display error message', 'piratenkleider' ), 
                      0 => __( 'Do not display anything', 'piratenkleider' )),
                  'default' => 1,
              ),

             	       
             
              
	     
              'yt-alternativeembed' => array(
                  'type'    => 'bool',
                  'title'   => __( 'YouTube', 'piratenkleider' ),
                  'label'   => __( 'Embedded YouTube-Links as an inline video-frame from youtube-nocookie.com', 'piratenkleider' ),
                  'default' => $defaultoptions['yt-alternativeembed'],
              ),  
	       
	      
	       
              'anonymitaet'  => array(
                  'type'    => 'section',
                  'title'   => __('Security', 'piratenkleider'),         
              ),  
               
              'aktiv-autoren' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Show author', 'piratenkleider' ),
                  'label'   => __( 'Displays the author of entries or pages at content information.', 'piratenkleider' ),
                  'default' => $defaultoptions['aktiv-autoren'],
                  'parent'  => 'anonymitaet',
              ),
              'anonymize-user' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Anonymize comment user', 'piratenkleider' ),
                  'label'   => __( 'Anonymize IP-Address and User-Agent-String and disables entry form for email. Will allow comment user to stay anonym, even against backend admins.', 'piratenkleider' ),
                  'default' => $defaultoptions['anonymize-user'],
                  'parent'  => 'anonymitaet',
              ),
              'anonymize-user-commententries' => array(
                  'type'    => 'select',
                  'title'   => __( 'Identification', 'piratenkleider' ),
                  'label'   => __( 'Form fields for comment user, allowing them to identify themselves', 'piratenkleider' ),
                  'liste'   => array( 0 => "Name, URL,  E-Mail (Wordpress-Default)", 1=> "Name", 2 => "Name, URL"),
                  'default' => $defaultoptions['anonymize-user-commententries'],
                  'parent'  => 'anonymitaet',
              ),
              'aktiv-avatar' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Show avatar', 'piratenkleider' ),
                  'label'   => __( 'Activates use of services, show author avatars. Notice: This will allow avatar services to track users on this website.', 'piratenkleider' ),
                  'default' => $defaultoptions['aktiv-avatar'],
                  'parent'  => 'anonymitaet',
              ),               
             'feed-overwriteauthorstring' => array(
                  'type'    => 'text',
                  'title'   => __( 'Feed author', 'piratenkleider' ),
                  'label'   => __( 'Sets author name for rss feeds. This overwrites authorname from backend.', 'piratenkleider' ),
                  'parent'  => 'anonymitaet',
              ),  
               
              'meta'  => array(
                  'type'    => 'section',
                  'title'   => __('Meta fields', 'piratenkleider'),                   
              ),               
               'meta-author' => array(
                  'type'    => 'text',
                  'title'   => __( 'Author', 'piratenkleider' ),
                  'label'   => __( 'Optional authorname for website on every page.', 'piratenkleider' ),
                  'parent'  => 'meta',
              ),  
                'meta-description' => array(
                  'type'    => 'text',
                  'title'   => __( 'Description', 'piratenkleider' ),
                  'label'   => __( 'Optional description of website on every page.', 'piratenkleider' ),
                  'parent'  => 'meta',
              ),  
               'meta-keywords' => array(
                  'type'    => 'text',
                  'title'   => __( 'Keywords', 'piratenkleider' ),
                  'label'   => __( 'Sets a list of keywords on every page.', 'piratenkleider' ),
                  'parent'  => 'meta',                    
              ),   
	       'meta-verify-v1' => array(
                  'type'    => 'text',
                  'title'   => __( 'Google Verify', 'piratenkleider' ),
                  'label'   => __( 'Optional text field to enter a code for Google Verify.', 'piratenkleider' ),
                  'parent'  => 'meta',
              ),  

	       'aktiv-autokeywords'  => array(
                  'type'    => 'bool',
                  'title'   => __( 'Use tags for keywords', 'piratenkleider' ),
                  'label'   => __( 'Generates keywords using known tags.', 'piratenkleider'),
                  'default' => $defaultoptions['aktiv-autokeywords'],
                  'parent'  => 'meta',
              ),           
          	       'linktipps'  => array(
                  'type'    => 'section',
                  'title'   => __('Bookmarks', 'piratenkleider'),                   
              ),            

               
              'linktipps-titlepos'  => array(
                  'type'    => 'select',
                  'title'   => __( 'Title', 'piratenkleider' ),
                  'label'   => __( 'Sets the position of bookmark title', 'piratenkleider'),		   
                  'default' => $defaultoptions['linktipps-titlepos'],
                  'liste'   => array( 
                        0   => __("On top of text or/and image", 'piratenkleider'), 
                        1   => __("Below of text or/and image", 'piratenkleider')),
                  'parent'  => 'linktipps',
              ),
                'linktipps-subtitlepos'  => array(
                  'type'    => 'select',
                  'title'   => __( 'Subtitle', 'piratenkleider' ),
                  'label'   => __( 'Sets the position of subtitle', 'piratenkleider'),		   
                  'default' => $defaultoptions['linktipps-subtitlepos'],
                  'liste'   => array( 
                       0 => __("Top", 'piratenkleider'),
                        1 => __("Bottom", 'piratenkleider')),
                  'parent'  => 'linktipps',
              ),
              'linktipps-linkpos'  => array(
                  'type'    => 'select',
                  'title'   => __( 'Link', 'piratenkleider' ),
                  'label'   => __( 'Wether to set the target link.', 'piratenkleider'),		   
                  'default' => $defaultoptions['linktipps-linkpos'],
                  'liste'   => array( 
                      0 => __( 'Link on title', 'piratenkleider' ),
                      1 => __( 'Link on text and/or image', 'piratenkleider' ),
                      2 => __( 'Show URL below of text and/or image', 'piratenkleider' ),
                      3 => __( 'Link on title and on URL below of text and/or image', 'piratenkleider' )),
                  'parent'  => 'linktipps',
              ),
             
	      
               
          ),
	),          
       'opengraph' => array(
           'tabtitle'   => __('OpenGraph / Schema', 'piratenkleider'),
           'fields' => array(
                'meta'  => array(
                  'type'    => 'section',
                  'title'   => __('General Meta', 'piratenkleider'),                   
              ),      
              'meta-itemtype-aboutpage' => array(
                  'type'    => 'text',
                  'title'   => __( 'Itemtype AboutPage', 'piratenkleider' ),
                  'label'   => __( 'Enter ID or title to set the item type of this page to "AboutPage".', 'piratenkleider' ),
                  'parent'  => 'meta',
              ),
            'meta-itemtype-contactpage' => array(
                  'type'    => 'text',
                  'title'   => __( 'Itemtype ContactPage', 'piratenkleider' ),
                  'label'   => __( 'Enter ID or title to set the item type of this page to "ContactPage".', 'piratenkleider' ),
                  'parent'  => 'meta',
              ),
            'meta-itemtype-ptype1' => array(
                  'type'    => 'text',
                  'title'   => __( 'Custom Post Type 1', 'piratenkleider' ),
                  'label'   => __( 'Enter a custom post type.', 'piratenkleider' ),
                  'parent'  => 'meta',
              ),
            'meta-itemtype-cst1' => array(
                  'type'    => 'text',
                  'title'   => __( 'Custom Item Type 1', 'piratenkleider' ),
                  'label'   => __( 'Enter a custom schema.org microdata item type.', 'piratenkleider' ),
                  'parent'  => 'meta',
              ),
            'meta-itemtype-ptype2' => array(
                  'type'    => 'text',
                  'title'   => __( 'Custom Post Type 2', 'piratenkleider' ),
                  'label'   => __( 'Enter a custom post type.', 'piratenkleider' ),
                  'parent'  => 'meta',
              ),
            'meta-itemtype-cst2' => array(
                  'type'    => 'text',
                  'title'   => __( 'Custom Item Type 2', 'piratenkleider' ),
                  'label'   => __( 'Enter a custom schema.org microdata item type.', 'piratenkleider' ),
                  'parent'  => 'meta',
              ),
            'meta-itemtype-org-name' => array(
                  'type'    => 'text',
                  'title'   => __( 'Custom Name', 'piratenkleider' ),
                  'label'   => __( 'Enter a custom name for your organization. If left empty the name of your blog will be used.', 'piratenkleider' ),
                  'parent'  => 'meta',
              ),
            'meta-itemtype-org-desc' => array(
                  'type'    => 'text',
                  'title'   => __( 'Custom Description', 'piratenkleider' ),
                  'label'   => __( 'Enter a custom description of your organization. If left empty blog description will be used.', 'piratenkleider' ),
                  'parent'  => 'meta',
              ),
               
            'og'  => array(
                  'type'    => 'section',
                  'title'   => __('Open Graph', 'piratenkleider'),                   
              ),          
             'open_graph-active'   => array(
                  'type'    => 'bool',
                  'title'   => __( 'Activate Open Graph', 'piratenkleider' ),
                  'label'   => __( 'Activates Open Graph Meta Tags from Piratenkleider', 'piratenkleider' ),
                  'default' => $defaultoptions['open_graph-active'],
                  'parent'  => 'og',
              ),    
            'open_graph-twitterhandle'   => array(
                  'type'    => 'text',
                  'title'   => __( 'Twitter Handle', 'piratenkleider' ),
                  'label'   => __( 'Twitter Nick without @ for Twitter Cards', 'piratenkleider' ),
                  'parent'  => 'og',
              ), 
               
           )
       ),
       'crew'   => array(
           'tabtitle'   => __( 'Contact informations', 'piratenkleider' ),
           'fields' => array(
	        'impressum'  => array(
                  'type'    => 'section',
                  'title'   => __('Imprint', 'piratenkleider'),                   
		),               
               'impressumperson' => array(
                  'type'    => 'text',
                  'title'   => __( 'Responsible person', 'piratenkleider' ),
                  'label'   => __( 'Name of responsible person for website', 'piratenkleider' ),
		   'default'	=> '',
                  'parent'  => 'impressum',
		),  
                'impressumdienstanbieter' => array(
                  'type'    => 'text',
                  'title'   => __( 'Service provider', 'piratenkleider' ),
                  'label'   => __( 'Public contact name for website owner.', 'piratenkleider' ),
                  'parent'  => 'impressum',		    
		), 
	       'kontaktemail' => array(
                  'type'    => 'email',
                  'title'   => __( 'Contact email', 'piratenkleider' ),
                  'label'   => __( 'Public email address for contacting website owner.', 'piratenkleider' ),
                  'parent'  => 'impressum',		    
		), 
               'kontakttelefon' => array(
                  'type'    => 'text',
                  'title'   => __( 'Phone', 'piratenkleider' ),
                  'label'   => __( 'Phone number.', 'piratenkleider' ),
		  'default'	=> '',
                  'parent'  => 'impressum',
		), 
               'kontaktfax' => array(
                  'type'    => 'text',
                  'title'   => __( 'Fax', 'piratenkleider' ),
                  'label'   => __( 'Fax number', 'piratenkleider' ),
		  'default'	=> '',
                  'parent'  => 'impressum',
		), 
       
	       'lizenzen' => array(
                  'type'    => 'textarea',
                  'title'   => __( 'Copyright informations', 'piratenkleider' ),
                  'label'   => __( 'Addition field for copyright informations.', 'piratenkleider' ),
                  'parent'  => 'impressum',		    
		), 
	       
	      'postanschrift'  => array(
                  'type'    => 'section',
                  'title'   => __('Postal address', 'piratenkleider'),                   
		),  
      
               'posttitel' => array(
                  'type'    => 'text',
                  'title'   => __( 'Name', 'piratenkleider' ),
                  'label'   => __( 'First line for postal contact form. E.g. Name of party.', 'piratenkleider' ),
		  'default'	=> '',
                  'parent'  => 'postanschrift',
		),  
                'postperson' => array(
                  'type'    => 'text',
                  'title'   => __( 'Additional contact line', 'piratenkleider' ),
                  'label'   => __( 'Second line for postal contact form. E.g. to address someone special.', 'piratenkleider' ),
		  'default'	=> '',
                  'parent'  => 'postanschrift',
		 ),   
		'poststrasse' => array(
                  'type'    => 'text',
                  'title'   => __( 'Street', 'piratenkleider' ),
                  'label'   => __( 'Street and house number', 'piratenkleider' ),
		  'default'	=> '',
                  'parent'  => 'postanschrift',
		), 
		'poststadt' => array(
                  'type'    => 'text',
                  'title'   => __( 'Postal code and town', 'piratenkleider' ),
                  'label'   => __( 'Sets postal code and town for contact information.', 'piratenkleider' ),
		  'default'	=> '',
                  'parent'  => 'postanschrift',
		), 
                
	       'ladung'  => array(
                  'type'    => 'section',
                  'title'   => __('Postal contact address for matters of law', 'piratenkleider'),                   
		),               
               'ladungtitel' => array(
                  'type'    => 'text',
                  'title'   => __( 'Name', 'piratenkleider' ),
                  'label'   => __( 'First line for postal contact form. E.g. Name of party.', 'piratenkleider' ),
		  'default'	=> '',
                  'parent'  => 'ladung',
		),  
                'ladungperson' => array(
                  'type'    => 'text',
                  'title'   => __( 'Additional name info', 'piratenkleider' ),
                  'label'   => __( 'Second line for postal contact form. E.g. to address someone special.', 'piratenkleider' ),
		  'default'	=> '',
                  'parent'  => 'ladung',
		 ),   
		'ladungstrasse' => array(
                  'type'    => 'text',
                  'title'   => __( 'Street', 'piratenkleider' ),
                  'label'   => __( 'Street and house number.', 'piratenkleider' ),
		  'default'	=> '',
                  'parent'  => 'ladung',
		), 
		'ladungstadt' => array(
                  'type'    => 'text',
                  'title'   => __( 'Postal code and town', 'piratenkleider' ),
                  'label'   => __( 'Sets postal code and town for contact information.', 'piratenkleider' ),
		  'default'	=> '',
                  'parent'  => 'ladung',
		), 

	       
	       
	       'dsb'  => array(
                  'type'    => 'section',
                  'title'   => __('Privacy policy', 'piratenkleider'),                   
		),               
               'dsbperson' => array(
                  'type'    => 'text',
                  'title'   => __( 'Name', 'piratenkleider' ),
                  'label'   => __( 'Sets a name for someone responsible for questions concerning data protection.', 'piratenkleider' ),
		  'default'	=> '',
                  'parent'  => 'dsb',
		),  
                'dsbemail' => array(
                  'type'    => 'email',
                  'title'   => __( 'Email address', 'piratenkleider' ),
                  'label'   => __( 'Sets an email address.', 'piratenkleider' ),
		  'default'	=> '',
                  'parent'  => 'dsb',
		 ),   
		

	  
	),   
      ),
   )
);

