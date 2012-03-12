<h2 class="visuallyhidden">Suche</h2>
<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
	<label class="visuallyhidden" for="s"><?php _e('Search:'); ?></label>
	<input type="text" value="<?php the_search_query(); ?>" name="s" id="s" placeholder="Suchbegriff&hellip;" />
	<input type="submit" id="searchsubmit" value="Suchen" />
</form>