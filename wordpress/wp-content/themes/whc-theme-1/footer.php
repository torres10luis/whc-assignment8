<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package whc-theme-1
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer text-center">
		<div class="site-info">

			<div class="col-md-9">
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'whc' ) ); ?>">
					<?php
					/* translators: %s: CMS name, i.e. WordPress. */
					printf( esc_html__( 'Proudly powered by %s', 'whc' ), 'WordPress' );
					?>
				</a>
				<span class="sep"> | </span>
					<?php
					/* translators: 1: Theme name, 2: Theme author. */
					printf( esc_html__( 'Theme: %1$s by %2$s.', 'whc' ), 'whc', '<a href="http://underscores.me/">Luis Saldana</a>' );
					?>
			</div>
			<div class="col-md-3">
					<?php //dynamic_sidebar( 'foot2' ); ?>
			</div>
			
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
