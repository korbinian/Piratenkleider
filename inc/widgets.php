<?php
/*
 * Piratenkleider Widgets
 * Proudly made with a lot of coffee 
 */


function piratenkleider_widgets_init() {
    global $options;
   // Sidebar
    register_sidebar( array(
            'name' => __( 'Sitebar 1 (Upper)', 'piratenkleider' ),
            'id' => 'sidebar-widget-area',
            'description' => __( 'This region is above of optional poster slider.', 'piratenkleider' ),
            'before_widget' => '<div class="widget">',
            'after_widget' => '</div>',
            'before_title' => '<h2>',
            'after_title' => '</h2>',
    ) );
   // Sidebar2
    register_sidebar( array(
            'name' => __( 'Sidebar 2 (Lower)', 'piratenkleider' ),
            'id' => 'sidebar-widget-area-afterplakate',
            'description' => __( 'This region is below of optional poster slider.', 'piratenkleider' ),
            'before_widget' => '<div class="widget">',
            'after_widget' => '</div>',
            'before_title' => '<h2>',
            'after_title' => '</h2>',
    ) );

   

    // Widgets for indexpages (categories, tags, authorpage)
    register_sidebar( array(
            'name' => __( 'Start page: Intro', 'piratenkleider' ),
            'id' => 'startpage-intro-area',
            'description' => __( 'Region below slider on start page.', 'piratenkleider' ),
            'before_widget' => '<div class="widget">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
    ) );


    register_sidebar( array(
            'name' => __( 'Start page: Left footer (content)', 'piratenkleider' ),
            'id' => 'first-startpage-widget-area',
            'description' => __( 'On start page: Content footer, left side.', 'piratenkleider' ),
            'before_widget' => '<div class="widget">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
    ) );

    register_sidebar( array(
            'name' => __( 'Start page: Right footer (content)', 'piratenkleider' ),
            'id' => 'second-startpage-widget-area',
            'description' => __( 'On start page: Content footer, right side.', 'piratenkleider' ),
            'before_widget' => '<div class="widget">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
    ) );

    // Linke Seite der Fu&szlig;zeile
    register_sidebar( array(
            'name' => __( 'Page footer: Left', 'piratenkleider' ),
            'id' => 'first-footer-widget-area',
            'description' => __( 'Region below main content, left site.', 'piratenkleider' ),
            'before_widget' => '<div class="widget">',
            'after_widget' => '</div>',
            'before_title' => '<h2>',
            'after_title' => '</h2>',
    ) );

    // Rechte Seite der Fu&szlig;zeile
    register_sidebar( array(
            'name' => __( 'Page footer: Right', 'piratenkleider' ),
            'id' => 'second-footer-widget-area',
            'description' => __( 'Region below main content, right site.', 'piratenkleider' ),
            'before_widget' => '<div class="widget">',
            'after_widget' => '</div>',
            'before_title' => '<h2>',
            'after_title' => '</h2>',
    ) );

    // Widgets for indexpages (categories, tags, authorpage)
    register_sidebar( array(
            'name' => __( 'Index pages: Content footer', 'piratenkleider' ),
            'id' => 'indexpages-widget-area',
            'description' => __( 'Content footer for index pages (e.g. categoryindex, archive, ...)', 'piratenkleider' ),
            'before_widget' => '<div class="widget">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
    ) );
    if ($options['artikelstream-show-widget']==1) {
	 // Widgets for indexpages (categories, tags, authorpage)
    register_sidebar( array(
            'name' => __( 'Start page: Optional content', 'piratenkleider' ),
            'id' => 'artikelstream-widget',
            'description' => __( 'Optional widget for content area; positioned after article stream and can be used to add external feeds in content area.', 'piratenkleider' ),
            'before_widget' => '<div id="%1$s" class="widget-stream">',
            'after_widget' => '</div>',
            'before_title' => '<h1>',
            'after_title' => '</h1>',
    ) );
    }

}
add_action( 'widgets_init', 'piratenkleider_widgets_init' );


/**
 * Adds Newsletter_Widget widget.
 */
class Newsletter_Widget extends WP_Widget {
	public function __construct() {
		parent::__construct(
	 		'Newsletter_Widget', // Base ID
			__( 'Subscribe to newsletter', 'piratenkleider' ),
			array( 'description' => __( 'Displays a form to subscribe to a mailing list.', 'piratenkleider' ), ) // Args
		);
	}
	
