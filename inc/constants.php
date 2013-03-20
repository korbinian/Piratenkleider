<?php
/**
 * Piratenkleider Constants
 *
 **/ 
 

$defaultoptions = array(
    'js-version'                    => '2.15',
    'content-width'                 => 665,
    'logo'                          => get_template_directory_uri() .'/images/logo.png',
    'logo-width'                    => 300,
    'logo-height'                   => 130,
    'background-header-image'	    => get_template_directory_uri() .'/images/default-header-background.png',
    'background-header-color'	    => 'eeeeee',
    'smallslider-thumb-width'       => 220,
    'smallslider-thumb-height'      => 185,
    'bigslider-thumb-width'         => 705,
    'bigslider-thumb-height'        => 240,
    'plakate-width'                 => 277,
    'plakate-height'                => 391,
    'default-fontset-file'          => 'font-bebas.css',
    'url-twitterapi'                => 'https://api.twitter.com/1/statuses/user_timeline.rss',
    'src-jquery'                    => get_template_directory_uri(). "/js/jquery.min.js",
    'src-layoutjs'                  => get_template_directory_uri(). "/js/layout.js",
    'src-comment-reply'             => get_template_directory_uri(). "/js/comment-reply.js",
    'src-yaml-focusfix'             => get_template_directory_uri(). "/yaml/core/js/yaml-focusfix.js",
    'src-dynamic-sidebar'           => get_template_directory_uri(). "/js/dynamic-sidebar.js",
    'src-jplayer'		    => get_template_directory_uri(). "/js/jquery.jplayer.min.js",
    'src-transform2d'		    => get_template_directory_uri(). "/js/jquery.transform2d.js",
    'src-grab'			    => get_template_directory_uri(). "/js/jquery.grab.js",
    'src-csstransforms'		    => get_template_directory_uri(). "/js/mod.csstransforms.min.js",
    'src-circleplayer'		    => get_template_directory_uri(). "/js/circle.player.js",
    'src-default-symbolbild'        => get_template_directory_uri() .'/images/default-vorlage-705x150.png',
    'src-default-symbolbild-404'    => get_template_directory_uri() .'/images/default-404.png',
    'src-default-symbolbild-category'   => get_template_directory_uri() .'/images/default-category.png',
    'src-default-symbolbild-search' => get_template_directory_uri() .'/images/default-search.png',
    'src-default-symbolbild-tag'    => get_template_directory_uri() .'/images/default-tag.png',
    'src-default-symbolbild-author' => get_template_directory_uri() .'/images/default-author.png',
    'src-default-symbolbild-archive' => get_template_directory_uri() .'/images/default-archive.png',
    'login_errors'		    => 1,
    'slider-aktiv'                  => 1,
    'aktiv-defaultseitenbild'       => 0,
    'aktiv-suche'                   => 1,   
    'slider-defaultwerbeplakate'    => 1,
    'slider-numberarticle'          => 3,
    'slider-animationType'          => 'slide',
    'slider-Direction'              => 'horizontal',
    'slider-slideshowSpeed'         => 8000,
    'slider-animationDuration'      => 600,
    'defaultwerbesticker'           => 1,
    'aktiv-autoren'                 => 1,
    'newsletter'                    => 1,
    'alle-socialmediabuttons'               => 1,
    'aktiv-circleplayer'                    => 1,
    'aktiv-platzhalterbilder-indexseiten'   => 0,
    'aktiv-linkmenu'                        => 1,
    'aktiv-startseite-kategorien'           => 1,
    'aktiv-startseite-tags'                 => 1,
    'aktiv-startseite-alteartikel'          => 1,
    'aktiv-startseite-alteartikel-num'      => 5,
    'aktiv-images-instead-date'             => 0,
    'aktiv-avatar'                          => 1,
    'aktiv-dynamic-sidebar'                 => 0,
    'src-default-avatar'                    => get_template_directory_uri(). '/images/avataricon.gif',
	'seitenmenu_mode'						=> 0,
    'zeige_subpagesonly'                    => 1,
    'zeige_sidebarpagemenu'                 => 1,
    'zeige_commentbubble_null'              => 0,
    'feed_twitter_numberarticle'            => 3,
    'feed_twitter_showdate'                 => 1,
    'num-article-startpage-fullwidth'       => 1,
    'num-article-startpage-halfwidth'       => 4,
    'url-newsletteranmeldung'       => 'https://service.piratenpartei.de/subscribe/newsletter',
    'teaser-type'                   => 'big',
    'teaser_maxlength'              => 300,
    'teaser-title-maxlength'        => 50,
    'teaser-subtitle'               => __( 'Topthema', 'piratenkleider' ),
    'teaser-title-words'            => 7,
    'css-default-header-height'     => 225,
    'css-default-branding-padding-top'  => 40,
    'anonymize-user'                => 0,
    'anonymize-user-commententries' => 0,
    'aktiv-commentreplylink'        => 0,
    'default_comment_notes_before'  => '<p class="comment-notes">'.__( 'Deine E-Mail-Adresse wird nicht ver&ouml;ffentlicht. Erforderliche Felder sind markiert <span class="required">*</span>', 'piratenkleider' ). '</p>',
    'disclaimer_post'               => '',
    'twitter_cache_lifetime'        => 14400,
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
    'stickerlink2-url'              => 'https://www.piratenpartei.de/mitmachen/spenden/',
    'stickerlink3-content'          => '',
    'stickerlink3-url'              => '',
    'default_footerlink_key'        => 'International (mit Flaggen)',
    'default_footerlink_show'       => 1,    
    'circleplayer-require-mp3fallback'	=> 1,
    'category-startpageview'	    => 1,
    '1april-prank'                  => 0,
    '1april-logo'                   => get_template_directory_uri() .'/images/logo-pony.png',
    '1april-header-image'           => get_template_directory_uri() .'/images/header-pony.png',
    '1april-css'                    => get_template_directory_uri() .'/css/colors_pony.css',
    '1april-prank-day'              => '04-01',
    
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
       '17' => array(
		'src' =>	get_template_directory_uri().'/plakate/LTWNDS13_Awareness01.jpg',
		'label' => __( 'Plakat LTWNDS13 "Zarteste Versuchung"', 'piratenkleider' )
	),    
       '18' => array(
		'src' =>	get_template_directory_uri().'/plakate/LTWNDS13_Awareness02.jpg',
		'label' => __( 'Plakat LTWNDS13 "Ich w&auml;hle es"', 'piratenkleider' )
	),    
       '19' => array(
		'src' =>	get_template_directory_uri().'/plakate/LTWNDS13_Awareness03.jpg',
		'label' => __( 'Plakat LTWNDS13 "Der Slogan"', 'piratenkleider' )
	),    
       '20' => array(
		'src' =>	get_template_directory_uri().'/plakate/LTWNDS13_Awareness04.jpg',
		'label' => __( 'Plakat LTWNDS13 "Entdecke dein Wahllokal"', 'piratenkleider' )
	),    
       '21' => array(
		'src' =>	get_template_directory_uri().'/plakate/LTWNDS13_Awareness05.jpg',
		'label' => __( 'Plakat LTWNDS13 "Rettet die Wahlen"', 'piratenkleider' )
	),    
       '22' => array(
		'src' =>	get_template_directory_uri().'/plakate/LTWNDS13_Awareness06.jpg',
		'label' => __( 'Plakat LTWNDS13 "Ich will so leben, wie ich bin"', 'piratenkleider' )
	),    
       '23' => array(
		'src' =>	get_template_directory_uri().'/plakate/LTWNDS13_Awareness07.jpg',
		'label' => __( 'Plakat LTWNDS13 "B&uuml;rger w&uuml;rden w&auml;hlen gehen"', 'piratenkleider' )
	),    
       '24' => array(
		'src' =>	get_template_directory_uri().'/plakate/LTWNDS13_Awareness08.jpg',
		'label' => __( 'Plakat LTWNDS13 "W&auml;hlen was verbindet"', 'piratenkleider' )
	),    
       '25' => array(
		'src' =>	get_template_directory_uri().'/plakate/LTWNDS13_Awareness09.jpg',
		'label' => __( 'Plakat LTWNDS13 "W&auml;hlen ist geil"', 'piratenkleider' )
	),    
       '26' => array(
		'src' =>	get_template_directory_uri().'/plakate/LTWNDS13_Awareness10.jpg',
		'label' => __( 'Plakat LTWNDS13 "Think different"', 'piratenkleider' )
	),    
       '27' => array(
		'src' =>	get_template_directory_uri().'/plakate/LTWNDS13_Trust01.jpg',
		'label' => __( 'Plakat LTWNDS13 "Alles andere ist Werbung"', 'piratenkleider' )
	),    
       '28' => array(
		'src' =>	get_template_directory_uri().'/plakate/LTWNDS13_Trust02.jpg',
		'label' => __( 'Plakat LTWNDS13 "Vertrau keinem Plakat"', 'piratenkleider' )
	),    
        
);
/* 
 * Default Links for Topmenu , can be overwritten bei widget  
 */
