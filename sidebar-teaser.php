
<div class="first-teaser-widget-area">
<?php if ( is_active_sidebar( 'first-teaser-widget-area' ) ) { ?>
        <?php dynamic_sidebar( 'first-teaser-widget-area' ); ?>
    <?php } else {        
         $options = get_option( 'piratenkleider_theme_options' );
         $catname = $options['slider-catname'];
         $bilderoptions = get_option( 'piratenkleider_theme_defaultbilder' ); 
         $defaultbildsrc = $bilderoptions['slider-defaultbildsrc'];                        
          
         if (!isset($catname) ) $catname ="Slider";         
         $numberarticle = $options['slider-numberarticle'];
         if (!isset($numberarticle) )  $numberarticle =3;   
         
        query_posts( array( 'category_name' => "$catname", 'posts_per_page' => $numberarticle) );
        
        echo "<div class='flexslider'>";
        echo "<ul class='slides'>";
        if ( have_posts() ) while ( have_posts() ) : the_post();
            echo "<li class='slide'>";
            if (has_post_thumbnail()) {
                the_post_thumbnail('full');
            } else {
                echo '<img src="'.$defaultbildsrc.'" width="640" height="240" alt="">';                
            }
            echo "<div class='caption'>";
            echo "<h3>Topthema</h3>";
            echo "<h2>";
            echo "<a href=";
            the_permalink();
            echo ">";
            echo short_title('&hellip;', 6);
            echo "</a>";
            echo "</h2>";
            echo "</div>";
            echo "</li>";
        endwhile;
        echo "</ul>";
        echo "</div>";
        wp_reset_query(); 
    } ?>
</div>
<div class="second-teaser-widget-area">
<div class="skin">
    <?php if ( is_active_sidebar( 'second-teaser-widget-area' ) ) { ?>
        <?php dynamic_sidebar( 'second-teaser-widget-area' ); ?>
    <?php } else { ?>
        <div class="textwidget">
            <ul>
            <li class="first"><a href="http://www.piratenpartei.de/politik/themen/"><div>Informiere dich</div> Unsere Themen & Ziele!</a></li>
            <li class="second"><a href="http://www.piratenpartei.de/unterstutze-uns/"><div>Unterstütze uns</div> Mit deinem Engagement!</a></li>
            <li class="third"><a href="http://www.piratenpartei.de/mitmachen/mitglied-werden/"><div>Werde Pirat!</div> Jetzt Mitglied werden!</a></li>
            </ul>
        </div>
    <?php }  ?>
</div>
</div>
