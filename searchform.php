<h2 class="visuallyhidden">Suche</h2>
<form method="get" class="searchform" action="<?php bloginfo('url'); ?>/">
	<label class="visuallyhidden" for="s">Suchen:</label>
	<input type="text" value="<?php the_search_query(); ?>" name="s" id="s" placeholder="Suchbegriff&hellip;" />
	<input type="submit" class="searchsubmit" value="suchen" />
</form>