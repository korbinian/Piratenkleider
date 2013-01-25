<?php
/* 
 Template Name: Impressum
 */
?>
<?php get_header();
 $options = get_option( 'piratenkleider_theme_options' );  
 $kontaktinfos = get_option( 'piratenkleider_theme_kontaktinfos' );  
 $bilderoptions = get_option( 'piratenkleider_theme_defaultbilder' ); 
   if (!isset($bilderoptions['src-default-symbolbild'])) 
            $bilderoptions['src-default-symbolbild'] = $defaultoptions['src-default-symbolbild'];

        ?>

<div class="section content" id="main-content">
  <div class="row">
    <div class="content-primary">
      <div class="content-header">
        <h1 id="page-title"><span><?php _e( 'Impressum', 'piratenkleider' ); ?></span></h1>   
       <?php if (has_post_thumbnail()) { 
            echo '<div class="symbolbild">';
              the_post_thumbnail(); 
            echo '</div>';  
        } else {            
           if ($options['aktiv-platzhalterbilder-indexseiten']) { ?>         
            <div class="symbolbild"> 
              <img src="<?php echo $bilderoptions['src-default-symbolbild'] ?>" alt="" >
           </div>                                 
          <?php }     
            }   
         ?>
      </div>
      <div class="skin">

        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
        <?php edit_post_link( __( 'Bearbeiten', 'piratenkleider' ), '', '' ); ?>
        <?php endwhile; ?>
          
          <?php if ((isset($kontaktinfos['impressumdienstanbieter'])) && (strlen(trim($kontaktinfos['impressumdienstanbieter']))>1)) { ?>
          <p>
              Dienstanbieter dieser Seite ist der  
               <?php echo $kontaktinfos['impressumdienstanbieter']; ?>.               
          </p>   
           <?php } else { ?>
          <h2><?php echo  get_bloginfo( 'name' ) ?></h2>  
                
          <p>
                <?php echo  get_bloginfo( 'description' ) ?>
          </p>
          
          <?php } ?>
           <?php if ((isset($kontaktinfos['impressumperson']))&& (strlen(trim($kontaktinfos['impressumperson']))>1)) { ?>
          <p>Verantwortlicher gem&auml;&szlig; &sect;5 TMG ist 
                <?php echo $kontaktinfos['impressumperson']; ?>.
          </p>
           <?php } ?>
          
            <?php if ((isset($kontaktinfos['posttitel'])) && (strlen(trim($kontaktinfos['posttitel']))>1)
                  && (isset($kontaktinfos['poststrasse']))&& (strlen(trim($kontaktinfos['poststrasse']))>1)
                  && (isset($kontaktinfos['poststadt'])) && (strlen(trim($kontaktinfos['poststadt']))>1)) { ?>
                
            <h2>Postanschrift</h2>
            <address>
                <?php echo $kontaktinfos['posttitel']?><br> 
                <?php echo $kontaktinfos['postperson']?><br> 
                <?php echo $kontaktinfos['poststrasse']?><br> 
                <?php echo $kontaktinfos['poststadt']?><br>                 
            </address>                  
           <?php } ?>
           <?php if ((isset($kontaktinfos['kontaktemail'])) && (strlen(trim($kontaktinfos['kontaktemail']))>1)) { ?>
            <h2>E-Mail</h2>   
            <p>
                <a href="mailto:<?php echo $kontaktinfos['kontaktemail']?>"><?php echo $kontaktinfos['kontaktemail']?></a>
            </p>    
          <?php } else { ?>
            <h2>Admin E-Mail</h2>   
            <p>
                <a href="mailto:<?php echo get_bloginfo( 'admin_email' )?>"><?php echo get_bloginfo( 'admin_email' )?></a>
            </p>    
           <?php } ?>
           <?php if ((isset($kontaktinfos['ladungtitel'])) && (strlen(trim($kontaktinfos['ladungtitel']))>1)
                  && (isset($kontaktinfos['ladungstrasse']))&& (strlen(trim($kontaktinfos['ladungstrasse']))>1)
                  && (isset($kontaktinfos['ladungstadt'])) && (strlen(trim($kontaktinfos['ladungstadt']))>1)) { ?>  
            <h2>Ladungsf&auml;hige Anschrift</h2>
             <address>
                <?php echo $kontaktinfos['ladungtitel']?><br> 
                <?php echo $kontaktinfos['ladungperson']?><br> 
                <?php echo $kontaktinfos['ladungstrasse']?><br> 
                <?php echo $kontaktinfos['ladungstadt']?><br>                 
            </address>  
            
          <?php } else { 
               if ((isset($kontaktinfos['posttitel']))  && (strlen(trim($kontaktinfos['posttitel']))>1) 
                  && (isset($kontaktinfos['poststrasse']))  && (strlen(trim($kontaktinfos['poststrasse']))>1)
                  && (isset($kontaktinfos['poststadt'])) && (strlen(trim($kontaktinfos['poststadt']))>1) ) { ?>
            <h2>Ladungsf&auml;hige Anschrift</h2>
             <address>
                <?php echo $kontaktinfos['posttitel']?><br> 
                <?php echo $kontaktinfos['postperson']?><br> 
                <?php echo $kontaktinfos['poststrasse']?><br> 
                <?php echo $kontaktinfos['poststadt']?><br>                 
            </address>              
               <?php } ?>
         <?php } ?>
          
            
            
            <h2>Rechtsvorschriften</h2>
