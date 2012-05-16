<?php get_header();
global $defaultoptions;
$options = get_option( 'piratenkleider_theme_options' );
if (!isset($options['aktiv-defaultseitenbild'])) 
            $options['aktiv-defaultseitenbild'] = $defaultoptions['aktiv-defaultseitenbild'];

?>

<div class="section content" id="main-content">
  <div class="row">
    <div class="content-primary">     
        <div class="content-header">            
          <h1 id="page-title"><span><?php the_title(); ?></span></h1>
        
        <?php if (has_post_thumbnail()) { 
            echo '<div class="symbolbild">';
              the_post_thumbnail(); 
            echo '</div>';  
        } else {            
           if ($options['aktiv-defaultseitenbild']==1) {   
                $bilderoptions = get_option( 'piratenkleider_theme_defaultbilder' ); 
                $defaultbildsrc = $bilderoptions['seiten-defaultbildsrc'];     
                 echo '<div class="symbolbild">';
                 echo '<img src="'.$defaultbildsrc.'"  alt="">';                        
                 echo '</div>';  
           }            
        }   
         ?>
      </div>
      <div class="skin">
        
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
        <?php wp_link_pages( array( 'before' => '' . __( 'Seiten:', 'piratenkleider' ), 'after' => '' ) ); ?>
        <?php edit_post_link( __( 'Bearbeiten', 'piratenkleider' ), '', '' ); ?>
        <?php endwhile; ?>
      </div>
    </div>

    <div class="content-aside">
      <div class="skin">      
          
          <h1 class="skip"><?php echo $defaultoptions['default_text_title_sidebar']; ?></h1>
          
            <?php
            
            if (!isset($options['zeige_subpagesonly'])) 
            $options['zeige_subpagesonly'] = $defaultoptions['zeige_subpagesonly'];
  
            if (!isset($options['zeige_sidebarpagemenu'])) 
            $options['zeige_sidebarpagemenu'] = $defaultoptions['zeige_sidebarpagemenu'];

          if ($options['zeige_sidebarpagemenu']==1) {   
           if ($options['zeige_subpagesonly']==1) {
                //if the post has a parent

                if($post->post_parent){
                    //collect ancestor pages
                    $relations = get_post_ancestors($post->ID);
                    //get child pages
                    $result = $wpdb->get_results( "SELECT ID FROM wp_posts WHERE post_parent = $post->ID AND post_type='page'" );
                    if ($result){
                        foreach($result as $pageID){
                            array_push($relations, $pageID->ID);
                        }
                    }
                    //add current post to pages
                    array_push($relations, $post->ID);
                    //get comma delimited list of children and parents and self
                    $relations_string = implode(",",$relations);
                    //use include to list only the collected pages. 
                    $sidelinks = wp_list_pages("sort_column=menu_order&title_li=&echo=0&include=".$relations_string);
                }else{
                    // display only main level and children
                    $sidelinks = wp_list_pages("sort_column=menu_order&title_li=&echo=0&depth=1&child_of=".$post->ID);
                }

                if ($sidelinks) { ?>
                <ul class="menu">
                    <?php //links in <li> tags
                    echo $sidelinks; ?>
                </ul>         
                <?php } 
                             
             } else {
          
                if ( has_nav_menu( 'primary' ) ) {
                    wp_nav_menu( array('depth' => 0, 'container_class' => 'menu-header', 'theme_location' => 'primary', 'walker'  => new My_Walker_Nav_Menu()) );      
                } else { 
                ?>
                <ul class="menu">
                    <?php  wp_page_menu( ); ?>
                </ul> 
                <?php 
                } 
             }
          }
        
        $custom_fields = get_post_custom();
        if ($custom_fields['right_column'][0]<>'') {
            echo $custom_fields['right_column'][0]; 
        }  
         ?>
         <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
