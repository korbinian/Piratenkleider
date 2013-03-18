<?php

add_action( 'admin_init', 'theme_options_init' );
add_action( 'admin_menu', 'theme_options_add_page' );

/**
 * Init plugin options to white list our options
 */
function theme_options_init(){
	register_setting( 'piratenkleider_options', 'piratenkleider_theme_options', 'theme_options_validate' );
        register_setting( 'piratenkleider_defaultbilder', 'piratenkleider_theme_defaultbilder', 'theme_defaultbilder_validate' );
        register_setting( 'piratenkleider_kontaktinfos', 'piratenkleider_theme_kontaktinfos', 'theme_kontaktinfos_validate' );
        register_setting( 'piratenkleider_designspecials', 'piratenkleider_theme_designspecials', 'theme_designspecials_validate' );
}

/**
 * Load up the menu page
 */
function theme_options_add_page() {
	add_theme_page( __( 'Takelage einstellen', 'piratenkleider' ),
                        __( 'Takelage einstellen', 'piratenkleider' ), 
                       'edit_theme_options', 'theme_options', 'theme_options_do_page' );
         
        add_theme_page( __( 'Segel setzen', 'piratenkleider' ), 
                __( 'Segel setzen', 'piratenkleider' ), 
                'edit_theme_options', 'theme_defaultbilder', 'theme_defaultbilder_do_page' );
          
        add_theme_page( __( 'Captn & Crew', 'piratenkleider' ), 
                __( 'Captn & Crew', 'piratenkleider' ), 
                'edit_theme_options', 'theme_kontaktinfos', 'theme_kontaktinfos_do_page' );
        add_theme_page( __( 'Kl&uuml;verbaum', 'piratenkleider' ),
                __( 'Kl&uuml;verbaum', 'piratenkleider' ), 
                'edit_theme_options', 'theme_designspecials', 'theme_designspecials_do_page' );
}


/**
 * Create the options page
 */
function theme_options_do_page($tab = '') {
        global $setoptions;  
	if ( ! isset( $_REQUEST['settings-updated'] ) )
		$_REQUEST['settings-updated'] = false;
       ?>

	<div class="wrap">            
            <div class="piratenkleider-optionen">  <!-- begin: .piratenkleider-optionen -->    
		<?php screen_icon(); echo "<h2>" . wp_get_theme().': ' . __( 'Takelage einstellen', 'piratenkleider' ) . "</h2>"; ?>

		<?php if ( false !== $_REQUEST['settings-updated'] ) : ?>
		<div class="updated fade"><p><strong><?php _e( 'Optionen wurden gespeichert.', 'piratenkleider' ); ?></strong></p></div>
		<?php endif; 

        if (isset($_GET['tab'])) {
            $tab = $_GET['tab'];
        }
        if ((!isset($tab)) || (empty($tab))) {
            $tab = "kopfteil";
        }
        if (!isset($setoptions['piratenkleider_theme_options'][$tab])) {
            echo "Invalid Tab-Option or undefined Option-Field $tab";            
        }        
        $options= get_option( 'piratenkleider_theme_options' );	

        
        echo "<h3 class=\"nav-tab-wrapper\">\n";
        foreach($setoptions['piratenkleider_theme_options'] as $i => $value) {                
             $tabtitel = $value['tabtitle'];             
              echo "<a href=\"?page=theme_options&amp;tab=$i\" class=\"nav-tab ";
              if ($tab==$i) {
                  echo "nav-tab-active";
              }
              echo "\">$tabtitel</a>\n";
        }
        echo "</h3>\n";
        ?>
       
   
                      
        <form method="post" action="options.php">
            <?php settings_fields( 'piratenkleider_options' ); ?>
            <input type="hidden" id="piratenkleider_theme_options[tab]" name="piratenkleider_theme_options[tab]"  value="<?php echo $tab; ?>">                       
          
          
        <div id="einstellungen">                                       
            <div>
                <table>
                <?php
                    if (isset($setoptions['piratenkleider_theme_options'][$tab]['fields'])) {
                        foreach($setoptions['piratenkleider_theme_options'][$tab]['fields'] as $i => $value) {   
                            $name = $i;
                            if (isset($value['title'])) $title = $value['title'];
                            if (isset($value['type'])) $type = $value['type'];
                            if (isset($value['label'])) $label = $value['label'];
                            if (isset($value['parent'])) $parent = $value['parent'];
                            if (isset($value['liste'])) $liste = $value['liste']; 

                            if ($type == 'section') {
                                if ((isset($setsection)) && ($setsection != "")) {
                                        echo "\t\t\t</table>\n";   
                                        echo "\t\t</td>\n";
                                        echo "\t</tr>\n";
                                }
                                echo "\t<tr valign=\"top\">\n\t\t<th scope=\"row\">";
                                echo $title;
                                echo "</th>\n\t\t<td>";
                                echo "\t\t\t<table>\n";        
                                $setsection = $name;
                            } else {

                                echo "\t<tr valign=\"top\">\n\t\t<th scope=\"row\">";
                                echo $title;
                                echo "</th>\n\t\t<td>";

                                if ((!isset($options[$name])) && (isset($value['default'])) && (!empty($value['default']))) {                                       
                                        $options[$name] = $value['default'];                                                                               
                                }
                                if ($type =='bool') {
                                    echo "\t\t\t";
                                    echo "<input id=\"piratenkleider_theme_options[$name]\" name=\"piratenkleider_theme_options[$name]\" 
                                            type=\"checkbox\" value=\"1\" ".checked( $options[$name],1,false ).">\n";
                                    echo "\t\t\t";
                                    echo "<label for=\"piratenkleider_theme_options[$name]\">$label</label>\n";                                     
                                } elseif (($type=='text') ||($type=='html') ||($type=='url')) {
                                    echo "\t\t\t";
                                    echo "<input class=\"regular-text\" id=\"piratenkleider_theme_options[$name]\" 
                                            type=\"text\" name=\"piratenkleider_theme_options[$name]\" 
                                            value=\"".esc_attr( $options[$name] )."\"><br>\n";
                                    echo "\t\t\t";
                                    echo "<label for=\"piratenkleider_theme_options[$name]\">$label</label>\n";
                                } elseif ($type=='textarea')  {
                                    echo "\t\t\t";                                                                                                            
                                    echo "<textarea class=\"large-text\" id=\"piratenkleider_theme_options[$name]\" 
                                            cols=\"30\" rows=\"10\"  name=\"piratenkleider_theme_options[$name]\">";
				    if (isset($options[$name])) echo esc_attr( $options[$name] );
				    echo "</textarea><br>\n";
                                    echo "\t\t\t";
                                    echo "<label for=\"piratenkleider_theme_options[$name]\">$label</label>\n";     
                                } elseif ($type=='number') {
                                    echo "\t\t\t";
                                    echo "<input class=\"number\" size=\"5\" id=\"piratenkleider_theme_options[$name]\" 
                                            type=\"text\" name=\"piratenkleider_theme_options[$name]\" 
                                            value=\"".esc_attr( $options[$name] )."\"><br>\n";
                                    echo "\t\t\t";
                                    echo "<label for=\"piratenkleider_theme_options[$name]\">$label</label>\n";                                         
                                } elseif ($type=='select') {
                                    echo "\t\t\t";
                                    echo "<select name=\"piratenkleider_theme_options[$name]\">\n";

                                    foreach($liste as $i => $value) {   
                                        echo "\t\t\t\t";
                                        echo '<option value="'.$i.'"';
                                        if ( $i == $options[$name] ) {
                                            echo ' selected="selected"';
                                        }                                                                                                                                                                
                                        echo '>';
                                        if (!is_array($value)) {
                                            echo $value;
                                        } else {
                                            echo $i;
                                        }     
                                        echo '</option>';                                                                                                                                                              
                                        echo "\n";                                            
                                    }  
                                        echo "</select><br>\n";                                   
                                        echo "\t\t\t";
                                        echo "<label for=\"piratenkleider_theme_options[$name]\">$label</label>\n"; 

                                }


                                    echo "\t\t</td>\n";
                                    echo "\t</tr>\n";
                            }     

                            if ((isset($setsection)) && ($setsection!="") && ($type != 'section') && (!isset($parent))) {
                                /*
                                    * Kein Parent mehr 
                                    */
                                    echo "\t\t\t</table>\n";   
                                    echo "\t\t</td>\n";
                                    echo "\t</tr>\n";
                                    $setsection = "";
                            }                                                                 
                        }
                            if ((isset($setsection)) && ($setsection!="")) {
                                /*
                                    * Kein Parent mehr 
                                    */
                                    echo "\t\t\t</table>\n";   
                                    echo "\t\t</td>\n";
                                    echo "\t</tr>\n";
                                    $setsection = "";
                            }    
                    } else {
                        _e( 'Optionen nicht definiert', 'piratenkleider' );
                    }
                ?>
                </table>
            </div>            
                
          
        </div>                                        
                    
        <p class="submit">
                <input type="submit" class="button-primary" value="<?php _e( 'Optionen speichern', 'piratenkleider' ); ?>" />
        </p>
</form>               
</div>

</div> <!-- end: .piratenkleider-optionen -->      
<?php
}

