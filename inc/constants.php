<?php
/**
 * Piratenkleider Constants
 *
 **/ 

$defaultoptions = array(
    'js-version'                    => '2.19',
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
    'bannerlink-width'		    => 296,
    'bannerlink-height'		    => 300,
    'plakate-width'                 => 296,
    'plakate-height'                => 416,
    'plakate-title'		    => '',
    'plakate-url'		    => 'http://www.piratenpartei.de',
    'plakate-altadressen'	    => '',
    'plakate-src'		    => array(),
    'default-fontset-file'          => 'font-bebas.css',
    'src-jquery'                    => get_template_directory_uri(). "/js/jquery.min.js",
    'src-flexslider'                => get_template_directory_uri(). "/js/jquery.flexslider-min.js",
    'src-layoutjs'                  => get_template_directory_uri(). "/js/layout.min.js",
    'src-comment-reply'             => get_template_directory_uri(). "/js/comment-reply.js",
    'src-jplayer'		    => get_template_directory_uri(). "/js/jquery.jplayer.min.js",
    'src-transform2d'		    => get_template_directory_uri(). "/js/jquery.transform2d.js",
    'src-grab'			    => get_template_directory_uri(). "/js/jquery.grab.js",
    'src-csstransforms'		    => get_template_directory_uri(). "/js/mod.csstransforms.min.js",
    'src-circleplayer'		    => get_template_directory_uri(). "/js/circle.player.js",
    'src-default-symbolbild'        => get_template_directory_uri() .'/images/default-vorlage.jpg',
    'src-default-symbolbild-404'    => get_template_directory_uri() .'/images/default-404.jpg',
    'src-default-symbolbild-category'   => get_template_directory_uri() .'/images/default-vorlage.jpg',
    'src-default-symbolbild-search' => get_template_directory_uri() .'/images/default-vorlage.jpg',
    'src-default-symbolbild-tag'    => get_template_directory_uri() .'/images/default-vorlage.jpg',
    'src-default-symbolbild-author' => get_template_directory_uri() .'/images/default-vorlage.jpg',
    'src-default-symbolbild-archive' => get_template_directory_uri() .'/images/default-vorlage.jpg',
    'src-default-artikel-symbolbild' => get_template_directory_uri() .'/images/default-vorlage.jpg',  
    'slider-defaultbildsrc'	    => get_template_directory_uri() .'/images/default-vorlage.jpg',  
    
    'src-linkicons-css'		    => get_template_directory_uri() .'/css/basemod_linkicons.css',     
    'src-basemod_mediaqueries_allparts'	=> get_template_directory_uri() .'/css/basemod_mediaqueries_allparts.css', 
    'src-circleplayer_css'	    => get_template_directory_uri() .'/css/circle.player.css', 
    'src-basemod_sidebarbottom'	    => get_template_directory_uri().'/css/basemod_sidebarbottom.css',
    'dir-default-plakate'	    => '/plakate',
    'login_errors'		    => 1,
    'slider-aktiv'                  => 1,    
    'aktiv-defaultseitenbild'       => 0,
    'seitenbild-size'		    => 1,
    'seitenbild-url'		    => '',
    'aktiv-artikelbild'		    => 1,
    'artikelbild-size'		    => 1,    
    'artikelbild-url'		    => '',
    'aktiv-commentsonpages'	    => 0,
    'aktiv-platzhalterbilder-indexseiten'   => 0,
    'indexseitenbild-size'	    => 1,
    'continuelink'		    => 0,
    'aktiv-suche'                   => 1,   
    'slider-defaultwerbeplakate'    => 1,
    'slider-numberarticle'          => 3,
    'slider-animationType'          => 'slide',
    'slider-Direction'              => 'horizontal',
    'slider-slideshowSpeed'         => 8000,
    'slider-animationDuration'      => 600,
    'slider-alternativesrc'	    => '',
    
    'defaultwerbesticker'           => 1,
    'aktiv-autoren'                 => 1,
    'newsletter'                    => 0,
    'alle-socialmediabuttons'               => 1,
    'aktiv-circleplayer'                    => 1,
    'aktiv-linkicons'			    => 1,
    'aktiv-linkmenu'                        => 1,
    'aktiv-startseite-kategorien'           => 1,
    'aktiv-startseite-tags'                 => 1,
    'aktiv-startseite-alteartikel'          => 1,
    'aktiv-startseite-alteartikel-num'      => 5,
    'aktiv-avatar'                          => 1,
    'aktiv-dynamic-sidebar'                 => 0,
    'aktiv-autokeywords'		    => 0,
    'src-default-avatar'                    => get_template_directory_uri(). '/images/avataricon.gif',
    'seitenmenu_mode'			    => 0,
    'zeige_subpagesonly'                    => 1,
    'zeige_sidebarpagemenu'                 => 1,
    'zeige_commentbubble_null'              => 0,
    'zeigerechtsvorschriften'               => 1,
    

    'category-teaser'			    => 1,
    'category-num-article-fullwidth'	    => 10,
    'category-num-article-halfwidth'	    => 0,
    
    'category-teaser-maxlength'		    => 500,            
    'category-teaser-titleup'		    => 1, /* Titles up */ 
    'category-teaser-datebox'		    => 0, 
	/* 0 = Datebox, 
	 * 1 = Thumbnail (or: first picture, first video, fallback picture),
	 * 2 = First picture (or: thumbnail, first video, fallback picture),
	 * 3 = First video (or: thumbnail, first picture, fallback picture),
	 * 4 = First video (or: first picture, thumbnail, fallback picture),
	 * 5 = Nothing */ 
    'category-teaser-floating'		    => 0,
    'category-teaser-dateline'		    => 0, /* 1 = show Date on line up of the text if no datebox */
    'category-teaser-maxlength-halfwidth'   => 200,        
    'category-teaser-titleup-halfwidth'	    => 1, /* Titles up */ 
    'category-teaser-datebox-halfwidth'	    => 1, 
    'category-teaser-floating-halfwidth'    => 1,
    'category-teaser-dateline-halfwidth'    => 0, /* 1 = show Date on line up of the text if no datebox */    

    'num-article-startpage-fullwidth'       => 1,
    'num-article-startpage-halfwidth'       => 4,
    'teaser-thumbnail_width'		    => 120,
    'teaser-thumbnail_height'		    => 120,
    'teaser-thumbnail_crop'		    => 1,
    'src-teaser-thumbnail_default'	    => get_template_directory_uri() .'/images/default-teaserthumb.gif',
    'teaser-thumbnail_fallback'		    => 1,
    
    'teaser-type'                   => 'big',    
    'teaser-title-maxlength'        => 50,
    'teaser-subtitle'               => __( 'Topthema', 'piratenkleider' ),
    'teaser-title-words'            => 7,

    'teaser_maxlength'              => 500,
    'teaser-titleup'		    => 1, /* Titles up */ 
    'teaser-datebox'		    => 0,
    'teaser-floating'		    => 0,
    'teaser-dateline'		    => 0, /* 1 = show Date on line up of the text if no datebox */
    'teaser-maxlength-halfwidth'   => 200,        
    'teaser-titleup-halfwidth'	    => 1, /* Titles up */ 
    'teaser-datebox-halfwidth'	    => 1, 
    'teaser-floating-halfwidth'	    => 1,
    'teaser-dateline-halfwidth'    => 0, /* 1 = show Date on line up of the text if no datebox */      
    
    
    'url-newsletteranmeldung'       => 'https://service.piratenpartei.de/subscribe/newsletter',
    'css-default-header-height'     => 225,
    'css-default-branding-padding-top'  => 40,
    'aktiv-mediaqueries-allparts'   => 0,
    'anonymize-user'                => 0,
    'anonymize-user-commententries' => 0,
    'aktiv-commentreplylink'        => 0,
    'default_comment_notes_before'  => '<p class="comment-notes">'.__( 'Deine E-Mail-Adresse wird nicht ver&ouml;ffentlicht. Erforderliche Felder sind markiert <span class="required">*</span>', 'piratenkleider' ). '</p>',
    'disclaimer_post'               => '',
    'feed_cache_lifetime'           => 14400,
    'use_wp_feed_defaults'          => 1,
    'dir_feed_cache'                => '',
    'teaserlink1-title'             => __( 'Informiere dich', 'piratenkleider' ),
    'teaserlink1-untertitel'        => __( '&uuml;ber unsere Themen &amp; Ziele!', 'piratenkleider' ),            
    'teaserlink1-url'               => 'https://www.piratenpartei.de/politik/themen/', 
    'teaserlink1-symbol'            => 'idee',
    
    'teaserlink2-title'             => __( 'Unterst&uuml;tze uns', 'piratenkleider' ),
    'teaserlink2-untertitel'        => __( 'mit deinem Engagement!', 'piratenkleider' ),            
    'teaserlink2-url'               => 'http://www.piratenpartei.de/unterstutze-uns/', 
    'teaserlink2-symbol'            => 'herz',
    
    'teaserlink3-title'             => __( 'Werde Pirat!', 'piratenkleider' ),
    'teaserlink3-untertitel'        => __( 'jetzt Mitglied werden!', 'piratenkleider' ),            
    'teaserlink3-url'               => 'https://www.piratenpartei.de/mitmachen/mitglied-werden', 
    'teaserlink3-symbol'            => 'steuerrad',
    
    'stickerlink1-content'          => '<span class="gedreht">Werde<br><span class="cicolor">Pirat!</span></span>',
    'stickerlink1-url'              => 'https://www.piratenpartei.de/mitmachen/mitglied-werden/',
    'stickerlink2-content'          => '<span class="gedreht"><span class="cicolor">Spende</span><br><span class="small">und hilf mit </span> </span>',
    'stickerlink2-url'              => 'https://spenden.piratenpartei.de/',
    'stickerlink3-content'          => '',
    'stickerlink3-url'              => '',
    'default_footerlink_key'        => 'International (mit Flaggen)',
    'default_footerlink_show'       => 1,    
    'circleplayer-require-mp3fallback'	=> 1,

    'default_text_title_home_backlink' => __('Zur&uuml;ck zur Startseite','piratenkleider' ), 
    'yt-alternativeembed'           => 1,
        /* YouTube Videos ueber eigenen Embedcode gestalten und an youtbe-nocookie lenken */
    'yt-norel'			 => 1,
	/* Keine weiteren Videos vorschlagen */
    'aktiv-wombat'		    => 0,
    'excerpt_allowtags'		    => '<p>,<br>,<br />,<em>,<i>,<b>,<strong>,<q>',        
    'breadcrumb_delimiter'	    => ' / ',    
    'breadcrumb_homelinktext'	    =>  __( 'Startseite', 'piratenkleider' ),
    'breadcrumb_beforehtml'	    =>  '<span class="current">',
    'breadcrumb_afterhtml'	    =>  '</span>',
    
    'aktiv-linktipps'			    => 0,
    'linktipp-thumbnail_width'		    => 310,
    'linktipp-thumbnail_height'		    => 210,
    'linktipp-thumbnail_crop'		    => 1,
    'src-linktipp-thumbnail_default'	    => get_template_directory_uri() .'/images/default-teaserthumb.gif',
    'linktipps-titlepos'		    => 0, // 0 = ueber Bild/Text, 1 = unter Bild/Text
    'linktipps-linkpos'			    => 1, // 0 = Link auf dem Titel, 1 = Link auf Text/Bild, 2 = URL unter Bild/Text anzeigen&verlinken
    'linktipps-subtitlepos'		    => 0, // 0 = oben, vor Titel, 1 = oben nach titel, 2 = unten
);


/*
 * Liste Social Media 
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
	'content'  => 'http://www.facebook.com/PiratenparteiDeutschland',
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
	'content'  => 'http://www.flickr.com/photos/piratenpartei/',
	'active' => 0,
    ),
  
    'identica' => array(
	'name' => 'Identica',
	'content'  => 'http://identi.ca/piratenpartei',
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
	'content'  => 'http://www.youtube.com/user/piratenpartei',
	'active' => 1,
    ),
    'xing' => array(
	'name' => 'Xing',
	'content'  => 'http://www.xing.com/net/piratenpartei',
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
	'name'	    => __('Liquid Feedback', 'piratenkleider' ),
	'content'  => 'https://lqfb.piratenpartei.de',
	'active'    => 1,
    ),
    'link3'  => array(
	'name'	    => __('Forum', 'piratenkleider' ),
	'content'  => 'https://news.piratenpartei.de',
	'active'    => 1,
    ),
    'link4'  => array(
	'name'	    => __('Vorstand', 'piratenkleider' ),
	'content'  => 'https://vorstand.piratenpartei.de',
	'active'    => 0,
    ),  
    'link5'  => array(
	'name'	    => __('Flaschenpost', 'piratenkleider' ),
	'content'  => 'https://flaschenpost.piratenpartei.de',
	'active'    => 1,
    ),
    'link6'  => array(
	'name'	    => __('Spenden', 'piratenkleider' ),
	'content'  => 'https://spenden.piratenpartei.de',
	'active'    => 1,
    ),
    'link7'  => array(
	'name'	    => __('Shop', 'piratenkleider' ),
	'content'  => 'https://pshop.piratenpartei.de',
	'active'    => 1,
    ),   
     
    
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
        '8' => array(
		'src' =>	get_template_directory_uri().'/images/defaultbild-aufzeichnung.jpg',
		'label' => __( 'Aufzeichnung', 'piratenkleider' )
	),
        '9' => array(
		'src' =>	get_template_directory_uri().'/images/defaultbild-kampagne.jpg',
		'label' => __( 'Kampagne', 'piratenkleider' )
	),
        '10' => array(
		'src' =>	get_template_directory_uri().'/images/defaultbild-kirche.jpg',
		'label' => __( 'Kirche', 'piratenkleider' )
	),
	'11' => array(
		'src' =>	get_template_directory_uri().'/images/defaultbild-wiederstand.jpg',
		'label' => __( 'Wiederstand', 'piratenkleider' )
	), 
        '12'=> array(
		'src' =>	get_template_directory_uri().'/images/defaultbild-licht.jpg',
		'label' => __( 'Licht', 'piratenkleider' )
	),
        '13'=> array(
		'src' =>	get_template_directory_uri().'/images/defaultbild-laptop.jpg',
		'label' => __( 'Laptop', 'piratenkleider' )
	),
        '14' => array(
		'src' =>	get_template_directory_uri().'/images/defaultbild-netzwerk.jpg',
		'label' => __( 'Netzwerk / Server', 'piratenkleider' )
	), 
	'15' => array(
		'src' =>	get_template_directory_uri().'/images/defaultbild-piraten2.jpg',
		'label' => __( 'Piraten 2', 'piratenkleider' )
	), 
	'16' => array(
		'src' =>	get_template_directory_uri().'/images/defaultbild-piraten3.jpg',
		'label' => __( 'Piraten 3', 'piratenkleider' )
	), 
	'17' => array(
		'src' =>	get_template_directory_uri().'/images/defaultbild-fahne.jpg',
		'label' => __( 'Piratenfahne', 'piratenkleider' )
	), 
	'18' => array(
		'src' =>	get_template_directory_uri().'/images/defaultbild-server.jpg',
		'label' => __( 'Server 1', 'piratenkleider' )
	), 
	'19' => array(
		'src' =>	get_template_directory_uri().'/images/defaultbild-server2.jpg',
		'label' => __( 'Server 2', 'piratenkleider' )
	), 
        '20' => array(
		'src' =>	get_template_directory_uri().'/images/default-orange.jpg',
		'label' => __( 'Orange SG Gestaltung BTW13', 'piratenkleider' )
	), 
	'21' => array(
		'src' =>	get_template_directory_uri().'/images/default-blau.jpg',
		'label' => __( 'Blau SG Gestaltung BTW13', 'piratenkleider' )
	), 
	'22'=> array(
		'src' =>	get_template_directory_uri().'/images/default-vorlage.jpg',
		'label' => __( 'Default', 'piratenkleider' )
	),
);




/*
 * Default color modifications for standard css style
 */
