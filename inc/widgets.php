<?php
/*
 * Piratenkleider Widgets
 * Proudly made with a lot of coffee since version 2.11
 */


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


/**
 * Adds Newsletter_Widget widget.
 */
class Newsletter_Widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	public function __construct() {
		parent::__construct(
	 		'Newsletter_Widget', // Base ID
			__( 'Piraten Newsletter', 'piratenkleider' ),
			array( 'description' => __( 'Formular zur EIngabe einer Mailadresse zu einem Majordomolink angeben.', 'piratenkleider' ), ) // Args
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {            
            $options = get_option( 'piratenkleider_theme_options' );
            if (!isset($options['url-newsletteranmeldung'])) {
                $options['url-newsletteranmeldung'] = $defaultoptions['url-newsletteranmeldung']; }
		extract( $args );
		$title = apply_filters( 'widget_title', $instance['title'] );

		echo $before_widget;				
                    
                echo '<div class="newsletter">';
                echo $before_title . $title . $after_title;
               if (isset($options['url-newsletteranmeldung'])) {     
                 ?> 
                 
                        <form method="post" action="<?php echo $options['url-newsletteranmeldung']; ?>">						
                                <label for="email-newsletter"><?php _e("Zum Newsletter anmelden", 'piratenkleider'); ?></label>
                                <input type="text" name="email-newsletter" id="email-newsletter" value="<?php _e("E-Mail-Adresse eingeben", 'piratenkleider'); ?>" placeholder="<?php _e("E-Mail-Adresse eingeben", 'piratenkleider'); ?>"
                                       onfocus="if(this.value=='<?php _e("E-Mail-Adresse eingeben", 'piratenkleider'); ?>')this.value='';" onblur="if(this.value=='')this.value='<?php _e("E-Mail-Adresse eingeben", 'piratenkleider'); ?>';">
                                <input type="submit" name="email-button" value="<?php _e("anmelden", 'piratenkleider'); ?>" id="newslettersubmit">
                                <p><?php _e("Hinweis: Beim Aufruf wird der Webauftritt verlassen.", 'piratenkleider'); ?>
                                </p>
                        </form>           
                </div>
                <?php 
               } else {                   
                    echo '<p>';
                    _e("Fehler: Adresse des Newsletter-Dienstes ist nicht eingetragen. Bitte geben Sie diese Adresse zun&auml;chst bei den Theme-Optionen an.", 'piratenkleider'); 
                   echo '</p>';
               }
               echo $after_widget;
                
                
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = strip_tags( $new_instance['title'] );

		return $instance;
	}

	/**
	 * Back-end widget form.
	 * @see WP_Widget::form()
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		if ( isset( $instance[ 'title' ] ) ) {
			$title = $instance[ 'title' ];
		} else {
			$title = __( 'Newsletter', 'piratenkleider' );
		}		
                $options = get_option( 'piratenkleider_theme_options' );
		 if (!isset($options['url-newsletteranmeldung'])) {
                     $options['url-newsletteranmeldung'] = $defaultoptions['url-newsletteranmeldung']; }
   
                 if (empty($options['url-newsletteranmeldung'])) {                                      
                   echo '<p>';
                    _e("Fehler: Adresse des Newsletter-Dienstes ist nicht eingetragen. Bitte geben Sie diese Adresse zun&auml;chst bei den Theme-Optionen an.", 'piratenkleider'); 
                   echo '</p>';
		 } else {  ?>                 
                     <p>
                    <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Titel:', 'piratenkleider' ); ?></label> 
                    <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
                    </p>
                 <?php
                 }
	}

} // class Newsletter_Widget
// register widget
add_action( 'widgets_init', create_function( '', 'register_widget( "Newsletter_Widget" );' ) );


/**
 * Adds Newsletter_Widget widget.
 */
class ParteiLinkliste_Widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	public function __construct() {
		parent::__construct(
	 		'ParteiLinkliste_Widget', // Base ID
                        __( 'Piraten Linkliste', 'piratenkleider' ),
			array( 'description' => __( 'Linkliste mit verschiedenen Gliederungen und Bereichen der Partei', 'piratenkleider' ), ) // Args
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {            
            extract( $args );
            $bereich =  $instance['bereich'] ;
            if ((!isset($bereich)) || (empty($bereich))) {
                $bereich = $defaultoptions['default_footerlink_key'];
            }
		echo $before_widget;
                global $default_footerlink_liste; 
                
                $title =   $default_footerlink_liste[$bereich]['title'];
                $url =   $default_footerlink_liste[$bereich]['url'];
  
                  if ((isset($url)) && (strlen($url)>5)) {
                        echo $before_title.'<a href="'.$url.'">'.$title.'</a>'.$after_title;
                  } else {
                        echo $before_title.$title.$after_title;
                  }
                  echo '<ul>';
                  
                  foreach($default_footerlink_liste[$bereich]['sublist'] as $i => $value) {
                       echo '<li><a href="'.$value.'">';                                                                                                        
                       echo $i.'</a></li>';
                       echo "\n";
                 }            
                 echo '</ul>';     
               
               echo $after_widget;
                
                
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
                $instance['bereich'] = strip_tags( $new_instance['bereich'] );
		return $instance;
	}

	/**
	 * Back-end widget form.
	 * @see WP_Widget::form()
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		
                if ( isset( $instance[ 'bereich' ] ) ) {
			$bereich = $instance[ 'bereich' ];
		} else {
			$bereich = $defaultoptions['default_footerlink_key'];
		}                 
 
                global $default_footerlink_liste;
                echo "<select name=\"".$this->get_field_name( 'bereich' )."\">\n";

                foreach($default_footerlink_liste as $i => $value) {   
                    echo "\t\t\t\t";
                    echo '<option value="'.$i.'"';
                    if ( $i == $bereich ) {
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
                echo "<label for=\"".$this->get_field_name( 'bereich' )."\">".__( 'Bereich oder Gliederung ausw&auml;hlen.', 'piratenkleider' )."</label>\n"; 
      
	}

} // class Partei Linkliste Widget
//
// register widget
add_action( 'widgets_init', create_function( '', 'register_widget( "ParteiLinkliste_Widget" );' ) );

?>
