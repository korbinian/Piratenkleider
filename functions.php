<?php
/**
 * Piratenkleider Theme Optionen
 *
 * @source http://github.com/xwolfde/Piratenkleider
 * @creator xwolf
 * @version 2.9.4
 * @licence CC-BY-SA 3.0 
 */


$defaultoptions = array(
    'content-width'                 => 665,
    'logo'                          => get_template_directory_uri() .'/images/logo.png',
    'logo-width'                    => 300,
    'logo-height'                   => 130,
    'thumb-width'                   => 705,
    'thumb-height'                  => 240,
    'plakate-width'                 => 277,
    'plakate-height'                => 391,
    'src-jquery'                    => get_template_directory_uri(). "/js/jquery.min.js",
    'src-layoutjs'                  => get_template_directory_uri(). "/js/layout.js",
    'src-comment-reply'             => get_template_directory_uri(). "/js/comment-reply.js",
    'src-yaml-focusfix'             => get_template_directory_uri(). "/yaml/core/js/yaml-focusfix.js",
    'src-default-symbolbild'        => get_template_directory_uri() .'/images/default-vorlage-705x150.png',
    'src-default-symbolbild-404'    => get_template_directory_uri() .'/images/default-404.png',
    'src-default-symbolbild-category'   => get_template_directory_uri() .'/images/default-category.png',
    'src-default-symbolbild-search' => get_template_directory_uri() .'/images/default-search.png',
    'src-default-symbolbild-tag'    => get_template_directory_uri() .'/images/default-tag.png',
    'src-default-symbolbild-author' => get_template_directory_uri() .'/images/default-author.png',
    'src-default-symbolbild-archive' => get_template_directory_uri() .'/images/default-archive.png',
    
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
    'src-default-avatar'             => get_template_directory_uri(). '/images/avataricon.gif',
    'zeige_subpagesonly'             => 1,
    'zeige_sidebarpagemenu'          => 1,
    'feed_twitter_numberarticle'            => 3,
    'num-article-startpage-fullwidth'       => 1,
    'num-article-startpage-halfwidth'       => 4,
    'url-newsletteranmeldung'       => 'https://service.piratenpartei.de/subscribe/newsletter',
    'teaser_maxlength'              => 300,
    'teaser-title-maxlength'        => 50,
    'teaser-subtitle'               => 'Topthema',
    'teaser-title-words'            => 7,
    'css-default-header-height'     => 225,
    'css-default-branding-padding-top'  => 40,
    'anonymize-user'                => 0,
    'anonymize-user-commententries' => 0,
    'aktiv-commentreplylink'        => 0,
    'twitter_cache_lifetime'        => 7200,
    'feed_cache_lifetime'           => 14400,
    
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
    'stickerlink2-content'          => '<span class="gedreht"> <span class="cicolor">Spende</span><br><span class="small">und helfe mit </span> </span>',
    'stickerlink2-url'              => 'https://www.piratenpartei.de/mitmachen/spenden/',
    'stickerlink3-content'          => '',
    'stickerlink3-url'              => '',
    'default_footerlink_key'        => 'Bund',
    'default_footerlink_show'       => 1
    
    
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
        
);
/* 
 * Default Links for Topmenu , can be overwritten bei widget  
 */
$default_toplink_liste = array(
    'Wiki'              => 'https://wiki.piratenpartei.de',
    'Liquid Feedback'   => 'https://lqfb.piratenpartei.de',
    'Forum'             => 'http://news.piratenpartei.de',
    'Flaschenpost'      => 'http://flaschenpost.piratenpartei.de'
    
);