$default_colorstyles = array(
    ''  =>  __('Deutschland (Orange)', 'piratenkleider' ),
    'colors_at.css' => __( '&Ouml;sterreich (Violett)', 'piratenkleider' ),
    'colors_lu.css' => __( 'Luxemburg (Violett)', 'piratenkleider' ),
    'colors_hu.css' => __( 'Ungarn (Violett)', 'piratenkleider' ),
    'colors_tk.css' => __( 'T&uuml;rkei (Cyan)', 'piratenkleider' ),
    'colors_us.css' => __( 'USA (Lila)', 'piratenkleider' ),

 );
          
/*
 * Default font modifications for standard css style
 */
$default_fontstyles = array(
    'font-bebas.css'	=> __( 'Bebas Neue', 'piratenkleider' ),
    'font-droid.css'	=> __( 'Droid Sans', 'piratenkleider' ),
    'font-awesome.css'	=> __( 'Awesome', 'piratenkleider' ),
    'font-bebas-awesome.css'	=> __( 'Bebas &amp; Awesome', 'piratenkleider' ),
    'font-standard.css'	=> __( 'Helvetica, Arial, sans-serif', 'piratenkleider' ),

 );

/*
 * Default font modifications for standard css style
 */
$default_alternativestyles = array(
    'style.css'	    => __( 'Default Piratenkleider', 'piratenkleider' ),
    'sample.css'    => __( 'Leeres Beispiel-CSS', 'piratenkleider' ),
    'scapegoat.css' => __( 'Scapegoat-Adaption (ALPHA!!!)', 'piratenkleider' ),
 );

