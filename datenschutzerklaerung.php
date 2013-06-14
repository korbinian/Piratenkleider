<?php
/* 
 Template Name: Datenschutzerklaerung
 */
?>
<?php 
    get_header();
    global $options;  
     ?>

<div class="section content" id="main-content">
  <div class="row">
    <div class="content-primary">
	
	<?php if ( have_posts() ) while ( have_posts() ) : the_post();         
        $custom_fields = get_post_custom();
        ?>

	<?php
	    $image_url = '';
	    $image_alt = '';
	    if (has_post_thumbnail()) { 
		$thumbid = get_post_thumbnail_id(get_the_ID());
		 // array($options['bigslider-thumb-width'],$options['bigslider-thumb-height'])
		$image_url_data = wp_get_attachment_image_src( $thumbid, 'full');
		$image_url = $image_url_data[0];
		$image_alt = trim(strip_tags( get_post_meta($thumbid, '_wp_attachment_image_alt', true) ));
			
	    } else {
		if (($options['aktiv-platzhalterbilder-indexseiten']==1) && (isset($options['src-default-symbolbild']))) {  
		    $image_url = $options['src-default-symbolbild'];		    
		}
	    }
	    
	    if (isset($image_url) && (strlen($image_url)>4)) { 
		if ($options['indexseitenbild-size']==1) {
		    echo '<div class="content-header-big">';
		} else {
		    echo '<div class="content-header">';
		}
		?>    		    		    		        
		   <h1 class="post-title"><span><?php the_title(); ?></span></h1>
		   <div class="symbolbild"><img src="<?php echo $image_url ?>" alt="">
		   <?php if (isset($image_alt) && (strlen($image_alt)>1)) {
		     echo '<div class="caption">'.$image_alt.'</div>';  
		   }  ?>
		   </div>
		</div>  	
	    <?php } ?>

      <div class="skin">
        <?php if (!(isset($image_url) && (strlen($image_url)>4))) { ?>
	    <h1 class="post-title"><span><?php the_title(); ?></span></h1>
	<?php } ?>
	
	


        <?php the_content(); ?>
        <?php edit_post_link( __( 'Bearbeiten', 'piratenkleider' ), '', '' ); ?>
        <?php endwhile; ?>
          
          
          <p>Die Piratenpartei Deutschland fordert nicht nur strengeren Datenschutz, sie setzt ihn auch selber praktisch um. 
              Personenbezogene Daten werden auf dieser Webseite nur im technisch unbedingt notwendigen Umfang erhoben.
              In keinem Fall werden die erhobenen Daten verkauft oder aus anderen Gr&uuml;nden an Dritte weitergegeben. 
              Sollte es ausnahmsweise doch einmal notwendig werden, ihre Daten an Dritte weiterzugeben, so werden wir sie, 
              f&uuml;r jede &Uuml;bermittlung einzeln, vorher um Erlaubnis fragen.</p>
               <p>
              Die nachfolgende Erkl&auml;rung gibt Ihnen einen &Uuml;berblick dar&uuml;ber, wie wir diesen Schutz gew&auml;hrleisten 
              und welche Art von Daten zu welchem Zweck erhoben werden.</p>
          
               
              <h2>Datenverarbeitung auf dieser Internetseite</h2>
<p>Von ihrem Computer werden verschiedene Daten an uns &uuml;bermittelt, diese sind 
    je nach Browser- und Betriebssytemtyp, -version und -einstellung unterschiedlich. 
    Einige davon k&ouml;nnen sein:</p>
<ul>
<li>Browsertyp/ -version</li>
<li>verwendetes Betriebssystem</li>
<li>Referrer URL (die zuvor besuchte Seite)</li>
<li>Hostname des zugreifenden Rechners (IP Adresse)</li>
<li>Uhrzeit der Serveranfrage.</li>
</ul>
<p>Die Piratenpartei lehnt eine Speicherung derartiger Daten strikt ab.<br />
Sollten unsere Systeme allerdings einmal zu Straftaten missbraucht werden, 
kann es passieren, das wir dazu verpflichtet werden, diese und andere Daten zu
speichern und den Ermittlungsbeh&ouml;rden auszuh&auml;ndigen. Soweit es uns erlaubt ist 
werden wir sie in einem solchen Fall davon unterrichten. Im Falle eines laufenden 
Ermitlungsverfahrens m&uuml;ssten wir diese Daten an Ermitlungsbeh&ouml;rden oder
Privatpersonen herausgeben. In unserem Wiki k&ouml;nnen sie nachlesen, wie sie 
die <a class="extern" href="http://wiki.piratenpartei.de/HowTo">&Uuml;bermittlung aller in diesem 
    Absatz genannten Daten an uns und andere unterbinden</a> k&ouml;nnen.</p>

