
    <h2 class="skip"><a name="searchform"><?php _e("Suche", 'piratenkleider'); ?></a></h2>

    <form method="get" class="searchform" action="<?php echo home_url('','relative'); ?>/">
            <label class="visuallyhidden" for="suche"><?php _e("Suche nach", 'piratenkleider'); ?>:</label>
            <input type="text" value="<?php the_search_query(); ?>" name="s" id="suche" placeholder="<?php _e("Suchbegriff eingeben", 'piratenkleider'); ?>"  
                onfocus="if(this.value=='<?php _e("Suchbegriff eingeben", 'piratenkleider'); ?>')this.value='';" onblur="if(this.value=='')this.value='<?php _e("Suchbegriff eingeben", 'piratenkleider'); ?>';" />
            
             in <?php wp_dropdown_categories( 'show_option_all='.__('Alle Kategorien','piratenkleider') ); ?> 
            <input type="submit" class="searchsubmit" value="<?php _e("Suchen", 'piratenkleider'); ?>" />
    </form>
    