<ul>
<li><a href="http://www.bundestag.de/bundestag/aufgaben/rechtsgrundlagen/pg_pdf.pdf" >Gesetz &uuml;ber politische Parteien (Parteiengesetz)</a></li>
<li><a href="http://wiki.piratenpartei.de/Satzung" >Satzung der Piratenpartei Deutschland</a></li>
<li><a href="http://wiki.piratenpartei.de/Satzungen" >Jeweilige Landessatzung  der Piratenpartei Deutschland</a></li>
</ul>
            
<h2>Haftung f&uuml;r Inhalte</h2>
<p>
    Der Betreiber hat alle in seinem Bereich bereitgestellten Informationen nach 
    bestem Wissen und Gewissen erarbeitet und gepr&uuml;ft. Es wird jedoch keine 
    Gew&auml;hr f&uuml;r die Aktualit&auml;t, Richtigkeit, Vollst&auml;ndigkeit oder Qualit&auml;t und 
    jederzeitige Verf&uuml;gbarkeit der bereitgestellten Informationen &uuml;bernommen.
</p><p>
F&uuml;r etwaige Sch&auml;den, die beim Aufrufen oder Herunterladen von Daten durch 
Computerviren oder der Installation oder Nutzung von Software verursacht 
werden, wird nicht gehaftet.
</p><p>
Namentlich gekennzeichnete Internetseiten und Kommentare geben die Auffassungen 
und Erkenntnisse der abfassenden Personen wieder.
Der Betreiber beh&auml;lt es sich ausdr&uuml;cklich vor, einzelne Webseiten, Kommentare
oder das gesamte Angebot ohne gesonderte Ank&uuml;ndigung zu ver&auml;ndern, 
zu erg&auml;nzen, zu l&ouml;schen oder die Ver&ouml;ffentlichung zeitweise oder endg&uuml;ltig 
einzustellen. </p>

<h2>Links und Verweise</h2>
<p>
Der Betreiber  ist nur f&uuml;r die "eigenen Inhalte", die er zur Nutzung 
bereith&auml;lt, nach den einschl&auml;gigen Gesetzen 
verantwortlich.<br />		
Von diesen eigenen Inhalten sind Querverweise ("Links") auf die Webseiten 
anderer Anbieter zu unterscheiden. 
</p>
<p>
Durch den Querverweis vermittelt der Betreiber  lediglich den Zugang zur Nutzung 
dieser Inhalte. 
F&uuml;r diese "fremden" Inhalte ist er nicht verantwortlich, da er die 
&Uuml;bermittlung der Information nicht veranlasst, den Adressaten der 
&uuml;bermittelten Informationen nicht ausw&auml;hlt und die &uuml;bermittelten 
Informationen auch nicht ausgew&auml;hlt oder ver&auml;ndert hat. Auch eine 
automatische kurzzeitige Zwischenspeicherung dieser "fremden Informationen" 
erfolgt wegen der gew&auml;hlten Aufruf- und Verlinkungsmethodik nicht, so 
dass sich auch dadurch keine Verantwortlichkeit des Betreibers f&uuml;r diese 
fremden Inhalte ergibt. 
</p>

