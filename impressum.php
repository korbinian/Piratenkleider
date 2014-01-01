<?php
/* 
 Template Name: Impressum
 */
?>
<?php get_header();
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
		$image_url_data = wp_get_attachment_image_src( $thumbid, 'full');
		$image_url = $image_url_data[0];
		$attribs = piratenkleider_get_image_attributs($thumbid);
			
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
		    <?php if (isset($attribs["credits"]) && (strlen($attribs["credits"])>1)) {
                           echo '<div class="caption">'.$attribs["credits"].'</div>';  
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
          
          <?php if ((isset($options['impressumdienstanbieter'])) && (strlen(trim($options['impressumdienstanbieter']))>4)) { ?>
          <p>
              Dienstanbieter dieser Seite ist   
               <?php echo $options['impressumdienstanbieter']; ?>.               
          </p>   
           <?php } else { ?>
          <h2><?php echo  get_bloginfo( 'name' ) ?></h2>  
                
          <p>
                <?php echo  get_bloginfo( 'description' ) ?>
          </p>
          
          <?php } ?>
           <?php if ((isset($options['impressumperson']))&& (strlen(trim($options['impressumperson']))>1)) { ?>
          <p>Verantwortlicher gem&auml;&szlig; &sect;5 TMG ist 
                <?php echo $options['impressumperson']; ?>.
          </p>
           <?php } ?>
          
            <?php if ((isset($options['posttitel'])) && (strlen(trim($options['posttitel']))>1)
                  && (isset($options['poststrasse']))&& (strlen(trim($options['poststrasse']))>1)
                  && (isset($options['poststadt'])) && (strlen(trim($options['poststadt']))>1)) { ?>
                
            <h2>Postanschrift</h2>
            <address>
                <?php echo $options['posttitel']?><br> 
                <?php  if ((isset($options['postperson'])) && (strlen(trim($options['postperson']))>4)) { 
                    echo $options['postperson']. "<br>"; 
                  }  
                  echo $options['poststrasse']."<br>";
                  echo $options['poststadt']."<br>";  
                ?>  
            </address>                  
           <?php } ?>
          
            <h2>Digitale Kontaktaufnahme</h2>   
            <ul>
           <?php if ((isset($options['kontaktemail'])) && (strlen(trim($options['kontaktemail']))>4)) { ?>  
                <li>E-Mail: <a href="mailto:<?php echo $options['kontaktemail']?>"><?php echo $options['kontaktemail']?></a></li>
          <?php } else { ?>
                <li>E-Mail: <a href="mailto:<?php echo get_bloginfo( 'admin_email' )?>"><?php echo get_bloginfo( 'admin_email' )?></a></li>
           <?php } 
             if ((isset($options['kontakttelefon'])) && (strlen(trim($options['kontakttelefon']))>4)) { ?>      
             <li>Telefon: <?php echo $options['kontakttelefon']?></li>
            <?php } 
             if ((isset($options['kontaktfax'])) && (strlen(trim($options['kontaktfax']))>4)) { ?>      
             <li>Fax: <?php echo $options['kontaktfax']?></li>
            <?php } ?>
          
            </ul>
          
            
           <?php if ((isset($options['ladungtitel'])) && (strlen(trim($options['ladungtitel']))>1)
                  && (isset($options['ladungstrasse']))&& (strlen(trim($options['ladungstrasse']))>1)
                  && (isset($options['ladungstadt'])) && (strlen(trim($options['ladungstadt']))>1)) { ?>  
            <h2>Ladungsf&auml;hige Anschrift</h2>
             <address>
                 <?php 
                echo $options['ladungtitel']."<br>";
                if ((isset($options['ladungperson'])) && (strlen(trim($options['ladungperson']))>4)) { 
                echo $options['ladungperson']."<br>";
                }
                echo $options['ladungstrasse']."<br>"; 
                echo $options['ladungstadt']."<br>";             
                ?>
            </address>  
            
          <?php } else { 
               if ((isset($options['posttitel']))  && (strlen(trim($options['posttitel']))>1) 
                  && (isset($options['poststrasse']))  && (strlen(trim($options['poststrasse']))>1)
                  && (isset($options['poststadt'])) && (strlen(trim($options['poststadt']))>1) ) { ?>
            <h2>Ladungsf&auml;hige Anschrift</h2>
             <address>
                <?php 
                echo $options['posttitel']."<br>";
                 if ((isset($options['postperson'])) && (strlen(trim($options['postperson']))>1)) { 
                 echo $options['postperson']."<br>";
                }
                 echo $options['poststrasse']."<br>"; 
                  echo $options['poststadt']."<br>";
                      ?>
            </address>              
               <?php } ?>
         <?php } 
         
         
         if ($options['zeigerechtsvorschriften']==1) { ?>
            
            <h2>Rechtsvorschriften</h2>
    <ul>
    <li><a href="http://www.bundestag.de/bundestag/aufgaben/rechtsgrundlagen/pg_pdf.pdf" >Gesetz &uuml;ber politische Parteien (Parteiengesetz)</a></li>
    <li><a href="http://wiki.piratenpartei.de/Satzung" >Satzung der Piratenpartei Deutschland</a></li>
    <li><a href="http://wiki.piratenpartei.de/Satzungen" >Jeweilige Landessatzung  der Piratenpartei Deutschland</a></li>
    </ul>
            
            <?php } ?>
            
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

<h3>Lizenz</h3>
<p>
Die durch die Seitenbetreiber erstellten Inhalte und Werke auf diesen Seiten 
unterliegen dem deutschen Urheberrecht. 
Soweit nicht anders gekennzeichnet, 
stehen s&auml;mtliche Werke dieses Angebots unter einer 
<a class="extern" href="http://creativecommons.org/licenses/by/3.0/de/" rel="license">    
    Creative Commons Namensnennung 3.0 Deutschland Lizenz</a>.
</p>
<p style="float:right; display: inline; margin: 1em;"><img src="<?php echo get_template_directory_uri(); ?>/images/cc-88x31.png" alt="" /></p>
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
    $theme_data = wp_get_theme();
    ?>
    <li><a class="extern" href="<?php echo $theme_data['URI']; ?>">Wordpress Theme <?php echo $theme_data->Name; ?></a>, Version <?php echo $theme_data->Version; ?>
    (Lizenziert unter der Creative Commons Namensnennung 3.0 Deutschland Lizenz</a>)  </li>
    <li>Fotos und Symbolbilder von Tobias M. Eckrich 
    (Lizenziert unter der Creative Commons Namensnennung 3.0 Deutschland Lizenz</a>)</li> 
    <li><a class="extern" href="http://wiki.piratenpartei.de/Grafiken">Wallpaper und Bildmaterial der Piratenpartei Deutschland</a> 
    (Lizenziert unter der Creative Commons Namensnennung 3.0 Deutschland Lizenz</a>)</li>    


    <?php

	$lizenzen = explode("\n", $options['lizenzen']);
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
        Das Wordpress-Theme <a class="extern" href="http://www.piratenkleider.de">Piratenkleider</a> wurde entwickelt von:     
    </p>
    <ul>
        <li>Wolfgang Wiese</a> (Neuprogrammierung, Neudesign, CSS, Barrierefreiheit, Dokumentation, Features nach Version 1.1)</li>
        <li>Korbinian Polk, Simon Stützer, Bernd Schreiner (Erstes Grunddesign und Erstellung eines Childtheme von TwentyTen)</li>               
    </ul>
        


<p>Soweit die Inhalte auf dieser Seite nicht vom Betreiber erstellt wurden, 
    werden die Urheberrechte Dritter beachtet. Insbesondere werden Inhalte 
    Dritter als solche gekennzeichnet. Sollten Sie trotzdem auf eine
    Urheberrechtsverletzung aufmerksam werden, bitten wir um einen entsprechenden 
    Hinweis. Bei Bekanntwerden von Rechtsverletzungen werden wir derartige 
    Inhalte umgehend entfernen.</p>




<h2>Datenschutz</h2>
<p>
Die Nutzung des Webangebots ist ohne Angabe personenbezogener Daten m&ouml;glich. 
Eine Speicherung von Verbindungsdaten (beispielsweise die aktuell genutzte 
IP-Adresse in Kombination mit Zeitpunkt und einer Browseridentifikation) erfolgt 
nicht.  
Im System eintreffende IP-Adressen werden noch vor jeglicher Weiterverarbeitung
anonymisiert.<br>
Zu statistischen Zwecken werden Zugriffe auf Seiten des Webangebotes 
verarbeitet. Dies erfolgt jedoch nur ohne personenbeziehbare Verbindungsdaten.
</p>
<p>
Die Nutzung von Kommentaren erfolgt auf freiwilliger Basis. Hier
werden zur Wiedererkennung der verschiedenen Kommentatoren Name und E-Mailadresse
abgefragt. Diese Daten werden nicht verifiziert. Es ist jedem Benutzer möglich, 
hier unzutreffende Daten einzugeben.
</p>
<p>Wir weisen darauf hin, dass die Daten&uuml;bertragung 
im Internet allgemein (z.B. bei der Kommunikation per E-Mail) Sicherheitsl&uuml;cken aufweisen 
kann. Ein l&uuml;ckenloser Schutz der Daten vor dem Zugriff durch Dritte ist nicht 
m&ouml;glich. 
</p>

<h3>Einbindung von Diensten und Inhalten Dritter</h3>
<p>
Es kann vorkommen, dass innerhalb dieses Webangebots Inhalte Dritter,
wie zum Beispiel Videos von YouTube, Kartenmaterial von Google-Maps,
RSS-Feeds oder Grafiken von anderen Webseiten eingebunden werden.
<br>
Wir bemühen uns nur solche Inhalte zu verwenden, die direkt auf diesem
Webauftritt liegen und somit keinem anderen Dienst ein Tracking
ermöglichen.<br>
Leider ist dies, insbesondere bei Videostreams und anderen Angeboten,
die nur auf externen Plattformen bereit gestellt werden, oft
nicht möglich. In diesen F&auml;llen haben wir keinen Einfluss darauf, falls
die Dritt-Anbieter die IP-Adresse oder Eigenschaften des verwendeten
Browsers speichern und auswerten.
<br>
Bei der Einbindung von Inhalten, bei denen die Möglichkeit besteht,
Tracking zu umgehen, wird dieses genutzt. Beispielsweise bei der Nutzung
von youtube-nocookie.com anstelle von youtube.com f&uuml;r die
Einbindung von Videos.
</p>


<h2>Sonstiges</h2>
<p>
Der Nutzung von im Rahmen der Impressumspflicht ver&ouml;ffentlichten 
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

            get_piratenkleider_seitenmenu($options['zeige_sidebarpagemenu'],$options['zeige_subpagesonly'],$options['seitenmenu_mode']);

        
         get_sidebar(); ?>
      </div>
    </div>
  </div>
 <?php get_piratenkleider_socialmediaicons(2); ?>
</div>

<?php get_footer(); ?>