/**
 * Sanitize and validate input. Accepts an array, return a sanitized array.
 */
function theme_options_validate( $input ) {
    global $setoptions;
    global $defaultoptions;
    $options = get_option( 'piratenkleider_theme_options' );
    
    $saved = (array) get_option( 'piratenkleider_theme_options' );	
        //    $options= $saved;
    $output = wp_parse_args( $saved, $defaultoptions );
       $tab = '';
       if ((isset($_GET['tab'])) && (!empty($_GET['tab']))) {
            $tab = $_GET['tab'];
       }
       if ((empty($tab) && ($input['tab']))) {
            $tab = $input['tab'];
       }

        if (!isset($setoptions['piratenkleider_theme_options'][$tab])) {
            return $output;          
        }

       if (isset($setoptions['piratenkleider_theme_options'][$tab]['fields'])) {
            foreach($setoptions['piratenkleider_theme_options'][$tab]['fields'] as $i => $value) {   
                $name = $i;

                $type = $value['type'];              
                $default = $value['default'];
                if ($type != "section") {
                    if (isset($input[$name])) {
                        // Wert wurde uebergebnen
                        if ($type=='bool') {
                            $output[$name]  = ( $input[$name] == 1 ? 1 : 0 );    
                        } elseif ($type=='text') {
                             $output[$name]  =  wp_filter_nohtml_kses( $input[$name] );
                         } elseif ($type=='textarea') {
                             $output[$name]  =  $input[$name] ;     
                        } elseif ($type=='html') {;    
                            $output[$name] = $input[$name];
                        } elseif ($type=='url') {
                             $output[$name]  =  esc_url( $input[$name] ); 
                        } elseif ($type=='number') {
                            $output[$name]  =  wp_filter_nohtml_kses( $input[$name] ); 
                        } elseif ($type=='select') {                        
                            $output[$name]  =  wp_filter_nohtml_kses( $input[$name] ); 
                        } else {
                            $output[$name]  =  wp_filter_nohtml_kses( $input[$name] );
                        }
                    } else {                        
                        // Wurde leer gemacht oder leer uebergeben#
                        if ($type=='bool') {
                            $output[$name] =0;
                        } elseif ($type=='text') {
                            $output[$name] = "";
                        } elseif ($type=='html') {
                            $output[$name] = "";    
                        } elseif ($type=='url') {
                            $output[$name] = "";
                        } elseif ($type=='number') {
                            $output[$name] = 0;
                        } elseif ($type=='select') {                        
                            $output[$name] = "";
                        }
                    }
                }

            }
       }               

      
    if ((isset($input['position_sidebarbottom'])) 
            && ($input['position_sidebarbottom']==1)
            && ($input['aktiv-dynamic-sidebar']==1)) {   
           $output['aktiv-dynamic-sidebar'] =0;        
    }
    
    if (isset($input['anonymize-user'])) {   
        if ($input['anonymize-user']==1) {
                $output['aktiv-avatar'] = 0;
        }   
      
        if (!isset($options['anonymize-user'])) 
            $options['anonymize-user'] = $defaultoptions['anonymize-user'];
        if (($input['anonymize-user']==0) && ($options['anonymize-user']==1)) {
                // Zuruecksetzen der Sicherheitsoption
            update_option('require_name_email',1);
        }
    }  
   return $output;

}


/**
 * Defaultbilder Optionen
 */
