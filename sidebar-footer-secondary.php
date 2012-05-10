<div class="second-footer-widget-area">
    <div class="skin">
        <?php if ( is_active_sidebar( 'second-footer-widget-area' ) ) { 
            dynamic_sidebar( 'second-footer-widget-area' );
        } else {                    
            if ( has_nav_menu( 'sub' ) ) { ?>
                    <div class="widget"><h2><?php bloginfo( 'name' ); ?></h2> 
                    <?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'sub' ) ); ?>
                    </div>
            <?php } else { ?>
                <div class="widget">
                    <h2><?php bloginfo( 'name' ); ?></h2> 
                    <p class="titelurl"><a href="<?php echo home_url('/'); ?>"><?php echo home_url('/'); ?></a></p>                                                            
                    <ul>
                        <li><?php wp_loginout() ?></li>
                        <li><a href="http://creativecommons.org/licenses/by/3.0/de/">CC-BY-SA 3.0</a></li>
                        <li><a href="<?php bloginfo( 'rss_url' ); ?>">RSS-Feed</a></li>
                    </ul>                   
                </div>
            <?php } } ?>
    </div>
</div>
