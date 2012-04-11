<?php                    
  $options = get_option( 'piratenkleider_theme_options' );
?>  
<h3><a href="http://piratenpartei-saarland.de/">Landtagswahl NRW: am 13.5. PIRATEN wählen!</a></h3>
<div class='flexslider fs2'>
	<ul class='slides'>
		<li class='slide'>
			<img src="https://www.piratenpartei-nrw.de/wp-content/uploads/2012/04/plakat_bildung.png">
		</li>
		<li class='slide'>
			<img src="https://www.piratenpartei-nrw.de/wp-content/uploads/2012/04/plakat_update.png">
		</li>
		<li class='slide'>
			<img src="https://www.piratenpartei-nrw.de/wp-content/uploads/2012/04/plakat_systemrelevant.png">
		</li>
	</ul>
</div>


<?php
	if ( is_active_sidebar( 'sidebar-widget-area' ) ) : ?>
	<?php dynamic_sidebar( 'sidebar-widget-area' ); ?>
<?php endif; ?>

<?php if ( $options['feed_twitter'] != "" ){ ?>
<script>
var twitter_name = "<?php echo $options['feed_twitter']; ?>";
var twitter_count = <?php echo $options['feed_twitter_numberarticle']; ?>;
</script>
<div class="twitterwidget">
	<h3><a href="https://twitter.com/#!/<?php echo $options['feed_twitter']; ?>">twitter.com/<?php echo $options['feed_twitter']; ?></a></h3>

<?php }?>
	<ul id="tweet_container"></ul>
</div>