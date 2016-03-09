<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="footer-wrapper fixed-width-container">

								<div class="footer-contact">
										<h2>Contact Us</h2>
						<p>	<i class="fa fa-envelope"></i> info@leredbred.com</p>
										<p><i class="fa fa-phone"></i> <a href="tel:6045555555">604 555-5555</a></p>
											<ul>
												<li>
													<a href="#"><i class="fa fa-facebook"></i></a>
													<a href="#"><i class="fa fa-twitter"></i></a>
													<a href="#"><i class="fa fa-google-plus"></a></i>
												</li>
											</ul>
								</div><!-- footer-contact -->

								<div class="footer-logo">
									<img src="/wp-content/themes/redstarter/images/lrb-logo-white.svg"/>
								</div><!-- footer-logo -->

								<div class="footer-hours">
									<h2>Business Hours</h2>
									<p><span class="hours">Monday-Friday:</span> 9am to 5pm</p>
									<p><span class="hours">Saturday:</span> 10am to 2pm</p>
									<p><span class="hours">Sunday:</span> Closed</p>
								</div><!-- footer-contact -->

				</div><!-- footer-wrapper -->
				<div class="site-info">
					<a href="<?php echo esc_url( 'http://red-bread.dev/' ); ?>"><?php printf( esc_html( 'Copyright &copy; Le Red Bread 2016' ), 'Le red Bread' ); ?></a>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