$default_toplink_liste = array(
    __('Wiki', 'piratenkleider' )               => 'https://wiki.piratenpartei.de',
    __('Liquid Feedback', 'piratenkleider' )    => 'https://lqfb.piratenpartei.de',
    __('Forum', 'piratenkleider' )              => 'http://news.piratenpartei.de',
    __('Flaschenpost', 'piratenkleider' )       => 'http://flaschenpost.piratenpartei.de'
    
);

/*
 * Default Links fuer den Footer
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
             __('Polen', 'piratenkleider' ) => 'http://www.partiapiratow.org.pl/',
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
             '<span class="flagicon-pl"></span> '.__('Polen', 'piratenkleider') => 'http://www.partiapiratow.org.pl/',
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
            '<abbr title="Kreisverband">KV</abbr> Bad Kreuznach' => 'http://wiki.piratenpartei.de/Kreisverband_Bad_Kreuznach',
            '<abbr title="Kreisverband">KV</abbr> Landau/S&uuml;dliche Weinstra&szlig;e' => 'http://wiki.piratenpartei.de/RP:Kreisverband_Landau/S%C3%BCdliche_Weinstra%C3%9Fe',
            '<abbr title="Kreisverband">KV</abbr> Mittelhaardt' => 'http://www.piratenpartei-mittelhaardt.de',
            '<abbr title="Kreisverband">KV</abbr> Rhein-Pfalz' => 'http://wiki.piratenpartei.de/RP:Kreisverband_Rhein-Pfalz',
            '<abbr title="Kreisverband">KV</abbr> Rheinhessen' => 'http://wiki.piratenpartei.de/RP:Kreisverband_Rheinhessen',
            '<abbr title="Kreisverband">KV</abbr> Trier/Trier-Saarburg' => 'http://piraten-trier.de',
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
              'slider-defaultwerbeplakate' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Plakatslider', 'piratenkleider' ),
                  'label'   => __( 'Slider der Werbeplakate (rechte Sidebar-Spalte) werden angezeigt.<br>Die Auswahl der Plakatbilder kann unter den Defaultbildern angepasst werden', 'piratenkleider' ),
                  'default' => $defaultoptions['slider-defaultwerbeplakate'],
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
       'startseite'   => array(
           'tabtitle'   => __('Startseite', 'piratenkleider'),
           'fields' => array(
              'num-article-startpage-fullwidth' => array(
                  'type'    => 'number',
                  'title'   => __( 'Beitr&auml;ge &uuml;ber ganze Breite', 'piratenkleider' ),
                  'label'   => __( 'Zahl der Beitr&auml;ge, die &uuml;ber die gesamte Inhaltsbreite gehen.', 'piratenkleider' ),
                  'default' => $defaultoptions['num-article-startpage-fullwidth'],
              ),
              'num-article-startpage-halfwidth' => array(
                  'type'    => 'select',
                  'title'   => __( 'Beitr&auml;ge &uuml;ber halbe Breite', 'piratenkleider' ),
                  'label'   => __( 'Zahl der Beitr&auml;ge, die in Spalten mit je zwei Beitr&auml;gen nebeneinander, angezeigt werden.', 'piratenkleider' ),
                  'liste'   => array(0 => 0, 2 => 2, 4 => 4, 6 => 6, 8 => 8),
                  'default' => $defaultoptions['num-article-startpage-halfwidth'],
              ),
               
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
              'aktiv-images-instead-date' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Thumbnails anstelle Datum', 'piratenkleider' ),
                  'label'   => __( 'Wenn vorhanden, wird ein Thumbnail des ersten Bildes anstelle des Datums angezeigt', 'piratenkleider' ),
                  'default' => $defaultoptions['aktiv-images-instead-date'],
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
             'teaser_maxlength' => array(
                  'type'    => 'number',
                  'title'   => __( 'L&auml;nge des Teasertextes (Artikelauszug)', 'piratenkleider' ),
                  'label'   => __( 'Maximale Textl&auml;nge f&uuml;r Artikelausz&uuml;ge auf der Startseite.', 'piratenkleider' ),
                  'default' => $defaultoptions['teaser_maxlength'],
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
              'social_facebook' => array(
                  'type'    => 'url',
                  'title'   => __( 'Facebook', 'piratenkleider' ),
                  'label'   => __( 'URL inkl. http:// zur Facebook Seite.', 'piratenkleider' ),
              ), 
              'social_twitter' => array(
                  'type'    => 'url',
                  'title'   => __( 'Twitter', 'piratenkleider' ),
                  'label'   => __( 'URL inkl. http:// zur Twitter Seite.', 'piratenkleider' ),
              ),  
              'social_gplus' => array(
                  'type'    => 'url',
                  'title'   => __( 'Google Plus', 'piratenkleider' ),
                  'label'   => __( 'URL inkl. http:// zur Google Plus Seite.', 'piratenkleider' ),
              ),  
              'social_diaspora' => array(
                  'type'    => 'url',
                  'title'   => __( 'Diaspora', 'piratenkleider' ),
                  'label'   => __( 'URL inkl. http:// zur Diaspora Seite.', 'piratenkleider' ),
              ),  
              'social_identica' => array(
                  'type'    => 'url',
                  'title'   => __( 'Identica', 'piratenkleider' ),
                  'label'   => __( 'URL inkl. http:// zur Identica Seite.', 'piratenkleider' ),
              ),  
              'social_youtube' => array(
                  'type'    => 'url',
                  'title'   => __( 'YouTube', 'piratenkleider' ),
                  'label'   => __( 'URL inkl. http:// zur YouTube Seite.', 'piratenkleider' ),
              ),  
              'social_itunes' => array(
                  'type'    => 'url',
                  'title'   => __( 'iTunes', 'piratenkleider' ),
                  'label'   => __( 'URL inkl. http:// zur iTunes Seite.', 'piratenkleider' ),
              ),  
              'social_flickr' => array(
                  'type'    => 'url',
                  'title'   => __( 'Flickr', 'piratenkleider' ),
                  'label'   => __( 'URL inkl. http:// zur Flickr Seite.', 'piratenkleider' ),
              ),  
              'social_delicious' => array(
                  'type'    => 'url',
                  'title'   => __( 'Delicious', 'piratenkleider' ),
                  'label'   => __( 'URL inkl. http:// zur Delicious Seite.', 'piratenkleider' ),
              ),  
              'social_flattr' => array(
                  'type'    => 'url',
                  'title'   => __( 'Flattr', 'piratenkleider' ),
                  'label'   => __( 'URL inkl. http:// zur Flattr Seite.', 'piratenkleider' ),
              ),  
              'social_feed' => array(
                  'type'    => 'url',
                  'title'   => __( 'Feed', 'piratenkleider' ),
                  'label'   => __( 'URL inkl. http:// zu einem RSS oder Atom Feed. Dies muss nicht unbedingt der von dieser Website sein, kann aber.', 'piratenkleider' ),
              ),  
              'twitterwidget'  => array(
                  'type'    => 'section',
                  'title'   => __( 'Twitter Sidebar-import', 'piratenkleider' ),                      
              ),
              'feed_twitter' => array(
                  'type'    => 'text',
                  'title'   => __( 'Benutzername', 'piratenkleider' ),
                  'label'   => __( 'Der Twitter Benutzername. Wird zur Anzeige eines optionalen Twitter-Imports in der Sidebar verwendet.', 'piratenkleider' ),
                  'parent'  => 'twitterwidget',
              ), 
             'feed_twitter_numberarticle' => array(
                  'type'    => 'select',
                  'title'   => __( 'Anzahl', 'piratenkleider' ),
                  'label'   => __( 'Wieviele Twittermeldungen sollen maximal gezeigt werden.', 'piratenkleider' ),
                  'default' => $defaultoptions['feed_twitter_numberarticle'],
                  'liste'   => array(2 => 2,3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8=> 8, 9 => 9, 10 => 10),
                  'parent'  => 'twitterwidget',
              ), 
              'feed_twitter_showdate' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Tweet-Datum', 'piratenkleider' ),
                  'label'   => __( 'Datum der Twittermeldung anzeigen.', 'piratenkleider' ),
                  'default' => $defaultoptions['feed_twitter_showdate'],
                  'parent'  => 'twitterwidget',
              ),  
               'twitter_cache_lifetime' => array(
                  'type'    => 'number',
                  'title'   => __( 'Twitter Cache', 'piratenkleider' ),
                  'label'   => __( 'Zeit in Sekunden f&uuml;r den Twitter-Cache. Dieser Wert darf nicht kleiner als 10 Minuten (=600) sein.', 'piratenkleider' ),
                  'default' => $defaultoptions['twitter_cache_lifetime'],
                  'parent'  => 'twitterwidget',
              ), 
               
          )
       ),
       'metaangaben'   => array(
           'tabtitle'   => __('Meta-Angaben', 'piratenkleider'),
           'fields' => array(
               'meta-author' => array(
                  'type'    => 'text',
                  'title'   => __( 'Autor', 'piratenkleider' ),
                  'label'   => __( 'Optionale Autor-Angabe in dem Meta-Tag jeder Seite.', 'piratenkleider' ),
              ),  
                'meta-description' => array(
                  'type'    => 'text',
                  'title'   => __( 'Beschreibung', 'piratenkleider' ),
                  'label'   => __( 'Optionale Beschreibungstext in dem Meta-Tag jeder Seite (f&uuml;r alle gleich). Sollte nicht mehr als 140 Zeichen lang sein, wenn gesetzt.', 'piratenkleider' ),
              ),  
                'meta-keywords' => array(
                  'type'    => 'text',
                  'title'   => __( 'Schl&uuml;sselworte', 'piratenkleider' ),
                  'label'   => __( 'Optionale Schl&uuml;sselworte in dem Meta-Tag jeder Seite (f&uuml;r alle gleich). Durch Komma getrennt. Schl&uuml;sselworte sollten tats&auml;chlich vorkommen.', 'piratenkleider' ),
              ),  
          )
       ),
       'anonymitaet'   => array(
           'tabtitle'   => __('Anonymit&auml;t &amp; Sicherheit', 'piratenkleider'),
           'fields' => array(
              'aktiv-autoren' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Autoren anzeigen', 'piratenkleider' ),
                  'label'   => __( 'Bei der Anzeige von Artikeln den Autoren anzeigen und verlinken.', 'piratenkleider' ),
                  'default' => $defaultoptions['aktiv-autoren'],
              ),
              'anonymize-user' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Kommentarbenutzer anonymisieren', 'piratenkleider' ),
                  'label'   => __( 'IP-Adresse und der User-Agent-String geleert, die Eingabe von E-Mail-Adressen wird verhindert.<br> Diese Option deaktiviert auch die Avatar-Anzeige und setzt die Kommentareinstellung unter Einstellungen-Diskussion so, dass Benutzer keinen Namen und E-Mail-Adressen mehr eingeben m&uuml;ssen.', 'piratenkleider' ),
                  'default' => $defaultoptions['anonymize-user'],
              ),
              'anonymize-user-commententries' => array(
                  'type'    => 'select',
                  'title'   => __( 'Selbstidentifikation', 'piratenkleider' ),
                  'label'   => __( 'Angebotene Kommentarfelder zur freiwilligen Selbstidentifikation', 'piratenkleider' ),
                  'liste'   => array( 0 => "Name, URL,  E-Mail (Wordpress-Default)", 1=> "Name", 2 => "Name, URL"),
                  'default' => $defaultoptions['anonymize-user-commententries'],
              ),
              'aktiv-avatar' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Avatare anzeigen', 'piratenkleider' ),
                  'label'   => __( 'Bei Kommentaren werden Avatar-Bilder mit Hilfe von Gravatar oder anderen Diensten abgerufen. Dies erm&ouml;glicht allerdings theoretisch ein Tracking durch diese Dienste.', 'piratenkleider' ),
                  'default' => $defaultoptions['aktiv-avatar'],
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
              'aktiv-commentreplylink' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Antwortlinks auf Kommentare', 'piratenkleider' ),
                  'label'   => __( 'Bei der Anzeige von Kommentaren, wird unter diesen ein eigener Kommentarlink eingebaut, der das Antworten auf den Kommentar erlaubt. Dies kann zu einer Nutzung des Kommentarbereiches wie bei einem Forum f&uuml;hren, bei dem es zuletzt aber nicht mehr um den eigentlichen Beitrag geht.', 'piratenkleider' ),
                  'default' => $defaultoptions['aktiv-commentreplylink'],
              ),
              'comments_disclaimer'  => array(
                  'type'    => 'text',
                  'title'   => __( 'Kommentar-Disclaimer', 'piratenkleider' ),
                  'label'   => __( 'Kurzer Hinweistext (ggf. Link) zu Regeln f&uuml;r Kommentare.', 'piratenkleider' ),
              ),
               'aktiv-defaultseitenbild' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Defaultbilder f&uuml;r Seiten', 'piratenkleider' ),
                  'label'   => __( 'Bilder f&uuml;r Seiten erzwingen, die von sich aus kein Artikelbild definiert haben. Wenn kein Artikelbild vorhanden ist, wird ein Defaultbild gezeigt.', 'piratenkleider' ),
                  'default' => $defaultoptions['aktiv-defaultseitenbild'],
              ),
               'aktiv-platzhalterbilder-indexseiten' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Platzhalterbilder', 'piratenkleider' ),
                  'label'   => __( 'Platzhalterbilder bei Indexseiten zu Kategorien, Tags, Suche und Archiv anzeigen.', 'piratenkleider' ),
                  'default' => $defaultoptions['aktiv-platzhalterbilder-indexseiten'],
              ),
               'zeige_commentbubble_null' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Kommentarbubble', 'piratenkleider' ),
                  'label'   => __( 'Zeige den Kommentarbubble auch dann, wenn noch keine Kommentare abgegeben wurden', 'piratenkleider' ),
                  'default' => $defaultoptions['zeige_commentbubble_null'],
              ),          
              'aktiv-circleplayer'   => array(
                  'type'    => 'bool',
                  'title'   => __( 'Circle Player', 'piratenkleider' ),
                  'label'   => __( 'Circle Player (HTML5 Player) f&uuml;r MP3/OGG-Dateien in einzelnen Beitr&auml;gen aktivieren.', 'piratenkleider' ),
                  'default' => $defaultoptions['aktiv-circleplayer'],
              ),   
               
              '1april-prank'   => array(
                  'type'    => 'bool',
                  'title'   => __( 'Aprilscherz', 'piratenkleider' ),
                  'label'   => __( 'Am 1. April wird das Design um Ponys aufgewertet. Seit ihr mutig genug?', 'piratenkleider' ),
                  'default' => $defaultoptions['1april-prank'],
              ),   
               /* 
               '1april-prank-day' => array(
                  'type'    => 'text',
                  'title'   => __( 'Tag des Aprilscherzes', 'piratenkleider' ),
                  'label'   => __( 'Optional kann man hier den Tag vom 1. April &auml;ndern. Sollte nat&uuml;rlich als Datum "04-01" haben, damit es sp&auml;ter richtig kommt. (Format: "MM-DD")', 'piratenkleider' ),
                  'default' => $defaultoptions['1april-prank-day'],
              ), 
                */
               
               
                'login_errors' => array(
                  'type'    => 'select',
                  'title'   => __( 'Fehlermeldung bei Login', 'piratenkleider' ),
                  'label'   => __( 'Option um die Fehlermeldung beim Login im Backend ein oder abzuschalten, mit der angezeigt wird, warum der Login fehlschlug.', 'piratenkleider' ),
                  'liste'   => array(1 => __( 'Fehlermeldung zeigen', 'piratenkleider' ), 0 => __( 'Keine Meldung', 'piratenkleider' )),
                  'default' => 1,
              ),

               
              'url-newsletteranmeldung' => array(
                  'type'    => 'url',
                  'title'   => __( 'Newsletter', 'piratenkleider' ),
                  'label'   => __( 'URL, inkl. http://, zur Seite auf der man sich in Newsletter eingetragen werden kann.', 'piratenkleider' ),
                  'default' => $defaultoptions['url-newsletteranmeldung'],
                 
              ),  
               'post_disclaimer' => array(
                  'type'    => 'textarea',
                  'title'   => __( 'Disclaimer f&uuml;r (Gast-)Artikel', 'piratenkleider' ),
                  'label'   => __( 'Definiere ein Text als Disclaimer der bei Artikeln gezeigt werden kann. Disclaimer wird mit Custom Field show-post-disclaimer (= 0, 1,2,3) aktiviert.', 'piratenkleider' ),
                  'default' => $defaultoptions['disclaimer_post'],
              ),    
	       
	       'category-startpageview'   => array(
                  'type'    => 'bool',
                  'title'   => __( 'Kategoriedarstellung', 'piratenkleider' ),
                  'label'   => __( 'Kategorieseiten wie Startseite darstellen', 'piratenkleider' ),
                  'default' => $defaultoptions['category-startpageview'],
              ),   
	       
               
               
               
          )
       ),
   )
);



?>