/*
 * default links for pirate party worldwide and in germany
 */

 $default_footerlink_liste = array(
     __( 'Deutschland', 'piratenkleider' )  => array(
        'title' => __( 'Piratenpartei Deutschland', 'piratenkleider' ),
        'url'   => 'http://www.piratenpartei.de',
        'sublist'   => array(
            __('Baden-W&uuml;rttemberg', 'piratenkleider' ) => 'http://www.piratenpartei-bw.de/',
            __('Bayern', 'piratenkleider' ) => 'http://www.piratenpartei-bayern.de/',
            __('Berlin', 'piratenkleider' ) => 'http://berlin.piratenpartei.de/',
            __('Brandenburg', 'piratenkleider' ) => 'http://www.piratenbrandenburg.de/',
            __('Bremen', 'piratenkleider' ) => 'http://bremen.piratenpartei.de/',
            __('Hamburg', 'piratenkleider' ) => 'http://www.piratenpartei-hamburg.de/',
            __('Hessen', 'piratenkleider' ) => 'http://www.piratenpartei-hessen.de/',
            __('Mecklenburg-Vorpommern', 'piratenkleider' ) => 'http://www.piratenpartei-mv.de/',
            __('Niedersachsen', 'piratenkleider' ) => 'http://www.piratenpartei-niedersachsen.de/',
            __('Nordrhein-Westfalen', 'piratenkleider' ) => 'http://www.piratenpartei-nrw.de/',
            __('Rheinland-Pfalz', 'piratenkleider' ) => 'http://www.piraten-rlp.de/',
            __('Saarland', 'piratenkleider' ) => 'http://www.piratenpartei-saarland.de/',
            __('Sachsen', 'piratenkleider' ) => 'http://www.piraten-sachsen.de/',
            __('Sachsen-Anhalt', 'piratenkleider' ) => 'http://www.piraten-lsa.de/',
            __('Schleswig-Holstein', 'piratenkleider' ) => 'http://www.piratenpartei-sh.de/',
            __('Th&uuml;ringen', 'piratenkleider' ) => 'http://www.piraten-thueringen.de/'
        )
     ),
     __('International', 'piratenkleider' ) => array(
         'title' => __('Piratenparteien International', 'piratenkleider' ),
         'url'  => 'http://www.pp-international.net/',
         'sublist' => array(
             __('Argentinien', 'piratenkleider' ) => 'http://www.partidopirata.com.ar/',
              __('Australien', 'piratenkleider' ) => 'http://pirateparty.org.au/',
              __('Belgien', 'piratenkleider' ) => 'http://pirateparty.be/',
              __('Brasilien', 'piratenkleider' ) => 'http://www.partidopirata.org/',
              __('Bulgarien', 'piratenkleider' ) => 'http://piratskapartia.bg/',
              __('Chile', 'piratenkleider' ) => 'http://www.partidopirata.cl/',
              __('D&auml;nemark', 'piratenkleider' ) => 'http://piratpartiet.dk/',
              __('Deutschland', 'piratenkleider' ) => 'http://www.piratenpartei.de/', 
              __('Estland', 'piratenkleider' ) => 'http://piraadipartei.ee/', 
              __('Finnland', 'piratenkleider' ) => 'http://www.piraattipuolue.fi/',
              __('Frankreich', 'piratenkleider' ) => 'http://partipirate.org/',
              __('Griechenland', 'piratenkleider' ) => 'http://pirateparty.gr/',
              __('Guatemala', 'piratenkleider' ) => 'http://partidopirata.org.gt/',
              __('Island', 'piratenkleider') => 'http://pirateparty.is/',     
              __('Israel', 'piratenkleider') => 'http://piratim.org/',       
              __('Italien', 'piratenkleider' ) => 'http://www.partito-pirata.it/',
              __('Kanada', 'piratenkleider' ) => 'http://www.piratepartyofcanada.com/',
              __('Kasachstan', 'piratenkleider' ) => 'http://pirateparty.kz/',
              __('Kolumbien', 'piratenkleider' ) => 'http://pp.interlecto.net/',
              __('Kroatien', 'piratenkleider' ) => 'http://pirati.hr/',
              __('Lettland', 'piratenkleider' ) => 'http://piratupartija.lv/',
              __('Litauen', 'piratenkleider' ) => 'http://piratupartija.lt/',
              __('Luxemburg', 'piratenkleider' ) => 'http://www.piratepartei.lu/',
              __('Marokko', 'piratenkleider' ) => 'http://partipirate.ma/',
              __('Mexiko', 'piratenkleider' ) => 'http://www.partidopiratamexicano.org/',
             __('Neuseeland', 'piratenkleider' ) => 'http://pirateparty.org.nz/',
             __('Niederlande', 'piratenkleider' ) => 'http://www.piratenpartij.nl/',
             __('&Ouml;sterreich', 'piratenkleider' ) => 'http://piratenpartei.at/',
             __('Peru', 'piratenkleider' ) => 'http://wiki.freeculture.org/Pirata',
             __('Polen', 'piratenkleider' ) => 'http://polskapartiapiratow.pl/',
             __('Portugal', 'piratenkleider' ) => 'http://www.partidopiratapt.eu/',
             __('Rum&auml;nien', 'piratenkleider' ) => 'http://www.partidulpiratilor.ro/',
             __('Russland', 'piratenkleider' ) => 'http://pirate-party.ru/',
             __('Schweden', 'piratenkleider' ) => 'http://www.piratpartiet.se/',
             __('Schweiz', 'piratenkleider' ) => 'http://www.piratenpartei.ch/',
             __('Serbien', 'piratenkleider' ) => 'http://www.piratskapartija.com/',
             __('Slowakei', 'piratenkleider' ) => 'http://www.piratskastrana.sk/',
             __('Slowenien', 'piratenkleider' ) => 'http://www.piratskastranka.net/',
             __('Spanien', 'piratenkleider' ) => 'http://www.partidopirata.es/',
             __('S&uuml;dkorea', 'piratenkleider' ) => 'http://pirateparty.kr/',
             __('Tschechien', 'piratenkleider' ) => 'http://www.ceskapiratskastrana.cz/',
             __('Tunesien', 'piratenkleider' ) => 'http://partipirate-tn.org/',
             __('T&uuml;rkei', 'piratenkleider' ) => 'http://www.korsanpartisi.org/',             
             __('Ukraine', 'piratenkleider' ) => 'http://pp-ua.org/',                         
             __('Ungarn', 'piratenkleider' ) => 'http://kalozpart.org/', 
             __('Uruguay', 'piratenkleider' ) => 'http://partidopirata.org.uy/',
             __('USA', 'piratenkleider' ) => 'http://pirate-party.us/',             
             __('Vereinigtes K&ouml;nigreich', 'piratenkleider') => 'http://pirateparty.org.uk/', 
             __('Wei&szlig;russland', 'piratenkleider' ) => 'http://pirates.by/',            
             __('Zypern', 'piratenkleider' ) => 'http://www.piratepartycyprus.com/',

         )
     ), 
      __('International (mit Flaggen)', 'piratenkleider' ) => array(
         'title' => __('Piratenparteien International', 'piratenkleider' ),
         'url'  => 'http://www.pp-international.net/',
         'sublist' => array(
             '<span class="flagicon-ar"></span> '.__('Argentinien', 'piratenkleider') => 'http://www.partidopirata.com.ar/',
             '<span class="flagicon-au"></span> '.__('Australien', 'piratenkleider') => 'http://pirateparty.org.au/',
             '<span class="flagicon-be"></span> '.__('Belgien', 'piratenkleider') => 'http://pirateparty.be/',
             '<span class="flagicon-br"></span> '.__('Brasilien', 'piratenkleider') => 'http://www.partidopirata.org/',
              '<span class="flagicon-bg"></span> '.__('Bulgarien', 'piratenkleider') => 'http://piratskapartia.bg/',
              '<span class="flagicon-cl"></span> '.__('Chile', 'piratenkleider') => 'http://www.partidopirata.cl/',
              '<span class="flagicon-dk"></span> '.__('D&auml;nemark', 'piratenkleider') => 'http://piratpartiet.dk/',
              '<span class="flagicon-de"></span> '.__('Deutschland', 'piratenkleider') => 'http://piratenpartei.de/',   
              '<span class="flagicon-ee"></span> '.__('Estland', 'piratenkleider') => 'http://piraadipartei.ee/',    
              '<span class="flagicon-fi"></span> '.__('Finnland', 'piratenkleider') => 'http://www.piraattipuolue.fi/',
              '<span class="flagicon-fr"></span> '.__('Frankreich', 'piratenkleider') => 'http://partipirate.org/',
              '<span class="flagicon-gr"></span> '.__('Griechenland', 'piratenkleider') => 'http://pirateparty.gr/',
              '<span class="flagicon-gt"></span> '.__('Guatemala', 'piratenkleider') => 'http://partidopirata.org.gt/',
              '<span class="flagicon-is"></span> '.__('Island', 'piratenkleider') => 'http://pirateparty.is/',            
              '<span class="flagicon-il"></span> '.__('Israel', 'piratenkleider') => 'http://piratim.org/',            
              '<span class="flagicon-it"></span> '.__('Italien', 'piratenkleider') => 'http://www.partito-pirata.it/',
              '<span class="flagicon-ca"></span> '.__('Kanada', 'piratenkleider') => 'https://www.pirateparty.ca/',
              '<span class="flagicon-kz"></span> '.__('Kasachstan', 'piratenkleider') => 'http://pirateparty.kz/',
              '<span class="flagicon-co"></span> '.__('Kolumbien', 'piratenkleider') => 'http://pp.interlecto.net/',
              '<span class="flagicon-hr"></span> '.__('Kroatien', 'piratenkleider') => 'http://pirati.hr/',
              '<span class="flagicon-lv"></span> '.__('Lettland', 'piratenkleider') => 'http://piratupartija.lv/',
              '<span class="flagicon-lt"></span> '.__('Litauen', 'piratenkleider') => 'http://piratupartija.lt/',
              '<span class="flagicon-lu"></span> '.__('Luxemburg', 'piratenkleider') => 'http://www.piratepartei.lu/',
              '<span class="flagicon-ma"></span> '.__('Marokko', 'piratenkleider') => 'http://partipirate.ma/',
              '<span class="flagicon-mx"></span> '.__('Mexiko', 'piratenkleider') => 'http://www.partidopiratamexicano.org/',
             '<span class="flagicon-nz"></span>  '.__('Neuseeland', 'piratenkleider') => 'http://pirateparty.org.nz/',
             '<span class="flagicon-nl"></span> '.__('Niederlande', 'piratenkleider') => 'http://www.piratenpartij.nl/',
             '<span class="flagicon-at"></span> '.__('&Ouml;sterreich', 'piratenkleider') => 'http://piratenpartei.at/',
             '<span class="flagicon-pe"></span> '.__('Peru', 'piratenkleider') => 'http://wiki.freeculture.org/Pirata',
             '<span class="flagicon-pl"></span> '.__('Polen', 'piratenkleider') => 'http://polskapartiapiratow.pl/',
             '<span class="flagicon-pt"></span> '.__('Portugal', 'piratenkleider') => 'http://www.partidopiratapt.eu/',
             '<span class="flagicon-ro"></span> '.__('Rum&auml;nien', 'piratenkleider') => 'http://www.partidulpiratilor.ro/',
             '<span class="flagicon-ru"></span> '.__('Russland', 'piratenkleider') => 'http://pirate-party.ru/',
             '<span class="flagicon-se"></span> '.__('Schweden', 'piratenkleider') => 'http://www.piratpartiet.se/',
             '<span class="flagicon-ch"></span> '.__('Schweiz', 'piratenkleider') => 'http://www.piratenpartei.ch/',
             '<span class="flagicon-rs"></span> '.__('Serbien', 'piratenkleider') => 'http://www.piratskapartija.com/',
             '<span class="flagicon-sk"></span> '.__('Slowakei', 'piratenkleider') => 'http://www.piratskastrana.sk/',
             '<span class="flagicon-si"></span> '.__('Slowenien', 'piratenkleider') => 'http://www.piratskastranka.net/',
             '<span class="flagicon-es"></span> '.__('Spanien', 'piratenkleider') => 'http://www.partidopirata.es/',
             '<span class="flagicon-kr"></span> '.__('S&uuml;dkorea', 'piratenkleider') => 'http://pirateparty.kr/',
             '<span class="flagicon-cz"></span> '.__('Tschechien', 'piratenkleider') => 'http://www.ceskapiratskastrana.cz/',
             '<span class="flagicon-tn"></span> '.__('Tunesien', 'piratenkleider') => 'http://partipirate-tn.org/',
             '<span class="flagicon-tr"></span> '.__('T&uuml;rkei', 'piratenkleider') => 'http://www.korsanpartisi.org/',
             '<span class="flagicon-ua"></span> '.__('Ukraine', 'piratenkleider') => 'http://pp-ua.org/',
             '<span class="flagicon-hu"></span> '.__('Ungarn', 'piratenkleider') => 'http://kalozpart.org/',             
             '<span class="flagicon-uy"></span> '.__('Uruguay', 'piratenkleider') => 'http://partidopirata.org.uy/',
             '<span class="flagicon-us"></span> '.__('USA', 'piratenkleider') => 'http://pirate-party.us/',             
             '<span class="flagicon-uk"></span> '.__('Vereinigtes Königreich', 'piratenkleider') => 'http://pirateparty.org.uk/',              
             '<span class="flagicon-by"></span> '.__('Wei&szlig;russland', 'piratenkleider') => 'http://pirates.by/',
             '<span class="flagicon-cy"></span> '.__('Zypern', 'piratenkleider') => 'http://www.piratepartycyprus.com/',


         )
     ), 
     'Baden-Wuerttemberg' => array(
         'title' => 'Piratenpartei Landesverband Baden-W&uuml;rttemberg',
         'url'  => 'http://www.piratenpartei-bw.de/',
         'sublist' => array(
             '<abbr title="Bezirksverband">BV</abbr> Freiburg' => 'http://bzv-fr.piratenpartei-bw.de/',      
             '<abbr title="Bezirksverband">BV</abbr> Stuttgart' => 'http://www.piraten-bzv-stuttgart.de/',
             '<abbr title="Bezirksverband">BV</abbr> T&uuml;bingen' => 'http://bzv.piratenpartei-tuebingen.de/',          
             '<abbr title="Kreisverband">KV</abbr> B&ouml;blingen' => 'http://wiki.piratenpartei.de/BW:Landkreis_B%C3%B6blingen/Kreisverband',
             '<abbr title="Kreisverband">KV</abbr> Calw-Freudenstadt' => 'http://wiki.piratenpartei.de/BW:Kreisverband_Calw-Freudenstadt',
             '<abbr title="Kreisverband">KV</abbr> Heidenheim' => 'http://www.piraten-heidenheim.de',
             '<abbr title="Kreisverband">KV</abbr> Heilbronn' => 'http://www.piratenpartei-heilbronn.de',
             '<abbr title="Kreisverband">KV</abbr> Karlsruhe Land' => 'http://piraten-ka-land.de',
             '<abbr title="Kreisverband">KV</abbr> Karlsruhe Stadt' => 'http://www.piraten-karlsruhe.de',
             '<abbr title="Kreisverband">KV</abbr> Ludwigsburg' => 'http://www.piratenpartei-ludwigsburg.de',
             '<abbr title="Kreisverband">KV</abbr> Mannheim' => 'http://piratenpartei-mannheim.de',
             '<abbr title="Kreisverband">KV</abbr> Rastatt-Baden-Baden' => 'http://piraten-rastatt.de',
             '<abbr title="Kreisverband">KV</abbr> Ravensburg-Bodenseekreis' => 'http://www.piraten-rvfn.de',
             '<abbr title="Kreisverband">KV</abbr> Reutlingen-T&uuml;bingen' => 'http://piratenpartei-reutlingen-tuebingen.de',
             '<abbr title="Kreisverband">KV</abbr> Rhein-Neckar/Heidelberg' => 'http://piraten-rnhd.de',
             '<abbr title="Kreisverband">KV</abbr> Schw&auml;bisch Hall' => 'http://www.kocher-jagst-piraten.de',
             '<abbr title="Kreisverband">KV</abbr> Stuttgart' => 'https://www.piratenpartei-stuttgart.de',
             '<abbr title="Kreisverband">KV</abbr> Ulm/Alb-Donau-Kreis' => 'http://www.piratenpartei-ulm.de',            
         )
     ),  
     'Bayern' => array(
         'title' => 'Piratenpartei Landesverband Bayern',
         'url'  => 'http://www.piratenpartei-bayern.de/',
         'sublist' => array(
             '<abbr title="Bezirksverband">BV</abbr> Mittelfranken' => 'http://piraten-mfr.de/',
             '<abbr title="Bezirksverband">BV</abbr> Niederbayern' => 'http://niederbayern.piratenpartei-bayern.de/',
             '<abbr title="Bezirksverband">BV</abbr> Oberbayern' => 'http://oberbayern.piratenpartei.de/',
             '<abbr title="Bezirksverband">BV</abbr> Oberfranken' => 'http://piraten-oberfranken.de/',
             '<abbr title="Bezirksverband">BV</abbr> Oberpfalz' => 'http://oberpfalz.piratenpartei.de/',
             '<abbr title="Bezirksverband">BV</abbr> Schwaben' => 'http://www.piraten-schwaben.de/',
             '<abbr title="Bezirksverband">BV</abbr> Unterfranken' => 'http://piraten-ufr.de/',
         ) 
     ), 
    'Brandenburg' => array(
        'title' => 'Piratenpartei Landesverband Brandenburg',
        'url'  => 'http://www.piratenbrandenburg.de/',
        'sublist' => array(
            '<abbr title="Stadtverband">SV</abbr> Potsdam' => 'http://potsdam.piratenbrandenburg.de/',
            '<abbr title="Kreisverband">KV</abbr> Brandenburg an der Havel' => 'http://brb.piratenbrandenburg.de/',
            '<abbr title="Kreisverband">KV</abbr> Havelland' => 'http://hvl.piratenbrandenburg.de/',
            '<abbr title="Kreisverband">KV</abbr> M&auml;rkisch-Oderland' => 'http://mol.piratenbrandenburg.de/',
            '<abbr title="Kreisverband">KV</abbr> Oberhavel' => 'http://ohv.piratenbrandenburg.de/',
            '<abbr title="Kreisverband">KV</abbr> Potsdam-Mittelmark' => 'http://pm.piratenbrandenburg.de/',
            '<abbr title="Kreisverband">KV</abbr> Teltow-Fl&auml;ming' => 'http://tf.piratenbrandenburg.de/',
            '<abbr title="Regionalverband">RV</abbr> Barnim-Uckermark' => 'http://barum.piratenbrandenburg.de/',
            '<abbr title="Regionalverband">RV</abbr> Dahme-Oder-Spree' => 'http://dos.piratenbrandenburg.de/',
            '<abbr title="Regionalverband">RV</abbr> Prignitz-Ruppin' => 'http://pr.piratenbrandenburg.de/',
            '<abbr title="Regionalverband">RV</abbr> S&uuml;dbrandenburg' => 'http://sued.piratenbrandenburg.de/',
        )
    ),
   
    
    'Hamburg' => array(
        'title' => 'Piratenpartei Landesverband Hamburg',
        'url'  => 'http://www.piratenpartei-hamburg.de/',
        'sublist' => array(
            '<abbr title="Bezirksverband">BV</abbr> Bergedorf' => 'http://www.piratenpartei-bergedorf.de/',
            '<abbr title="Bezirksverband">BV</abbr> Harburg' => 'http://www.piraten-harburg.de/',
            '<abbr title="Bezirksverband">BV</abbr> Hamburg-Nord' => 'http://wiki.piratenpartei.de/HH:Bezirksverband_Nord',
            'Eimb&uuml;tteler Piraten (informell)' => 'http://wiki.piratenpartei.de/HH:Eimsb%C3%BCtteler_Piraten',
        )
    ),
    'Hessen' => array(
        'title' => 'Piratenpartei Landesverband Hessen',
        'url'  => 'http://www.piratenpartei-hessen.de/',
        'sublist' => array(
            '<abbr title="Kreisverband">KV</abbr> Bergstra&szlig;e' => 'http://www.piraten-bergstrasse.de/',
            '<abbr title="Kreisverband">KV</abbr> Darmstadt/Darmstadt-Dieburg' => 'http://www.piratenpartei-darmstadt.de/',
            '<abbr title="Kreisverband">KV</abbr> Frankfurt am Main' => 'http://www.piratenpartei-frankfurt.de/',
            '<abbr title="Kreisverband">KV</abbr> Gie&szlig;en' => 'http://www.piraten-giessen.de/',
            '<abbr title="Kreisverband">KV</abbr> Gross-Gerau' => 'http://www.piratenpartei-gross-gerau.de/',
            '<abbr title="Kreisverband">KV</abbr> Hochtaunus' => 'http://www.piratenpartei-hochtaunus.de/',
            '<abbr title="Kreisverband">KV</abbr> Kassel' => 'http://www.piratenpartei-kassel.de/',
            '<abbr title="Kreisverband">KV</abbr> Main-Kinzig' => 'http://www.kinzigpiraten.de/',
            '<abbr title="Kreisverband">KV</abbr> Main-Taunus' => 'http://www.piraten-mtk.de/',
            '<abbr title="Kreisverband">KV</abbr> Marburg-Biedenkopf' => 'http://www.piratenpartei-marburg.de/',
            '<abbr title="Kreisverband">KV</abbr> Odenwald' => 'http://www.piratenpartei-odenwald.de/',                                    
            '<abbr title="Kreisverband">KV</abbr> Offenbach-Land' => 'http://www.kreispiraten-of.de/',
            '<abbr title="Kreisverband">KV</abbr> Rheingau-Taunus' => 'http://www.piratenpartei-rtk.de/',
            '<abbr title="Kreisverband">KV</abbr> Schwalm-Eder' => 'http://www.piraten-sek.de/',
            '<abbr title="Kreisverband">KV</abbr> Waldeck-Frankenberg' => 'http://www.piraten-wa-fkb.de/',
            '<abbr title="Kreisverband">KV</abbr> Wetterau' => 'http://www.piratenpartei-wetterau.de/',
            '<abbr title="Kreisverband">KV</abbr> Wiesbaden' => 'http://www.piratenpartei-wiesbaden.de/',
        )
    ),
     'Mecklenburg-Vorpommern' => array(
        'title' => 'Piratenpartei Landesverband Mecklenburg-Vorpommern',
        'url'  => 'http://www.piratenpartei-mv.de/',
        'sublist' => array(
            '<abbr title="Kreisverband">KV</abbr> Vorpommern-Greiswald' => 'http://piraten-hgw.de/',
            'Rostock' => 'http://rostock.piratenpartei-mv.de/',
            'Neubrandenburg' => 'http://piratenpartei-mv.de/stammtisch-neubrandenburg-0',
            'Schwerin' => 'http://www.schweriner-piraten.de/',
            'Usedom' => 'http://www.piraten-usedom.de/',
           
        )
    ),
   'Niedersachsen' => array(
        'title' => 'Piratenpartei Niedersachsen',
        'url' => 'http://www.piraten-nds.de/',
        'sublist' => array(
            '<abbr title="Stadtverband">SV</abbr> Braunschweig' => 'http://www.piratenpartei-braunschweig.de/',
            '<abbr title="Kreisverband">KV</abbr> Celle' => 'http://www.piraten-celle.de/',    
            '<abbr title="Stadtverband">SV</abbr> Delmenhorst' => 'http://www.piratenpartei-delmenhorst.de/',    
            '<abbr title="Kreisverband">KV</abbr> Diepholz' => 'http://www.piratenpartei-diepholz.de/',    
            '<abbr title="Kreisverband">KV</abbr> Goslar' => 'http://www.piraten-goslar.de/',    
            '<abbr title="Kreisverband">KV</abbr> G&ouml;ttingen' => 'http://www.piratenpartei-goettingen.de/',    
            '<abbr title="Kreisverband">KV</abbr> Grafschaft Bentheim' => 'http://www.grafschafter-piraten.de/',    
            '<abbr title="Kreisverband">KV</abbr> Hameln-Pyrmont' => 'http://www.piraten-hameln.de/',    
            '<abbr title="Regionalverband">RV</abbr> Hannover' =>'http://www.piratenhannover.de/', 
            '<abbr title="Kreisverband">KV</abbr> Helmstedt' => 'http://wiki.piratenpartei.de/NDS:Helmstedt',    
            '<abbr title="Kreisverband">KV</abbr> Hildesheim' => 'http://www.piratenpartei-hildesheim.de/',    
            '<abbr title="Kreisverband">KV</abbr> Niedersachsen-Nordost' => 'http://www.heide-piraten.de/',   
            '<abbr title="Kreisverband">KV</abbr> Nienburg/Weser' => 'http://www.piraten-nienburg.de/',   
            '<abbr title="Kreisverband">KV</abbr> Northeim' => 'http://www.piratenpartei-northeim.de/',   
            '<abbr title="Kreisverband">KV</abbr> Osnabr&uuml;ck' => 'http://www.piraten-osnabrueck.de',   
            '<abbr title="Stadtverband">SV</abbr> Oldenburg' => 'http://www.piratenpartei-oldenburg.de/',   
            '<abbr title="Kreisverband">KV</abbr> Oldenburg Land' => 'http://www.piratenpartei-landkreis-oldenburg.de/',   
            '<abbr title="Kreisverband">KV</abbr> Osterholz' => 'http://www.piraten-ohz.de/', 	    
            '<abbr title="Kreisverband">KV</abbr> Osterode' => 'http://www.piratenpartei-osterode.de/',   
            '<abbr title="Kreisverband">KV</abbr> Peine' => 'http://wiki.piratenpartei.de/NDS:Kreisverband_Peine',   
            '<abbr title="Kreisverband">KV</abbr> Stade' => 'http://www.piraten-stade.de/',   
            '<abbr title="Kreisverband">KV</abbr> Schaumburg' => 'http://www.piraten-schaumburg.de/',            
            '<abbr title="Kreisverband">KV</abbr> Wilhelmshaven' => 'http://www.piraten-whv.de/',   
            '<abbr title="Kreisverband">KV</abbr> Wolfenb&uuml;ttel-Salzgitter' => 'http://www.piratenpartei-wolfenbuettel.de/',   
            '<abbr title="Stadtverband">SV</abbr> Wolfsburg' => 'http://wolfsburg.piratenpartei-nds.de/',   
      
        )
    ),    
    'Nordrhein-Westfalen' => array(
      'title' => 'Piratenpartei Landesverband Nordrhein-Westfalen',
      'url' => 'http://www.piratenpartei-nrw.de/',
      'sublist' => array(   
        
         '<abbr title="Kreisverband">KV</abbr> Bochum' =>'http://piratenbochum.de',
         '<abbr title="Kreisverband">KV</abbr> Bonn' =>'http://piratenpartei-bonn.de/',
         '<abbr title="Kreisverband">KV</abbr> Dortmund' =>'http://wiki.piratenpartei.de/NRW:Dortmund',
         '<abbr title="Kreisverband">KV</abbr> D&uuml;sseldorf' =>'http://piratenpartei-duesseldorf.de/',
         '<abbr title="Kreisverband">KV</abbr> G&uuml;terslohe' =>'http://www.piratenpartei-guetersloh.de/',
         '<abbr title="Kreisverband">KV</abbr> Hagen' =>'http://wiki.piratenpartei.de/NRW:Hagen/Kreisverband',
         '<abbr title="Kreisverband">KV</abbr> Kleve' =>'http://wiki.piratenpartei.de/NRW:Kreis_Kleve',
         '<abbr title="Kreisverband">KV</abbr> K&ouml;ln' =>'http://piratenpartei-koeln.de/',
         '<abbr title="Kreisverband">KV</abbr> Krefeld' =>'http://wiki.piratenpartei.de/NRW:Krefeld/Kreisverband',
         '<abbr title="Kreisverband">KV</abbr> Minden-L&uuml;bbecke' =>'http://wiki.piratenpartei.de/NRW:Kreis_Minden-L%C3%BCbbecke/Kreisverband',
         '<abbr title="Kreisverband">KV</abbr> M&uuml;nster' =>'http://www.piratenpartei-muenster.de/',
         '<abbr title="Kreisverband">KV</abbr> Rhein-Erft' =>'http://piratenpartei-rhein-erft.de/',
         '<abbr title="Kreisverband">KV</abbr> Rhein-Sieg-Kreis' =>'http://www.piratenpartei-rhein-sieg.de/',
         '<abbr title="Kreisverband">KV</abbr> Soest' =>'http://www.piratenpartei-soest.de/',
         '<abbr title="Kreisverband">KV</abbr> Wesel' =>'http://wiki.piratenpartei.de/NRW:Kreis_Wesel',
         '<abbr title="Kreisverband">KV</abbr> Bielefeld' =>'http://wiki.piratenpartei.de/NRW:Bielefeld',
         '<abbr title="Kreisverband">KV</abbr> Lippe' =>'http://wiki.piratenpartei.de/NRW:Kreis_Lippe',
         '<abbr title="Kreisverband">KV</abbr> Herford' =>'http://wiki.piratenpartei.de/NRW:Kreis_Herford',

          )
    ),
      'Rheinland-Pfalz' => array(
        'title' => 'Piratenpartei Landesverband Rheinland-Pfalz',
        'url'  => 'http://www.piraten-rlp.de',
        'sublist' => array(
            '<abbr title="Kreisverband">KV</abbr> Altenkirchen' => 'http://wiki.piratenpartei.de/RP:Kreisverband_Altenkirchen',
            '<abbr title="Kreisverband">KV</abbr> Koblenz' => 'http://wiki.piratenpartei.de/RP:Kreisverband_Koblenz',	    
            '<abbr title="Kreisverband">KV</abbr> Bad Kreuznach' => 'http://wiki.piratenpartei.de/Kreisverband_Bad_Kreuznach',
            '<abbr title="Kreisverband">KV</abbr> Mittelhaardt' => 'http://www.piratenpartei-mittelhaardt.de',
            '<abbr title="Kreisverband">KV</abbr> Rhein-Pfalz' => 'http://wiki.piratenpartei.de/RP:Kreisverband_Rhein-Pfalz',
            '<abbr title="Kreisverband">KV</abbr> Rheinhessen' => 'http://wiki.piratenpartei.de/RP:Kreisverband_Rheinhessen',
            '<abbr title="Kreisverband">KV</abbr> S&uuml;dpfalz' => 'http://wiki.piratenpartei.de/RP:Kreisverband_S%C3%BCdpfalz',
	    '<abbr title="Kreisverband">KV</abbr> Trier/Trier-Saarburg' => 'http://piraten-trier.de',
	    '<abbr title="Kreisverband">KV</abbr> Worms' => 'http://www.piraten-worms.de',
        )
    ),
      'Sachsen-Anhalt' => array(
        'title' => 'Piratenpartei Landesverband Sachsen-Anhalt',
        'url'  => 'http://www.piraten-lsa.de',
        'sublist' => array(
            '<abbr title="Regionalverband">RV</abbr> Altmark' => 'http://altmark-piraten.de/',
            '<abbr title="Regionalverband">RV</abbr> Anhalt-Salzland' => 'http://www.piraten-anhalt.de/',
            '<abbr title="Kreisverband">KV</abbr> B&ouml;rde' => 'http://www.piraten-boerde.de/',
            '<abbr title="Kreisverband">KV</abbr> Magdeburg' => 'http://www.piraten-magdeburg.de/',
            'Dessau' => 'http://www.piraten-dessau.de/',
            'Halle (Saale)' => 'http://piraten-halle.de/',
            'Harz' => 'http://piraten-harz.de/',
        )
    ),
      'Thueringen' => array(
        'title' => 'Piratenpartei Landesverband Th&uuml;ringen',
        'url'  => 'http://www.piraten-thueringen.de/',
        'sublist' => array(
            '<abbr title="Kreisverband">KV</abbr> Altenburger Land' => 'http://piraten-altenburger-land.de/',
            '<abbr title="Kreisverband">KV</abbr> Wartburgkreis' => 'http://wartburgpiraten.de/',
            '<abbr title="Kreisverband">KV</abbr> Erfurt' => 'http://www.piraten-erfurt.de/',
            '<abbr title="Kreisverband">KV</abbr> Gera' => 'http://piraten-gera.de/',
            '<abbr title="Kreisverband">KV</abbr> Gotha' => 'http://piraten-gotha.de/',
            '<abbr title="Kreisverband">KV</abbr> Ilm-Kreis' => 'http://piraten-ilmkreis.de/',
            '<abbr title="Kreisverband">KV</abbr> Schmalkalden-Meiningen' => 'http://piraten-schmalkalden-meiningen.de/',
            '<abbr title="Kreisverband">KV</abbr> Jena' => 'http://jena.piraten-thueringen.de/',
        )
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


                  


/*
 * Definition welche Konstanten als Optionen im Backend geaendert werden koennen
 */

 foreach($defaultplakate_textsymbolliste as $i => $value) {
     $defaultplakate_textsymbolliste_entity[$i] = '&#x'.$value.';';
 } 
 $categories=get_categories(array('orderby' => 'name','order' => 'ASC'));
 foreach($categories as $category) {
     if (!is_wp_error( $category )) {
	$currentcatliste[$category->cat_ID] = $category->name.' ('.$category->count.' '.__('Eintr&auml;ge','piratenkleider').')';
     }
 }        


$setoptions = array(
   'piratenkleider_theme_options'   => array(
       
       'kopfteil'   => array(
           'tabtitle'   => __('Kopfteil', 'piratenkleider'),
           'fields' => array(
              'aktiv-linkmenu' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Linkmenu', 'piratenkleider' ),
                  'label'   => __( 'Linkmenu oben rechts, zwischen Social Media Icons und Suchmaske anzeigen', 'piratenkleider' ),
                  'default' => $defaultoptions['aktiv-linkmenu'],
              ),
              'aktiv-suche' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Suchmaske', 'piratenkleider' ),
                  'label'   => __( 'Eingabemaske f&uuml;r Suche oben rechts anzeigen', 'piratenkleider' ),
                  'default' => $defaultoptions['aktiv-suche'],
              ),
              'defaultwerbesticker' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Sticker', 'piratenkleider' ),
                  'label'   => __( 'Sticker anzeigen (Hinweistexte oder Grafiken im Kopfteil)', 'piratenkleider' ),
                  'default' => $defaultoptions['defaultwerbesticker'],
              ),
              'stickerlink1'  => array(
                  'type'    => 'section',
                  'title'   => __( 'Sticker 1', 'piratenkleider' ),
              ),
              'stickerlink1-content' => array(
                  'type'    => 'html',
                  'title'   => __( 'Sticker 1 (Text)', 'piratenkleider' ),
                  'label'   => __( 'Inhaltstext des Stickers (ggf. mit Inline-HTML)', 'piratenkleider' ),
                  'default' => $defaultoptions['stickerlink1-content'],
                  'parent'  => 'stickerlink1',
              ),
              'stickerlink1-url' => array(
                  'type'    => 'url',
                  'title'   => __( 'Sticker 1 (Adresse)', 'piratenkleider' ),
                  'label'   => __( 'URL zu der verlinkt werden soll', 'piratenkleider' ),
                  'default' => $defaultoptions['stickerlink1-url'],
                  'parent'  => 'stickerlink1',
              ),
              'stickerlink2'  => array(
                  'type'    => 'section',
                  'title'   => __( 'Sticker 2', 'piratenkleider' ),
              ),
               'stickerlink2-content' => array(
                  'type'    => 'html',
                  'title'   => __( 'Sticker 2 (Text)', 'piratenkleider' ),
                  'label'   => __( 'Inhaltstext des Stickers (ggf. mit Inline-HTML)', 'piratenkleider' ),
                  'default' => $defaultoptions['stickerlink2-content'],
                   'parent'  => 'stickerlink2',
              ),
              'stickerlink2-url' => array(
                  'type'    => 'url',
                  'title'   => __( 'Sticker 2 (Adresse)', 'piratenkleider' ),
                  'label'   => __( 'URL zu der verlinkt werden soll', 'piratenkleider' ),
                  'default' => $defaultoptions['stickerlink2-url'],
                  'parent'  => 'stickerlink2',
              ),
              'stickerlink3'  => array(
                  'type'    => 'section',
                  'title'   => __( 'Sticker 3', 'piratenkleider' ),
              ),
               'stickerlink3-content' => array(
                  'type'    => 'html',
                  'title'   => __( 'Sticker 3 (Text)', 'piratenkleider' ),
                  'label'   => __( 'Inhaltstext des Stickers (ggf. mit Inline-HTML)', 'piratenkleider' ),
                  'default' => $defaultoptions['stickerlink3-content'],
                   'parent'  => 'stickerlink3',
              ),
              'stickerlink3-url' => array(
                  'type'    => 'url',
                  'title'   => __( 'Sticker 3 (Adresse)', 'piratenkleider' ),
                  'label'   => __( 'URL zu der verlinkt werden soll', 'piratenkleider' ),
                  'default' => $defaultoptions['stickerlink3-url'],
                  'parent'  => 'stickerlink3',
              ),
	      'toplinks'  => array(
                  'type'    => 'section',
                  'title'   => __( 'Toplinks', 'piratenkleider' ),
              ),
	      'toplinkliste'  => array(
		  'type'    => 'urlchecklist',
		  'title'   => __( 'Portale', 'piratenkleider' ),
		  'liste'   => $default_toplink_liste,
		  'parent'  => 'toplinks',
		  'label'   => __( 'Definition einer Linkliste zu Standardportalen. Diese Liste kann Alternativ durch die Definiton eines Men&uuml;s und Zuordnung dieses zu dem Men&uuml;bereich "Linkmenu" verwaltet werden. Ist kein eigenes Men&uuml; definiert, werden diese Werte als Alternative verwendet.', 'piratenkleider' ),
	      ), 
               
           )
       ),
       'fussteil'   => array(
           'tabtitle'   => __('Fu&szlig;teil', 'piratenkleider'),
           'fields' => array(
              'default_footerlink_show' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Parteilinks', 'piratenkleider' ),
                  'label'   => __( 'Im Fu&szlig;teil eine Liste von Links zu Seiten der Piratenpartei anzeigen', 'piratenkleider' ),
                  'default' => $defaultoptions['default_footerlink_show'],
              ),
              'default_footerlink_key' => array(
                  'type'    => 'select',
                  'title'   => __( 'Bereich', 'piratenkleider' ),
                  'label'   => __( 'Bereich oder Gliederung ausw&auml;hlen.', 'piratenkleider' ),
                  'default' => $defaultoptions['default_footerlink_key'],
                  'liste'   => $default_footerlink_liste,
              ),
          )
       ),
      'startseite'   => array(
           'tabtitle'   => __('Startseite', 'piratenkleider'),
           'fields' => array(
             
               
              'aktiv-startseite-kategorien' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Kategorien', 'piratenkleider' ),
                  'label'   => __( 'Liste der Kategorien anzeigen', 'piratenkleider' ),
                  'default' => $defaultoptions['aktiv-startseite-kategorien'],
              ),
              'aktiv-startseite-tags' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Schlagworte', 'piratenkleider' ),
                  'label'   => __( 'Liste der Schlagworte (Tagcloud) anzeigen', 'piratenkleider' ),
                  'default' => $defaultoptions['aktiv-startseite-tags'],
              ),
              'aktiv-startseite-alteartikel' => array(
                  'type'    => 'bool',
                  'title'   => __( '&auml;ltere Artikel', 'piratenkleider' ),
                  'label'   => __( 'Liste mit &auml;lteren Artikeln anzeigen', 'piratenkleider' ),
                  'default' => $defaultoptions['aktiv-startseite-alteartikel'],
              ),
              'aktiv-startseite-alteartikel-num' => array(
                  'type'    => 'number',
                  'title'   => __( 'Zahl &auml;ltere Artikel', 'piratenkleider' ),
                  'label'   => __( 'Anzahl der zu verlinkenden &auml;lteren Artikel.', 'piratenkleider' ),
                  'default' => $defaultoptions['aktiv-startseite-alteartikel-num'],
              ), 
             
             'teaser-subtitle' => array(
                  'type'    => 'text',
                  'title'   => __( 'Bezeichnender Titel f&uuml;r Teaser', 'piratenkleider' ),
                  'label'   => __( 'Dieser Text wird oberhalb der Titel angezeigt.', 'piratenkleider' ),
                  'default' => $defaultoptions['teaser-subtitle'],
              ),  
             'teaser-title-maxlength' => array(
                  'type'    => 'number',
                  'title'   => __( 'Textl&auml;nge', 'piratenkleider' ),
                  'label'   => __( 'Maximale Textl&auml;nge des Titels im Teaser.', 'piratenkleider' ),
                  'default' => $defaultoptions['teaser-title-maxlength'],
              ),   
             'teaser-title-words' => array(
                  'type'    => 'number',
                  'title'   => __( 'Wortzahl', 'piratenkleider' ),
                  'label'   => __( 'Zahl der Worte im Teaser; Die maximale Textl&auml;nge begrenzt diesen Wert jedoch.', 'piratenkleider' ),
                  'default' => $defaultoptions['teaser-title-words'],
              ),
               
            'auszuege'  => array(
                  'type'    => 'section',
                  'title'   => __( 'Gestaltung Textausz&uuml;ge', 'piratenkleider' ),                      
              ),      
                'num-article-startpage-fullwidth' => array(
                  'type'    => 'number',
                  'title'   => __( 'Beitr&auml;ge &uuml;ber ganze Breite', 'piratenkleider' ),
                  'label'   => __( 'Zahl der Beitr&auml;ge, die &uuml;ber die gesamte Inhaltsbreite gehen.', 'piratenkleider' ),
                  'default' => $defaultoptions['num-article-startpage-fullwidth'],
                    'parent'  => 'auszuege'
              ),
              'num-article-startpage-halfwidth' => array(
                  'type'    => 'select',
                  'title'   => __( 'Beitr&auml;ge &uuml;ber halbe Breite', 'piratenkleider' ),
                  'label'   => __( 'Zahl der Beitr&auml;ge, die in Spalten mit je zwei Beitr&auml;gen nebeneinander, angezeigt werden.', 'piratenkleider' ),
                  'liste'   => array(0 => 0, 2 => 2, 4 => 4, 6 => 6, 8 => 8),
                  'default' => $defaultoptions['num-article-startpage-halfwidth'],
                  'parent'  => 'auszuege'
              ),               
               
               
             'teaser_maxlength' => array(
                  'type'    => 'number',
                  'title'   => __( 'L&auml;nge des Teasertextes (Artikelauszug)', 'piratenkleider' ),
                  'label'   => __( 'Maximale Textl&auml;nge f&uuml;r Artikelausz&uuml;ge auf der Startseite.', 'piratenkleider' ),
                  'default' => $defaultoptions['teaser_maxlength'],
                 'parent'  => 'auszuege'
              ),                        
              'teaser-titleup' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Titel oben', 'piratenkleider' ),
                  'label'   => __( 'Titel &uuml;ber Logo/Datumsbox und Text', 'piratenkleider' ),
                  'default' => $defaultoptions['teaser-titleup'],
                  'parent'  => 'auszuege'
              ), 
              'teaser-datebox' => array(
                  'type'    => 'select',
                  'title'   => __( 'Symbolbild/Datumsbox', 'piratenkleider' ),
                  'label'   => __( 'Links des Textauszuges das Datum, das Artikelbild, ein Bild des Artikels oder ein verlinktes Video anzeigen; Abhängig vom Inhalt des Artikels.', 'piratenkleider' ),
                  'default' => $defaultoptions['teaser-datebox'],
		  'liste'   =>  array(
				0 => __("Datumsbox anzeigen","piratenkleider"), 
				1 => __("Reihenfolge: Artikelbild, erstes Bild, erstes Video oder Ersatzbild zeigen","piratenkleider"), 	    
				2 => __("Reihenfolge: Erstes Bild, Artikelbild, erstes Video oder Ersatzbild zeigen","piratenkleider"), 
				3 => __("Reihenfolge: Erstes Video, Artikelbild, erstes Bild oder Ersatzbild zeigen","piratenkleider"), 
				4 => __("Reihenfolge: Erstes Video, erstes Bild, Artikelbild oder Ersatzbild zeigen","piratenkleider"), 
				5 => __("Nichts anzeigen","piratenkleider")), 
                  'parent'  => 'auszuege'
              ), 	              
	      'teaser-floating' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Flie&szlig;ender Text', 'piratenkleider' ),
                  'label'   => __( 'Text umflie&szlig;t das Bild', 'piratenkleider' ),
                  'default' => $defaultoptions['teaser-floating'],
                  'parent'  => 'auszuege'
              ),  
               'teaser-dateline' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Datumszeile', 'piratenkleider' ),
                  'label'   => __( 'Datumszeile vor dem Text, falls keine Datumsbox angezeigt wird', 'piratenkleider' ),
                  'default' => $defaultoptions['teaser-dateline'],
                  'parent'  => 'auszuege'
              ), 
               
                'teaser-maxlength-halfwidth' => array(
                  'type'    => 'number',
                  'title'   => __( 'L&auml;nge des Teasertextes', 'piratenkleider' ),
                  'label'   => __( 'Maximale Textl&auml;nge f&uuml;r Artikelausz&uuml;ge (Bei Beitr&auml;gen &uuml;ber halbe Breite).', 'piratenkleider' ),
                  'default' => $defaultoptions['teaser-maxlength-halfwidth'],
		'parent'  => 'auszuege'
              ),                 
             'teaser-titleup-halfwidth' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Titel oben', 'piratenkleider' ),
                  'label'   => __( 'Titel &uuml;ber Logo/Datumsbox und Text (Bei Beitr&auml;gen &uuml;ber halbe Breite).', 'piratenkleider' ),
                  'default' => $defaultoptions['teaser-titleup-halfwidth'],
                  'parent'  => 'auszuege'
              ), 
              'teaser-datebox-halfwidth' => array(
                  'type'    => 'select',
                  'title'   => __( 'Symbolbild/Datumsbox', 'piratenkleider' ),
                  'label'   => __( 'Links des Textauszuges das Datum, das Artikelbild, ein Bild des Artikels oder ein verlinktes Video anzeigen; Abhängig vom Inhalt des Artikels. (Bei Beitr&auml;gen &uuml;ber halbe Breite)', 'piratenkleider' ),
                  'default' => $defaultoptions['teaser-datebox-halfwidth'],
		  'liste'   =>  array(
				0 => __("Datumsbox anzeigen","piratenkleider"), 
				1 => __("Reihenfolge: Artikelbild, erstes Bild, erstes Video oder Ersatzbild zeigen","piratenkleider"), 	    
				2 => __("Reihenfolge: Erstes Bild, Artikelbild, erstes Video oder Ersatzbild zeigen","piratenkleider"), 
				3 => __("Reihenfolge: Erstes Video, Artikelbild, erstes Bild oder Ersatzbild zeigen","piratenkleider"), 
				4 => __("Reihenfolge: Erstes Video, erstes Bild, Artikelbild oder Ersatzbild zeigen","piratenkleider"), 
				5 => __("Nichts anzeigen","piratenkleider")), 

                  'parent'  => 'auszuege'		  
              ), 
	      'teaser-floating-halfwidth' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Flie&szlig;ender Text', 'piratenkleider' ),
                  'label'   => __( 'Text umflie&szlig;t das Bild (Bei Beitr&auml;gen &uuml;ber halbe Breite)', 'piratenkleider' ),
                  'default' => $defaultoptions['teaser-floating-halfwidth'],
                  'parent'  => 'auszuege'
              ), 	       
	       
               'teaser-dateline-halfwidth' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Datumszeile', 'piratenkleider' ),
                  'label'   => __( 'Datumszeile vor dem Text, falls keine Datumsbox angezeigt wird (Bei Beitr&auml;gen &uuml;ber halbe Breite).', 'piratenkleider' ),
                  'default' => $defaultoptions['teaser-dateline-halfwidth'],
                  'parent'  => 'auszuege'
              ), 
               
                           
               
              'sliderpars'  => array(
                  'type'    => 'section',
                  'title'   => __( 'Slider', 'piratenkleider' ),                      
              ),
              'slider-aktiv' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Aktivieren', 'piratenkleider' ),
                  'label'   => __( 'Slider im Teaserbereich auf der Startseite aktivieren. <br>Die Auswahl der Plakatbilder kann unter den Defaultbildern angepasst werden.', 'piratenkleider' ),
                  'default' => $defaultoptions['slider-aktiv'],
                  'parent'  => 'sliderpars'
              ),
               
              'slider-catid' => array(
                  'type'    => 'select',
                  'title'   => __( 'Kategorie', 'piratenkleider' ),
                  'label'   => __( 'Aus welcher Artikelkategorie sollen die Slider genommen werden.', 'piratenkleider' ),
                  'liste'   => $currentcatliste,
                   'parent'  => 'sliderpars'
              ), 
              'slider-numberarticle' => array(
                  'type'    => 'select',
                  'title'   => __( 'Maximale Anzahl der Artikel', 'piratenkleider' ),
                  'label'   => __( 'Wieviele Slides sollen maximal gezeigt werden.', 'piratenkleider' ),
                  'liste'   => array(2 => 2,3 => 3, 4 => 4, 5 => 5, 6 => 6),
                  'default' => $defaultoptions['slider-numberarticle'],
                   'parent'  => 'sliderpars'
              ), 
              'slider-animationType' => array(
                  'type'    => 'select',
                  'title'   => __( 'Animationstyp', 'piratenkleider' ),
                  'label'   => __( 'Wie soll der Slidewechsel optisch aussehen.', 'piratenkleider' ),
                  'liste'   => array("fade" => "fade", "slide" => "slide"),
                  'default' => $defaultoptions['slider-animationType'],
                   'parent'  => 'sliderpars'
              ), 
                 
              'slider-Direction' => array(
                  'type'    => 'select',
                  'title'   => __( 'Richtung', 'piratenkleider' ),
                  'label'   => __( 'Von wo sollen Bilder erscheinen.', 'piratenkleider' ),
                  'liste'   => array("horizontal" => "horizontal" , "vertical" => "vertical"),
                  'default' => $defaultoptions['slider-Direction'],
                   'parent'  => 'sliderpars'
              ), 
              'slider-slideshowSpeed' => array(
                  'type'    => 'number',
                  'title'   => __( 'Dauer Bildwechsel', 'piratenkleider' ),
                  'label'   => __( 'Geschwindigkeit des Bildwechsels in Milisekunden.', 'piratenkleider' ),
                  'default' => $defaultoptions['slider-slideshowSpeed'],
                   'parent'  => 'sliderpars'
              ), 
              'slider-animationDuration' => array(
                  'type'    => 'number',
                  'title'   => __( 'Animationsdauer', 'piratenkleider' ),
                  'label'   => __( 'Geschwindigkeit der Animation/Fading beim Bild&uuml;bergang in Milisekunden.', 'piratenkleider' ),
                  'default' => $defaultoptions['slider-animationDuration'],
                   'parent'  => 'sliderpars'
              ),  
             'teaser-type' => array(
                  'type'    => 'select',
                  'title'   => __( 'Teaser-Darstellung', 'piratenkleider' ),
                  'label'   => __( 'Teaser mit gro&szlig;em Bild &uuml;ber gesamte Breite oder kleinem Thumbnail.', 'piratenkleider' ),
                  'liste'   => array("big" => "big", "small" => "small"),
                  'default' => $defaultoptions['teaser-type'],
                   'parent'  => 'sliderpars'
              ), 
              'slider-defaultbildsrc' => array(
                  'type'    => 'bildlist',
                  'title'   => __( 'Defaultbild', 'piratenkleider' ),
                  'label'   => __( 'Ersatz-Sliderbild für Seiten ohne eigenes Artikelbild.', 'piratenkleider' ),
                  'default' => $defaultoptions['slider-defaultbildsrc'],		                     
		  'liste'   => $defaultbilder_liste,
		  'parent'  => 'darstellungartikel'
              ),
              'slider-alternativesrc' => array(
                  'type'    => 'imgurl',
                  'title'   => __( 'Externes Ersatzbild', 'piratenkleider' ),
                  'label'   => __( 'URL f&uuml;r ein Ersatz-Sliderbild.', 'piratenkleider' ),
                  'default' => $defaultoptions['slider-alternativesrc'],
                  'parent'  => 'darstellungindexseiten',
              ),   

               
               
          )
       ), 
       'contentbereich'   => array(
           'tabtitle'   => __('Seiten &amp; Artikel', 'piratenkleider'),
           'fields' => array(
	          
              'spezial'  => array(
                  'type'    => 'section',
                  'title'   => __( 'Spezielle Eigenschaften', 'piratenkleider' ),
              ),
	       
              'aktiv-circleplayer'   => array(
                  'type'    => 'bool',
                  'title'   => __( 'Circle Player', 'piratenkleider' ),
                  'label'   => __( 'Circle Player (HTML5 Player) f&uuml;r MP3/OGG-Dateien in einzelnen Beitr&auml;gen aktivieren.', 'piratenkleider' ),
                  'default' => $defaultoptions['aktiv-circleplayer'],
		  'parent'  => 'spezial'
              ),   
               
              
              'post_disclaimer' => array(
                  'type'    => 'textarea',
                  'title'   => __( 'Disclaimer f&uuml;r (Gast-)Artikel', 'piratenkleider' ),
                  'label'   => __( 'Definiere ein Text als Disclaimer der bei Artikeln gezeigt werden kann. Disclaimer wird mit Custom Field show-post-disclaimer (= 0, 1,2,3) aktiviert.', 'piratenkleider' ),
                  'default' => $defaultoptions['disclaimer_post'],
		  'parent'  => 'spezial'
              ),    
	       
	       
	      'category'  => array(
                  'type'    => 'section',
                  'title'   => __( 'Indexseiten (Kategorien, Tags und andere)', 'piratenkleider' ),
              ),
	       
	      'category-teaser'   => array(
                  'type'    => 'bool',
                  'title'   => __( 'Slider aktivieren', 'piratenkleider' ),
                  'label'   => __( 'Kategorieseiten mit Slider wie auf Startseite darstellen', 'piratenkleider' ),
                  'default' => $defaultoptions['category-teaser'],
		  'parent'  => 'category'
              ),   
	       
	       
	    'category-num-article-fullwidth' => array(
                  'type'    => 'number',
                  'title'   => __( 'Beitr&auml;ge &uuml;ber ganze Breite', 'piratenkleider' ),
                  'label'   => __( 'Zahl der Beitr&auml;ge, die &uuml;ber die gesamte Inhaltsbreite gehen.', 'piratenkleider' ),
                  'default' => $defaultoptions['category-num-article-fullwidth'],
		'parent'  => 'category'
              ),
              'category-num-article-halfwidth' => array(
                  'type'    => 'select',
                  'title'   => __( 'Beitr&auml;ge &uuml;ber halbe Breite', 'piratenkleider' ),
                  'label'   => __( 'Zahl der Beitr&auml;ge, die in Spalten mit je zwei Beitr&auml;gen nebeneinander, angezeigt werden.', 'piratenkleider' ),
                  'liste'   => array(0 => 0, 2 => 2, 4 => 4, 6 => 6, 8 => 8, 10=>10, 12=>12, 14=>14, 16=>16),
                  'default' => $defaultoptions['category-num-article-halfwidth'],
		  'parent'  => 'category'
              ),    
	    'category-teaser-maxlength' => array(
                  'type'    => 'number',
                  'title'   => __( 'L&auml;nge des Teasertextes (Artikelauszug)', 'piratenkleider' ),
                  'label'   => __( 'Maximale Textl&auml;nge f&uuml;r Artikelausz&uuml;ge', 'piratenkleider' ),
                  'default' => $defaultoptions['category-teaser-maxlength'],
		'parent'  => 'category'
              ),                 
             'category-teaser-titleup' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Titel oben', 'piratenkleider' ),
                  'label'   => __( 'Titel &uuml;ber Logo/Datumsbox und Text', 'piratenkleider' ),
                  'default' => $defaultoptions['category-teaser-titleup'],
                  'parent'  => 'category'
              ), 
              'category-teaser-datebox' => array(
                  'type'    => 'select',
                  'title'   => __( 'Symbolbild/Datumsbox', 'piratenkleider' ),
                  'label'   => __( 'Links des Textauszuges das Datum, das Artikelbild, ein Bild des Artikels oder ein verlinktes Video anzeigen; Abhängig vom Inhalt des Artikels.', 'piratenkleider' ),
                  'default' => $defaultoptions['category-teaser-datebox'],
		  'liste'   =>  array(
				0 => __("Datumsbox anzeigen","piratenkleider"), 
				1 => __("Reihenfolge: Artikelbild, erstes Bild, erstes Video oder Ersatzbild zeigen","piratenkleider"), 	    
				2 => __("Reihenfolge: Erstes Bild, Artikelbild, erstes Video oder Ersatzbild zeigen","piratenkleider"), 
				3 => __("Reihenfolge: Erstes Video, Artikelbild, erstes Bild oder Ersatzbild zeigen","piratenkleider"), 
				4 => __("Reihenfolge: Erstes Video, erstes Bild, Artikelbild oder Ersatzbild zeigen","piratenkleider"), 
				5 => __("Nichts anzeigen","piratenkleider")), 

                  'parent'  => 'category'
              ), 
	      'category-teaser-floating' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Flie&szlig;ender Text', 'piratenkleider' ),
                  'label'   => __( 'Text umflie&szlig;t das Bild', 'piratenkleider' ),
                  'default' => $defaultoptions['category-teaser-floating'],
                  'parent'  => 'category'
              ), 
	       
               'category-teaser-dateline' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Datumszeile', 'piratenkleider' ),
                  'label'   => __( 'Datumszeile vor dem Text, falls keine Datumsbox angezeigt wird', 'piratenkleider' ),
                  'default' => $defaultoptions['category-teaser-dateline'],
                  'parent'  => 'category'
              ), 
               
                'category-teaser-maxlength-halfwidth' => array(
                  'type'    => 'number',
                  'title'   => __( 'L&auml;nge des Teasertextes', 'piratenkleider' ),
                  'label'   => __( 'Maximale Textl&auml;nge f&uuml;r Artikelausz&uuml;ge (Bei Beitr&auml;gen &uuml;ber halbe Breite).', 'piratenkleider' ),
                  'default' => $defaultoptions['category-teaser-maxlength-halfwidth'],
		'parent'  => 'category'
              ),                 
             'category-teaser-titleup-halfwidth' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Titel oben', 'piratenkleider' ),
                  'label'   => __( 'Titel &uuml;ber Logo/Datumsbox und Text (Bei Beitr&auml;gen &uuml;ber halbe Breite).', 'piratenkleider' ),
                  'default' => $defaultoptions['category-teaser-titleup-halfwidth'],
                  'parent'  => 'category'
              ), 
              'category-teaser-datebox-halfwidth' => array(
                  'type'    => 'select',
                  'title'   => __( 'Symbolbild/Datumsbox', 'piratenkleider' ),
                  'label'   => __( 'Links des Textauszuges das Datum, das Artikelbild, ein Bild des Artikels oder ein verlinktes Video anzeigen; Abhängig vom Inhalt des Artikels. (Bei Beitr&auml;gen &uuml;ber halbe Breite)', 'piratenkleider' ),
                  'default' => $defaultoptions['category-teaser-datebox-halfwidth'],
		  'liste'   =>  array(
				0 => __("Datumsbox anzeigen","piratenkleider"), 
				1 => __("Reihenfolge: Artikelbild, erstes Bild, erstes Video oder Ersatzbild zeigen","piratenkleider"), 	    
				2 => __("Reihenfolge: Erstes Bild, Artikelbild, erstes Video oder Ersatzbild zeigen","piratenkleider"), 
				3 => __("Reihenfolge: Erstes Video, Artikelbild, erstes Bild oder Ersatzbild zeigen","piratenkleider"), 
				4 => __("Reihenfolge: Erstes Video, erstes Bild, Artikelbild oder Ersatzbild zeigen","piratenkleider"), 
				5 => __("Nichts anzeigen","piratenkleider")), 

                  'parent'  => 'category'
              ), 
	       'category-teaser-floating-halfwidth' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Flie&szlig;ender Text', 'piratenkleider' ),
                  'label'   => __( 'Text umflie&szlig;t das Bild (Bei Beitr&auml;gen &uuml;ber halbe Breite)', 'piratenkleider' ),
                  'default' => $defaultoptions['category-teaser-floating-halfwidth'],
                  'parent'  => 'category'
              ), 
               'category-teaser-dateline-halfwidth' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Datumszeile', 'piratenkleider' ),
                  'label'   => __( 'Datumszeile vor dem Text, falls keine Datumsbox angezeigt wird (Bei Beitr&auml;gen &uuml;ber halbe Breite).', 'piratenkleider' ),
                  'default' => $defaultoptions['category-teaser-dateline-halfwidth'],
                  'parent'  => 'category'
              ), 
	      'continuelink'   => array(
                  'type'    => 'select',
                  'title'   => __( 'Weiterlesen-Link', 'piratenkleider' ),
                  'label'   => __( 'Anzeige des Links zum Weiterlesen immer anzeigen oder nur dann, wenn der Textauszug auf einer Indexseite gek&uuml;rzt werden muss.', 'piratenkleider' ),
                  'default' => $defaultoptions['category-teaser-datebox-halfwidth'],
		  'liste'   =>  array(
				0 => __("Nur wenn Artikel l&auml;nger ist als Textauszug","piratenkleider"), 
				1 => __("Immer anzeigen","piratenkleider"), 	    
			        2 => __("Nie anzeigen","piratenkleider"), 	    
				), 
                  'parent'  => 'category'
		),  
               

               
               
               
	       
	       
	      'darstellungseiten'  => array(
                  'type'    => 'section',
                  'title'   => __( 'Seitenbilder', 'piratenkleider' ),
              ),
	       
	      'aktiv-defaultseitenbild' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Defaultbilder f&uuml;r Seiten', 'piratenkleider' ),
                  'label'   => __( 'Bilder f&uuml;r Seiten erzwingen, die von sich aus kein Artikelbild definiert haben. Wenn kein Artikelbild vorhanden ist, wird ein Defaultbild gezeigt.', 'piratenkleider' ),
                  'default' => $defaultoptions['aktiv-defaultseitenbild'],
		  'parent'  => 'darstellungseiten'
              ),	      
	      'seitenbild-size' => array(
                  'type'    => 'select',
                  'title'   => __( 'Gr&ouml;&szlig;e', 'piratenkleider' ),
                  'label'   => __( 'Das Seitenbild kann in einem schmalen (150px) oder gro&szlig;en (240px) Ausschnitt dargestellt werden. ', 'piratenkleider' ),
                  'default' => $defaultoptions['seitenbild-size'],		                     
		  'liste'   => array(0 => "klein (150px)", 1 => "gro&szlig; (240px)"),
		  'parent'  => 'darstellungseiten'
              ),	
	      'seiten-defaultbildsrc' => array(
                  'type'    => 'bildlist',
                  'title'   => __( 'Defaultbild', 'piratenkleider' ),
                  'label'   => __( 'Ersatzbild für Seiten ohne eigenes Artikelbild.', 'piratenkleider' ),
                  'default' => $defaultoptions['src-default-symbolbild'],		                     
		  'liste'   => $defaultbilder_liste,
		  'parent'  => 'darstellungseiten'
              ),	
	      'seitenbild-url' => array(
                  'type'    => 'url',
                  'title'   => __( 'URL', 'piratenkleider' ),
                  'label'   => __( 'Webadresse f&uuml;r ein alternatives Seitenbild.', 'piratenkleider' ),
                  'default' => $defaultoptions['seitenbild-url'],
                  'parent'  => 'darstellungseiten',
              ),
	      'darstellungartikel'  => array(
                  'type'    => 'section',
                  'title'   => __( 'Artikelbilder', 'piratenkleider' ),
              ),
	       
	      'aktiv-artikelbild' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Defaultbilder f&uuml;r Artikel', 'piratenkleider' ),
                  'label'   => __( 'Bilder f&uuml;r Artikel erzwingen, die von sich aus kein Artikelbild definiert haben. Wenn kein Artikelbild vorhanden ist, wird ein Defaultbild gezeigt.', 'piratenkleider' ),		  
                  'default' => $defaultoptions['aktiv-artikelbild'],
		  'parent'  => 'darstellungartikel'
              ),
	      'artikelbild-size' => array(
                  'type'    => 'select',
                  'title'   => __( 'Gr&ouml;&szlig;e', 'piratenkleider' ),
                  'label'   => __( 'Das Artikelbild kann in einem schmalen (150px) oder gro&szlig;en (240px) Ausschnitt dargestellt werden. ', 'piratenkleider' ),
                  'default' => $defaultoptions['artikelbild-size'],		                     
		  'liste'   => array(0 => "klein (150px)", 1 => "gro&szlig; (240px)"),
		  'parent'  => 'darstellungartikel'
              ),	
	      'artikelbild-src' => array(
                  'type'    => 'bildlist',
                  'title'   => __( 'Defaultbild', 'piratenkleider' ),
                  'label'   => __( 'Ersatzbild für Seiten ohne eigenes Artikelbild.', 'piratenkleider' ),
                  'default' => $defaultoptions['src-default-artikel-symbolbild'],		                     
		  'liste'   => $defaultbilder_liste,
		  'parent'  => 'darstellungartikel'
              ),	
	      'artikelbild-url' => array(
                  'type'    => 'url',
                  'title'   => __( 'URL', 'piratenkleider' ),
                  'label'   => __( 'Webadresse f&uuml;r ein alternatives Artikelbild.', 'piratenkleider' ),
                  'default' => $defaultoptions['artikelbild-url'],
                  'parent'  => 'darstellungartikel',
              ),
	       
	       'darstellungindexseiten'  => array(
                  'type'    => 'section',
                  'title'   => __( 'Indexseiten', 'piratenkleider' ),
              ),
              'aktiv-platzhalterbilder-indexseiten' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Platzhalterbilder', 'piratenkleider' ),
                  'label'   => __( 'Platzhalterbilder bei Indexseiten zu Kategorien, Tags, Suche und Archiv anzeigen.', 'piratenkleider' ),
                  'default' => $defaultoptions['aktiv-platzhalterbilder-indexseiten'],
		  'parent'  => 'darstellungindexseiten'
              ),
	      'indexseitenbild-size' => array(
                  'type'    => 'select',
                  'title'   => __( 'Gr&ouml;&szlig;e', 'piratenkleider' ),
                  'label'   => __( 'Das Platzhalterbild kann in einem schmalen (150px) oder gro&szlig;en (240px) Ausschnitt dargestellt werden. ', 'piratenkleider' ),
                  'default' => $defaultoptions['indexseitenbild-size'],		                     
		  'liste'   => array(0 => "klein (150px)", 1 => "gro&szlig; (240px)"),
		  'parent'  => 'darstellungindexseiten'
              ),
	      	       
	     'src-default-symbolbild-404' => array(
                  'type'    => 'imgurl',
                  'title'   => __( 'Symbolbild für 404 Seite', 'piratenkleider' ),
                  'label'   => __( 'URL f&uuml;r ein eigenes 404-Seitenbild.', 'piratenkleider' ),
                  'default' => $defaultoptions['src-default-symbolbild-404'],
                  'parent'  => 'darstellungindexseiten',
              ),
	     'src-default-symbolbild-category' => array(
                  'type'    => 'imgurl',
                  'title'   => __( 'Symbolbild für Kategorie Seite', 'piratenkleider' ),
                  'label'   => __( 'URL f&uuml;r ein eigenes Kategorien-Seitenbild.', 'piratenkleider' ),
                  'default' => $defaultoptions['src-default-symbolbild-category'],
                  'parent'  => 'darstellungindexseiten',
              ), 
	      'src-default-symbolbild-tag' => array(
                  'type'    => 'imgurl',
                  'title'   => __( 'Symbolbild für Tag Seite', 'piratenkleider' ),
                  'label'   => __( 'URL f&uuml;r ein eigenes Tag-Seitenbild.', 'piratenkleider' ),
                  'default' => $defaultoptions['src-default-symbolbild-tag'],
                  'parent'  => 'darstellungindexseiten',
              ), 
	       'src-default-symbolbild-author' => array(
                  'type'    => 'imgurl',
                  'title'   => __( 'Symbolbild für Autoren Seite', 'piratenkleider' ),
                  'label'   => __( 'URL f&uuml;r ein eigenes Autoren-Seitenbild.', 'piratenkleider' ),
                  'default' => $defaultoptions['src-default-symbolbild-author'],
                  'parent'  => 'darstellungindexseiten',
              ), 
	       'src-default-symbolbild-archive' => array(
                  'type'    => 'imgurl',
                  'title'   => __( 'Symbolbild für Archiv Seite', 'piratenkleider' ),
                  'label'   => __( 'URL f&uuml;r ein eigenes Archiv-Seitenbild.', 'piratenkleider' ),
                  'default' => $defaultoptions['src-default-symbolbild-archive'],
                  'parent'  => 'darstellungindexseiten',
              ), 
	        'src-default-symbolbild-search' => array(
                  'type'    => 'imgurl',
                  'title'   => __( 'Symbolbild für Suchergebnis-Seite', 'piratenkleider' ),
                  'label'   => __( 'URL f&uuml;r ein eigenes Suchergebnis-Seitenbild.', 'piratenkleider' ),
                  'default' => $defaultoptions['src-default-symbolbild-search'],
                  'parent'  => 'darstellungindexseiten',
              ), 
	      'src-default-symbolbild' => array(
                  'type'    => 'imgurl',
                  'title'   => __( 'Symbolbild für Template-Seiten', 'piratenkleider' ),
                  'label'   => __( 'URL f&uuml;r ein Template-Seitenbild.', 'piratenkleider' ),
                  'default' => $defaultoptions['src-default-symbolbild'],
                  'parent'  => 'darstellungindexseiten',
              ),  

	       
	      'kommentare'  => array(
                  'type'    => 'section',
                  'title'   => __( 'Kommentare', 'piratenkleider' ),
              ),
	     'aktiv-commentreplylink' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Antwortlinks', 'piratenkleider' ),
                  'label'   => __( 'Bei der Anzeige von Kommentaren, wird unter diesen ein eigener Kommentarlink eingebaut, der das Antworten auf den Kommentar erlaubt. Dies kann zu einer Nutzung des Kommentarbereiches wie bei einem Forum f&uuml;hren, bei dem es zuletzt aber nicht mehr um den eigentlichen Beitrag geht.', 'piratenkleider' ),
                  'default' => $defaultoptions['aktiv-commentreplylink'],	
		 'parent'   => 'kommentare'
              ),
	      'aktiv-commentsonpages' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Seiten', 'piratenkleider' ),
                  'label'   => __( 'Kommentare auch auf Seiten (und nicht nur Artikeln) zulassen.', 'piratenkleider' ),
                  'default' => $defaultoptions['aktiv-commentsonpages'],	
		 'parent'   => 'kommentare'
              ),
              'comments_disclaimer'  => array(
                  'type'    => 'html',
                  'title'   => __( 'Disclaimer', 'piratenkleider' ),
                  'label'   => __( 'Kurzer Hinweistext (ggf. Link) zu Regeln f&uuml;r Kommentare.', 'piratenkleider' ),
		  'parent'   => 'kommentare'
              ),               
               'zeige_commentbubble_null' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Kommentarbubble', 'piratenkleider' ),
                  'label'   => __( 'Zeige den Kommentarbubble auch dann, wenn noch keine Kommentare abgegeben wurden', 'piratenkleider' ),
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
                  'title'   => __( 'Seitenmenu', 'piratenkleider' ),
              ),
              'seitenmenu_mode' => array(
                  'type'    => 'select',
                  'title'   => __( 'Gliederung', 'piratenkleider' ),
                  'label'   => __( 'Das Menü kann nach Seiten-Hierarchie oder Menü-Hierarche gegliedert werden.', 'piratenkleider' ),
                  'default' => $defaultoptions['seitenmenu_mode'],
				  'liste'   => array(0 => "Menüs", 1 => "Seiten"),
                  'parent'  => 'seitenmenu',
              ),
              'zeige_subpagesonly' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Hierachische Struktur', 'piratenkleider' ),
                  'label'   => __( 'Bei der Anzeige von Seiten rechts in der Sidebar nur das aktuelle Submenu zeigen. Bei Deaktivierung wird das vollst&auml;ndige Men&uuml; gezeigt. Dies ist f&uuml;r Webauftritte mit vielen Seiten nicht geeignet.', 'piratenkleider' ),
                  'default' => $defaultoptions['zeige_subpagesonly'],
                  'parent'  => 'seitenmenu',
              ),
              'zeige_sidebarpagemenu' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Offene Struktur', 'piratenkleider' ),
                  'label'   => __( 'Men&uuml; mit allen Seiten in der Sidebar anzeigen, auch wenn diese nicht dem Hauptmenu zugeordnet und gegliedert sind', 'piratenkleider' ),
                  'default' => $defaultoptions['zeige_sidebarpagemenu'],
                  'parent'  => 'seitenmenu',
              ),
              
              'newsletter' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Newsletter', 'piratenkleider' ),
                  'label'   => __( 'Eingabemaske f&uuml;r den Eintrag in ein Newsletter (Mailingliste) anzeigen', 'piratenkleider' ),
                  'default' => $defaultoptions['newsletter'],
              ),
              'plakate'  => array(
                  'type'    => 'section',
                  'title'   => __( 'Werbeplakate', 'piratenkleider' ),
              ),
              'slider-defaultwerbeplakate' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Plakate aktivieren', 'piratenkleider' ),
                  'label'   => __( 'Slider der Werbeplakate (rechte Sidebar-Spalte) werden angezeigt.<br>Die Auswahl der Plakatbilder kann unter den Defaultbildern angepasst werden', 'piratenkleider' ),
                  'default' => $defaultoptions['slider-defaultwerbeplakate'],
                   'parent'  => 'plakate',
              ),	   
	       
	      'plakate-src' => array(
                  'type'    => 'bilddirchecklist',
                  'title'   => __( 'Plakatauswahl', 'piratenkleider' ),
                  'label'   => __( 'Diese Bilder werden in der Sidebar rechts gezeigt, sofern dieses &uuml;ber die Optionen (vgl. Slider) auch eingeschaltet ist.', 'piratenkleider' ),
                  'default' => $defaultoptions['dir-default-plakate'],		                     
		  'parent'  => 'plakate'
              ), 
	       
              'plakate-title' => array(
                  'type'    => 'text',
                  'title'   => __( 'Optionaler Ersatztitel', 'piratenkleider' ),
                  'label'   => __( 'Dieser Titel wird als Alternativ-Text verwendet.', 'piratenkleider' ),
                  'default' => $defaultoptions['plakate-title'],
                  'parent'  => 'plakate',
              ),   
              'plakate-url' => array(
                  'type'    => 'url',
                  'title'   => __( 'Optionale URL', 'piratenkleider' ),
                  'label'   => __( 'Optionale Webadresse zur Verlinkung der Plakate mit einer Informationsseite.', 'piratenkleider' ),
                  'default' => $defaultoptions['plakate-url'],
                  'parent'  => 'plakate',
              ),   
              'plakate-altadressen' => array(
                  'type'    => 'textarea',
                  'title'   => __( 'Eigene Plakatbilder', 'piratenkleider' ),
                  'label'   => __('Adressen alternativer Plakatbilder.<br>', 'piratenkleider').
                  __( 'Angabe der URLs inkl. http:// zum Bild. Wenn es mehrere sind, werden die einzelnen Adressen durch Zeilenumbruch getrennt.', 'piratenkleider' ).
                  __('Sollen die Bilder zus&auml;tzlich mit einem eigenen Titel und einer Webadresse versehen werden werden diese Angabe durch ein "|" zeichen in folgender Reihenfolge getrennt: <code>Bild URL|Titel|URL Webpage</code>', 'piratenkleider' ).
                  __( 'Beispiel:<br>', 'piratenkleider' ).
                  __( '<pre>http://www.piratenpartei.de/wp-content/uploads/2012/05/UrheberplakatSH283.jpg|Rechte f&uuml;r Urheber und Nutzer|http://www.kein-programm.de</pre><br>', 'piratenkleider' ).
                  __( 'Wenn oben Defaultplakate angeklickt sind, erscheinen diese Bilder zus&auml;tzlich. Diese Bilder k&ouml;nnen auch vorher &uuml;ber den Mediendialog hochgeladen worden sein.', 'piratenkleider' ),                                                      
                  'default' => $defaultoptions['plakate-altadressen'],
                  'parent'  => 'plakate',
              ),   
               
              'teaser1'  => array(
                  'type'    => 'section',
                  'title'   => __( 'Teaserlink 1', 'piratenkleider' ),                      
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
                  'title'   => __( 'Titel', 'piratenkleider' ),
                  'label'   => __( 'Titelzeile des Teaserlinks', 'piratenkleider' ),
                  'default' => $defaultoptions['teaserlink1-title'],
                    'parent'  => 'teaserlink1',
              ),
               'teaserlink1-untertitel' => array(
                  'type'    => 'text',
                  'title'   => __( 'Untertitel', 'piratenkleider' ),
                  'label'   => __( 'Zweite Zeile des Teaserlinks', 'piratenkleider' ),
                  'default' => $defaultoptions['teaserlink1-untertitel'],
                    'parent'  => 'teaserlink1',
              ),
               'teaserlink1-url' => array(
                  'type'    => 'url',
                  'title'   => __( 'URL', 'piratenkleider' ),
                  'label'   => __( 'Webadresse zu der verlinkt werden soll', 'piratenkleider' ),
                  'default' => $defaultoptions['teaserlink1-url'],
                    'parent'  => 'teaserlink1',
              ),
              'teaser2'  => array(
                  'type'    => 'section',
                  'title'   => __( 'Teaserlink 2', 'piratenkleider' ),                      
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
                  'title'   => __( 'Titel', 'piratenkleider' ),
                  'label'   => __( 'Titelzeile des Teaserlinks', 'piratenkleider' ),
                  'default' => $defaultoptions['teaserlink2-title'],
                    'parent'  => 'teaserlink2',
              ),
               'teaserlink2-untertitel' => array(
                  'type'    => 'text',
                  'title'   => __( 'Untertitel', 'piratenkleider' ),
                  'label'   => __( 'Zweite Zeile des Teaserlinks', 'piratenkleider' ),
                  'default' => $defaultoptions['teaserlink2-untertitel'],
                    'parent'  => 'teaserlink2',
              ),
               'teaserlink2-url' => array(
                  'type'    => 'url',
                  'title'   => __( 'URL', 'piratenkleider' ),
                  'label'   => __( 'Webadresse zu der verlinkt werden soll', 'piratenkleider' ),
                  'default' => $defaultoptions['teaserlink2-url'],
                    'parent'  => 'teaserlink2',
              ),  
                'teaser3'  => array(
                  'type'    => 'section',
                  'title'   => __( 'Teaserlink 3', 'piratenkleider' ),                      
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
                  'title'   => __( 'Titel', 'piratenkleider' ),
                  'label'   => __( 'Titelzeile des Teaserlinks', 'piratenkleider' ),
                  'default' => $defaultoptions['teaserlink3-title'],
                    'parent'  => 'teaserlink3',
              ),
               'teaserlink3-untertitel' => array(
                  'type'    => 'text',
                  'title'   => __( 'Untertitel', 'piratenkleider' ),
                  'label'   => __( 'Zweite Zeile des Teaserlinks', 'piratenkleider' ),
                  'default' => $defaultoptions['teaserlink3-untertitel'],
                    'parent'  => 'teaserlink3',
              ),
               'teaserlink3-url' => array(
                  'type'    => 'url',
                  'title'   => __( 'URL', 'piratenkleider' ),
                  'label'   => __( 'Webadresse zu der verlinkt werden soll', 'piratenkleider' ),
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
                  'title'   => __( 'Position und Anzeige', 'piratenkleider' ),
                  'label'   => __( 'Die Auswahl werden die Social Media Buttons angezeigt. Dies kann entweder oben im Kopfteil oder links neben den Inhaltsbereich sein. <br>Hinweis: Es werden nur die Buttons gezeigt, bei denen in den folgenden Eingabefeldern Adressen definiert sind.', 'piratenkleider' ),
                  'liste'   => array(0 => __( 'Keine Social Media Buttons', 'piratenkleider' ) ,  1 => __( 'Im Kopfteil', 'piratenkleider' ), 2 => __( 'Links anzeigen', 'piratenkleider' )),
                  'default' => $defaultoptions['alle-socialmediabuttons'],
              ),  
	      'sm-list'  => array(
		  'type'    => 'urlchecklist',
		  'title'   => __( 'Social Media Plattformen', 'piratenkleider' ),
		  'liste'   => $default_socialmedia_liste,
	      ), 
	       

               
          )
       ),
	'design'   => array(
           'tabtitle'   => __( 'Design (Kl&uuml;verbaum)', 'piratenkleider' ),
           'fields' => array(
              
	    'css-colorfile' => array(
                  'type'    => 'select',
                  'title'   => __( 'L&auml;nderfarbe aktivieren', 'piratenkleider' ),
                  'label'   => __( 'Auswahl, welche l&auml;nderbezogene Farbvariante aktiviert werden soll.', 'piratenkleider' ),
                  'default' => '',
                  'liste'   => $default_colorstyles,
              ),
	      'css-fontfile' => array(
                  'type'    => 'select',
                  'title'   => __( 'Stil der Schriftart &auml;ndern', 'piratenkleider' ),
                  'label'   => __( 'Auswahl, welcher Schriftstil f&uuml;r die Website verwendet werden soll.', 'piratenkleider' ),
                  'default' => $defaultoptions['default-fontset-file'],
                  'liste'   => $default_fontstyles,
              ),
	      'aktiv-mediaqueries-allparts' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Small Screen Device Sichtbarkeit', 'piratenkleider' ),
                  'label'   => __( 'F&uuml;r kleine Bildschirmaufl&ouml;sungen auch optionale Teile (Sticker, Slider) anzeigen.', 'piratenkleider' ),
                  'default' => $defaultoptions['aktiv-mediaqueries-allparts'],
              ),
	      'aktiv-alternativestyle' => array(
                  'type'    => 'select',
                  'title'   => __( 'Grunddesign &auml;ndern', 'piratenkleider' ),
                  'label'   => __( 'Aktiviert ein alternatives Design f&uuml;r die gesamte Website.', 'piratenkleider' ).
			       __( '<br><strong>ACHTUNG: ALPHA-Status! Designs sind noch nicht fertig</strong>.', 'piratenkleider' ),
                  'default' => 'style.css',
                  'liste'   =>  $default_alternativestyles,
              ),

	       
	      'css-default-header-height' => array(
                  'type'    => 'number',
                  'title'   => __( 'H&ouml;he des Kopfbereiches ( .header )', 'piratenkleider' ),
                  'label'   => __( 'Hinweis: Die Verkleinerung der H&ouml;he des Kopfteils ist nicht ungef&auml;hrlich. Zu beachten ist, dass der Kopfteil auch bei einer Vergr&ouml;&szlig;erung des Textes auf 200% noch gen&uuml;gend Platz haben muss!', 'piratenkleider' ),
                  'default' => $defaultoptions['css-default-header-height'],
              ), 
	      'css-default-branding-padding-top' => array(
                  'type'    => 'number',
                  'title'   => __( 'Abstand des Brandingbereiches (=Logo) nach oben ( .header .branding )', 'piratenkleider' ),
                  'label'   => __( 'Das Logo hat einen Abstand nach oben. Diese kann &uuml;ber diese Angabe reduziert werden.', 'piratenkleider' ),
                  'default' => $defaultoptions['css-default-branding-padding-top'],
              ), 
             
	      'css-eigene-anweisungen' => array(
                  'type'    => 'textarea',
                  'title'   => __( 'CSS-Anweisungen', 'piratenkleider' ),
                  'label'   => __( 'Eigene CSS-Anweisungen, die Inline im Kopfteil der Dokumente erg&auml;nzt werden', 'piratenkleider' ),
                  'default' => '',
              ),
	       'html-eigene-anweisungen' => array(
                  'type'    => 'textarea',
                  'title'   => __( 'HTML-Anweisungen', 'piratenkleider' ),
                  'label'   => __( 'Eigene HTML-Anweisungen, die am Ende der Webseite, vor dem letzten &lt;/body&gt;&lt;/html&gt; plaziert werden', 'piratenkleider' ).
		    __( '<br><b>Achtung:</b> Fehlerhafter HTML-, JavaScript oder CSS-Code an dieser Stelle kann zu einem Nicht-Funktionieren der gesamt Website f&uuml;hren!<br />Der hier eingegebene Code wird nicht gefiltert oder kontrolliert.', 'piratenkleider' ),
                  'default' => '',
              ),
	       
          )
       ),

     
       
       
       'sonstiges'   => array(
           'tabtitle'   => __('Sonstiges', 'piratenkleider'),
           'fields' => array(
               'aktiv-dynamic-sidebar' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Sidebar abblendbar', 'piratenkleider' ),
                  'label'   => __( 'Benutzern via JavaScript die M&ouml;glichkeit geben, die Sidebar klein zu machen. <br>Hinweis: Der Status wird nicht gespeichert, um keine Cookies anzulegen; Die Funktion ist nicht sichtbar, wenn man kein JavaScript an hat. Desweiteren ist die Funktion nur aktiv, wenn die Bildschirmbreite gr&ouml;&szlig;er als 600 Pixel ist.', 'piratenkleider' ),
                  'default' => $defaultoptions['aktiv-dynamic-sidebar'],
              ),         
              'position_sidebarbottom' => array(
                  'type'    => 'select',
                  'title'   => __( 'Position der Sidebar', 'piratenkleider' ),
                  'label'   => __( 'Sidebar rechts neben den Inhalt oder darunter positionieren. Wenn die Sidebar unter dem Inhalt positioniert wird, wird der Inhaltsbereich &uuml;ber die gesamte Breite gehen. Alternativ kann ein Custom Field "fullsize" definiert werden. Hat dies den Value 1, wird der Inhaltsbereich auf volle Seitenbreite dargestellt und die Sidebar nach unten verschoben', 'piratenkleider' ),
                  'liste'   => array(0 => __( 'Rechts (Standard)', 'piratenkleider' ), 1 => __( 'Unter dem Inhalt', 'piratenkleider' )),
                  'default' => 0,
              ),                                            
              'login_errors' => array(
                  'type'    => 'select',
                  'title'   => __( 'Fehlermeldung bei Login', 'piratenkleider' ),
                  'label'   => __( 'Option um die Fehlermeldung beim Login im Backend ein oder abzuschalten, mit der angezeigt wird, warum der Login fehlschlug.', 'piratenkleider' ),
                  'liste'   => array(1 => __( 'Fehlermeldung zeigen', 'piratenkleider' ), 0 => __( 'Keine Meldung', 'piratenkleider' )),
                  'default' => 1,
              ),

              'aktiv-linkicons' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Linkicons anzeigen', 'piratenkleider' ),
                  'label'   => __( 'Bei der Anzeige von Links in Artikeln und Seiten werden bekannte Adressen und Dateitypen mit Icons ergänzt.', 'piratenkleider' ),
                  'default' => $defaultoptions['aktiv-linkicons'],                 
              ),
	       
	       
              'url-newsletteranmeldung' => array(
                  'type'    => 'url',
                  'title'   => __( 'Newsletter', 'piratenkleider' ),
                  'label'   => __( 'URL, inkl. http://, zur Seite auf der man sich in Newsletter eingetragen werden kann.', 'piratenkleider' ),
                  'default' => $defaultoptions['url-newsletteranmeldung'],
                 
              ),  
              
              'yt-alternativeembed' => array(
                  'type'    => 'bool',
                  'title'   => __( 'YouTube-Links', 'piratenkleider' ),
                  'label'   => __( 'YouTube-Links automatisch mit eigenem verlinkten iFrame-Embed anreichern, der die tracking-sichere Website youtube-nocookie.com nutzt.', 'piratenkleider' ),
                  'default' => $defaultoptions['yt-alternativeembed'],
              ),  
	       
	      'aktiv-wombat' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Wombat', 'piratenkleider' ),
                  'label'   => __( 'Aktiviert die Anzeige des kleinen Wombats (CC by Nicole Britz)', 'piratenkleider' ),
                  'default' => $defaultoptions['aktiv-wombat'],
              ),   
	       
              'anonymitaet'  => array(
                  'type'    => 'section',
                  'title'   => __('Anonymit&auml;t &amp; Sicherheit', 'piratenkleider'),         
              ),  
               
              'aktiv-autoren' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Autoren anzeigen', 'piratenkleider' ),
                  'label'   => __( 'Bei der Anzeige von Artikeln den Autoren anzeigen und verlinken.', 'piratenkleider' ),
                  'default' => $defaultoptions['aktiv-autoren'],
                  'parent'  => 'anonymitaet',
              ),
              'anonymize-user' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Kommentarbenutzer anonymisieren', 'piratenkleider' ),
                  'label'   => __( 'IP-Adresse und der User-Agent-String geleert, die Eingabe von E-Mail-Adressen wird verhindert.<br> Diese Option deaktiviert auch die Avatar-Anzeige und setzt die Kommentareinstellung unter Einstellungen-Diskussion so, dass Benutzer keinen Namen und E-Mail-Adressen mehr eingeben m&uuml;ssen.', 'piratenkleider' ),
                  'default' => $defaultoptions['anonymize-user'],
                  'parent'  => 'anonymitaet',
              ),
              'anonymize-user-commententries' => array(
                  'type'    => 'select',
                  'title'   => __( 'Selbstidentifikation', 'piratenkleider' ),
                  'label'   => __( 'Angebotene Kommentarfelder zur freiwilligen Selbstidentifikation', 'piratenkleider' ),
                  'liste'   => array( 0 => "Name, URL,  E-Mail (Wordpress-Default)", 1=> "Name", 2 => "Name, URL"),
                  'default' => $defaultoptions['anonymize-user-commententries'],
                  'parent'  => 'anonymitaet',
              ),
              'aktiv-avatar' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Avatare anzeigen', 'piratenkleider' ),
                  'label'   => __( 'Bei Kommentaren werden Avatar-Bilder mit Hilfe von Gravatar oder anderen Diensten abgerufen. Dies erm&ouml;glicht allerdings theoretisch ein Tracking durch diese Dienste.', 'piratenkleider' ),
                  'default' => $defaultoptions['aktiv-avatar'],
                  'parent'  => 'anonymitaet',
              ),               
               
              'meta'  => array(
                  'type'    => 'section',
                  'title'   => __('Meta-Angaben', 'piratenkleider'),                   
              ),               
               'meta-author' => array(
                  'type'    => 'text',
                  'title'   => __( 'Autor', 'piratenkleider' ),
                  'label'   => __( 'Optionale Autor-Angabe in dem Meta-Tag jeder Seite.', 'piratenkleider' ),
                  'parent'  => 'meta',
              ),  
                'meta-description' => array(
                  'type'    => 'text',
                  'title'   => __( 'Beschreibung', 'piratenkleider' ),
                  'label'   => __( 'Optionale Beschreibungstext in dem Meta-Tag jeder Seite (f&uuml;r alle gleich). Sollte nicht mehr als 140 Zeichen lang sein, wenn gesetzt.', 'piratenkleider' ),
                  'parent'  => 'meta',
              ),  
                'meta-keywords' => array(
                  'type'    => 'text',
                  'title'   => __( 'Schl&uuml;sselworte', 'piratenkleider' ),
                  'label'   => __( 'Optionale Schl&uuml;sselworte in dem Meta-Tag jeder Seite (f&uuml;r alle gleich). Durch Komma getrennt. Schl&uuml;sselworte sollten tats&auml;chlich vorkommen.', 'piratenkleider' ),
                  'parent'  => 'meta',                    
              ),   
	       
	       'aktiv-autokeywords'  => array(
                  'type'    => 'bool',
                  'title'   => __( 'Keywords aus Tags', 'piratenkleider' ),
                  'label'   => __( 'Metatag mit Keywords wird automatisch aus der Tagcloud erstellt. Wenn oben Keywords eingegeben wurden, werden diese erg&auml;nzt.', 'piratenkleider')
		      .'<br>'. __('Hinweis: Google und andere Suchmaschinen nutzen diesen Metatag bereits seit 2009 nicht mehr.', 'piratenkleider' )		   
		      .'<br>'. __('Der Zweck dieser Funktion besteht darin, Pseudo-SEO-Experten ruhig zu halten :)', 'piratenkleider' ),
                  'default' => $defaultoptions['aktiv-autokeywords'],
                  'parent'  => 'meta',
              ),
	       'linktipps'  => array(
                  'type'    => 'section',
                  'title'   => __('Leseempfehlungen', 'piratenkleider'),                   
              ),            
	        'aktiv-linktipps'  => array(
                  'type'    => 'bool',
                  'title'   => __( 'Aktivieren', 'piratenkleider' ),
                  'label'   => __( 'Verwaltung von Leseempfehlungen bzw. Linktipps aktivieren', 'piratenkleider')
		      .'<br>'. __('Dies f&uuml;gt eine neue Verwaltung im Backend ein, mit denen spezielle Seiten, die nur einen kurzen Text und einen (externen) Link enthalten, als neue Beitrag auf den Indexseiten angezeigt werden k&ouml;nnen.', 'piratenkleider' ),		   
                  'default' => $defaultoptions['aktiv-linktipps'],
                  'parent'  => 'linktipps',
              ),
               
              'linktipps-titlepos'  => array(
                  'type'    => 'select',
                  'title'   => __( '&Uuml;berschrift', 'piratenkleider' ),
                  'label'   => __( 'Anzeigeposition der &Uuml;berschrift', 'piratenkleider'),		   
                  'default' => $defaultoptions['linktipps-titlepos'],
                  'liste'   => array( 0 => "&Uuml;ber dem Text/Bild", 1=> "Unter dem Text/Bild"),
                  'parent'  => 'linktipps',
              ),
                'linktipps-subtitlepos'  => array(
                  'type'    => 'select',
                  'title'   => __( 'Untertitel', 'piratenkleider' ),
                  'label'   => __( 'Anzeigeposition des Untertitels', 'piratenkleider'),		   
                  'default' => $defaultoptions['linktipps-subtitlepos'],
                  'liste'   => array( 0 => "Oben",
                      1 => "Unten"),
                  'parent'  => 'linktipps',
              ),
              'linktipps-linkpos'  => array(
                  'type'    => 'select',
                  'title'   => __( 'Link', 'piratenkleider' ),
                  'label'   => __( 'Verlinkung auf Bereich festlegen', 'piratenkleider'),		   
                  'default' => $defaultoptions['linktipps-linkpos'],
                  'liste'   => array( 0 => "Link auf dem Titel",
                      1 => "Link auf Text/Bild",
                      2 => "URL unter Bild/Text anzeigen",
                      3 => "Link auf Titel und URL unten"),
                  'parent'  => 'linktipps',
              ),
             
	      
               
          ),
	),          
       'crew'   => array(
           'tabtitle'   => __( 'Captn & Crew', 'piratenkleider' ),
           'fields' => array(
	        'impressum'  => array(
                  'type'    => 'section',
                  'title'   => __('Impressumsangaben', 'piratenkleider'),                   
		),               
               'impressumperson' => array(
                  'type'    => 'text',
                  'title'   => __( 'Verantwortliche/r', 'piratenkleider' ),
                  'label'   => __( 'Verantwortliche/r gem&auml;&szlig; &sect; 5 TMG. <br>Zum Beispiel: <code>Martin Mustermann</code>', 'piratenkleider' ),
		   'default'	=> '',
                  'parent'  => 'impressum',
		),  
                'impressumdienstanbieter' => array(
                  'type'    => 'text',
                  'title'   => __( 'Dienstanbieter', 'piratenkleider' ),
                  'label'   => __( 'Textbezeichnung des Dienstanbieter des Webauftritts.', 'piratenkleider' ),
                  'parent'  => 'impressum',		    
		), 
	       'kontaktemail' => array(
                  'type'    => 'email',
                  'title'   => __( 'Offizielle E-Mailadresse', 'piratenkleider' ),
                  'label'   => __( 'Feste Mailadresse f&uuml;r offizielle Kontakte.', 'piratenkleider' ),
                  'parent'  => 'impressum',		    
		), 
               'kontakttelefon' => array(
                  'type'    => 'text',
                  'title'   => __( 'Telefon', 'piratenkleider' ),
                  'label'   => __( 'Telefonnummer mit Vorwahl.', 'piratenkleider' ),
		  'default'	=> '',
                  'parent'  => 'impressum',
		), 
               'kontaktfax' => array(
                  'type'    => 'text',
                  'title'   => __( 'Fax', 'piratenkleider' ),
                  'label'   => __( 'Faxnummer mit Vorwahl', 'piratenkleider' ),
		  'default'	=> '',
                  'parent'  => 'impressum',
		), 
                'zeigerechtsvorschriften' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Rechtsvorschriften', 'piratenkleider' ),
                  'label'   => __( 'Zeige Linkliste zu Rechtsvorschriften politischer Parteien', 'piratenkleider' ),
		  'default'	=> $defaultoptions['zeigerechtsvorschriften'],
                  'parent'  => 'impressum',
		), 
	       'lizenzen' => array(
                  'type'    => 'textarea',
                  'title'   => __( 'Urheberrecht', 'piratenkleider' ),
                  'label'   => __( 'Zus&auml;tzliche Angaben f&uuml;r den Abschnitt "Verwendete Werke und Lizenzen innerhalb dieses Webauftritts"', 'piratenkleider' ),
                  'parent'  => 'impressum',		    
		), 
	       
	      'postanschrift'  => array(
                  'type'    => 'section',
                  'title'   => __('Offizielle Postanschrift', 'piratenkleider'),                   
		),  
      
               'posttitel' => array(
                  'type'    => 'text',
                  'title'   => __( 'Name oder Titel', 'piratenkleider' ),
                  'label'   => __( 'Anschrift: Titel (1. Zeile). <br>Zum Beispiel: <code>Piratenpartei</code>', 'piratenkleider' ),
		  'default'	=> '',
                  'parent'  => 'postanschrift',
		),  
                'postperson' => array(
                  'type'    => 'text',
                  'title'   => __( 'zu H&auml;nden', 'piratenkleider' ),
                  'label'   => __( 'Anschrift: Optionale Personenangabe ("zu H&auml;nden") <br>Zum Beispiel: <code>Martin Mustermann</code>', 'piratenkleider' ),
		  'default'	=> '',
                  'parent'  => 'postanschrift',
		 ),   
		'poststrasse' => array(
                  'type'    => 'text',
                  'title'   => __( 'Strasse oder Postfach', 'piratenkleider' ),
                  'label'   => __( 'Anschrift: Strassenname und Nummer oder Postfachangabe oder freilassen <br>Zum Beispiel: <code>Unbesonnenheitsweg 123b</code>', 'piratenkleider' ),
		  'default'	=> '',
                  'parent'  => 'postanschrift',
		), 
		'poststadt' => array(
                  'type'    => 'text',
                  'title'   => __( 'PLZ und Stadt', 'piratenkleider' ),
                  'label'   => __( 'Anschrift: Postleitzahl gefolgt von Stadt<br>Zum Beispiel: <code>12345  Ankh-Morpork</code>', 'piratenkleider' ),
		  'default'	=> '',
                  'parent'  => 'postanschrift',
		), 
                
	       'ladung'  => array(
                  'type'    => 'section',
                  'title'   => __('Ladungsf&auml;hige Anschrift', 'piratenkleider'),                   
		),               
               'ladungtitel' => array(
                  'type'    => 'text',
                  'title'   => __( 'Name oder Titel', 'piratenkleider' ),
                  'label'   => __( 'Anschrift: Titel (1. Zeile). <br>Zum Beispiel: <code>Piratenpartei</code>', 'piratenkleider' ),
		  'default'	=> '',
                  'parent'  => 'ladung',
		),  
                'ladungperson' => array(
                  'type'    => 'text',
                  'title'   => __( 'zu H&auml;nden', 'piratenkleider' ),
                  'label'   => __( 'Anschrift: Optionale Personenangabe ("zu H&auml;nden") <br>Zum Beispiel: <code>Martin Mustermann</code>', 'piratenkleider' ),
		  'default'	=> '',
                  'parent'  => 'ladung',
		 ),   
		'ladungstrasse' => array(
                  'type'    => 'text',
                  'title'   => __( 'Strasse oder Postfach', 'piratenkleider' ),
                  'label'   => __( 'Anschrift: Strassenname und Nummer oder Postfachangabe oder freilassen <br>Zum Beispiel: <code>Unbesonnenheitsweg 123b</code>', 'piratenkleider' ),
		  'default'	=> '',
                  'parent'  => 'ladung',
		), 
		'ladungstadt' => array(
                  'type'    => 'text',
                  'title'   => __( 'PLZ und Stadt', 'piratenkleider' ),
                  'label'   => __( 'Anschrift: Postleitzahl gefolgt von Stadt<br>Zum Beispiel: <code>12345  Ankh-Morpork</code>', 'piratenkleider' ),
		  'default'	=> '',
                  'parent'  => 'ladung',
		), 

	       
	       
	       'dsb'  => array(
                  'type'    => 'section',
                  'title'   => __('Datenschutzbeauftragter', 'piratenkleider'),                   
		),               
               'dsbperson' => array(
                  'type'    => 'text',
                  'title'   => __( 'Name', 'piratenkleider' ),
                  'label'   => __( 'Name des DSB<br>Zum Beispiel: <code>Martin Mustermann</code>', 'piratenkleider' ),
		  'default'	=> '',
                  'parent'  => 'dsb',
		),  
                'dsbemail' => array(
                  'type'    => 'email',
                  'title'   => __( 'E-Mailadresse', 'piratenkleider' ),
                  'label'   => __( 'Feste Mailadresse f&uuml;r offizielle Kontakte.<br>Zum Beispiel:  <code>bundesbeauftragter@piraten-dsb.de</code>', 'piratenkleider' ),
		  'default'	=> '',
                  'parent'  => 'dsb',
		 ),   
		
	       
		    
        

	       
	       
	       
	  
	),   
      ),
   )
);



?>
