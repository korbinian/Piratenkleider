<?php
/* 
 Template Name: Spenden
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
        <h1 id="page-title"><span><?php _e( 'Spenden', 'piratenkleider' ); ?></span></h1>   
        <?php if (has_post_thumbnail()) { 
            echo '<div class="symbolbild">';
              the_post_thumbnail(); 
            echo '</div>';  
        } else {            
           if ($options['aktiv-platzhalterbilder-indexseiten']) { ?>         
            <div class="symbolbild"> 
              <img src="<?php echo $bilderoptions['src-default-symbolbild']?>" alt="" >
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
          
          
     <?php if ((isset($kontaktinfos['spendenkonto'])) && (strlen(trim($kontaktinfos['spendenkonto']))>1)
          && (isset($kontaktinfos['spendenempfaenger']))&& (strlen(trim($kontaktinfos['spendenempfaenger']))>1)
         && (isset($kontaktinfos['spendenblz']))&& (strlen(trim($kontaktinfos['spendenblz']))>1)) { ?>
          <h2><?php _e( 'Per &Uuml;berweisung spenden', 'piratenkleider' ); ?></h2>
          
        <table>            
        <tbody>
        <tr>
           <th><?php _e('Empf&auml;nger', 'piratenkleider' ); ?></th>
         <td><?php echo esc_attr( $kontaktinfos['spendenempfaenger'] ); ?></td>
        </tr>
        <tr>
            <th><?php _e('Kontonummer', 'piratenkleider' ); ?></th>
         <td><?php echo esc_attr( $kontaktinfos['spendenkonto'] ); ?></td>
        </tr>
        <tr>
           <th><?php _e('Bankleitzahl', 'piratenkleider' ); ?></th>
            <td><?php echo esc_attr( $kontaktinfos['spendenblz'] ); ?></td>
        </tr>
        <tr>
          <th><?php _e('Bank', 'piratenkleider' ); ?></th>
           <td><?php echo esc_attr( $kontaktinfos['spendenbank'] ); ?></td>
        </tr>
        <tr>
            <th><?php _e('IBAN', 'piratenkleider' ); ?></th>
           <td><?php echo esc_attr( $kontaktinfos['spendeniban'] ); ?></td>
        </tr>
        <tr>
           <th><?php _e('BIC', 'piratenkleider' ); ?></th>
            <td><?php echo esc_attr( $kontaktinfos['spendenbic'] ); ?></td>
        </tr>
        <tr>
           <th><?php _e('Verwendungszweck', 'piratenkleider' ); ?></th>
           <td><?php _e('Spende von Name, Vorname, Anschrift (ggf. mit Zusatz "Stichwort" 
            und einem konkreten Verwendungszweck)', 'piratenkleider' ); ?></td>
        </tr>
        </tbody>
        </table>
          
<p>Bei Angabe von Name und Anschrift im Feld <em>Verwendungszweck</em> &uuml;bersenden 
    wir ab einem Betrag von 200 Euro oder auf Wunsch eine formelle 
    Zuwendungsbest&auml;tigung beziehungsweise eine Spendenbescheinigung zur 
    Einreichung beim Finanzamt. Unterhalb dieses Betrages reicht dem Finanzamt 
    der Einzahlungs- oder &Uuml;berweisungs- oder Abbuchungsbeleg der eigenen Bank.</p>


<h3>Regelm&auml;&szlig;ige Spenden</h3>
<p>Vielen Dank f&uuml;r Einzelspenden! <br>
    Um aber langfristig planen zu k&ouml;nnen und R&uuml;cklagen f&uuml;r Wahlen aufbauen zu 
    k&ouml;nnen freuen wir uns auch besonders &uuml;ber regelm&auml;&szlig;ige Spenden - auch kleine 
    Betr&auml;ge. Wenn Du einen Dauerauftrag bei Deiner Bank einrichten kannst 
    w&uuml;rde uns das sehr helfen. Schon ein paar Euro im Monat erm&ouml;glichen uns 
    auch langfristige Finanzierungen zu &uuml;bernehmen - wie z.B.  f&uuml;r 
    <a class="extern" href="http://www.anonym-surfen.de/">Anonymisierungsdienste</a>. Zudem sind 
    unsere Mitglieder aufgerufen freiwillig 1% ihres Netto-Einkommens monatlich
    zu spenden.</p>

<h3>Steuer-Tipp</h3>
<p>Bis zu einer H&ouml;he von 1650 Euro (3300 Euro bei Ehepaaren) pro Jahr k&ouml;nnen 
    Mitgliedsbeitr&auml;ge und Spenden an politische Parteien als Steuererm&auml;&szlig;igung
    nach  &sect; 34g EStG geltend gemacht werden. Diese Steuererm&auml;&szlig;igungen wirken 
    sich zu f&uuml;nfzig Prozent direkt steuermindernd aus. Das bedeutet, f&uuml;r jeden 
    Euro Spende erh&auml;lt man f&uuml;nfzig Cent Steuerminderung. Hat man in einem Jahr 
    mehr als 1650 Euro (3300 Euro bei Ehepaaren) an Mitgliedsbeitr&auml;gen und 
    Spenden an politische Parteien bezahlt, kann man dar&uuml;ber hinaus gehende 
    Spenden bis zu weiteren 1650 Euro (3300 Euro bei Ehepaaren) als 
    Sonderausgaben nach &sect; 10b EStG geltend machen. Sonderausgaben werden vom zu 
    versteuernden Einkommen abgezogen. Wie viel man hier konkret spart, h&auml;ngt 
    vom eigenen Steuersatz ab. (Stand: 11/2011)</p>

<?php } else { ?>

<div class="box warning">
    <p>
       
        F&uuml;r diesen Webauftritt wurden noch keine eigenen Informationen
        zu Spenden (eigene Kontonumer, BLZ u.a.) gespeichert.</p>
        <p>
        Sollten Sie f&uuml;r die Piratenpartei Deutschland spenden wollen, 
        rufen Sie die
        <a class="extern" href="https://www.piratenpartei.de/mitmachen/spenden/">Spendenseiten der Piratenpartei Deutschland</a>
        auf.        
        
    </p>       
</div>
<?php } ?>

<h2>Wenn einmal etwas unklar sein sollte...</h2>

<p>Unsere Gesch&auml;ftsstelle steht per E-Mail, Telefon oder Fax zur Verf&uuml;gung. 
    Alle Wege zu uns sind im Impressum aufgef&uuml;hrt.</p>
          
          
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