	public function widget( $args, $instance ) {                
		extract( $args );
		$title = apply_filters( 'widget_title', $instance['title'] );
		$url = esc_url($instance['url']);
				
		echo $before_widget;				                    
                echo '<div class="newsletter">';
                echo $before_title . $title . $after_title;  ?> 
                 
                <form method="post" action="<?php echo $url; ?>">						
                    <label for="<?php echo $this->get_field_id( 'title' ); ?>">
                        <?php _e("Subscribe to newsletter", 'piratenkleider'); ?>
                    </label>
                    <input type="text" id="<?php echo $this->get_field_id( 'title' ); ?>" 
                           name="email" 
                           value="<?php _e("Enter email address", 'piratenkleider'); ?>" 
                           placeholder="<?php _e("Enter email address", 'piratenkleider'); ?>"
                           onfocus="if(this.value=='<?php _e("Enter email address", 'piratenkleider'); ?>')this.value='';" 
                           onblur="if(this.value=='')this.value='<?php _e("Enter email address", 'piratenkleider'); ?>';">
                    <input type="submit" name="email-button" 
                           value="<?php _e("Subscribe", 'piratenkleider'); ?>" id="newslettersubmit">
            <?php 	    
                $site_link = home_url();
                if ((isset($url))&& (strpos($url, $site_link) !== false)) {  
                    echo "<p>";
                    _e("Notice: You will leave this website for further steps.", 'piratenkleider');
                    echo "</p>";
                } ?>		    
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
		'title'		    => __( 'Newsletter / Mailing list', 'piratenkleider' ),
		'newsletter_url'    => $defaultoptions['url-newsletteranmeldung'],
	    );
	    $instance = wp_parse_args((array)$instance, $defaults);
	    $title = $instance['title'];
	    $url = $instance['newsletter_url'];	    
	    ?> 
             <p>
                <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:', 'piratenkleider' ); ?>
                <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
                </label> 
            </p>

             <p>
                <label for="<?php echo $this->get_field_id( 'newsletter_url' ); ?>"><?php _e( 'URL for subscribing form (with email attribute)', 'piratenkleider' ); ?>
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
                        __( 'Pirate Links', 'piratenkleider' ),
			array( 'description' => __( 'List for several pirate party sections worldwide and in some countries', 'piratenkleider' ), ) // Args
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
                echo "<label for=\"".$this->get_field_name( 'bereich' )."\">".__( 'Chose section.', 'piratenkleider' )."</label>\n";   
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
                        __( 'Image Link', 'piratenkleider' ),
			array( 'description' => __( 'Sets an image link for media library', 'piratenkleider' ), ) // Args
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
                <label for="<?php echo $this->get_field_id('title'); ?>"><?php echo 'Title:'; ?></label>
                <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" 
                       name="<?php echo $this->get_field_name('title'); ?>" 
                       type="text" value="<?php echo esc_attr($title); ?>" />

            </p>
            <p>
                <label for="<?php echo $this->get_field_id('url'); ?>"><?php echo 'Target-URL:'; ?></label>
                <input class="widefat" id="<?php echo $this->get_field_id('url'); ?>" 
                       name="<?php echo $this->get_field_name('url'); ?>" 
                       type="text" value="<?php echo esc_attr($url); ?>" /> 
            </p>
             <p>
                <label for="<?php echo $this->get_field_id('image_url'); ?>"><?php _e('Image:','piratenkleider'); ?>
                        <input 	class="image_url widefat" id="<?php echo $this->get_field_id('image_url'); ?>" 
                       name="<?php echo $this->get_field_name('image_url'); ?>" 
                       type="text" value="<?php echo esc_attr($image_url); ?>" />

                        <input type="hidden" id="<?php echo $this->get_field_id('image_id'); ?>" 
                          class="image_id"  name="<?php echo $this->get_field_name('image_id'); ?>" />

                        <input class="button upload_image_button" name="upload_image_button" id="<?php echo $this->get_field_id('image_url'); ?>_button"  value="<?php _e('Upload', 'piratenkleider'); ?>" />


                    <br /><?php _e('Chose image from media library or enter an URL.', 'piratenkleider'); ?>

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
		$image_attributes = wp_get_attachment_image_src( $image_id, $defaultoptions['bannerlink_name'] ); 
		$image_url = $image_attributes[0];
		$image_width = $image_attributes[1];
		$image_height = $image_attributes[2];
	    }
            $site_link = home_url();
            if ((isset($url))&& (strpos($url, $site_link) !== false)) {  
                $url = wp_make_link_relative($url);
            }
            if (($image_id >0) || ((isset($image_url))&& (strpos($image_url, $site_link) !== false))) {  
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

