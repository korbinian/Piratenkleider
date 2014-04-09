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
                    Wenn leer, erscheinen hier wechselnde Bilder 
                    mit Verlinkung zu Artikeln der Kategorie "Slider". 
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
                'description' => __( 'Dieser Bereich ist rechts neben dem Slider und dem Hauptcontent positioniert. Wenn leer, werden hier
                    die Links zur Piratenwebsite gezeigt, die unter Optionen definiert sind.', 'piratenkleider' ),
                'before_widget' => '<div class="widget">',
                'after_widget' => '</div>',
                'before_title' => '<h3 class="widget-title">',
                'after_title' => '</h3>',
        ) );
        

        // Widgets for indexpages (categories, tags, authorpage)
        register_sidebar( array(
                'name' => __( 'Startseite: Introbereich', 'piratenkleider' ),
                'id' => 'startpage-intro-area',
                'description' => __( 'Introbereich unterhalb des Sliders bzw. Teasers auf der Startseite. Hier lassen sich beispielsweise fest stehende Begr&uuml;&szlig;ungen oder andere Widgets setzen, die noch vor dem eigentlichen Artikeln kommen.', 'piratenkleider' ),
                'before_widget' => '<div class="widget">',
                'after_widget' => '</div>',
                'before_title' => '<h2 class="widget-title">',
                'after_title' => '</h2>',
        ) );
        
        // Startseite: Links unterhalb der 3 Artikel, per default Anzeige
        // der weiteren Artikel 
        register_sidebar( array(
                'name' => __( 'Startseite: Links unten', 'piratenkleider' ),
                'id' => 'first-startpage-widget-area',
                'description' => __( 'Bereich links unterhalb der Artikel. Wenn leer, werden hier weitere Artikel gezeigt. ', 'piratenkleider' ),
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
                'description' => __( 'Bereich rechts unterhalb der Artikel der Startseite. Wenn leer, wird hier eine Schlagwortliste gezeigt.', 'piratenkleider' ),
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
                    die Blogadresse und die RSS-Feedadresse gezeigt', 'piratenkleider' ),
                'before_widget' => '<div class="widget">',
                'after_widget' => '</div>',
                'before_title' => '<h2>',
                'after_title' => '</h2>',
        ) );
	
	// Widgets for indexpages (categories, tags, authorpage)
        register_sidebar( array(
                'name' => __( 'Indexseiten', 'piratenkleider' ),
                'id' => 'indexpages-widget-area',
                'description' => __( 'Widgetbereich unterhalb des Artikelindex einer Kategorie-, Autoren- oder Tagseite', 'piratenkleider' ),
                'before_widget' => '<div class="widget">',
                'after_widget' => '</div>',
                'before_title' => '<h3 class="widget-title">',
                'after_title' => '</h3>',
        ) );

}
add_action( 'widgets_init', 'piratenkleider_widgets_init' );


/**
 * Adds Newsletter_Widget widget.
 */
class Newsletter_Widget extends WP_Widget {
	public function __construct() {
		parent::__construct(
	 		'Newsletter_Widget', // Base ID
			__( 'Piraten-Newsletter', 'piratenkleider' ),
			array( 'description' => __( 'Formular zur Eingabe einer E-Mail-Adresse anzeigen.', 'piratenkleider' ), ) // Args
		);
	}
	