<h2>Cookies</h2>
<p>Die Internetseiten verwenden an mehreren Stellen sogenannte Cookies.
    Cookies sind kleine Textdateien, die auf Ihrem Rechner abgelegt werden 
    und die Ihr Browser speichert. Cookies richten auf Ihrem Rechner keinen 
    Schaden an und enthalten keine Viren. Die meisten der von uns verwendeten 
    Cookies sind sogenannte "Session-Cookies". Das hei&szlig;t, sie werden nach Ende 
    Ihres Besuchs automatisch gel&ouml;scht.<br />
Cookies k&ouml;nnen es auch erm&ouml;glichen, sie nach Verlassen der Website wiederzuerkennen. 
Leider wird diese Funktion von einigen Firmen dazu missbraucht, das
Surfverhalten von Internetnutzern auszuspionieren. Die Piraten lehnen ein
solches Verhalten als datenschutzwidrig ab.<br />
Im Einzelnen: Das Forum, die Website und das Wiki verwenden Cookies dazu, 
um sie nach dem Einloggen als der Benutzer zu identifizieren, als der sie sich
eingeloggt haben. Im Forum verwenden wir Cookies auch ohne Einloggen dazu ihnen
eine Session bereitstellen zu k&ouml;nnen, so dass sie sehen k&ouml;nnen, ob im Forum 
neue Beitr&auml;ge geschrieben wurden.<br />
In ihren Browsereinstellungen k&ouml;nnen sie die Annahme von Cookies unterbinden.</p>

<h2>Newsletter</h2>
<p>Wenn Sie die von uns angebotenen Mailinglisten empfangen m&ouml;chten, ben&ouml;tigen 
    wir von Ihnen eine g&uuml;ltige E-Mail-Adresse. Weitere Daten werden nicht 
    erhoben. Wir geben ihre E-Mailaddresse niemals an Dritte weiter, Einsicht
    hat nur der Listenmoderator. Ihre Einwilligung zur Speicherung der 
    E-Mail-Adresse sowie deren Nutzung zum Versand der Mailingliste/n k&ouml;nnen 
    Sie jederzeit widerrufen. Wenn sie sich aus dem Verteiler austragen, wird 
    ihre E-Mail-Adresse gel&ouml;scht.</p>

<h2>Auskunftsrecht</h2>
<p>Sie haben jederzeit das Recht auf Auskunft &uuml;ber die bez&uuml;glich Ihrer Person 
    gespeicherten Daten, deren Herkunft und Empf&auml;nger sowie den Zweck der 
    Speicherung. Auskunft &uuml;ber die gespeicherten Daten gibt Ihnen die 
    Piratenpartei Deutschland. Wenden Sie sich dazu bitte an
    <?php if ( (isset($options['dsbemail'])) && (strlen(trim($options['dsbemail']))>1)) {
        echo '<a href="mailto:'.$options['dsbemail'].'">';
        if ((isset($options['dsbperson'])) && (strlen(trim($options['dsbperson']))>1)) {
            echo 'den/die Datenschutzbeauftrage/n ';
            echo $options['dsbperson'];
        }
       echo '</a>.';
    } else {
        echo 'Unbekannt :( (E-Mail-Adresse wurde noch nicht gesetzt!).';
    }
    ?>
    
</p>

<h2>Weitere Informationen</h2>
<p>Ihr Vertrauen ist uns wichtig. Daher werden wir Ihnen jederzeit Rede und 
    Antwort bez&uuml;glich der Verarbeitung Ihrer personenbezogenen Daten stehen. 
    Wenn Sie Fragen haben, die Ihnen diese Datenschutzerkl&auml;rung nicht 
    beantworten konnte oder wenn Sie zu einem Punkt vertiefte Informationen 
    w&uuml;nschen, wenden Sie sich bitte jederzeit an die Piraten. Sie k&ouml;nnen ihre
    Fragen und Anregungen im Forum oder an 
    <?php if ((isset($options['dsbemail']))  && (strlen(trim($options['dsbemail']))>1)) {
        echo '<a href="mailto:'.$options['dsbemail'].'">';
        if ((isset($options['dsbperson']))  && (strlen(trim($options['dsbperson']))>1)) {
            echo 'den/die Datenschutzbeauftrage/n ';
            echo $options['dsbperson'];

        }
       echo '</a>';      
    } else {
        echo 'Unbekannt :( (E-Mail-Adresse wurde noch nicht gesetzt!).';
    }
    ?> 
    stellen.</p>
                   
          
      </div>
    </div>

    <div class="content-aside">
      <div class="skin">

        <h1 class="skip"><?php _e( 'Weitere Informationen', 'piratenkleider' ); ?></h1>   
            <?php

            get_piratenkleider_seitenmenu($options['zeige_sidebarpagemenu'],$options['zeige_subpagesonly'],$options['seitenmenu_mode']);       
            get_sidebar(); ?>
      </div>
    </div>
  </div>
   <?php get_piratenkleider_socialmediaicons(2); ?>
</div>

<?php get_footer(); ?>