function theme_defaultbilder_do_page() {
   global $defaultbilder_liste;
   global $defaultplakate_liste;
   global $defaultoptions;
   
	if ( ! isset( $_REQUEST['settings-updated'] ) )
		$_REQUEST['settings-updated'] = false;

	?>
      
	<div class="wrap">
            
            <div class="piratenkleider-optionen">  <!-- begin: .piratenkleider-optionen -->    
		<?php screen_icon(); echo "<h2>" . wp_get_theme() . __( ' Segel setzen: Defaultbilder ', 'piratenkleider' ) . "</h2>"; ?>

		<?php if ( false !== $_REQUEST['settings-updated'] ) : ?>
		<div class="updated fade"><p><strong><?php _e( 'Defaultbilder wurden gespeichert.', 'piratenkleider' ); ?></strong></p></div>
		<?php endif; ?>

                
     
        
                
		<form method="post" action="options.php">
                    <?php settings_fields( 'piratenkleider_defaultbilder' ); ?>
                    <?php $options = get_option( 'piratenkleider_theme_defaultbilder' ); 
                        $defaultbildsrc = $options['slider-defaultbildsrc']; 
                        $defaultseitenbildsrc = $options['seiten-defaultbildsrc']; 
                      
                        if ( ! isset( $options['plakate-url'] ) )
                          $options['plakate-url'] = $defaultoptions['plakate-url']; 
                        if ( ! isset( $options['plakate-title'] ) )
                          $options['plakate-title'] = $defaultoptions['plakate-title'];                         
                    ?>
                    
                    
              <div id="einstellungen">                    
                <div>
                      

                            <?php 
                                if ( ! isset( $checked ) ) $checked = '';
                                foreach ( $defaultbilder_liste as $option ) {


                                        if ( '' != $defaultbildsrc ) {
                                                if ( $defaultbildsrc == $option['src'] ) {
                                                        $checked = "checked=\"checked\"";
                                                } else {
                                                        $checked = '';
                                                }
                                        }
                                        ?>
                                        <label class="tile">                                                                                          
                                               <input type="radio" name="piratenkleider_theme_defaultbilder[slider-defaultbildsrc]" value="<?php echo esc_attr( $option['src'] ); ?>" <?php echo $checked; ?> />                                                                                                 
                                            <?php echo $option['label']?>
                                               <br> 
                                            <img src="<?php echo $option['src'] ?>" style="margin: 5px auto; width: 320px; height: auto;">
                                        </label>
                                <?php } ?>        
                                <br style="clear: left;">     
                                <h3><?php _e( 'Alternatives Sliderbild als URL', 'piratenkleider' ); ?></h3>
                                 <input id="piratenkleider_theme_defaultbilder[slider-alternativesrc]" class="regular-text" type="text" name="piratenkleider_theme_defaultbilder[slider-alternativesrc]" value="<?php echo esc_attr( $options['slider-alternativesrc'] ); ?>" />
                            <label class="description" for="piratenkleider_theme_defaultbilder[slider-alternativesrc]">
                                <?php _e( 'URL inkl. http:// zum Bild. Dieses kann auch vorher &uuml;ber den Mediendialog hochgeladen worden sein.', 'piratenkleider' ); ?>
                                <br>
                                       <?php _e( 'Die Bilder sollten folgende Dimension haben: ', 'piratenkleider' ); ?>
                                    <?php echo $defaultoptions['bigslider-thumb-width'].'x'.$defaultoptions['bigslider-thumb-height'].' Pixel' ?>
                            </label>
                

                            <?php 
                                if ( ! isset( $checked ) ) $checked = '';
                                foreach ( $defaultbilder_liste as $option ) {
                                        if ( '' != $defaultseitenbildsrc ) {
                                                if ( $defaultseitenbildsrc == $option['src'] ) {
                                                        $checked = "checked=\"checked\"";
                                                } else {
                                                        $checked = '';
                                                }
                                        }
                                        ?>
                                        <label class="tile">
                                            <input type="radio" name="piratenkleider_theme_defaultbilder[seiten-defaultbildsrc]" value="<?php echo esc_attr( $option['src'] ); ?>" <?php echo $checked; ?> />                                                     
                                            <?php echo $option['label']?>
                                            <br> 
                                            <img src="<?php echo $option['src'] ?>" style="width: 320px; height: auto;">

                                        </label>
                                <?php } ?>        
                                <br style="clear: left;">   
                                <h3><?php _e( 'Alternatives Seitenbild als URL', 'piratenkleider' ); ?></h3>
                                <input id="piratenkleider_theme_defaultbilder[seiten-alternativesrc]" class="regular-text" type="text" name="piratenkleider_theme_defaultbilder[seiten-alternativesrc]" value="<?php echo esc_attr( $options['seiten-alternativesrc'] ); ?>" />
                               <label class="description" for="piratenkleider_theme_defaultbilder[seiten-alternativesrc]">
                                   <?php _e( 'URL inkl. http:// zum Bild. Dieses kann auch vorher &uuml;ber den Mediendialog hochgeladen worden sein. ', 'piratenkleider' ); ?>                              
                                <br>

                                <?php _e( 'Die Bilder sollten folgende Dimension haben: ', 'piratenkleider' ); ?>
                                    <?php echo $defaultoptions['bigslider-thumb-width'].'x'.$defaultoptions['bigslider-thumb-height'].' Pixel' ?>
                                   
                              </label>

                                
                                     
                            <?php                                                                                     
                                if ( ! isset( $checked ) ) $checked = '';
                                foreach ( $defaultplakate_liste as $option ) {    
                                    $checked = '';
                                    if ((isset($options['plakate-src'])) && (is_array($options['plakate-src']))) {
                                        foreach ($options['plakate-src'] as $current) {                                                                                      
                                            if ($current == $option['src']) {
                                                 $checked = "checked=\"checked\"";                                                                                            
                                                 break;
                                            }                                           ;
                                        }
                                    }                                    
                                     ?>       
                                    <label class="plakattile">
                                        <div style="height: 40px; width: 100%; margin:0 auto; background-color: #F28900; color: white; display: block;">  
                                        <input type="checkbox" name="piratenkleider_theme_defaultbilder[plakate-src][]" value="<?php echo esc_attr( $option['src'] ); ?>" <?php echo $checked; ?> />                                                     
                                        <?php echo $option['label']?>
                                        </div>
                                        <div style="height: 200px; overflow: hidden; margin: 5px auto; width: 150px; padding: 0;">
                                        <img src="<?php echo $option['src'] ?>" style="width: 150px; height: auto;  ">
                                        </div>
                                    </label>
                               <?php } ?>        
                                <br style="clear: left;"> 
                                <p><?php _e( ' Diese Bilder werden in der Sidebar rechts gezeigt, sofern dieses &uuml;ber die Optionen (vgl. Slider) auch eingeschaltet ist.', 'piratenkleider' ); ?></p>
                                <table>
                                    <tr>
                                        <th><?php _e( 'Optionaler Ersatztitel', 'piratenkleider' ); ?></th>
                                        <td> <input id="piratenkleider_theme_defaultbilder[plakate-title]" class="regular-text" type="text" name="piratenkleider_theme_defaultbilder[plakate-title]" value="<?php echo esc_attr( $options['plakate-title'] ); ?>" />
                                        <label class="description" for="piratenkleider_theme_defaultbilder[plakate-title]">
                                           <?php _e( 'Dieser Titel wird als Alternativ-Text verwendet. ', 'piratenkleider' ); ?><br>
                                        <?php _e( 'Solange keine Verlinkung erfolgt, ist diese Angabe optional, da die Plakatbilder dann nur "Schmuckbilder" sind und keinen auf die Seite bezogenen Inhalt mitliefern.', 'piratenkleider' ); ?>
                                         </label></td>
                                    </tr>
                                    <tr>
                                        <th><?php _e( 'Optionale URL', 'piratenkleider' ); ?></th>
                                        <td> <input id="piratenkleider_theme_defaultbilder[plakate-url]" class="regular-text" type="text" name="piratenkleider_theme_defaultbilder[plakate-url]" value="<?php echo esc_attr( $options['plakate-url'] ); ?>" />
                                        <label class="description" for="piratenkleider_theme_defaultbilder[plakate-url]">
                                           <?php _e( 'Optionale Webadresse zur Verlinkung der Plakate mit einer Informationsseite', 'piratenkleider' ); ?>
                                         </label></td>
                                    </tr>
                                </table>    
                                
                                
                                <h3><?php _e( 'Eigene Plakatbilder:', 'piratenkleider' ); ?></h3>
                                
                                <textarea id="piratenkleider_theme_defaultbilder[plakate-altadressen]" class="large-text" cols="30" rows="5" name="piratenkleider_theme_defaultbilder[plakate-altadressen]"><?php echo esc_textarea( $options['plakate-altadressen'] ); ?></textarea>
				<label class="description" for="piratenkleider_theme_defaultbilder[plakate-altadressen]"><?php _e( 'Adressen alternativer Plakatbilder', 'piratenkleider' ); ?></label>

                                <p>    
                                    <?php _e( 'Angabe der URLs inkl. http:// zum Bild. Wenn es mehrere sind, werden die einzelnen Adressen durch Zeilenumbruch getrennt. ', 'piratenkleider' ); ?>
                                    <br>
                                    <?php _e( 'Die Bilder sollten folgende Dimension haben: ', 'piratenkleider' ); ?>
                                    <?php echo $defaultoptions['plakate-width'].'x'.$defaultoptions['plakate-height'].' Pixel' ?>
                                   </p><p>
                                 <?php _e( 'Sollen die Bilder zus&auml;tzlich mit einem eigenen Titel und einer Webadresse versehen werden werden diese Angabe durch ein "|" zeichen in folgender Reihenfolge getrennt: <code>Bild URL|Titel|URL Webpage</code>', 'piratenkleider' ); ?>
                                <br>
                                    <?php _e( 'Beispiel: ', 'piratenkleider' ); ?></p>
                                    <pre>http://www.piratenpartei.de/wp-content/uploads/2012/05/UrheberplakatSH283.jpg|Rechte f&uuml;r Urheber und Nutzer|http://www.kein-programm.de</pre>
                                    <p>
                                <?php _e( 'Wenn oben Defaultplakate angeklickt sind, erscheinen diese Bilder zus&auml;tzlich. Diese Bilder k&ouml;nnen auch vorher &uuml;ber den Mediendialog hochgeladen worden sein.', 'piratenkleider' ); ?>
                                
                                 </p>      
                              </label>

                                      
                      <table>
                         <tr valign="top">
                        <th scope="row"><?php _e( 'Symbolbild f&uuml;r 404 Seite', 'piratenkleider' ); ?></th>
                        <td>
                            <input id="piratenkleider_theme_defaultbilder[src-default-symbolbild-404]" class="regular-text" type="text" name="piratenkleider_theme_defaultbilder[src-default-symbolbild-404]" value="<?php echo esc_attr( $options['src-default-symbolbild-404'] ); ?>" />
                            <label class="description" for="piratenkleider_theme_defaultbilder[src-default-symbolbild-404]">
                              <?php _e( 'URL f&uuml;r ein eigenes 404-Seitenbild.', 'piratenkleider' ); ?>
                               <br>
                               <?php _e( 'Default:', 'piratenkleider' ); ?><br>
                               <code><?php echo $defaultoptions['src-default-symbolbild-404']?></code>
                             </label>

                        </td>
                        </tr>
                        <tr valign="top">
                        <th scope="row"><?php _e( 'Symbolbild f&uuml;r Kategorie Seite', 'piratenkleider' ); ?></th>
                        <td>
                            <input id="piratenkleider_theme_defaultbilder[src-default-symbolbild-category]" class="regular-text" type="text" name="piratenkleider_theme_defaultbilder[src-default-symbolbild-category]" value="<?php echo esc_attr( $options['src-default-symbolbild-category'] ); ?>" />
                            <label class="description" for="piratenkleider_theme_defaultbilder[src-default-symbolbild-category]">
                              <?php _e( 'URL f&uuml;r ein eigenes Kategorien-Seitenbild.', 'piratenkleider' ); ?>
                               <br>
                               <?php _e( 'Default:', 'piratenkleider' ); ?><br>
                               <code><?php echo $defaultoptions['src-default-symbolbild-category']?></code>
                             </label>

                        </td>
                        </tr>
                        <tr valign="top">
                        <th scope="row"><?php _e( 'Symbolbild f&uuml;r Tag Seite', 'piratenkleider' ); ?></th>
                        <td>
                            <input id="piratenkleider_theme_defaultbilder[src-default-symbolbild-tag]" class="regular-text" type="text" name="piratenkleider_theme_defaultbilder[src-default-symbolbild-tag]" value="<?php echo esc_attr( $options['src-default-symbolbild-tag'] ); ?>" />
                            <label class="description" for="piratenkleider_theme_defaultbilder[src-default-symbolbild-tag]">
                              <?php _e( 'URL f&uuml;r ein eigenes Tag-Seitenbild.', 'piratenkleider' ); ?>
                               <br>
                               <?php _e( 'Default:', 'piratenkleider' ); ?><br>
                               <code><?php echo $defaultoptions['src-default-symbolbild-tag']?></code>
                             </label>

                        </td>
                        </tr>
                        <tr valign="top">
                        <th scope="row"><?php _e( 'Symbolbild f&uuml;r Autoren Seite', 'piratenkleider' ); ?></th>
                        <td>
                            <input id="piratenkleider_theme_defaultbilder[src-default-symbolbild-author]" class="regular-text" type="text" name="piratenkleider_theme_defaultbilder[src-default-symbolbild-author]" value="<?php echo esc_attr( $options['src-default-symbolbild-author'] ); ?>" />
                            <label class="description" for="piratenkleider_theme_defaultbilder[src-default-symbolbild-author]">
                              <?php _e( 'URL f&uuml;r ein eigenes Autoren-Seitenbild.', 'piratenkleider' ); ?>
                               <br>
                               <?php _e( 'Default:', 'piratenkleider' ); ?><br>
                               <code><?php echo $defaultoptions['src-default-symbolbild-author']?></code>
                             </label>

                        </td>
                        </tr>
                        <tr valign="top">
                        <th scope="row"><?php _e( 'Symbolbild f&uuml;r Archiv Seite', 'piratenkleider' ); ?></th>
                        <td>
                            <input id="piratenkleider_theme_defaultbilder[src-default-symbolbild-archive]" class="regular-text" type="text" name="piratenkleider_theme_defaultbilder[src-default-symbolbild-archive]" value="<?php echo esc_attr( $options['src-default-symbolbild-archive'] ); ?>" />
                            <label class="description" for="piratenkleider_theme_defaultbilder[src-default-symbolbild-archive]">
                              <?php _e( 'URL f&uuml;r ein eigenes Archiv-Seitenbild.', 'piratenkleider' ); ?>
                               <br>
                               <?php _e( 'Default:', 'piratenkleider' ); ?><br>
                               <code><?php echo $defaultoptions['src-default-symbolbild-archive']?></code>
                             </label>

                        </td>
                        </tr>
                        <tr valign="top">
                        <th scope="row"><?php _e( 'Symbolbild f&uuml;r Suchergebnis-Seite', 'piratenkleider' ); ?></th>
                        <td>
                            <input id="piratenkleider_theme_defaultbilder[src-default-symbolbild-search]" class="regular-text" type="text" name="piratenkleider_theme_defaultbilder[src-default-symbolbild-search]" value="<?php echo esc_attr( $options['src-default-symbolbild-search'] ); ?>" />
                            <label class="description" for="piratenkleider_theme_defaultbilder[src-default-symbolbild-search]">
                              <?php _e( 'URL f&uuml;r ein eigenes Suchergebnis-Seitenbild.', 'piratenkleider' ); ?>
                               <br>
                               <?php _e( 'Default:', 'piratenkleider' ); ?><br>
                               <code><?php echo $defaultoptions['src-default-symbolbild-search']?></code>
                             </label>

                        </td>
                        </tr>
                        <tr valign="top">
                        <th scope="row"><?php _e( 'Symbolbild f&uuml;r Template-Seiten', 'piratenkleider' ); ?></th>
                        <td>
                            <input id="piratenkleider_theme_defaultbilder[src-default-symbolbild]" class="regular-text" type="text" name="piratenkleider_theme_defaultbilder[src-default-symbolbild]" value="<?php echo esc_attr( $options['src-default-symbolbild'] ); ?>" />
                            <label class="description" for="piratenkleider_theme_defaultbilder[src-default-symbolbild]">
                              <?php _e( 'URL f&uuml;r ein Template-Seitenbild.', 'piratenkleider' ); ?>
                               <br>
                               <?php _e( 'Default:', 'piratenkleider' ); ?><br>
                               <code><?php echo $defaultoptions['src-default-symbolbild']?></code>
                             </label>

                        </td>
                        </tr>
             </table>
            </div>
    
            
            <p class="submit">
                    <input type="submit" class="button-primary" value="<?php _e( 'Optionen speichern', 'piratenkleider' ); ?>" />
            </p>
        </form>               
	</div>
            
        </div> <!-- end: .piratenkleider-optionen -->      
	<?php
}