<p>
Bei der erstmaligen Verkn&uuml;pfung mit diesen Internetangeboten haben die 
Autoren der jeweiligen Webseiten oder die Redaktion des Betreibers  den 
fremden Inhalt jedoch daraufhin &uuml;berpr&uuml;ft, ob durch ihn eine 
m&ouml;gliche zivilrechtliche oder strafrechtliche Verantwortlichkeit 
ausgel&ouml;st wird. Sobald der Betreiber  jedoch feststellt oder von anderen 
darauf hingewiesen wird, dass ein konkretes Angebot, zu dem es einen Link 
bereitgestellt hat, eine zivil- oder strafrechtliche Verantwortlichkeit 
ausl&ouml;st, wird es den Verweis auf dieses Angebot unverz&uuml;glich 
aufheben, soweit es technisch m&ouml;glich und zumutbar ist.
</p>

<p>
F&uuml;r illegale, fehlerhafte oder unvollst&auml;ndige Inhalte und insbesondere f&uuml;r
Sch&auml;den, die aus der Nutzung oder Nichtnutzung von Informationen Dritter entstehen,
haftet allein der jeweilige Anbieter der Seite, auf welche verwiesen wurde.
</p>

      
<h2>Urheberrecht</h2>

<p>
Die durch die Seitenbetreiber erstellten Inhalte und Werke auf diesen Seiten 
unterliegen dem deutschen Urheberrecht. 
Soweit nicht anders gekennzeichnet, 
stehen s&auml;mtliche Werke dieses Angebots unter einer 
<a class="extern" href="http://creativecommons.org/licenses/by/3.0/de/" rel="license">    
    Creative Commons Namensnennung 3.0 Deutschland Lizenz</a>.
</p>
<p style="float:right; display: inline; margin: 1em;"><img src="http://i.creativecommons.org/l/by/3.0/de/88x31.png" alt="" /></p>
<p>
    Sie d&uuml;rfen somit
</p>
<ul>
    <li>das Werk bzw. den Inhalt vervielf&auml;ltigen, verbreiten und &ouml;ffentlich 
        zug&auml;nglich machen</li>
    <li>Abwandlungen und Bearbeitungen des Werkes bzw. Inhaltes anfertigen</li>
    <li>das Werk kommerziell nutzen </li>               
</ul>
<p>Zu den folgenden Bedingungen:</p>
<ul><li><b>Namensnennung</b> - Sie m&uuml;ssen den Namen des Autors/Rechteinhabers 
        in der von ihm festgelegten Weise nennen. </li></ul>
    
    
<h3>Verwendete Werke und Lizenzen innerhalb dieses Webauftritts</h3>    
<p>
    Dieses Webangebot verwendet folgende Werke von Dritten:
</p>
<ul>
    <li><a class="extern" href="http://www.yaml.de">YAML CSS Framework</a> (Lizenziert unter der
        <span lang="en">Creative Commons Attribution 2.0 License</span>).</li>
    
    <li><a class="extern" href="http://www.jquery.com">JavaScript Framework jQuery</a> (<span lang="en">GNU General Public License (GPL)</span> Version 2)</li>
    <li><a class="extern" href="http://flex.madebymufffin.com">jQuery FlexSlider</a> (<span lang="en">MIT License</span>)</li>
    <li><a class="extern bebas" href="http://dharmatype.com/dharma-type/bebas-neue.html">Schrift Bebas Neue von Dharmatype</a> (<span lang="en">SIL Open Font License</span> 1.1)</li>
    <?php 
    $theme_data = get_theme_data( get_template_directory(). '/style.css' );
    ?>
    <li><a class="extern" href="<?php echo $theme_data['URI']; ?>">Wordpress Theme <?php echo $theme_data['Name']; ?></a>, Version <?php echo $theme_data['Version']; ?>
    (Lizenziert unter der Creative Commons Namensnennung 3.0 Deutschland Lizenz</a>)  </li>
    <li><a class="extern" href="http://wiki.piratenpartei.de/Grafiken">Wallpaper und Bildmaterial der Piratenpartei Deutschland</a> (Lizenziert unter der Creative Commons Namensnennung 3.0 Deutschland Lizenz</a>)</li>    
    <?php

	$lizenzen = explode("\n", $kontaktinfos['lizenzen']);
	if (is_array($lizenzen)) {
		foreach ($lizenzen as $value) {
			if (trim($value) != "") {
				echo "<li>".$value."</li>";
			}
		}
	}
    ?>
