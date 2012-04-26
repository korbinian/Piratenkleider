<?php
/* 
 Template Name: Spenden
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
        <h1 id="page-title"><span>Spenden</span></h1>   
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
          
          
     <?php if ((isset($kontaktinfos['spendenkonto']))
          && (isset($kontaktinfos['spendenempfaenger']))
         && (isset($kontaktinfos['spendenblz']))) { ?>
          <h2>Per Überweisung spenden</h2>
          
        <table>            
        <tbody>
        <tr>
           <th>Empfänger</th>
         <td><?php esc_attr_e( $kontaktinfos['spendenempfaenger'] ); ?></td>
        </tr>
        <tr>
            <th>Kontonummer</th>
         <td><?php esc_attr_e( $kontaktinfos['spendenkonto'] ); ?></td>
        </tr>
        <tr>
           <th>Bankleitzahl</th>
            <td><?php esc_attr_e( $kontaktinfos['spendenblz'] ); ?></td>
        </tr>
        <tr>
          <th>Bank</th>
           <td><?php esc_attr_e( $kontaktinfos['spendenbank'] ); ?></td>
        </tr>
        <tr>
            <th>IBAN</th>
           <td><?php esc_attr_e( $kontaktinfos['spendeniban'] ); ?></td>
        </tr>
        <tr>
           <th>BIC</th>
            <td><?php esc_attr_e( $kontaktinfos['spendenbic'] ); ?></td>
        </tr>
        <tr>
           <th>Verwendungszweck</th>
           <td>Spende von Name, Vorname, Anschrift (ggf. mit Zusatz “Stichwort” 
            und einem konkreten Verwendungszweck)</td>
        </tr>
        </tbody>
        </table>
          
<p>Bei Angabe von Name und Anschrift im Feld <em>Verwendungszweck</em> übersenden 
    wir ab einem Betrag von 200 Euro oder auf Wunsch eine formelle 
    Zuwendungsbestätigung beziehungsweise eine Spendenbescheinigung zur 
    Einreichung beim Finanzamt. Unterhalb dieses Betrages reicht dem Finanzamt 
    der Einzahlungs- oder Überweisungs- oder Abbuchungsbeleg der eigenen Bank.</p>


<h3>Regelmäßige Spenden</h3>
<p>Vielen Dank für Einzelspenden! <br>
    Um aber langfristig planen zu können und Rücklagen für Wahlen aufbauen zu 
    können freuen wir uns auch besonders über regelmäßige Spenden – auch kleine 
    Beträge. Wenn Du einen Dauerauftrag bei Deiner Bank einrichten kannst 
    würde uns das sehr helfen. Schon ein paar Euro im Monat ermöglichen uns 
    auch langfristige Finanzierungen zu übernehmen – wie z.B.  für 
    <a href="http://www.anonym-surfen.de/">Anonymisierungsdienste</a>. Zudem sind 
    unsere Mitglieder aufgerufen freiwillig 1% ihres Netto-Einkommens monatlich
    zu spenden.</p>

<h3>Steuer-Tipp</h3>
<p>Bis zu einer Höhe von 1650 Euro (3300 Euro bei Ehepaaren) pro Jahr können 
    Mitgliedsbeiträge und Spenden an politische Parteien als Steuerermäßigung
    nach § 34g EStG geltend gemacht werden. Diese Steuerermäßigungen wirken 
    sich zu fünfzig Prozent direkt steuermindernd aus. Das bedeutet, für jeden 
    Euro Spende erhält man fünfzig Cent Steuerminderung. Hat man in einem Jahr 
    mehr als 1650 Euro (3300 Euro bei Ehepaaren) an Mitgliedsbeiträgen und 
    Spenden an politische Parteien bezahlt, kann man darüber hinaus gehende 
    Spenden bis zu weiteren 1650 Euro (3300 Euro bei Ehepaaren) als 
    Sonderausgaben nach § 10b EStG geltend machen. Sonderausgaben werden vom zu 
    versteuernden Einkommen abgezogen. Wie viel man hier konkret spart, hängt 
    vom eigenen Steuersatz ab. (Stand: 11/2011)</p>

<?php } else { ?>

<div class="box warning">
    <p>
       
        Für diesen Webauftritt wurden noch keine eigenen Informationen
        zu Spenden (eigene Kontonumer, BLZ u.a.) gespeichert.</p>
        <p>
        Sollten Sie für die Piratenpartei Deutschland spenden wollen, 
        rufen Sie die
        <a href="https://www.piratenpartei.de/mitmachen/spenden/">Spendenseiten der Piratenpartei Deutschland</a>
        auf.        
        
    </p>       
</div>
<?php } ?>

<h2>Wenn einmal etwas unklar sein sollte…</h2>

<p>Unsere Geschäftsstelle steht per E-Mail, Telefon oder Fax zur Verfügung. 
    Alle Wege zu uns sind im Impressum aufgeführt.</p>
          
          
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
