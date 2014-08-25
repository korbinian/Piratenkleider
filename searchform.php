
    <h2 class="skip"><a name="searchform"><?php _e("Search", 'piratenkleider'); ?></a></h2>

    <form method="get" class="searchform" action="<?php echo home_url('','relative'); ?>/">
            <label class="skip" for="suche"><?php _e("Search for", 'piratenkleider'); ?>:</label>
            <input type="text" value="<?php the_search_query(); ?>" name="s" id="suche" placeholder="<?php _e("Enter search term", 'piratenkleider'); ?>"  
                onfocus="if(this.value=='<?php _e("Enter search term", 'piratenkleider'); ?>')this.value='';" onblur="if(this.value=='')this.value='<?php _e("Enter search term", 'piratenkleider'); ?>';" />
            
             in <?php wp_dropdown_categories( 'show_option_all='.__('All categories','piratenkleider') ); ?> 
            <input type="submit" class="searchsubmit" value="<?php _e("Search", 'piratenkleider'); ?>" />
    </form>
    