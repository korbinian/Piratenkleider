<?php 
global $defaultoptions;
?>
<h2 class="skip"><?php echo $defaultoptions['default_text_title_search']; ?></h2>

<form method="get" class="searchform" action="<?php echo home_url(); ?>/">
	<label class="visuallyhidden" for="s"><?php echo $defaultoptions['default_text_title_search']; ?>:</label>
	<input type="text" value="<?php the_search_query(); ?>" name="s" id="s" placeholder="<?php echo $defaultoptions['default_text_search_placeholder']; ?>"  
            onfocus="if(this.value=='<?php echo $defaultoptions['default_text_search_placeholder']; ?>')this.value='';" onblur="if(this.value=='')this.value='<?php echo $defaultoptions['default_text_search_placeholder']; ?>';" />
	<input type="submit" class="searchsubmit" value="suchen" />
</form>