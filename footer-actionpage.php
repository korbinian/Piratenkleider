<?php 
    global $options;
 ?>   

</div> <!-- #content-body --> 
<div class="section footer">
    <nav role="navigation">
        <ul class="nav skiplinks">		
		<li><a class="p3-skip" id="skiplink-top" href="#top"><?php _e( 'Back to top.', 'piratenkleider' ); ?></a></li>
		<li><a class="p3-skip" id="skiplink-content-bottom" href="#main-content"><?php _e( 'Back to start of content.', 'piratenkleider' ); ?></a></li>
		<?php if ( $options['aktiv-suche'] == "1" ){ ?>
                <li><a class="p3-skip" id="skiplink-search-bottom" href="#searchform"><?php _e( 'Back to search form.', 'piratenkleider' ); ?></a></li>
		<?php } ?>
	</ul>
    </nav>
  </div>

<?php 
    wp_footer();     

   if (isset($options['html-eigene-anweisungen'])
        && strlen(trim($options['html-eigene-anweisungen'])) > 0) {
       echo $options['html-eigene-anweisungen'];     
   }  ?>       
</body>
</html>