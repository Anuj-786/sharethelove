<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

		</div><!-- .site-content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			<?php // if ( has_nav_menu( 'primary' ) ) : ?>
				 <!-- <nav class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Primary Menu', 'twentysixteen' ); ?>"> -->
					<?php
					//	wp_nav_menu( array(
					//		'theme_location' => 'primary',
					//		'menu_class'     => 'primary-menu',
					//	 ) );
					?>
				<!-- </nav> --><!-- .main-navigation -->
			<?php //endif; ?>

			<?php //if ( has_nav_menu( 'social' ) ) : ?>
				<!-- <nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'twentysixteen' ); ?>"> -->
					<?php
						//wp_nav_menu( array(
							//'theme_location' => 'social',
							//'menu_class'     => 'social-links-menu',
						//	'depth'          => 1,
						//	'link_before'    => '<span class="screen-reader-text">',
						//	'link_after'     => '</span>',
						//) );
					?>
				<!-- </nav> --><!-- .social-navigation -->
			<?php //endif; ?>

			<!-- <div class="site-info"> -->
				<?php
					/**
					 * Fires before the twentysixteen footer text for footer customization.
					 *
					 * @since Twenty Sixteen 1.0
					 */
					//do_action( 'twentysixteen_credits' );
				?>
				<!-- <span class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span>
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'twentysixteen' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentysixteen' ), 'WordPress' ); ?></a> -->
			<!-- </div> --><!-- .site-info -->

		<div class="footer-wrapper">
			<div class="support container" >
				<h3><a href="#"><img src="http://localhost/sharethelove/wp-content/uploads/2016/03/support-us.png" /></a></h3>
				<div class="socialmedia"><h3><img src="http://localhost/sharethelove/wp-content/uploads/2016/03/follow-us.png" /> <a href="https://www.facebook.com/sharethelovecoin-1507486976240873/" target="_blank"><img src="http://localhost/sharethelove/wp-content/uploads/2016/03/fb.png" /></a> <a href="https://www.instagram.com/sharethelove.co.in/" target="_blank"><img src="http://localhost/sharethelove/wp-content/uploads/2016/03/insta.png" /></a> <a href="https://twitter.com/SharetheloveIn" target="_blank"><img src="http://localhost/sharethelove/wp-content/uploads/2016/03/twitter.png" /></a></h3></div>
				<div class="clearfix"></div>
			</div>
			<div class="footer container">
				<div class="footer-left">
					<p>&copy; Detour Ventures. All rights reserved</p>
				</div>
				<div class="footer-right">
					<ul class="footer-nav">
						<li><a href="#">Home</a>|</li>
						<li><a href="#">About</a>|</li>
						<li><a href="#">Legal Information</a>|</li>
						<li><a href="#">Privacy Policy</a>|</li>
						<li><a href="#">T&C</a></li>		
					</ul>
				</div>
			</div>
		</div>
		</footer><!-- .site-footer -->
	</div><!-- .site-inner -->
</div><!-- .site -->

<?php wp_footer(); ?>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/custom.js"></script>

</body>
</html>