</ul>

<h3>Credits</h3>
    <p>
        Das Wordpress-Theme wurde entwickelt von:     
    </p>
    
   
    <ul>
        <li><a class="extern" href="http://www.xwolf.de">Wolfgang Wiese</a> (Programmierung, Neudesign, CSS, Barrierefreiheit, Dokumentation, Features nach Version 1.1)</li>
        <li><a class="extern" href="http://www.korbinian-polk.de">Korbinian Polk</a> (Erstes Grunddesign und Erstellung eines Childtheme von TwentyTen)</li>               
    </ul>
        


<p>Soweit die Inhalte auf dieser Seite nicht vom Betreiber erstellt wurden, 
    werden die Urheberrechte Dritter beachtet. Insbesondere werden Inhalte 
    Dritter als solche gekennzeichnet. Sollten Sie trotzdem auf eine
    Urheberrechtsverletzung aufmerksam werden, bitten wir um einen entsprechenden 
    Hinweis. Bei Bekanntwerden von Rechtsverletzungen werden wir derartige 
    Inhalte umgehend entfernen.</p>




<h2>Datenschutz</h2>
<p>
Die Nutzung unserer Webseite ist in der Regel ohne Angabe personenbezogener 
Daten m&ouml;glich. Die Speicherung von Verbindungsdaten erfolgt nicht. Soweit auf 
unseren Seiten personenbezogene Daten (beispielsweise Name, Anschrift oder 
eMail-Adressen) erhoben werden, erfolgt dies, soweit m&ouml;glich, stets auf 
freiwilliger Basis. Diese Daten werden ohne Ihre ausdr&uuml;ckliche Zustimmung
nicht an Dritte weitergegeben. 
</p><p>Wir weisen darauf hin, dass die Daten&uuml;bertragung 
im Internet (z.B. bei der Kommunikation per E-Mail) Sicherheitsl&uuml;cken aufweisen 
kann. Ein l&uuml;ckenloser Schutz der Daten vor dem Zugriff durch Dritte ist nicht 
m&ouml;glich. Der Nutzung von im Rahmen der Impressumspflicht ver&ouml;ffentlichten 
Kontaktdaten durch Dritte zur &Uuml;bersendung von nicht ausdr&uuml;cklich angeforderter 
Werbung und Informationsmaterialien wird hiermit ausdr&uuml;cklich widersprochen. 
Die Betreiber der Seiten behalten sich ausdr&uuml;cklich rechtliche Schritte im Falle 
der unverlangten Zusendung von Werbeinformationen, etwa durch Spam-Mails, vor.</p>

      </div>
    </div>

    <div class="content-aside">
      <div class="skin">
        <h1 class="skip"><?php _e( 'Weitere Informationen', 'piratenkleider' ); ?></h1>   
        
         <?php  
             if (!isset($options['zeige_subpagesonly'])) 
            $options['zeige_subpagesonly'] = $defaultoptions['zeige_subpagesonly'];
  
            if (!isset($options['zeige_sidebarpagemenu'])) 
            $options['zeige_sidebarpagemenu'] = $defaultoptions['zeige_sidebarpagemenu'];
            
            if (!isset($options['seitenmenu_mode'])) 
            $options['seitenmenu_mode'] = $defaultoptions['seitenmenu_mode'];
            get_piratenkleider_seitenmenu($options['zeige_sidebarpagemenu'],$options['zeige_subpagesonly'],$options['seitenmenu_mode']);

        
         get_sidebar(); ?>
      </div>
    </div>
  </div>
 <?php get_piratenkleider_socialmediaicons(2); ?>
</div>

<?php get_footer(); ?>
