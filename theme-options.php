<?php

add_action( 'admin_init', 'theme_options_init' );
add_action( 'admin_menu', 'theme_options_add_page' );

/**
 * Init plugin options to white list our options
 */
function theme_options_init(){
	register_setting( 'piratenkleider_options', 'piratenkleider_theme_options', 'theme_options_validate' );
        register_setting( 'piratenkleider_kontaktinfos', 'piratenkleider_theme_kontaktinfos', 'theme_kontaktinfos_validate' );
}

/**
 * Load up the menu page
 */
function theme_options_add_page() {
	add_theme_page( __( 'Takelage einstellen', 'piratenkleider' ),
                        __( 'Takelage einstellen', 'piratenkleider' ), 
                       'edit_theme_options', 'theme_options', 'theme_options_do_page' );
                   
        add_theme_page( __( 'Captn & Crew', 'piratenkleider' ), 
                __( 'Captn & Crew', 'piratenkleider' ), 
                'edit_theme_options', 'theme_kontaktinfos', 'theme_kontaktinfos_do_page' );

}


/**
 * Create the options page
 */
function theme_options_do_page($tab = '') {
        global $setoptions;  
        global $options;
        
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
				echo "\t\t\t<table class=\"suboptions\">\n";      
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
                                } elseif ($type=='text') {
                                    echo "\t\t\t";
                                    echo "<input class=\"regular-text\" id=\"piratenkleider_theme_options[$name]\" 
                                            type=\"text\" name=\"piratenkleider_theme_options[$name]\" 
					    value=\"";
				    if (isset($options[$name])) echo esc_attr( $options[$name] );				
				    
				    echo "\"><br>\n";
                                    echo "\t\t\t";
                                    echo "<label for=\"piratenkleider_theme_options[$name]\">$label</label>\n";
				} elseif (($type=='html') ||($type=='url')) {
                                    echo "\t\t\t";
                                    echo "<input class=\"large-text\" id=\"piratenkleider_theme_options[$name]\" 
                                            type=\"text\" name=\"piratenkleider_theme_options[$name]\" 
					    size=\"120\" value=\"";
				    if (isset($options[$name])) echo esc_attr( $options[$name] );				
				    
				    echo "\"><br>\n";
                                    echo "\t\t\t";
                                    echo "<label for=\"piratenkleider_theme_options[$name]\">$label</label>\n";
				} elseif ($type=='imgurl') {
                                    echo "\t\t\t";
                                    echo "<input class=\"large-text\" id=\"piratenkleider_theme_options[$name]\" 
                                            type=\"text\" name=\"piratenkleider_theme_options[$name]\" 
					    size=\"120\" value=\"";
				    if (isset($options[$name])) echo esc_attr( $options[$name] );				
				    echo "\"><br>\n";
				    if (isset($options[$name])) {
					    echo "<img class=\"imgurl\" src=\"".esc_attr( $options[$name] )."\" alt=\"\">\n";
				    }    
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
				} elseif ($type=='bildlist') {
				   echo "\t\t\t";                                    
                                    foreach($liste as $i => $value) {   
                                        echo "\t\t\t\t";
					$src = $value['src'];
					$label = $value['label'];
					echo "<label class=\"tile";
					if ( $src == $options[$name] ) {
                                            echo ' checked';
                                        }  
					echo "\">\n";
                                        echo '<input type="radio" value="'.$src.'" 
					    name="piratenkleider_theme_options['.$name.']"';
                                        if ( $src == $options[$name] ) {
                                            echo ' checked="checked"';
                                        }                                                                                                                                                                
                                        echo '> ';
                                        echo $label.'<br><img src="'.$src.'" alt="" style="width: 320px; height: auto;">';					                                                                                                                                                                                                      
                                        echo "</label>\n";                                          
                                    }                                                                          
                                    echo "<br style=\"clear: left;\">\n";
                                } elseif ($type=='bildchecklist') {
				   echo "\t\t\t";                      
                                    foreach ( $liste as $option ) {    
                                        $checked = '';
                                        if ((isset($options[$name])) && (is_array($options[$name]))) {
                                            foreach ($options[$name] as $current) {    
                                                if ($current == $option['src']) {
                                                     $checked = "checked=\"checked\"";                                                                                            
                                                     break;
                                                }                                        
                                            }
                                        }                                    
                                         ?>       
                                        <label class="plakattile">
                                            <div style="height: 40px; width: 100%; margin:0 auto; background-color: #F28900; color: white; display: block;">  
                                            <input type="checkbox" name="piratenkleider_theme_options[<?php echo $name?>][]" 
                                                   value="<?php echo esc_attr( $option['src'] ); ?>" <?php echo $checked; ?> />                                                     
                                            <?php echo $option['label']?>
                                            </div>
                                            <div style="height: 395px; overflow: hidden; margin: 5px auto; width: 280px; padding: 0;">
                                            <img src="<?php echo $option['src'] ?>" style="width: 280px; height: auto;  ">
                                            </div>
                                        </label>
                                     <?php }                                                                                                                             
                                    echo "<br style=\"clear: left;\">\n";
                                } elseif ($type=='bilddirchecklist') {
				   echo "\t\t\t";      
				   $dir = get_template_directory().$value['default'];
				   
				  
				    if (is_dir($dir)) {	   
				       $contents = dirToArray($dir);
				       foreach ($contents as $key => $wert) {      
					   if (is_array($wert)) {	

					       echo "<h4>Ordner $key<h4>";
					       foreach ($wert as $sub) {	       
						   $bildurl = get_template_directory_uri().$value['default'].'/'.$key.'/'.$sub;
						   $checked = '';
						   if ((isset($options[$name])) && (is_array($options[$name]))) {
							foreach ($options[$name] as $current) {    
							    if ($current == $bildurl) {

								 $checked = "checked=\"checked\"";                                                                                            
								 break;
							    }                                        
							}
						    } ?>

						    <label class="plakattile" style="width: 150px; height: 251px">
							<div style="height: 40px; width: 100%; margin:0 auto; background-color: #F28900; color: white; display: block;">  
							<input type="checkbox" name="piratenkleider_theme_options[<?php echo $name?>][]" 
							       value="<?php echo esc_attr( $bildurl ); ?>" <?php echo $checked; ?> />                                                     
							<?php echo $sub ?>
							</div>
							<div style="height: 211px; overflow: hidden; margin: 5px auto; width: 150px; padding: 0;">
							<img src="<?php echo $bildurl ?>" style="width: 150px; height: auto;  ">
							</div>
						    </label>		
						    <?php    
					       }
					       echo "<br style=\"clear: left;\">\n";
					   }      
				       }
				       // First Dir only

				       $found=0;
				       foreach ($contents as $key => $wert) {    
					   if (!is_array($wert)) {              
						    if ($found==0) {
							print "<h4>Ordner ".$value['default']."</h4>";
							$found=1;
						    }
						   $bildurl = get_template_directory_uri().$value['default'].'/'.$wert;
						   $checked = '';
						   if ((isset($options[$name])) && (is_array($options[$name]))) {
							foreach ($options[$name] as $current) {    
							    if ($current == $bildurl) {

								 $checked = "checked=\"checked\"";                                                                                            
								 break;
							    }                                        
							}
						    } ?>

						    <label class="plakattile" style="width: 150px; height: 251px">
							<div style="height: 40px; width: 100%; margin:0 auto; background-color: #F28900; color: white; display: block;">  
							<input type="checkbox" name="piratenkleider_theme_options[<?php echo $name?>][]" 
							       value="<?php echo esc_attr( $bildurl ); ?>" <?php echo $checked; ?> />                                                     
							<?php echo $sub ?>
							</div>
							<div style="height: 211px; overflow: hidden; margin: 5px auto; width: 150px; padding: 0;">
							<img src="<?php echo $bildurl ?>" style="width: 150px; height: auto;  ">
							</div>
						    </label>		
						    <?php    	  	    	   	   	   	   
					   }

				       }
					echo "<br style=\"clear: left;\">\n"; 
				    }
				   
				   
                                                                                                                            
                                   				    
				} elseif ($type=='urlchecklist') {
				    				    
				   echo "\t\t\t";                      
                                    foreach ( $liste as $entry => $listdata ) {    
                                        $checked = '';
					$value = '';
                                        $active = 0;
				 	if (isset($options[$name][$entry]['content'])) {
						$value = $options[$name][$entry]['content'];
					} else {
						$value = $liste[$entry]['content'];
					 }
					 if (isset($options[$name][$entry]['active'])) {
						$active = $options[$name][$entry]['active'];
                                         }
					
					 if (($active==1)  
						 && (filter_var($value, FILTER_VALIDATE_URL))) {
					    $checked = "checked=\"checked\"";   
					}
                                         ?>       
                                        <div style="display: inline-block; width: 90%;" class="<?php echo $name?>">
					    <label for="piratenkleider_theme_options[<?php echo $name?>][<?php echo $entry?>][active]" class="<?php echo $entry?>" style="width: 120px; display: inline-block;">
                                            <input type="checkbox" 
						   id="piratenkleider_theme_options[<?php echo $name?>][<?php echo $entry?>][active]"
						   name="piratenkleider_theme_options[<?php echo $name?>][<?php echo $entry?>][active]" 
                                                   value="1" <?php echo $checked; ?>>                                                                                               
					    <?php echo $liste[$entry]['name'] ?>
					    </label>
					    
                                            <input id="piratenkleider_theme_options[<?php echo $name?>][<?php echo $entry?>][content]" 
                                            type="text" name="piratenkleider_theme_options[<?php echo $name?>][<?php echo $entry?>][content]" 
					    size="80" value="<?php echo $value?>">
					  </div>
					 <?php    
					    
				    }                                                                                                                   
                                    echo "<br style=\"clear: left;\">\n";

				    
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
                                        echo "\t\t\t</select><br>\n";                                   
                                        echo "\t\t\t<label for=\"piratenkleider_theme_options[$name]\">$label</label>\n"; 

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
                        } elseif (($type=='url') || ($type=='imgurl')) {
                             $output[$name]  =  esc_url( $input[$name] ); 
                        } elseif ($type=='number') {
                            $output[$name]  =  wp_filter_nohtml_kses( $input[$name] ); 
                        } elseif ($type=='select') {                        
                            $output[$name]  =  wp_filter_nohtml_kses( $input[$name] ); 
                        } elseif (($type=='bildchecklist') || ($type=='bilddirchecklist')) {                            
                            $output[$name]  = $input[$name];
			} elseif ($type=='urlchecklist') {   	    			   
			    $output[$name]  = $input[$name];
                        } else {
                            $output[$name]  =  wp_filter_nohtml_kses( $input[$name] );
                        }
                    } else {                        
                        // Wurde leer gemacht oder leer uebergeben#
                        if ($type=='bool') {
                            $output[$name] =0;
                        } elseif ($type=='text') {
                            $output[$name] = "";
                        } elseif ($type=='textarea') {
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

   
    if (($input['slider-alternativesrc'] != '') && (strlen(trim($input['slider-alternativesrc']))>10)) {            
         $input['slider-defaultbildsrc'] = $input['slider-alternativesrc'];
    }
    if (($input['artikelbild-url'] != '') && (strlen(trim($input['artikelbild-url']))>10)) {          
         $input['artikelbild-src'] = $input['artikelbild-url'];
    }
    
    if (($input['seitenbild-url'] != '') && (strlen(trim($input['seitenbild-url']))>10)) {            
         $input['seiten-defaultbildsrc'] = $input['seitenbild-url'];
    }

  
    
	
   return $output;

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



/*
 * Reads Directory and contents, ignoring unused files
 */

function dirToArray($dir) {  
   $result = array();
   $contents = scandir($dir);
   $bad = array(".", "..", ".DS_Store", "_notes", "Thumbs.db", "Browse.plb");
   $cdir = array_diff($contents, $bad);   
   
   foreach ($cdir as $key => $value) {
      if (!in_array($value,array(".","..")))
      {
         if (is_dir($dir . DIRECTORY_SEPARATOR . $value))
         {
            $result[$value] = dirToArray($dir . DIRECTORY_SEPARATOR . $value);
         }
         else
         {
            $result[] = $value;
         }
      }
   }
  
   return $result;
} 