/**
 * Sanitize and validate input. Accepts an array, return a sanitized array.
 */
function theme_defaultbilder_validate( $input ) {
	global $defaultoptions;
        
        $input['slider-alternativesrc'] = wp_filter_nohtml_kses( $input['slider-alternativesrc'] );            
              
        
        $input['slider-defaultbildsrc'] = wp_filter_nohtml_kses( $input['slider-defaultbildsrc'] );       
        if ($input['slider-alternativesrc'] != '') {            
            $input['slider-defaultbildsrc'] = $input['slider-alternativesrc'];
        }
        $input['seiten-alternativesrc'] = wp_filter_nohtml_kses( $input['seiten-alternativesrc'] );            
        $input['seiten-defaultbildsrc'] = wp_filter_nohtml_kses( $input['seiten-defaultbildsrc'] );       
        if ($input['seiten-alternativesrc'] != '') {            
            $input['seiten-defaultbildsrc'] = $input['seiten-alternativesrc'];
        }
        $input['plakate-altadressen'] = wp_filter_post_kses( $input['plakate-altadressen'] );
        $input['plakate-url'] = wp_filter_nohtml_kses( $input['plakate-url'] );        
        $input['plakate-title'] = wp_filter_nohtml_kses( $input['plakate-title'] );  
        
        $input['src-default-symbolbild-404'] = wp_filter_nohtml_kses( $input['src-default-symbolbild-404'] ); 
        $input['src-default-symbolbild-archive'] = wp_filter_nohtml_kses( $input['src-default-symbolbild-archive'] );
        $input['src-default-symbolbild-author'] = wp_filter_nohtml_kses( $input['src-default-symbolbild-author'] );
        $input['src-default-symbolbild-category'] = wp_filter_nohtml_kses( $input['src-default-symbolbild-category'] );
        $input['src-default-symbolbild-tag'] = wp_filter_nohtml_kses( $input['src-default-symbolbild-tag'] );
        $input['src-default-symbolbild-search'] = wp_filter_nohtml_kses( $input['src-default-symbolbild-search'] );
        $input['src-default-symbolbild'] = wp_filter_nohtml_kses( $input['src-default-symbolbild'] );   
     
        if (strlen(trim($input['src-default-symbolbild-404']))<5) {
            $input['src-default-symbolbild-404'] = $defaultoptions['src-default-symbolbild-404'];
        }
        if (strlen(trim($input['src-default-symbolbild-archive']))<5) {
            $input['src-default-symbolbild-archive'] = $defaultoptions['src-default-symbolbild-archive'];
        }
        if (strlen(trim($input['src-default-symbolbild-author']))<5) {
            $input['src-default-symbolbild-author'] = $defaultoptions['src-default-symbolbild-author'];
        }
        if (strlen(trim($input['src-default-symbolbild-category']))<5) {
            $input['src-default-symbolbild-category'] = $defaultoptions['src-default-symbolbild-category'];
        }
        if (strlen(trim($input['src-default-symbolbild-tag']))<5) {
            $input['src-default-symbolbild-tag'] = $defaultoptions['src-default-symbolbild-tag'];
        }
        if (strlen(trim($input['src-default-symbolbild-search']))<5) {
            $input['src-default-symbolbild-search'] = $defaultoptions['src-default-symbolbild-search'];
        }
        if (strlen(trim($input['src-default-symbolbild']))<5) {
            $input['src-default-symbolbild'] = $defaultoptions['src-default-symbolbild'];
        }
        
	return $input;
}




/**
 * Kontaktinfos  Optionen
 */
