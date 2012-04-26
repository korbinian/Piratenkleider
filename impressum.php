<?php
/* 
 Template Name: Impressum
 */
?>
<?php get_header();
 $options = get_option( 'piratenkleider_theme_options' );  
 $kontaktinfos = get_option( 'piratenkleider_theme_kontaktinfos' );  
        if (!isset($options['src-default-symbolbild'])) 
            $options['src-default-symbolbild'] = $defaultoptions['src-default-symbolbild'];?>

<div class="section content">
  <div class="row">
    <div class="content-primary">
      <div class="content-header">
        <h1 id="page-title"><span>Impressum</span></h1>   
       <?php if (has_post_thumbnail()) { 
            echo '<div class="symbolbild">';
              the_post_thumbnail(); 
            echo '</div>';  
        } else {            
           if ($options['aktiv-platzhalterbilder-indexseiten']) { ?>         
            <div class="symbolbild"> 
              <img src="<?php echo $options['src-default-symbolbild']?>" alt="" >
           </div>                                 
          <?php }     
            }   
         ?>
      </div>
      <div class="skin">

        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
        <?php edit_post_link( __( 'Bearbeiten', 'twentyten' ), '', '' ); ?>
        <?php endwhile; ?>
          
          <?php if (isset($kontaktinfos['impressumdienstanbieter'])) { ?>
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
           <?php if (isset($kontaktinfos['impressumperson'])) { ?>
           <p>Verantwortlicher gemäß §5 TMG ist 
                <?php echo $kontaktinfos['impressumperson']; ?>.
          </p>
           <?php } ?>
          
            <?php if ((isset($kontaktinfos['posttitel'])) 
                  && (isset($kontaktinfos['poststrasse']))
                  && (isset($kontaktinfos['poststadt']))) { ?>
                
            <h2>Postanschrift</h2>
            <address>
                <?php echo $kontaktinfos['posttitel']?><br> 
                <?php echo $kontaktinfos['postperson']?><br> 
                <?php echo $kontaktinfos['poststrasse']?><br> 
                <?php echo $kontaktinfos['poststadt']?><br>                 
            </address>                  
           <?php } ?>
           <?php if (isset($kontaktinfos['kontaktemail'])) { ?>
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
           <?php if ((isset($kontaktinfos['ladungtitel'])) 
                  && (isset($kontaktinfos['ladungstrasse']))
                  && (isset($kontaktinfos['ladungstadt']))) { ?>  
            <h2>Ladungsfähige Anschrift</h2>
             <address>
                <?php echo $kontaktinfos['ladungtitel']?><br> 
                <?php echo $kontaktinfos['ladungperson']?><br> 
                <?php echo $kontaktinfos['ladungstrasse']?><br> 
                <?php echo $kontaktinfos['ladungstadt']?><br>                 
            </address>  
            
          <?php } else { 
               if ((isset($kontaktinfos['posttitel'])) 
                  && (isset($kontaktinfos['poststrasse']))
                  && (isset($kontaktinfos['poststadt']))) { ?>
            <h2>Ladungsfähige Anschrift</h2>
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
<li><a href="http://www.bundestag.de/dokumente/rechtsgrundlagen/pg_pdf.pdf" >Gesetz über politische Parteien (Parteiengesetz)</a></li>
<li><a href="http://wiki.piratenpartei.de/Satzung_des_Landesverband_Bayern" >Satzung des Landesverbands Bayern der Piratenpartei Deutschland</a></li>
<li><a href="http://wiki.piratenpartei.de/Satzung" >Satzung der Piratenpartei Deutschland</a></li>
</ul>
            
<h2>Haftung für Inhalte</h2>
<p>
    Der Betreiber hat alle in seinem Bereich bereitgestellten Informationen nach 
    bestem Wissen und Gewissen erarbeitet und geprüft. Es wird jedoch keine 
    Gewähr für die Aktualität, Richtigkeit, Vollständigkeit oder Qualität und 
    jederzeitige Verfügbarkeit der bereitgestellten Informationen übernommen.
</p><p>
Für etwaige Schäden, die beim Aufrufen oder Herunterladen von Daten durch 
Computerviren oder der Installation oder Nutzung von Software verursacht 
werden, wird nicht gehaftet.
</p><p>
Namentlich gekennzeichnete Internetseiten und Kommentare geben die Auffassungen 
und Erkenntnisse der abfassenden Personen wieder.
Der Betreiber behält es sich ausdrücklich vor, einzelne Webseiten, Kommentare
oder das gesamte Angebot ohne gesonderte Ankündigung zu verändern, 
zu ergänzen, zu löschen oder die Veröffentlichung zeitweise oder endgültig 
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
stehen sämtliche Werke dieses Angebots unter einer 
<a href="http://creativecommons.org/licenses/by/3.0/de/" rel="license">    
    Creative Commons Namensnennung 3.0 Deutschland Lizenz</a>.
</p>
<p style="float:right; display: inline; margin: 1em;"><img src="http://i.creativecommons.org/l/by/3.0/de/88x31.png" alt="" /></p>
<p>
    Sie dürfen somit
</p>
<ul>
    <li>das Werk bzw. den Inhalt vervielfältigen, verbreiten und öffentlich 
        zugänglich machen</li>
    <li>Abwandlungen und Bearbeitungen des Werkes bzw. Inhaltes anfertigen</li>
    <li>das Werk kommerziell nutzen </li>               
</ul>
<p>Zu den folgenden Bedingungen:</p>
<ul><li><b>Namensnennung</b> — Sie müssen den Namen des Autors/Rechteinhabers 
        in der von ihm festgelegten Weise nennen. </li></ul>
    
    
<h3>Verwendete Werke und Lizenzen innerhalb dieses Webauftritts</h3>    
<p>
    Dieses Webangebot verwendet folgende Werke von Dritten:
</p>
<ul>
    <li><a href="http://www.yaml.de">YAML CSS Framework</a> (Lizensiert unter der
        Creative Commons Attribution 2.0 License).</li>
    
    <li><a href="http://www.jquery.com">JavaScript Framework jQuery</a> (GNU General Public License (GPL) Version 2)</li>
    <li><a href="http://flex.madebymufffin.com">jQuery FlexSlider</a> (MIT license)</li>
    <?php 
    $theme_data = get_theme_data( get_theme_root() . '/Piratenkleider/style.css' );
    ?>
    <li><a href="<?php echo $theme_data['URI']; ?>">Wordpress Theme <?php echo $theme_data['Name']; ?></a>, Version <?php echo $theme_data['Version']; ?>
    (Lizensiert unter der Creative Commons Namensnennung 3.0 Deutschland Lizenz</a>).</li>
   
        
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
Daten möglich. Die Speicherung von Verbindungsdaten erfolgt nicht. Soweit auf 
unseren Seiten personenbezogene Daten (beispielsweise Name, Anschrift oder 
eMail-Adressen) erhoben werden, erfolgt dies, soweit möglich, stets auf 
freiwilliger Basis. Diese Daten werden ohne Ihre ausdrückliche Zustimmung
nicht an Dritte weitergegeben. 
</p><p>Wir weisen darauf hin, dass die Datenübertragung 
im Internet (z.B. bei der Kommunikation per E-Mail) Sicherheitslücken aufweisen 
kann. Ein lückenloser Schutz der Daten vor dem Zugriff durch Dritte ist nicht 
möglich. Der Nutzung von im Rahmen der Impressumspflicht veröffentlichten 
Kontaktdaten durch Dritte zur Übersendung von nicht ausdrücklich angeforderter 
Werbung und Informationsmaterialien wird hiermit ausdrücklich widersprochen. 
Die Betreiber der Seiten behalten sich ausdrücklich rechtliche Schritte im Falle 
der unverlangten Zusendung von Werbeinformationen, etwa durch Spam-Mails, vor.</p>

      </div>
    </div>

    <div class="content-aside">
      <div class="skin">

        <h1 class="skip">Weitere Informationen</h1>   
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
        get_sidebar(); ?>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
