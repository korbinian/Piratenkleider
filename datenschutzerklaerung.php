<?php
/* 
 Template Name: Datenschutzerklaerung
 */
?>
<?php get_header();
        if (!isset($options['src-default-symbolbild'])) 
            $options['src-default-symbolbild'] = $defaultoptions['src-default-symbolbild'];?>

<div class="section content">
  <div class="row">
    <div class="content-primary">
      <div class="content-header">
        <h1 id="page-title"><span>Datenschutzerklärung</span></h1>
         <div class="symbolbild"> 
              <img src="<?php echo $options['src-default-symbolbild']?>" alt="" >
           </div>      
      </div>
      <div class="skin">

          <p>Die Piratenpartei Deutschland fordert nicht nur strengeren Datenschutz, sie setzt ihn auch selber praktisch um. 
              Personenbezogene Daten werden auf dieser Webseite nur im technisch unbedingt notwendigen Umfang erhoben.
              In keinem Fall werden die erhobenen Daten verkauft oder aus anderen Gründen an Dritte weitergegeben. 
              Sollte es ausnahmsweise doch einmal notwendig werden, ihre Daten an Dritte weiterzugeben, so werden wir sie, 
              für jede Übermittlung einzeln, vorher um Erlaubnis fragen.</p>
               <p>
              Die nachfolgende Erklärung gibt Ihnen einen Überblick darüber, wie wir diesen Schutz gewährleisten 
              und welche Art von Daten zu welchem Zweck erhoben werden.</p>
          
               
              <h3>Datenverarbeitung auf dieser Internetseite</h3>
<p>Von ihrem Computer werden verschiedene Daten an uns übermittelt, diese sind 
    je nach Browser- und Betriebssytemtyp, -version und -einstellung unterschiedlich. 
    Einige davon können sein:</p>
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
speichern und den Ermittlungsbehörden auszuhändigen. Soweit es uns erlaubt ist 
werden wir sie in einem solchen Fall davon unterrichten. Im Falle eines laufenden 
Ermitlungsverfahrens müssten wir diese Daten an Ermitlungsbehörden oder
Privatpersonen herausgeben. In unserem Wiki können sie nachlesen, wie sie 
die <a href="http://wiki.piratenpartei.de/HowTo">Übermittlung aller in diesem 
    Absatz genannten Daten an uns und andere unterbinden</a> können.</p>

<h3>Cookies</h3>
<p>Die Internetseiten verwenden an mehreren Stellen sogenannte Cookies.
    Cookies sind kleine Textdateien, die auf Ihrem Rechner abgelegt werden 
    und die Ihr Browser speichert. Cookies richten auf Ihrem Rechner keinen 
    Schaden an und enthalten keine Viren. Die meisten der von uns verwendeten 
    Cookies sind sogenannte „Session-Cookies“. Das heißt, sie werden nach Ende 
    Ihres Besuchs automatisch gelöscht.<br />
Cookies können es auch ermöglichen, sie nach Verlassen der Website wiederzuerkennen. 
Leider wird diese Funktion von einigen Firmen dazu missbraucht, das
Surfverhalten von Internetnutzern auszuspionieren. Die Piraten lehnen ein
solches Verhalten als datenschutzwidrig ab.<br />
Im Einzelnen: Das Forum, die Website und das Wiki verwenden Cookies dazu, 
um sie nach dem Einloggen als der Benutzer zu identifizieren, als der sie sich
eingeloggt haben. Im Forum verwenden wir Cookies auch ohne Einloggen dazu ihnen
eine Session bereitstellen zu können, so dass sie sehen können, ob im Forum 
neue Beiträge geschrieben wurden.<br />
In ihren Browsereinstellungen können sie die Annahme von Cookies unterbinden.</p>

<h3>Newsletter</h3>
<p>Wenn Sie die von uns angebotenen Mailinglisten empfangen möchten, benötigen 
    wir von Ihnen eine gültige E-Mail-Adresse. Weitere Daten werden nicht 
    erhoben. Wir geben ihre E-Mailaddresse niemals an Dritte weiter, Einsicht
    hat nur der Listenmoderator. Ihre Einwilligung zur Speicherung der 
    E-Mail-Adresse sowie deren Nutzung zum Versand der Mailingliste/n können 
    Sie jederzeit widerrufen. Wenn sie sich aus dem Verteiler austragen, wird 
    ihre E-Mail-Adresse gelöscht.</p>

<h3>Auskunftsrecht</h3>
<p>Sie haben jederzeit das Recht auf Auskunft über die bezüglich Ihrer Person 
    gespeicherten Daten, deren Herkunft und Empfänger sowie den Zweck der 
    Speicherung. Auskunft über die gespeicherten Daten gibt Ihnen die 
    Piratenpartei Deutschland. Wenden Sie sich dazu bitte an
    <a title="bundesbeauftragter@piraten-dsb.de" href="mailto:bundesbeauftragter@piraten-dsb.de">bundesbeauftragter@piraten-dsb.de</a>.</p>

<h3>Weitere Informationen</h3>
<p>Ihr Vertrauen ist uns wichtig. Daher werden wir Ihnen jederzeit Rede und 
    Antwort bezüglich der Verarbeitung Ihrer personenbezogenen Daten stehen. 
    Wenn Sie Fragen haben, die Ihnen diese Datenschutzerklärung nicht 
    beantworten konnte oder wenn Sie zu einem Punkt vertiefte Informationen 
    wünschen, wenden Sie sich bitte jederzeit an die Piraten. Sie können ihre
    Fragen und Anregungen im Forum oder unter 
    <a title="bundesbeauftragter@piraten-dsb.de" href="mailto:bundesbeauftragter@piraten-dsb.de">bundesbeauftragter@piraten-dsb.de</a> stellen.</p>
                   
          
      </div>
    </div>

    <div class="content-aside">
      <div class="skin">

          
        <?php 
       if ( has_nav_menu( 'primary' ) ) {
            wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary', 'walker'  => new My_Walker_Nav_Menu()) );      
        } else { 
        ?>
          <ul class="menu">
              <?php  wp_page_menu( ); ?>
          </ul>
           <?php 
         } 
        $custom_fields = get_post_custom();
        if ($custom_fields['right_column'][0]<>'') {
            echo $custom_fields['right_column'][0]; 
        }  
         ?>
         <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