/*
 * Default Links fuer den Footer
 */

 $default_footerlink_liste = array(
     'Bund'  => array(
        'title' => 'Piratenpartei Deutschland',
        'url'   => 'http://www.piratenpartei.de',
        'sublist'   => array(
            'Baden-Württemberg' => 'http://www.piratenpartei-bw.de/',
            'Bayern' => 'http://www.piratenpartei-bayern.de/',
            'Berlin' => 'http://berlin.piratenpartei.de/',
            'Brandenburg' => 'http://www.piratenbrandenburg.de/',
            'Bremen' => 'http://bremen.piratenpartei.de/',
            'Hamburg' => 'http://www.piratenpartei-hamburg.de/',
            'Hessen' => 'http://www.piratenpartei-hessen.de/',
            'Mecklenburg-Vorpommern' => 'http://www.piratenpartei-mv.de/',
            'Niedersachsen' => 'http://www.piratenpartei-niedersachsen.de/',
            'Nordrhein-Westfalen' => 'http://www.piratenpartei-nrw.de/',
            'Rheinland-Pfalz' => 'http://www.piraten-rlp.de/',
            'Saarland' => 'http://www.piratenpartei-saarland.de/',
            'Sachsen' => 'http://www.piraten-sachsen.de/',
            'Sachsen-Anhalt' => 'http://www.piraten-lsa.de/',
            'Schleswig-Holstein' => 'http://www.piratenpartei-sh.de/',
            'Thüringen' => 'http://www.piraten-thueringen.de/'
        )
     ),
     'International' => array(
         'title' => 'Piratenparteien International',
         'url'  => 'http://www.pp-international.net/',
         'sublist' => array(
             'Argentinien' => 'http://www.partidopirata.com.ar/',
              'Australien' => 'http://pirateparty.org.au/',
              'Belgien' => 'http://pirateparty.be/',
              'Brasilien' => 'http://www.partidopirata.org/',
              'Bulgarien' => 'http://piratskapartia.bg/',
              'Chile' => 'http://www.partidopirata.cl/',
              'Dänemark' => 'http://piratpartiet.dk/',
              'Deutschland' => 'http://www.piratenpartei.de/',
              'Finnland' => 'http://www.piraattipuolue.fi/',
              'Frankreich' => 'http://partipirate.org/',
              'Griechenland' => 'http://pirateparty.gr/',
              'Guatemala' => 'http://partidopirata.org.gt/',
              'Italien' => 'http://www.partito-pirata.it/',
              'Kanada' => 'http://www.piratepartyofcanada.com/',
              'Kasachstan' => 'http://pirateparty.kz/',
              'Kolumbien' => 'http://pp.interlecto.net/',
              'Lettland' => 'http://piratupartija.lv/',
              'Litauen' => 'http://piratupartija.lt/',
              'Luxemburg' => 'http://www.piratepartei.lu/',
              'Marokko' => 'http://partipirate.ma/',
              'Mexiko' => 'http://www.partidopiratamexicano.org/',
             'Neuseeland' => 'http://pirateparty.org.nz/',
             'Niederlande' => 'http://www.piratenpartij.nl/',
             'Österreich' => 'http://piratenpartei.at/',
             'Peru' => 'http://wiki.freeculture.org/Pirata',
             'Polen' => 'http://www.partiapiratow.org.pl/',
             'Portugal' => 'http://www.partidopiratapt.eu/',
             'Rumänien' => 'http://www.partidulpiratilor.ro/',
             'Russland' => 'http://pirate-party.ru/',
             'Schweden' => 'http://www.piratpartiet.se/',
             'Schweiz' => 'http://www.piratenpartei.ch/',
             'Serbien' => 'http://www.piratskapartija.com/',
             'Slowakei' => 'http://www.piratskastrana.sk/',
             'Slowenien' => 'http://www.piratskastranka.net/',
             'Spanien' => 'http://www.partidopirata.es/',
              'Südkorea' => 'http://pirateparty.kr/',
             'Tschechien' => 'http://www.ceskapiratskastrana.cz/',
             'Tunesien' => 'http://partipirate-tn.org/',
             'Türkei' => 'http://www.korsanpartisi.org/',
             'Ukraine' => 'http://pp-ua.org/',
             'Uruguay' => 'http://partidopirata.org.uy/',
             'USA' => 'http://pirate-party.us/',
             'Vereinigtes Königreich' => 'http://pirateparty.org.uk/',
             'Weißrussland' => 'http://belpirat.blog.tut.by/',
             'Zypern' => 'http://www.piratepartycyprus.com/',


         )
     ), 
      'International (mit Flaggen)' => array(
         'title' => 'Piratenparteien International',
         'url'  => 'http://www.pp-international.net/',
         'sublist' => array(
             '<img src="'.get_template_directory_uri().'/images/flags/ar.png" width="16" height="11" alt=""> Argentinien' => 'http://www.partidopirata.com.ar/',
             '<img src="'.get_template_directory_uri().'/images/flags/au.png" width="16" height="11" alt=""> Australien' => 'http://pirateparty.org.au/',
             '<img src="'.get_template_directory_uri().'/images/flags/be.png" width="16" height="11" alt=""> Belgien' => 'http://pirateparty.be/',
             '<img src="'.get_template_directory_uri().'/images/flags/br.png" width="16" height="11" alt=""> Brasilien' => 'http://www.partidopirata.org/',
              '<img src="'.get_template_directory_uri().'/images/flags/bg.png" width="16" height="11" alt=""> Bulgarien' => 'http://piratskapartia.bg/',
              '<img src="'.get_template_directory_uri().'/images/flags/cl.png" width="16" height="11" alt=""> Chile' => 'http://www.partidopirata.cl/',
              '<img src="'.get_template_directory_uri().'/images/flags/dk.png" width="16" height="11" alt=""> Dänemark' => 'http://piratpartiet.dk/',
              '<img src="'.get_template_directory_uri().'/images/flags/de.png" width="16" height="11" alt=""> Deutschland' => 'http://piratenpartei.de/',
              '<img src="'.get_template_directory_uri().'/images/flags/uk.png" width="16" height="11" alt=""> England' => 'http://pirateparty.org.uk/',             
              '<img src="'.get_template_directory_uri().'/images/flags/fi.png" width="16" height="11" alt=""> Finnland' => 'http://www.piraattipuolue.fi/',
              '<img src="'.get_template_directory_uri().'/images/flags/fr.png" width="16" height="11" alt=""> Frankreich' => 'http://partipirate.org/',
              '<img src="'.get_template_directory_uri().'/images/flags/gr.png" width="16" height="11" alt=""> Griechenland' => 'http://pirateparty.gr/',
              '<img src="'.get_template_directory_uri().'/images/flags/gt.png" width="16" height="11" alt=""> Guatemala' => 'http://partidopirata.org.gt/',
              '<img src="'.get_template_directory_uri().'/images/flags/it.png" width="16" height="11" alt=""> Italien' => 'http://www.partito-pirata.it/',
              '<img src="'.get_template_directory_uri().'/images/flags/ca.png" width="16" height="11" alt=""> Kanada' => 'http://www.piratepartyofcanada.com/',
              '<img src="'.get_template_directory_uri().'/images/flags/kz.png" width="16" height="11" alt=""> Kasachstan' => 'http://pirateparty.kz/',
              '<img src="'.get_template_directory_uri().'/images/flags/co.png" width="16" height="11" alt=""> Kolumbien' => 'http://pp.interlecto.net/',
              '<img src="'.get_template_directory_uri().'/images/flags/lv.png" width="16" height="11" alt=""> Lettland' => 'http://piratupartija.lv/',
              '<img src="'.get_template_directory_uri().'/images/flags/lt.png" width="16" height="11" alt=""> Litauen' => 'http://piratupartija.lt/',
              '<img src="'.get_template_directory_uri().'/images/flags/lu.png" width="16" height="11" alt=""> Luxemburg' => 'http://www.piratepartei.lu/',
              '<img src="'.get_template_directory_uri().'/images/flags/ma.png" width="16" height="11" alt=""> Marokko' => 'http://partipirate.ma/',
              '<img src="'.get_template_directory_uri().'/images/flags/mx.png" width="16" height="11" alt=""> Mexiko' => 'http://www.partidopiratamexicano.org/',
             '<img src="'.get_template_directory_uri().'/images/flags/nz.png" width="16" height="11" alt="">  Neuseeland' => 'http://pirateparty.org.nz/',
             '<img src="'.get_template_directory_uri().'/images/flags/nl.png" width="16" height="11" alt=""> Niederlande' => 'http://www.piratenpartij.nl/',
             '<img src="'.get_template_directory_uri().'/images/flags/at.png" width="16" height="11" alt=""> Österreich' => 'http://piratenpartei.at/',
             '<img src="'.get_template_directory_uri().'/images/flags/pe.png" width="16" height="11" alt=""> Peru' => 'http://wiki.freeculture.org/Pirata',
             '<img src="'.get_template_directory_uri().'/images/flags/pl.png" width="16" height="11" alt=""> Polen' => 'http://www.partiapiratow.org.pl/',
             '<img src="'.get_template_directory_uri().'/images/flags/pt.png" width="16" height="11" alt=""> Portugal' => 'http://www.partidopiratapt.eu/',
             '<img src="'.get_template_directory_uri().'/images/flags/ro.png" width="16" height="11" alt=""> Rumänien' => 'http://www.partidulpiratilor.ro/',
             '<img src="'.get_template_directory_uri().'/images/flags/ru.png" width="16" height="11" alt=""> Russland' => 'http://pirate-party.ru/',
             '<img src="'.get_template_directory_uri().'/images/flags/se.png" width="16" height="11" alt=""> Schweden' => 'http://www.piratpartiet.se/',
             '<img src="'.get_template_directory_uri().'/images/flags/ch.png" width="16" height="11" alt=""> Schweiz' => 'http://www.piratenpartei.ch/',
             '<img src="'.get_template_directory_uri().'/images/flags/rs.png" width="16" height="11" alt=""> Serbien' => 'http://www.piratskapartija.com/',
             '<img src="'.get_template_directory_uri().'/images/flags/sk.png" width="16" height="11" alt=""> Slowakei' => 'http://www.piratskastrana.sk/',
             '<img src="'.get_template_directory_uri().'/images/flags/sl.png" width="16" height="11" alt=""> Slowenien' => 'http://www.piratskastranka.net/',
             '<img src="'.get_template_directory_uri().'/images/flags/es.png" width="16" height="11" alt=""> Spanien' => 'http://www.partidopirata.es/',
             '<img src="'.get_template_directory_uri().'/images/flags/kr.png" width="16" height="11" alt=""> Südkorea' => 'http://pirateparty.kr/',
             '<img src="'.get_template_directory_uri().'/images/flags/cz.png" width="16" height="11" alt=""> Tschechien' => 'http://www.ceskapiratskastrana.cz/',
             '<img src="'.get_template_directory_uri().'/images/flags/tn.png" width="16" height="11" alt=""> Tunesien' => 'http://partipirate-tn.org/',
             '<img src="'.get_template_directory_uri().'/images/flags/tr.png" width="16" height="11" alt=""> Türkei' => 'http://www.korsanpartisi.org/',
             '<img src="'.get_template_directory_uri().'/images/flags/ua.png" width="16" height="11" alt=""> Ukraine' => 'http://pp-ua.org/',
             '<img src="'.get_template_directory_uri().'/images/flags/uy.png" width="16" height="11" alt=""> Uruguay' => 'http://partidopirata.org.uy/',
             '<img src="'.get_template_directory_uri().'/images/flags/us.png" width="16" height="11" alt=""> USA' => 'http://pirate-party.us/',
             '<img src="'.get_template_directory_uri().'/images/flags/by.png" width="16" height="11" alt=""> Weißrussland' => 'http://belpirat.blog.tut.by/',
             '<img src="'.get_template_directory_uri().'/images/flags/cy.png" width="16" height="11" alt=""> Zypern' => 'http://www.piratepartycyprus.com/',


         )
     ), 
     'Baden-Württemberg' => array(
         'title' => 'Piratenpartei Landesverband Baden-Württemberg',
         'url'  => 'http://www.piratenpartei-bw.de/',
         'sublist' => array(
             '<acronym title="Bezirksverband">BV</acronym> Freiburg' => 'http://bzv-fr.piratenpartei-bw.de/',
             '<acronym title="Bezirksverband">BV</acronym> Karlsruhe' => 'http://bzv-karlsruhe.piraten-bw.de/',
             '<acronym title="Bezirksverband">BV</acronym> Stuttgart' => 'http://www.piraten-bzv-stuttgart.de/',
             '<acronym title="Bezirksverband">BV</acronym> Tübingen' => 'http://bzv.piratenpartei-tuebingen.de/',
         )
     ),  
     'Bayern' => array(
         'title' => 'Piratenpartei Landesverband Bayern',
         'url'  => 'http://www.piratenpartei-bayern.de/',
         'sublist' => array(
             '<acronym title="Bezirksverband">BV</acronym> Mittelfranken' => 'http://piraten-mfr.de/',
             '<acronym title="Bezirksverband">BV</acronym> Niederbayern' => 'http://niederbayern.piratenpartei-bayern.de/',
             '<acronym title="Bezirksverband">BV</acronym> Oberbayern' => 'http://oberbayern.piratenpartei.de/',
             '<acronym title="Bezirksverband">BV</acronym> Oberfranken' => 'http://piraten-oberfranken.de/',
             '<acronym title="Bezirksverband">BV</acronym> Oberpfalz' => 'http://oberpfalz.piratenpartei.de/',
             '<acronym title="Bezirksverband">BV</acronym> Schwaben' => 'http://www.piraten-schwaben.de/',
             '<acronym title="Bezirksverband">BV</acronym> Unterfranken' => 'http://piraten-ufr.de/',
         ) 
     ), 
    'Brandenburg' => array(
        'title' => 'Piratenpartei Landesverband Brandenburg',
        'url'  => 'http://www.piratenbrandenburg.de/',
        'sublist' => array(
            '<acronym title="Stadtverband">SV</acronym> Potsdam' => 'http://www.piraten-potsdam.de/',
            '<acronym title="Kreisverband">KV</acronym> Brandenburg an der Havel' => 'http://brb.piratenbrandenburg.de/',
            '<acronym title="Kreisverband">KV</acronym> Havelland' => 'http://hvl.piratenbrandenburg.de/',
            '<acronym title="Kreisverband">KV</acronym> Märkisch-Oderland' => 'http://mol.piratenbrandenburg.de/',
            '<acronym title="Kreisverband">KV</acronym> Oberhavel' => 'http://ohv.piratenbrandenburg.de/',
            '<acronym title="Kreisverband">KV</acronym> Potsdam-Mittelmark' => 'http://pm.piratenbrandenburg.de/',
            '<acronym title="Kreisverband">KV</acronym> Teltow-Fläming' => 'http://tf.piratenbrandenburg.de/',
            '<acronym title="Regionalverband">RV</acronym> Barnim-Uckermark' => 'http://barum.piratenbrandenburg.de/',
            '<acronym title="Regionalverband">RV</acronym> Dahme-Oder-Spree' => 'http://dos.piratenbrandenburg.de/',
            '<acronym title="Regionalverband">RV</acronym> Prignitz-Ruppin' => 'http://pr.piratenbrandenburg.de/',
            '<acronym title="Regionalverband">RV</acronym> Südbrandenburg' => 'http://cottbus.piratenbrandenburg.de/',
        )
    ),
   
    
    'Hamburg' => array(
        'title' => 'Piratenpartei Landesverband Hamburg',
        'url'  => 'http://www.piratenpartei-hamburg.de/',
        'sublist' => array(
            '<acronym title="Bezirksverband">BV</acronym> Bergedorf' => 'http://www.piratenpartei-bergedorf.de/',
            '<acronym title="Bezirksverband">BV</acronym> Harburg' => 'http://www.piraten-harburg.de/',
            '<acronym title="Bezirksverband">BV</acronym> Hamburg-Nord' => 'http://wiki.piratenpartei.de/HH:<acronym title="Bezirksverband">BV</acronym>_Nord',
            'Eimbütteler Piraten (informell)' => 'http://wiki.piratenpartei.de/HH:Eimsb%C3%BCtteler_Piraten',
        )
    ),
    'Hessen' => array(
        'title' => 'Piratenpartei Landesverband Hessen',
        'url'  => 'http://www.piratenpartei-hessen.de/',
        'sublist' => array(
            '<acronym title="Kreisverband">KV</acronym> Bergstraße' => 'http://www.piraten-bergstrasse.de/',
            '<acronym title="Kreisverband">KV</acronym> Darmstadt/Darmstadt-Dieburg' => 'http://www.piratenpartei-darmstadt.de/',
            '<acronym title="Kreisverband">KV</acronym> Frankfurt am Main' => 'http://www.piratenpartei-frankfurt.de/',
            '<acronym title="Kreisverband">KV</acronym> Gießen' => 'http://www.piraten-giessen.de/',
            '<acronym title="Kreisverband">KV</acronym> Gross-Gerau' => 'http://www.piratenpartei-gross-gerau.de/',
            '<acronym title="Kreisverband">KV</acronym> Hochtaunus' => 'http://www.piratenpartei-hochtaunus.de/',
            '<acronym title="Kreisverband">KV</acronym> Kassel' => 'http://www.piratenpartei-kassel.de/',
            '<acronym title="Kreisverband">KV</acronym> Main-Kinzig' => 'http://www.kinzigpiraten.de/',
            '<acronym title="Kreisverband">KV</acronym> Main-Taunus' => 'http://www.piraten-mtk.de/',
            '<acronym title="Kreisverband">KV</acronym> Marburg-Biedenkopf' => 'http://www.piratenpartei-marburg.de/',
            '<acronym title="Kreisverband">KV</acronym> Offenbach-Land' => 'http://www.kreispiraten-of.de/',
            '<acronym title="Kreisverband">KV</acronym> Rheingau-Taunus' => 'http://www.piratenpartei-rtk.de/',
            '<acronym title="Kreisverband">KV</acronym> Schwalm-Eder' => 'http://www.piraten-sek.de/',
            '<acronym title="Kreisverband">KV</acronym> Waldeck-Frankenberg' => 'http://www.piraten-wa-fkb.de/',
            '<acronym title="Kreisverband">KV</acronym> Wetterau' => 'http://www.piratenpartei-wetterau.de/',
            '<acronym title="Kreisverband">KV</acronym> Wiesbaden' => 'http://www.piratenpartei-wiesbaden.de/',
        )
    ),
     'Mecklenburg-Vorpommern' => array(
        'title' => 'Piratenpartei Landesverband Mecklenburg-Vorpommern',
        'url'  => 'http://www.piratenpartei-mv.de/',
        'sublist' => array(
            '<acronym title="Kreisverband">KV</acronym> Vorpommern-Greiswald' => 'http://piraten-hgw.de/',
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
            '<acronym title="Stadtverband">SV</acronym> Braunschweig' => 'http://www.piratenpartei-braunschweig.de/',
            '<acronym title="Kreisverband">KV</acronym> Celle' => 'http://www.piraten-celle.de/',    
            '<acronym title="Stadtverband">SV</acronym> Delmenhorst' => 'http://www.piratenpartei-delmenhorst.de/',    
            '<acronym title="Kreisverband">KV</acronym> Diepholz' => 'http://www.piratenpartei-diepholz.de/',    
            '<acronym title="Kreisverband">KV</acronym> Goslar' => 'http://www.piraten-goslar.de/',    
            '<acronym title="Kreisverband">KV</acronym> Göttingen' => 'http://www.piratenpartei-goettingen.de/',    
            '<acronym title="Kreisverband">KV</acronym> Grafschaft Bentheim' => 'http://www.grafschafter-piraten.de/',    
            '<acronym title="Kreisverband">KV</acronym> Hameln-Pyrmont' => 'http://www.piraten-hameln.de/',    
            '<acronym title="Regionalverband">RV</acronym> Hannover' =>'http://www.piratenhannover.de/', 
            '<acronym title="Kreisverband">KV</acronym> Helmstedt' => 'http://wiki.piratenpartei.de/NDS:Helmstedt',    
            '<acronym title="Kreisverband">KV</acronym> Hildesheim' => 'http://www.piratenpartei-hildesheim.de/',    
            '<acronym title="Kreisverband">KV</acronym> Niedersachsen-Nordost' => 'http://www.heide-piraten.de/',   
            '<acronym title="Kreisverband">KV</acronym> Nienburg/Weser' => 'http://www.piraten-nienburg.de/',   
            '<acronym title="Kreisverband">KV</acronym> Osnabrück' => 'http://www.piraten-osnabrueck.de',   
            '<acronym title="Stadtverband">SV</acronym> Oldenburg' => 'http://www.piratenpartei-oldenburg.de/',   
            '<acronym title="Kreisverband">KV</acronym> Oldenburg Land' => 'http://www.piratenpartei-landkreis-oldenburg.de/',   
            '<acronym title="Kreisverband">KV</acronym> Peine' => 'http://wiki.piratenpartei.de/NDS:Kreisverband_Peine',   
            '<acronym title="Kreisverband">KV</acronym> Stade' => 'http://www.piraten-stade.de/',   
            '<acronym title="Kreisverband">KV</acronym> Schaumburg' => 'http://www.piraten-schaumburg.de/',            
            '<acronym title="Kreisverband">KV</acronym> Wilhelmshaven' => 'http://www.piraten-whv.de/',   
            '<acronym title="Kreisverband">KV</acronym> Wolfenbüttel-Salzgitter' => 'http://www.piratenpartei-wolfenbuettel.de/',   
            '<acronym title="Stadtverband">SV</acronym> Wolfsburg' => 'http://wolfsburg.piratenpartei-nds.de/',   
      
        )
    ),    
    'Nordrhein-Westfalen' => array(
      'title' => 'Piratenpartei Landesverband Nordrhein-Westfalen',
      'url' => 'http://www.piratenpartei-nrw.de/',
      'sublist' => array(   
        
         '<acronym title="Kreisverband">KV</acronym> Bochum' =>'http://piratenbochum.de',
         '<acronym title="Kreisverband">KV</acronym> Bonn' =>'http://piratenpartei-bonn.de/',
         '<acronym title="Kreisverband">KV</acronym> Dortmund' =>'http://wiki.piratenpartei.de/NRW:Dortmund',
         '<acronym title="Kreisverband">KV</acronym> Düsseldorf' =>'http://piratenpartei-duesseldorf.de/',
         '<acronym title="Kreisverband">KV</acronym> Güterslohe' =>'http://www.piratenpartei-guetersloh.de/',
         '<acronym title="Kreisverband">KV</acronym> Hagen' =>'http://wiki.piratenpartei.de/NRW:Hagen/Kreisverband',
         '<acronym title="Kreisverband">KV</acronym> Kleve' =>'http://wiki.piratenpartei.de/NRW:Kreis_Kleve',
         '<acronym title="Kreisverband">KV</acronym> Köln' =>'http://piratenpartei-koeln.de/',
         '<acronym title="Kreisverband">KV</acronym> Krefeld' =>'http://wiki.piratenpartei.de/NRW:Krefeld/Kreisverband',
         '<acronym title="Kreisverband">KV</acronym> Minden-Lübbecke' =>'http://wiki.piratenpartei.de/NRW:Kreis_Minden-L%C3%BCbbecke/Kreisverband',
         '<acronym title="Kreisverband">KV</acronym> Münster' =>'http://www.piratenpartei-muenster.de/',
         '<acronym title="Kreisverband">KV</acronym> Rhein-Sieg-Kreis' =>'http://wiki.piratenpartei.de/NRW:Rhein-Sieg-Kreis',
         '<acronym title="Kreisverband">KV</acronym> Soest' =>'http://www.piratenpartei-soest.de/',
         '<acronym title="Kreisverband">KV</acronym> Wesel' =>'http://wiki.piratenpartei.de/NRW:Kreis_Wesel',
         '<acronym title="Kreisverband">KV</acronym> Bielefeld' =>'http://wiki.piratenpartei.de/NRW:Bielefeld',
         '<acronym title="Kreisverband">KV</acronym> Lippe' =>'http://wiki.piratenpartei.de/NRW:Kreis_Lippe',
         '<acronym title="Kreisverband">KV</acronym> Herford' =>'http://wiki.piratenpartei.de/NRW:Kreis_Herford',

          )
    ),
      'Rheinland-Pfalz' => array(
        'title' => 'Piratenpartei Landesverband Rheinland-Pfalz',
        'url'  => 'http://www.piraten-rlp.de',
        'sublist' => array(
            '<acronym title="Kreisverband">KV</acronym> Bad Kreuznach' => 'http://wiki.piratenpartei.de/<acronym title="Kreisverband">KV</acronym>_Bad_Kreuznach',
            '<acronym title="Kreisverband">KV</acronym> Landau/Südliche Weinstraße' => 'http://wiki.piratenpartei.de/RP:<acronym title="Kreisverband">KV</acronym>_Landau/S%C3%BCdliche_Weinstra%C3%9Fe',
            '<acronym title="Kreisverband">KV</acronym> Mittelhaardt' => 'http://www.piratenpartei-mittelhaardt.de',
            '<acronym title="Kreisverband">KV</acronym>  Rhein-Pfalz' => 'http://wiki.piratenpartei.de/RP:<acronym title="Kreisverband">KV</acronym>_Rhein-Pfalz',
            '<acronym title="Kreisverband">KV</acronym> <acronym title="Kreisverband">KV</acronym> Rheinhessen' => 'http://wiki.piratenpartei.de/RP:<acronym title="Kreisverband">KV</acronym>_Rheinhessen',
            '<acronym title="Kreisverband">KV</acronym> Trier/Trier-Saarburg' => 'http://piraten-trier.de',
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

if (!isset($options['feed_cache_lifetime'])) 
            $options['feed_cache_lifetime'] = $defaultoptions['feed_cache_lifetime'];
if (!isset($options['twitter_cache_lifetime'])) 
            $options['twitter_cache_lifetime'] = $defaultoptions['twitter_cache_lifetime'];
if ($options['feed_cache_lifetime'] < 600) {
    $options['feed_cache_lifetime'] = 1800;
}
// Das holen von feeds sollte auf keinen Fall haeufiger als alle 10 Minuten erfolgen
if ($options['twitter_cache_lifetime'] > $options['feed_cache_lifetime']) {
    $options['twitter_cache_lifetime'] = $options['feed_cache_lifetime'];
}
// Twitter Feeds sollten nicht laenger warten als die allgemeine feeds
 function feed_lifetime_cb( $seconds ) {
            global $options;
            // change the default feed cache recreation period to 2 hours
            return $options['feed_cache_lifetime'];
}
add_filter( 'wp_feed_cache_transient_lifetime' , 'feed_lifetime_cb' );
        

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
        load_theme_textdomain('piratenkleider', get_template_directory() . '/languages');

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
        return ' <a title="'.strip_tags(get_the_title()).'" href="'. get_permalink() . '">' . __( 'Weiterlesen <span class="meta-nav">&rarr;</span>', 'piratenkleider' ) . '</a>';
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


add_filter('wp_get_attachment_url', 'honor_ssl_for_attachments');
function honor_ssl_for_attachments($url) {
	$http = site_url(FALSE, 'http');
	$https = site_url(FALSE, 'https');
        return is_ssl() ? str_replace($http, $https, $url) : $url;
}


if ( ! function_exists( 'piratenkleider_comment' ) ) :
/**
 * Template for comments and pingbacks.
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

function get_piratenkleider_socialmediaicons( $darstellung = 1 ){
    /* 
     * Displays Social Media Icons
     */
    $options = get_option( 'piratenkleider_theme_options' );       
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
    if ( $options['social_facebook'] != "" ){ echo '<li class="facebook"><a href="'.$options['social_facebook'].'"><img src="'.get_template_directory_uri().'/images/social-media/facebook-24x24.png" width="24" height="24" alt="Facebook"></a></li>'; }
    if ( $options['social_twitter'] != "" ){  echo '<li class="twitter"><a href="'.$options['social_twitter'].'"><img src="'.get_template_directory_uri().'/images/social-media/twitter-24x24.png" width="24" height="24" alt="Twitter"></a></li>'; }				
    if ( $options['social_gplus'] != "" ){  echo '<li class="gplus"><a href="'.$options['social_gplus'].'"><img src="'.get_template_directory_uri().'/images/social-media/gplus-24x24.png" width="24" height="24" alt="Google+"></a></li>'; }
    if ( $options['social_diaspora'] != "" ){  echo '<li class="diaspora"><a href="'.$options['social_diaspora'].'"><img src="'.get_template_directory_uri().'/images/social-media/diaspora-24x24.png" width="24" height="24" alt="Diaspora"></a></li>'; }
    if ( $options['social_identica'] != "" ){  echo '<li class="identica"><a href="'.$options['social_identica'].'"><img src="'.get_template_directory_uri().'/images/social-media/identica-24x24.png" width="24" height="24" alt="identi.ca"></a></li>'; }															
    if ( $options['social_youtube'] != "" ){  echo '<li class="youtube"><a href="'.$options['social_youtube'].'"><img src="'.get_template_directory_uri().'/images/social-media/youtube-24x24.png" width="24" height="24" alt="YouTube"></a></li>'; }
    if ( $options['social_itunes'] != "" ){  echo '<li class="itunes"><a href="'.$options['social_itunes'].'"><img src="'.get_template_directory_uri().'/images/social-media/itunes-24x24.png" width="24" height="24" alt="iTunes"></a></li>'; }
    if ( $options['social_flickr'] != "" ){  echo '<li class="flickr"><a href="'.$options['social_flickr'].'"><img src="'.get_template_directory_uri().'/images/social-media/flickr-24x24.png" width="24" height="24" alt="flickr"></a></li>'; }	
    if ( $options['social_delicious'] != "" ){  echo '<li class="delicious"><a href="'.$options['social_delicious'].'"><img src="'.get_template_directory_uri().'/images/social-media/delicious-24x24.png" width="24" height="24" alt="Delicious"></a></li>'; }
    if ( $options['social_flattr'] != "" ){  echo '<li class="flattr"><a href="'.$options['social_flattr'].'"><img src="'.get_template_directory_uri().'/images/social-media/flattr-24x24.png" width="24" height="24" alt="Flattr"></a></li>'; }
    if ( $options['social_feed'] != "" ){  echo '<li class="feed"><a href="'.$options['social_feed'].'"><img src="'.get_template_directory_uri().'/images/social-media/feed-24x24.png" width="24" height="24" alt="RSS/Atom-Feed"></a></li>'; }
    echo '</ul>';
    
        
    if ($zeigeoption ==2) {    
           /* Links an der Seite */
            echo '</div>';
    }
}

/*
 * Anzeige des Sidebar-Menus
 */
function get_piratenkleider_seitenmenu( $zeige_sidebarpagemenu = 1 , $zeige_subpagesonly =1 ){
  global $defaultoptions;
  global $post;
  
    if ($zeige_sidebarpagemenu==1) {   
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

/*
 * Erstellen des Extracts
 */
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
  if (mb_strlen($excerpt)<5) {
      $excerpt = 'Kein Inhalt';
  }
// $excerpt =  closetags(strip_html_tags( $excerpt ));
  if (mb_strlen($excerpt) >  $defaultoptions['teaser_maxlength']) {
    $the_str = mb_substr($excerpt, 0, $defaultoptions['teaser_maxlength']);
    $the_str .= "...";
  }  else {
      $the_str = $excerpt;
  }
  $the_str .= piratenkleider_continue_reading_link();
  return $the_str;
}



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

function wpi_linkexternclass($content){
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


add_action( 'template_redirect', 'rw_relative_urls' );
    function rw_relative_urls() {
        // Don't do anything if:
        // - In feed
        // - In sitemap by WordPress SEO plugin
        if ( is_feed() || get_query_var( 'sitemap' ) )
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
        foreach ( $filters as $filter )
        {
         add_filter( $filter, 'wp_make_link_relative' );
        }
    }

 function wpi_relativeurl($content){
        return preg_replace_callback('/<a[^>]+/', 'wpi_relativeurl_callback', $content);
    }
 
function wpi_relativeurl_callback($matches) {

        $link = $matches[0];
        $site_link = get_bloginfo('url');
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
      echo $before . __( 'Suche', 'piratenkleider' ).'"' . get_search_query() . '"' . $after;
 
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