function theme_kontaktinfos_do_page() {
   
	if ( ! isset( $_REQUEST['settings-updated'] ) )
		$_REQUEST['settings-updated'] = false;

	?>
       
	<div class="wrap">
            
            <div class="piratenkleider-optionen">  <!-- begin: .piratenkleider-optionen -->    
		<?php screen_icon(); echo "<h2>" . wp_get_theme() . __( ' Captn & Crew: Kontaktinformationen setzen ', 'piratenkleider' ) . "</h2>"; ?>

		<?php if ( false !== $_REQUEST['settings-updated'] ) : ?>
		<div class="updated fade"><p><strong><?php _e( 'Kontaktinformationen wurden gespeichert.', 'piratenkleider' ); ?></strong></p></div>
		<?php endif; ?>

		<form method="post" action="options.php">
                    <?php settings_fields( 'piratenkleider_kontaktinfos' ); ?>
                    <?php $options = get_option( 'piratenkleider_theme_kontaktinfos' ); 
                        
                        
                    ?>
                   <div id="einstellungen">  
                       <div>
                         
                    <table class="form-table">
                       <tr valign="top"><th scope="row"><?php _e( 'Impressumsangaben', 'piratenkleider' ); ?></th>
			<td>
                            <table>                                
                            <tr valign="top"><th scope="row"><?php _e( 'Verantwortliche/r', 'piratenkleider' ); ?></th>
                                <td>
                                    <input id="piratenkleider_theme_kontaktinfos[impressumperson]" class="regular-text" type="text" name="piratenkleider_theme_kontaktinfos[impressumperson]" value="<?php echo esc_attr( $options['impressumperson'] ); ?>" />
                                    <label class="description" for="piratenkleider_theme_kontaktinfos[impressumperson]">
                                        <?php _e( 'Verantwortliche/r gem&auml;&szlig; &sect; 5 TMG. <br>Zum Beispiel: <code>Martin Mustermann</code>', 'piratenkleider' ); ?>
                                        
                                    </label>
                                </td>					
                            </tr>
                            <tr valign="top"><th scope="row"><?php _e( 'Textbezeichnung Dienstanbieter', 'piratenkleider' ); ?></th>
                                <td>
                                    <input id="piratenkleider_theme_kontaktinfos[impressumdienstanbieter]" class="regular-text" type="text" name="piratenkleider_theme_kontaktinfos[impressumdienstanbieter]" value="<?php echo esc_attr( $options['impressumdienstanbieter'] ); ?>" />
                                    <label class="description" for="piratenkleider_theme_kontaktinfos[impressumdienstanbieter]">
                                        <?php _e( 'Textbezeichnung des Dienstanbieter des Webauftritts.', 'piratenkleider' ); ?><br>
                                       <?php _e( 'Beispiel: <code>Kreisverband Musterstadt der Piratenpartei Deutschland vertreten durch den Vorstand Martin Mustermann, Doris Fischer und Florian Meister.</code>', 'piratenkleider' ); ?>
                                        
                                    </label>
                                </td>					
                            </tr>
                            </table>
			</td>
		       </tr>
                       <tr valign="top"><th scope="row"><?php _e( 'Offizielle Postanschrift', 'piratenkleider' ); ?></th>
			<td>
                            
                        <table>                                
                            <tr valign="top"><th scope="row"><?php _e( 'Name oder Titel', 'piratenkleider' ); ?></th>
                                <td>
                                    <input id="piratenkleider_theme_kontaktinfos[posttitel]" class="regular-text" type="text" name="piratenkleider_theme_kontaktinfos[posttitel]" value="<?php echo esc_attr( $options['posttitel'] ); ?>" />
                                    <label class="description" for="piratenkleider_theme_kontaktinfos[posttitel]">
                                        ><?php _e( 'Anschrift: Titel (1. Zeile). <br>Zum Beispiel: <code>Piratenpartei</code>', 'piratenkleider' ); ?>
                                       
                                    </label>
                                </td>					
                            </tr>
                            <tr valign="top"><th scope="row"><?php _e( 'zu H&auml;nden', 'piratenkleider' ); ?></th>
                                <td>
                                    <input id="piratenkleider_theme_kontaktinfos[postperson]" class="regular-text" type="text" name="piratenkleider_theme_kontaktinfos[postperson]" value="<?php echo esc_attr( $options['postperson'] ); ?>" />
                                    <label class="description" for="piratenkleider_theme_kontaktinfos[postperson]">
                                        <?php _e( 'Anschrift: Optionale Personenangabe ("zu H&auml;nden") <br>Zum Beispiel: <code>Martin Mustermann</code>', 'piratenkleider' ); ?>
                                       
                                    </label>
                                </td>					
                            </tr>
                             <tr valign="top"><th scope="row"><?php _e( 'Strasse oder Postfach', 'piratenkleider' ); ?></th>
                                <td>
                                    <input id="piratenkleider_theme_kontaktinfos[poststrasse]" class="regular-text" type="text" name="piratenkleider_theme_kontaktinfos[poststrasse]" value="<?php echo esc_attr( $options['poststrasse'] ); ?>" />
                                    <label class="description" for="piratenkleider_theme_kontaktinfos[poststrasse]">
                                        <?php _e( 'Anschrift: Strassenname und Nummer oder Postfachangabe oder freilassen <br>Zum Beispiel: <code>Unbesonnenheitsweg 123b</code>', 'piratenkleider' ); ?>
                                        
                                    </label>
                                </td>					
                            </tr>
                            <tr valign="top"><th scope="row"><?php _e( 'PLZ und Stadt', 'piratenkleider' ); ?></th>
                                <td>
                                    <input id="piratenkleider_theme_kontaktinfos[poststadt]" class="regular-text" type="text" name="piratenkleider_theme_kontaktinfos[poststadt]" value="<?php echo esc_attr( $options['poststadt'] ); ?>" />
                                    <label class="description" for="piratenkleider_theme_kontaktinfos[poststadt]">
                                        <?php _e( 'Anschrift: Postleitzahl gefolgt von Stadt<br>Zum Beispiel: <code>12345  Ankh-Morpork</code>', 'piratenkleider' ); ?>
                                        
                                    </label>
                                </td>					
                            </tr>
                        </table>  	
                            
                            
			</td>
		       </tr>
                       <tr valign="top"><th scope="row"><?php _e( 'Ladungsf&auml;hige Anschrift', 'piratenkleider' ); ?></th>
			<td>
                            
				<p><?php _e( 'Optionale Angaben f&uuml;r Rechtssachen. Werden diese Angaben frei gelassen, werden die Daten der Postanschrift verwendet.', 'piratenkleider' ); ?></p>
                                 <table>                                
                            <tr valign="top"><th scope="row"><?php _e( 'Name oder Titel', 'piratenkleider' ); ?></th>
                                <td>
                                    <input id="piratenkleider_theme_kontaktinfos[ladungtitel]" class="regular-text" type="text" name="piratenkleider_theme_kontaktinfos[ladungtitel]" value="<?php echo esc_attr( $options['ladungtitel'] ); ?>" />
                                    <label class="description" for="piratenkleider_theme_kontaktinfos[ladungtitel]">
                                        <?php _e( 'Anschrift: Titel (1. Zeile). <br>Zum Beispiel: <code>Piratenpartei</code>', 'piratenkleider' ); ?>
                                        
                                    </label>
                                </td>					
                            </tr>
                            <tr valign="top"><th scope="row"><?php _e( 'zu H&auml;nden', 'piratenkleider' ); ?></th>
                                <td>
                                    <input id="piratenkleider_theme_kontaktinfos[ladungperson]" class="regular-text" type="text" name="piratenkleider_theme_kontaktinfos[ladungperson]" value="<?php echo esc_attr( $options['ladungperson'] ); ?>" />
                                    <label class="description" for="piratenkleider_theme_kontaktinfos[ladungperson]">
                                        <?php _e( ' Anschrift: Optionale Personenangabe ("zu H&auml;nden"). Sollte in der Regel dieselbe Person sein, die oben als verantwortliche Person f&uuml;r das Impressum definiert ist.<br> Zum Beispiel: <code>Martin Mustermann</code>', 'piratenkleider' ); ?>
                                       
                                    </label>
                                </td>					
                            </tr>
                             <tr valign="top"><th scope="row"><?php _e( 'Strasse oder Postfach', 'piratenkleider' ); ?></th>
                                <td>
                                    <input id="piratenkleider_theme_kontaktinfos[ladungstrasse]" class="regular-text" type="text" name="piratenkleider_theme_kontaktinfos[ladungstrasse]" value="<?php echo esc_attr( $options['ladungstrasse'] ); ?>" />
                                    <label class="description" for="piratenkleider_theme_kontaktinfos[ladungstrasse]">
                                        <?php _e( ' Anschrift: Strassenname und Nummer oder Postfachangabe oder freilassen <br>Zum Beispiel: <code>Unbesonnenheitsweg 123b</code>', 'piratenkleider' ); ?>
                                       
                                    </label>
                                </td>					
                            </tr>
                            <tr valign="top"><th scope="row"><?php _e( 'PLZ und Stadt', 'piratenkleider' ); ?></th>
                                <td>
                                    <input id="piratenkleider_theme_kontaktinfos[ladungstadt]" class="regular-text" type="text" name="piratenkleider_theme_kontaktinfos[ladungstadt]" value="<?php echo esc_attr( $options['ladungstadt'] ); ?>" />
                                    <label class="description" for="piratenkleider_theme_kontaktinfos[ladungstadt]">
                                        <?php _e( 'Anschrift: Postleitzahl gefolgt von Stadt<br>Zum Beispiel: <code>12345  Ankh-Morpork</code>', 'piratenkleider' ); ?>
                                       
                                    </label>
                                </td>					
                            </tr>
                        </table>  
			</td>
		       </tr>
                        <tr valign="top"><th scope="row"><?php _e( 'Offizielle E-Mailadresse', 'piratenkleider' ); ?></th>
			<td>
				<input id="piratenkleider_theme_kontaktinfos[kontaktemail]" class="regular-text" type="text" length="5" name="piratenkleider_theme_kontaktinfos[kontaktemail]" value="<?php echo esc_attr( $options['kontaktemail'] ); ?>" />
				<label class="description" for="piratenkleider_theme_kontaktinfos[kontaktemail]">
                                    <?php _e( 'Feste Mailadresse f&uuml;r offizielle Kontakte.<br>Zum Beispiel: ', 'piratenkleider' ); ?>
                                    <code><?php echo bloginfo('admin_email'); ?></code>
                                </label>
			</td>
		       </tr>
                       
                       <tr valign="top"><th scope="row"><?php _e( 'Datenschutzbeauftragter', 'piratenkleider' ); ?></th>
			<td>
				<p>
                                    <?php _e( 'Optionale Angaben zu einem Datenschutzbeauftragten. Wenn dieser nicht angegeben wird, wird die E-Mail-Adresse des Bundesdatenschutzbeauftragten angegeben.', 'piratenkleider' ); ?></p>
                                 <table>                                

                            <tr valign="top"><th scope="row"><?php _e( 'Name', 'piratenkleider' ); ?></th>
                                <td>
                                    <input id="piratenkleider_theme_kontaktinfos[dsbperson]" class="regular-text" type="text" name="piratenkleider_theme_kontaktinfos[dsbperson]" value="<?php echo esc_attr( $options['dsbperson'] ); ?>" />
                                    <label class="description" for="piratenkleider_theme_kontaktinfos[dsbperson]">
                                        <?php _e( 'Name des DSB<br>Zum Beispiel: <code>Martin Mustermann</code>', 'piratenkleider' ); ?>
                                       
                                    </label>
                                </td>					
                            </tr>
                             <tr><th scope="row"><?php _e( 'E-Mailadresse', 'piratenkleider' ); ?></th>
                            <td>
				<input id="piratenkleider_theme_kontaktinfos[dsbemail]" class="regular-text" type="text" length="5" name="piratenkleider_theme_kontaktinfos[dsbemail]" value="<?php echo esc_attr( $options['dsbemail'] ); ?>" />
				<label class="description" for="piratenkleider_theme_kontaktinfos[dsbemail]">
                                    <?php _e( 'Feste Mailadresse f&uuml;r offizielle Kontakte.<br>Zum Beispiel:  <code>bundesbeauftragter@piraten-dsb.de</code>', 'piratenkleider' ); ?>
                                    
                                </label>
			</td>
                          </tr>
                            
                        </table>  
			</td>
		       </tr>

                       <tr valign="top"><th scope="row"><?php _e( 'Urheberrecht', 'piratenkleider' ); ?></th>
			<td>
				<p><?php _e( 'Zus&auml;tzliche Angaben f&uuml;r den Abschnitt "Verwendete Werke und Lizenzen innerhalb dieses Webauftritts"', 'piratenkleider' ); ?>
                                </p>
				<p>
				<textarea id="piratenkleider_theme_kontaktinfos[lizenzen]" class="regular-text" cols="130" rows="10" name="piratenkleider_theme_kontaktinfos[lizenzen]"><?php echo esc_attr( $options['lizenzen'] ); ?></textarea>
                                    <label class="description" for="piratenkleider_theme_kontaktinfos[lizenzen]">
                                        <?php _e( 'Eine Angabe pro Zeile! ', 'piratenkleider' ); ?>                                     
                                    </label>
				</p> 
			</td>
		       </tr>
                       
                       <tr valign="top"><th scope="row"><?php _e( 'Spendenformulare', 'piratenkleider' ); ?></th>
			<td>
				<p><?php _e( 'Optionale Angaben f&uuml;r Spendenformulare, die mit dem Seiten-Template "Spenden" erstellt werden.', 'piratenkleider' ); ?>
                                    <br>
                                    <?php _e( '<strong>Achtung:</strong> Dies ersetzt nicht das richtige Eingabeformular. Das Formular wird z.B. mit dem Plugin <em>Contact Form 7</em> erstellt und dann als Makro in den Textbereich der Seite hinzugef&uuml;gt.', 'piratenkleider' ); ?>
                                    <br>
                                    <?php _e( 'Die folgenden Daten werden nur dazu verwendet, die Tabelle f&uuml;r die  feststehenden Informationen aufzubauen.', 'piratenkleider' ); ?>
                                    
                                </p>
                                 <table>                                

                            <tr valign="top"><th scope="row"><?php _e( 'Empf&auml;nger', 'piratenkleider' ); ?></th>
                                <td>
                                    <input id="piratenkleider_theme_kontaktinfos[spendenempfaenger]" class="regular-text" type="text" name="piratenkleider_theme_kontaktinfos[spendenempfaenger]" value="<?php echo esc_attr( $options['spendenempfaenger'] ); ?>" />
                                    <label class="description" for="piratenkleider_theme_kontaktinfos[spendenempfaenger]">
                                        <?php _e( 'Name des Empf&auml;ngers/Konto der Spenden f&uuml;r &Uuml;berweisungen. ', 'piratenkleider' ); ?>                                     
                                    </label>
                                </td>					
                            </tr>
                              <tr valign="top"><th scope="row"><?php _e( 'Kontonummer', 'piratenkleider' ); ?></th>
                                <td>
                                    <input id="piratenkleider_theme_kontaktinfos[spendenkonto]" class="regular-text" type="text" name="piratenkleider_theme_kontaktinfos[spendenkonto]" value="<?php echo esc_attr( $options['spendenkonto'] ); ?>" />
                                    <label class="description" for="piratenkleider_theme_kontaktinfos[spendenkonto]">
                                        <?php _e( 'Kontonummer des Empf&auml;ngers', 'piratenkleider' ); ?>
                                     
                                    </label>
                                </td>					
                            </tr>
                             <tr valign="top"><th scope="row"><?php _e( 'BLZ', 'piratenkleider' ); ?></th>
                                <td>
                                    <input id="piratenkleider_theme_kontaktinfos[spendenblz]" class="regular-text" type="text" name="piratenkleider_theme_kontaktinfos[spendenblz]" value="<?php echo esc_attr( $options['spendenblz'] ); ?>" />
                                    <label class="description" for="piratenkleider_theme_kontaktinfos[spendenblz]">
                                        <?php _e( 'Die Bankleitzahl.', 'piratenkleider' ); ?>
                                    
                                    </label>
                                </td>					
                            </tr>
                            <tr valign="top"><th scope="row"><?php _e( 'Bank', 'piratenkleider' ); ?></th>
                                <td>
                                    <input id="piratenkleider_theme_kontaktinfos[spendenbank]" class="regular-text" type="text" name="piratenkleider_theme_kontaktinfos[spendenbank]" value="<?php echo esc_attr( $options['spendenbank'] ); ?>" />
                                    <label class="description" for="piratenkleider_theme_kontaktinfos[spendenbank]">
                                        <?php _e( 'Ausgeschriebener Name der Bank', 'piratenkleider' ); ?>                                     
                                    </label>
                                </td>					
                            </tr>
                             <tr valign="top"><th scope="row"><?php _e( 'IBAN', 'piratenkleider' ); ?></th>
                                <td>
                                    <input id="piratenkleider_theme_kontaktinfos[spendeniban]" class="regular-text" type="text" name="piratenkleider_theme_kontaktinfos[spendeniban]" value="<?php echo esc_attr( $options['spendeniban'] ); ?>" />
                                    <label class="description" for="piratenkleider_theme_kontaktinfos[spendeniban]">
                                     <?php _e( 'Internationale Bank Account Nummer', 'piratenkleider' ); ?>
                                    </label>
                                </td>					
                            </tr>
                            <tr valign="top"><th scope="row"><?php _e( 'BIC', 'piratenkleider' ); ?></th>
                                <td>
                                    <input id="piratenkleider_theme_kontaktinfos[spendenbic]" class="regular-text" type="text" name="piratenkleider_theme_kontaktinfos[spendenbic]" value="<?php echo esc_attr( $options['spendenbic'] ); ?>" />
                                    <label class="description" for="piratenkleider_theme_kontaktinfos[spendenbic]">
                                    <?php _e( 'Business Identifier Code', 'piratenkleider' ); ?>
                                    </label>
                                </td>					
                            </tr>
                        </table>  
			</td>
		       </tr>
                    </table>
            </div></div>
            <p class="submit">
                    <input type="submit" class="button-primary" value="<?php _e( 'Speichern', 'piratenkleider' ); ?>" />
            </p>
        </form>               
	</div>
            
        </div> <!-- end: .piratenkleider-optionen -->      
	<?php
}

