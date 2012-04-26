<h2 class="skip">Suche</h2>

<form method="get" class="searchform" action="<?php bloginfo('url'); ?>/">
	<label class="visuallyhidden" for="s">Suchen:</label>
	<input type="text" value="<?php the_search_query(); ?>" name="s" id="s" placeholder="Suchbegriff eingeben"  
            onfocus="if(this.value=='Suchbegriff eingeben')this.value='';" onblur="if(this.value=='')this.value='Suchbegriff eingeben';" />
	<input type="submit" class="searchsubmit" value="suchen" />
</form>