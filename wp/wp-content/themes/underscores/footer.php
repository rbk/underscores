<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package underscores
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'underscores' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'underscores' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Site by %1$s', 'underscores' ), '<a href="http://gurustu.co/" rel="designer">GuRuStu</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