/**
 * Sanitize and validate input. Accepts an array, return a sanitized array.
 */
function theme_kontaktinfos_validate( $input ) {
        $input['posttitel'] = wp_kses_normalize_entities( $input['posttitel'] );   
        $input['postperson'] = wp_kses_normalize_entities( $input['postperson'] );   
	$input['postsstrasse'] = wp_kses_normalize_entities( $input['poststrasse'] );   
        $input['poststadt'] = wp_kses_normalize_entities( $input['poststadt'] );  
        
        $input['ladungtitel'] = wp_kses_normalize_entities( $input['ladungtitel'] );   
        $input['ladungperson'] = wp_kses_normalize_entities( $input['ladungperson'] );   
	$input['ladungstrasse'] = wp_kses_normalize_entities( $input['ladungstrasse'] );   
        $input['ladungstadt'] = wp_kses_normalize_entities( $input['ladungstadt'] );      
        
        $input['kontaktemail'] = sanitize_email( $input['kontaktemail'] ); 
        $input['dsbemail'] = sanitize_email( $input['dsbemail'] ); 
        $input['dsbperson'] = wp_filter_nohtml_kses( $input['dsbperson'] );   
	return $input;
}




/**
 * Defaultbilder Optionen
 */
function theme_designspecials_do_page() {
    global $defaultoptions;
	if ( ! isset( $_REQUEST['settings-updated'] ) )
		$_REQUEST['settings-updated'] = false;

	?>
        
	<div class="wrap">
            
            <div class="piratenkleider-optionen">  <!-- begin: .piratenkleider-optionen -->    
		<?php screen_icon(); echo "<h2>" . wp_get_theme() . __( ' Kl&uuml;verbaum: Erweiterte Designeinstellungen ', 'piratenkleider' ) . "</h2>"; ?>

		<?php if ( false !== $_REQUEST['settings-updated'] ) : ?>
		<div class="updated fade"><p><strong><?php _e( 'Designeinstellungen wurden gespeichert.', 'piratenkleider' ); ?></strong></p></div>
		<?php endif; ?>
                
                
                
		<form method="post" action="options.php">
                    <?php settings_fields( 'piratenkleider_designspecials' ); ?>
                    <?php $options = get_option( 'piratenkleider_theme_designspecials' ); 
                        
                        
                     if ( ! isset( $options['css-default-header-height'] ) ) 
                            $options['css-default-header-height'] = $defaultoptions['css-default-header-height'];
                     if ( ! isset( $options['css-default-branding-padding-top'] ) ) 
                            $options['css-default-branding-padding-top'] = $defaultoptions['css-default-branding-padding-top'];
                        if ( ! isset( $options['css-fontfile'] ) ) 
                            $options['css-fontfile'] = $defaultoptions['default-fontset-file'];
                    ?>
                    <div id="einstellungen">  
                       <div>
                           <p> <?php _e( '<b>Achtung:</b><br> Diese Einstellungen sollten nur in Ausnahmef&auml;llen ge&auml;ndert werden. <br>Bei einer falschen Nutzung k&ouml;nnen Eingaben die Gestaltung des Webauftritts sch&auml;digen.', 'piratenkleider' ); ?>           
                </p>
                    <table class="form-table">
                        <tr valign="top"><th scope="row"><?php _e( 'L&auml;nderfarbe aktivieren', 'piratenkleider' ); ?></th>
                        <td>
                
                                
                        <select name="piratenkleider_theme_designspecials[css-colorfile]">
                            <option value="" <?php if ( $options['css-colorfile'] == '') echo ' selected="selected"'; ?>><?php _e( 'Deutschland (Orange)', 'piratenkleider' ); ?></option>
                            <option value="colors_at.css" <?php if ( $options['css-colorfile'] == 'colors_at.css') echo ' selected="selected"'; ?>><?php _e( '&Ouml;sterreich (Violett)', 'piratenkleider' ); ?></option>
                            <option value="colors_lu.css" <?php if ( $options['css-colorfile'] == 'colors_lu.css') echo ' selected="selected"'; ?>><?php _e( 'Luxemburg (Violett)', 'piratenkleider' ); ?></option>
                            <option value="colors_hu.css" <?php if ( $options['css-colorfile'] == 'colors_hu.css') echo ' selected="selected"'; ?>><?php _e( 'Ungarn (Violett)', 'piratenkleider' ); ?></option>                            
                            <option value="colors_tk.css" <?php if ( $options['css-colorfile'] == 'colors_tk.css') echo ' selected="selected"'; ?>><?php _e( 'T&uuml;rkei (Cyan)', 'piratenkleider' ); ?></option>
                            <option value="colors_us.css" <?php if ( $options['css-colorfile'] == 'colors_us.css') echo ' selected="selected"'; ?>><?php _e( 'USA (Lila)', 'piratenkleider' ); ?></option>
                            <option value="colors_pony.css" <?php if ( $options['css-colorfile'] == 'colors_pony.css') echo ' selected="selected"'; ?>><?php _e( 'My Little Pony', 'piratenkleider' ); ?></option>                            
                            
                        </select>   

                        <label class="description" for="piratenkleider_theme_designspecials[css-colorfile]">
                            <?php _e( 'Auswahl, welche l&auml;nderbezogene Farbvariante aktiviert werden soll.', 'piratenkleider' ); ?>
                        </label>

                        </td>					                           
		       </tr>
                       
                       <tr valign="top"><th scope="row"><?php _e( 'Stil der Schriftart &auml;ndern', 'piratenkleider' ); ?></th>
                        <td>
                                            
                        <select name="piratenkleider_theme_designspecials[css-fontfile]">
                            <option value="font-bebas.css" style="font-family: Bebas;" <?php if ( $options['css-fontfile'] == 'font-bebas.css') echo ' selected="selected"'; ?>><?php _e( 'Bebas Neue', 'piratenkleider' ); ?></option>
                            <option value="font-droid.css" style="font-family: Droid;" <?php if ( $options['css-fontfile'] == 'font-droid.css') echo ' selected="selected"'; ?>><?php _e( 'Droid Sans', 'piratenkleider' ); ?></option>
                            <option value="font-standard.css"  style="font-family: Helvetica, Arial, sans-serif;" <?php if ( $options['css-fontfile'] == 'font-standard.css') echo ' selected="selected"'; ?>><?php _e( 'Helvetica, Arial, sans-serif', 'piratenkleider' ); ?></option>
                        </select>   

                        <label class="description" for="piratenkleider_theme_designspecials[css-colorfile]">
                            <?php _e( 'Auswahl, welcher Schriftstil f&uuml;r die Website verwendet werden soll.', 'piratenkleider' ); ?>
                        </label>

                        </td>					                           
		       </tr>
                       
                       
                       <tr valign="top"><th scope="row"><?php _e( 'Small Screen Device Sichtbarkeit', 'piratenkleider' ); ?></th>
                            <td>
                              <input id="piratenkleider_theme_designspecials[aktiv-mediaqueries-allparts]" name="piratenkleider_theme_designspecials[aktiv-mediaqueries-allparts]" type="checkbox" value="1" <?php checked( '1', $options['aktiv-mediaqueries-allparts'] ); ?> />
                               <label  for="piratenkleider_theme_designspecials[aktiv-mediaqueries-allparts]">
                                   <?php _e( 'F&uuml;r kleine Bildschirmaufl&ouml;sungen auch optionale Teile (Sticker, Slider) anzeigen.', 'piratenkleider' ); ?>
                               </label>
                            </td>
			</tr>
                       
                       <tr valign="top"><th scope="row"><?php _e( 'H&ouml;he des Kopfbereiches ( .header )', 'piratenkleider' ); ?></th>
                        <td>
                            <input id="piratenkleider_theme_designspecials[css-default-header-height]" type="text" 
                                   name="piratenkleider_theme_designspecials[css-default-header-height]" 
                                    style="width: 5em;"
                                   value="<?php echo esc_attr( $options['css-default-header-height'] ); ?>" />
                            <label class="description" for="piratenkleider_theme_designspecials[css-default-header-height]">
                              <?php _e( 'Vorgabe: ', 'piratenkleider' ); ?>  <?php echo $defaultoptions['css-default-header-height']; ?> 
                                <?php _e( 'Wenn dieser Wert sich von der Defaulteinstellung aus der CSS Datei piratenkleider.css (Zeile 1926) unterscheidet, wird er &uuml;ber ein Inline-CSS nachtr&auml;glich im Kopfteil des HTML-Documents ge&auml;ndert.', 'piratenkleider' ); ?>
                                <br>
                               <?php _e( '<b>Achtung:</b> Die Verkleinerung der H&ouml;he des Kopfteils ist nicht ungef&auml;hrlich. Zu beachten ist, dass der Kopfteil auch bei einer Vergr&ouml;&szlig;erung des Textes auf 200% noch gen&uuml;gend Platz haben muss!', 'piratenkleider' ); ?>
                            </label>
                        </td>					                           
		       </tr>
                        <tr valign="top"><th scope="row"><?php _e( 'Abstand des Brandingbereiches (=Logo) nach oben ( .header .branding )', 'piratenkleider' ); ?></th>
                        <td>
                            <input id="piratenkleider_theme_designspecials[css-default-branding-padding-top]" type="text" 
                                   name="piratenkleider_theme_designspecials[css-default-branding-padding-top]" 
                                   style="width: 5em;"
                                   value="<?php echo esc_attr( $options['css-default-branding-padding-top'] ); ?>" />
                            <label class="description" for="piratenkleider_theme_designspecials[css-default-branding-padding-top]">
                               <?php _e( 'Das Logo hat einen Abstand nach oben. Diese kann &uuml;ber diese Angabe reduziert werden. ', 'piratenkleider' ); ?> 
                               <?php _e( 'Vorgabe: ', 'piratenkleider' ); ?> 
                               <?php echo $defaultoptions['css-default-branding-padding-top']; ?> 
                                                               
                               <br><?php _e( '<b>Achtung:</b> Wenn Socialmedia-Icons und Linkmenu oben auch erscheinen, sollte dieser Abstand nicht zu klein sein, da diese Icons und  der Text der Links bei steigender Gr&ouml;&szlig;e nach Links zum Logo wandert und es so zu &Uuml;berlapplungen kommen k&ouml;nnte.', 'piratenkleider' ); ?>
                            </label>
                        </td>					                           
		       </tr>
                       

                       <tr valign="top"><th scope="row"><?php _e( 'Hintergrund-Einstellungen im Kopfteil ( .header )', 'piratenkleider' ); ?></th>
                           <td>
                               <table>
                                   <tr>
                                       <th><?php _e( 'background-color', 'piratenkleider' ); ?></th>
                                       <td>
                                           <input id="piratenkleider_theme_designspecials[css-default-header-background-color]" type="text" 
                                           name="piratenkleider_theme_designspecials[css-default-header-background-color]" 
                                          style="width: 35em;"
                                           value="<?php echo esc_attr( $options['css-default-header-background-color'] ); ?>" />
                                           <label class="description" for="piratenkleider_theme_designspecials[css-default-header-background-color]">
                                                   <?php _e( 'Wenn gesetzt, &auml;ndert die Default-Hintergrundfarbe ab.', 'piratenkleider' ); ?>
                                            </label>
                                       </td>                                                                              
                                   </tr>
                                   <tr>
                                       <th><?php _e( 'background-image', 'piratenkleider' ); ?></th>
                                       <td>
                                          <input id="piratenkleider_theme_designspecials[css-default-header-background-image]" type="text" 
                                           name="piratenkleider_theme_designspecials[css-default-header-background-image]" 
                                          style="width: 35em;"
                                           value="<?php echo esc_attr( $options['css-default-header-background-image'] ); ?>" />
                                           <label class="description" for="piratenkleider_theme_designspecials[css-default-header-background-image]">
                                                   <?php _e( 'Wenn gesetzt, &auml;ndert  das Hintergrundbild.', 'piratenkleider' ); ?>
                                            </label>
                                           
                                       </td>                                                                              
                                   </tr>
                                   <tr>
                                       <th><?php _e( 'background-position', 'piratenkleider' ); ?></th>
                                       <td>
                                            <input id="piratenkleider_theme_designspecials[css-default-header-background-position]" type="text" 
                                           name="piratenkleider_theme_designspecials[css-default-header-background-position]" 
                                          style="width: 35em;"
                                           value="<?php echo esc_attr( $options['css-default-header-background-position'] ); ?>" />
                                           <label class="description" for="piratenkleider_theme_designspecials[css-default-header-background-position]">
                                                  <?php _e( 'Wenn gesetzt, &auml;ndert die Position des Hintergrundbildes.', 'piratenkleider' ); ?>
                                            </label>
                                           
                                       </td>                                                                              
                                   </tr>
                                   <tr>
                                       <th><?php _e( 'background-repeat', 'piratenkleider' ); ?></th>
                                       <td>
                                            <input id="piratenkleider_theme_designspecials[css-default-header-background-repeat]" type="text" 
                                           name="piratenkleider_theme_designspecials[css-default-header-background-repeat]" 
                                          style="width: 35em;"
                                           value="<?php echo esc_attr( $options['css-default-header-background-repeat'] ); ?>" />
                                           <label class="description" for="piratenkleider_theme_designspecials[css-default-header-background-repeat]">
                                                  <?php _e( 'Wenn gesetzt, &auml;ndert die Repeat-Eigenschaft des Hintergrundbildes.', 'piratenkleider' ); ?>
                                            </label>
                                           
                                       </td>                                                                              
                                   </tr>
                               </table> 
                               
                               
                           </td>    
                       </tr>
                      
                       
                        <tr valign="top"><th scope="row"><?php _e( 'Eigene CSS-Anweisungen', 'piratenkleider' ); ?></th>
                        <td>
                            <textarea id="piratenkleider_theme_designspecials[css-eigene-anweisungen]" 
                                      class="large-text" cols="30" rows="10" 
                                      name="piratenkleider_theme_designspecials[css-eigene-anweisungen]"><?php echo esc_textarea( $options['css-eigene-anweisungen'] ); ?></textarea>
                            <label class="description" 
                                   for="piratenkleider_theme_designspecials[css-eigene-anweisungen]">
                                       <?php _e( 'Eigene CSS-Anweisungen, die Inline im Kopfteil der Dokumente erg&auml;nzt werden', 'piratenkleider' ); ?></label>

                        </td>					                           
		       </tr>
                       
                         <tr valign="top"><th scope="row"><?php _e( 'Eigene HTML-Anweisungen', 'piratenkleider' ); ?></th>
                        <td>
                            <textarea id="piratenkleider_theme_designspecials[html-eigene-anweisungen]" 
                                      class="large-text" cols="30" rows="10" 
                                      name="piratenkleider_theme_designspecials[html-eigene-anweisungen]"><?php echo esc_textarea( $options['html-eigene-anweisungen'] ); ?></textarea>
                            <label class="description" 
                                   for="piratenkleider_theme_designspecials[html-eigene-anweisungen]">
                            <?php _e( 'Eigene HTML-Anweisungen, die am Ende der Webseite, vor dem letzten &lt;/body&Gt;&lt;/html&gt; plaziert werden', 'piratenkleider' ); ?></label>
                            <p> <?php _e( '<b>Achtung:</b> Fehlerhafter HTML-, JavaScript oder CSS-Code an dieser Stelle kann zu einem Nicht-Funktionieren der gesamt Website f&uuml;hren!<br />Der hier eingegebene Code wird nicht gefiltert oder kontrolliert.', 'piratenkleider' ); ?>
                            </p>
                        </td>					                           
		       </tr>
                       
                    </table>
                       </div></div>
            <p class="submit">
                    <input type="submit" class="button-primary" value="<?php _e( 'Speichern', 'piratenkleider' ); ?>" />
            </p>
        </form>               
	</div>
            
        </div> <!-- end: .piratenkleider-optionen -->      
	<?php
}

