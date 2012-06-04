
  <footer>
    <hr />
    <?php if ( ! dynamic_sidebar( 'footer-area' ) ) : ?>
    <?php endif; ?>
		<div class="footer-widget" id="footer-info">
			<p>Proudly powered by <a href="http://wordpress.org/" target="_blank">Wordpres</a></p>
	  	<!-- <?php echo get_num_queries(); ?> queries in <?php timer_stop(1); ?> seconds. -->
		</div>
  </footer>

</div>
<script type="text/javascript">
(function($){
  $(document).ready(function(){
    
  });
})(jQuery);
</script>
<?php wp_footer(); ?>
</body>
</html>