<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			</div>

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">
					<!-- <a href="<?php echo esc_url( 'https://wordpress.org/' ); ?>"><?php printf( esc_html( 'Proudly powered by %s' ), 'WordPress' ); ?></a> -->
			<div class="footer-content">
                <div class="contact-info">
					<h3> Contact Info </h3>
					<ul>
					<li><a href='mailto:info@inhabitent.com'>info@inhabitent.com</a></li>
 						<li>778-456-7891</li>
					</ul>
				
				<div class="social-media">
                <ul>
                    <li><a href="http://www.facebook.com"><i class="fab fa-facebook-square"></i>
                            <span>facebook</span></a></li>
                    <li><a href="http://twitter.com"> <i class="fab fa-twitter"></i><span>twitter</span></a></li>
                    <li><a href="http://www.instagram.com"> <i class="fab fa-instagram"></i><span>instagram</span></a>
                    </li>
                    <li><a href="http://www.pinterest.com"> <i class="fab fa-pinterest"></i><span>pinterest</span></a>
                    </li>
                    <li><a href="http://www.google.com"><i class="fab fa-google-plus"></i><span>google+</span></a></li>
                </ul>
				</div>
				</div>
				

                <div class="business-hours">
					
					<h3> Business Hours </h3>
                    <ul>
	
					<li><span>Monday-Friday:</span> 9am to 5pm</li>

					<li><span>Saturday:</span> 10am to 2pm</li>

					<li><span>Sunday:</span> Closed</li>
	
					</ul>
				</div>

				<div class="footer-logo">
				<img src="<?php echo get_template_directory_uri(); ?>/images/logos/inhabitent-logo-text.svg" alt="inhabitent footer logo" width="280px">
				</div>

				<div class="copy-right">
                    <p><span>Copyright</span> ©2019 <span>Inhabitent</span></p>
				</div>

            </div>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