/**
 * Sanitize and validate input. Accepts an array, return a sanitized array.
 */
function theme_designspecials_validate( $input ) {
    
    
    if ( ! isset( $input['aktiv-mediaqueries-allparts'] ) )
		$input['aktiv-mediaqueries-allparts'] = 0;
	$input['aktiv-mediaqueries-allparts'] = ( $input['aktiv-mediaqueries-allparts'] == 1 ? 1 : 0 );    

        $input['css-default-branding-padding-top'] = wp_kses_normalize_entities( $input['css-default-branding-padding-top'] );   
        $input['css-default-header-height'] = wp_kses_normalize_entities( $input['css-default-header-height'] );   
        $input['css-eigene-anweisungen'] = wp_filter_post_kses( $input['css-eigene-anweisungen'] );
        $input['css-default-header-background-color'] = wp_filter_post_kses( $input['css-default-header-background-color'] );
        $input['css-default-header-background-image'] = wp_filter_post_kses( $input['css-default-header-background-image'] );
        $input['css-default-header-background-position'] = wp_filter_post_kses( $input['css-default-header-background-position'] );
        $input['css-default-header-background-repeat'] = wp_filter_post_kses( $input['css-default-header-background-repeat'] );
        $input['css-colorfile'] = wp_filter_post_kses( $input['css-colorfile'] );
        $input['css-fontfile'] = wp_filter_post_kses( $input['css-fontfile'] );
   
	return $input;
}
