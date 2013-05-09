<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Toolbox
 * @since Toolbox 0.1
 */
?>



	
</div><!-- #page -->
<div id="push"></div>
</div>
<!-- #wrapper --> 
<div id="footer" class="footer">
	
	<div id="footer-inner">
		
		<div class="container">
			<div id="site-generator">
			<?php do_action( 'toolbox_credits' ); ?>
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'toolbox' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'toolbox' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'toolbox' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'toolbox' ), 'wstrap', '<a href="http://www.xdoescode.com/" rel="designer">Xavier Drdak</a>' ); ?>
		</div>
		</div>
	</div>
</div>

<?php wp_footer(); ?>

</body>
</html>