	public function widget( $args, $instance ) {                
		extract( $args );
		$title = apply_filters( 'widget_title', $instance['title'] );
		$url = esc_url($instance['url']);
				
		echo $before_widget;				                    
                echo '<div class="newsletter">';
                echo $before_title . $title . $after_title;
                 ?> 
                 
                        <form method="post" action="<?php echo $url; ?>">						
                                <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e("Zum Newsletter anmelden", 'piratenkleider'); ?></label>
                                <input type="text" id="<?php echo $this->get_field_id( 'title' ); ?>" name="email" value="<?php _e("E-Mail-Adresse eingeben", 'piratenkleider'); ?>" 
				       placeholder="<?php _e("E-Mail-Adresse eingeben", 'piratenkleider'); ?>"
                                       onfocus="if(this.value=='<?php _e("E-Mail-Adresse eingeben", 'piratenkleider'); ?>')this.value='';" 
				       onblur="if(this.value=='')this.value='<?php _e("E-Mail-Adresse eingeben", 'piratenkleider'); ?>';">
                                <input type="submit" name="email-button" value="<?php _e("Anmelden", 'piratenkleider'); ?>" id="newslettersubmit">
				
		    <?php 	    
		    $site_link = home_url();
		    if ((isset($url))&& (strpos($url, $site_link) !== false)) {  
			echo "<p>";
			_e("Hinweis: Beim Aufruf wird der Webauftritt verlassen.", 'piratenkleider');
			echo "</p>";
		    }	?>		    
                        </form>           
                </div>
                <?php 
 
               echo $after_widget;
                
                
	}

	
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['url'] = esc_url($new_instance['newsletter_url']);	    
		return $instance;
	}

	
	public function form( $instance ) {
	    global $defaultoptions;
	   
	    
	    $defaults = array(
		'title'		    => __( 'Newsletter', 'piratenkleider' ),
		'newsletter_url'    => $defaultoptions['url-newsletteranmeldung'],
	    );
	    $instance = wp_parse_args((array)$instance, $defaults);
	    $title = $instance['title'];
	    $url = $instance['newsletter_url'];
	    
	    ?> 
		
		    
		
		 <p>
                    <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Titel:', 'piratenkleider' ); ?>
                    <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		    </label> 
                </p>
             
		 <p>
		    <label for="<?php echo $this->get_field_id( 'newsletter_url' ); ?>"><?php _e( 'CGI-URL zur Registrierung im Newsletter:', 'piratenkleider' ); ?>
		    <input class="widefat" id="<?php echo $this->get_field_id( 'newsletter_url' ); ?>" name="<?php echo $this->get_field_name( 'newsletter_url' ); ?>" type="text" value="<?php echo esc_attr( $url ); ?>" />
		    </label> 
		</p>
                 <?php
                
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
                        __( 'Piraten-Linkliste', 'piratenkleider' ),
			array( 'description' => __( 'Linkliste mit verschiedenen Gliederungen und Bereichen der Partei', 'piratenkleider' ), ) // Args
		);
	}

	
	public function widget( $args, $instance ) {     
	    global $defaultoptions;
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

	
	public function update( $new_instance, $old_instance ) {
		$instance = array();
                $instance['bereich'] = strip_tags( $new_instance['bereich'] );
		return $instance;
	}

	
	public function form( $instance ) {
		global $defaultoptions;
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


/**
 * Adds Bannerlink_Widget widget.
 */
class Bannerlink_Widget extends WP_Widget {

	
	public function __construct() {
		parent::__construct(
	 		'Bannerlink_Widget', // Base ID
                        __( 'Banner/Logo mit Link', 'piratenkleider' ),
			array( 'description' => __( 'Schalten von Link mit einem Logo oder Banner', 'piratenkleider' ), ) // Args
		);
	}
	public function form($instance) {
	    $defaults = array(
		'title' => '',
		'url'	=> '',
		'image_url'	=> '',
		'image_id'  => 0
	    );
	    $instance = wp_parse_args((array)$instance, $defaults);
	    $title = $instance['title'];
	    $url = $instance['url'];
	    $image_url = $instance['image_url'];
	    $image_id = $instance['image_id'];


	    ?>
		    <p>
			<label for="<?php echo $this->get_field_id('title'); ?>"><?php echo 'Titel:'; ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" 
			       name="<?php echo $this->get_field_name('title'); ?>" 
			       type="text" value="<?php echo esc_attr($title); ?>" />
	  
		    </p>
		    <p>
			<label for="<?php echo $this->get_field_id('url'); ?>"><?php echo 'Ziel-URL:'; ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('url'); ?>" 
			       name="<?php echo $this->get_field_name('url'); ?>" 
			       type="text" value="<?php echo esc_attr($url); ?>" />
	  
		    </p>
		     <p>
			<label for="<?php echo $this->get_field_id('image_url'); ?>"><?php _e('Bild-URL:','piratenkleider'); ?>
                        	<input 	class="image_url widefat" id="<?php echo $this->get_field_id('image_url'); ?>" 
			       name="<?php echo $this->get_field_name('image_url'); ?>" 
			       type="text" value="<?php echo esc_attr($image_url); ?>" />
                  

                        	<input type="hidden" id="<?php echo $this->get_field_id('image_id'); ?>" 
                                  class="image_id"  name="<?php echo $this->get_field_name('image_id'); ?>" />
		
				<input class="button upload_image_button" name="upload_image_button" id="<?php echo $this->get_field_id('image_url'); ?>_button"  value="<?php _e('Hochladen / Ausw&auml;hlen', 'piratenkleider'); ?>" />
				

			    <br /><?php _e('Gib eine URL zu einem Bild ein oder verwende die Mediathek, um es hochzuladen oder um ein vorhandenes Bild auszuw&auml;hlen.', 'piratenkleider'); ?>
			   
                        </label> 
		    </p>
		    <?php 
	}
	
	public function update($new_instance, $old_instance) {
	    $instance = array();
	    $instance['title'] = strip_tags($new_instance['title']);
	    $instance['url'] = esc_url($new_instance['url']);	    
	    $instance['image_url'] = esc_url($new_instance['image_url']);
	    $instance['image_id'] = intval($new_instance['image_id']);
	    return $instance;
	}
	
	public function widget($args, $instance) {
	    global $defaultoptions;
	    
	    extract($args);
	    $title = apply_filters('widget_title', $instance['title']);
	    $url = esc_url($instance['url']);
	    $image_url = esc_url($instance['image_url']);
	    $image_id = intval($instance['image_id']);
	    $image_width = $defaultoptions['bannerlink-width'];
	    $image_height =0;
	    if ($image_id >0) {
		// Get Thumbnail instead of original 
		$image_attributes = wp_get_attachment_image_src( $image_id, array($defaultoptions['bannerlink-width'],$defaultoptions['bannerlink-height']) ); 
		$image_url = $image_attributes[0];
		$image_width = $image_attributes[1];
		$image_height = $image_attributes[2];
	    }
            $site_link = home_url();
            if ((isset($url))&& (strpos($url, $site_link) !== false)) {  
                $url = wp_make_link_relative($url);
            }
            if ((isset($image_url))&& (strpos($image_url, $site_link) !== false)) {  
                $image_url = wp_make_link_relative($image_url);
            }                       
                                  
	    if (!isset($url) && !isset($image_url)) {
		return;
	    }
	    echo $before_widget;	    
	    echo '<p class="bannerlink">';
            if ((isset($url)) && (strlen($url)>0))
                echo '<a href="'.$url.'">';
	    if ($image_url) {
		if ($image_height > 0) {
		    echo '<img src="'.$image_url.'" width="'.$image_width.'" height="'.$image_height.'" alt="'.$title.'">';
		} else {
		    echo '<img src="'.$image_url.'" style="max-width: '.$defaultoptions['bannerlink-width'].'px; height: auto;" alt="'.$title.'">';
		}
	    } else {
		echo $title;
	    }
             if ((isset($url)) && (strlen($url)>0))
                echo '</a>';
	    echo "</p>\n";
	    echo $after_widget;
	}
	
}	
//
// register widget
add_action( 'widgets_init', create_function( '', 'register_widget( "Bannerlink_Widget" );' ) );

?>
