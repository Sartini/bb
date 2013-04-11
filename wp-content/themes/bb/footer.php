<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!--/ficha div container-fluid--> 
	<footer id="colophon" role="contentinfo">
		<div class="site-info">
			<?php do_action( 'twentytwelve_credits' ); ?>
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentytwelve' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentytwelve' ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentytwelve' ), 'WordPress' ); ?></a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->


    <script src="<?php echo get_bloginfo('template_url'); ?>/js/bootstrap/bootstrap-transition.js"></script>
    <script src="<?php echo get_bloginfo('template_url'); ?>/js/bootstrap/bootstrap-alert.js"></script>
    <script src="<?php echo get_bloginfo('template_url'); ?>/bootstrap/bootstrap-modal.js"></script>
    <script src="<?php echo get_bloginfo('template_url'); ?>/js/bootstrap/bootstrap-dropdown.js"></script>
    <script src="<?php echo get_bloginfo('template_url'); ?>/js/bootstrap/bootstrap-scrollspy.js"></script>
    <script src="<?php echo get_bloginfo('template_url'); ?>/js/bootstrap/bootstrap-tab.js"></script>
    <script src="<?php echo get_bloginfo('template_url'); ?>/js/bootstrap/bootstrap-tooltip.js"></script>
    <script src="<?php echo get_bloginfo('template_url'); ?>/js/bootstrap/bootstrap-popover.js"></script>
    <script src="<?php echo get_bloginfo('template_url'); ?>/js/bootstrap/bootstrap-button.js"></script>
    <script src="<?php echo get_bloginfo('template_url'); ?>/js/bootstrap/bootstrap-collapse.js"></script>
    <script src="<?php echo get_bloginfo('template_url'); ?>/js/bootstrap/bootstrap-carousel.js"></script>
    <script src="<?php echo get_bloginfo('template_url'); ?>/js/bootstrap/bootstrap-typeahead.js"></script>

<?php wp_footer(); ?>
</body>
