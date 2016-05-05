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
		<div class="footer-wrapper">
			<div class="support container" >
				<h3 class="support-title"><a href="<?php echo home_url(); ?>/about/#support-us">Support Us</a></h3>
				<div class="socialmedia"><h3 class="follow-us">Follow Us: </h3><a href="https://www.facebook.com/sharethelovecoin-1507486976240873/" target="_blank"><img src="<?php echo home_url(); ?>/wp-content/uploads/2016/03/fb.png" /></a> <a href="https://www.instagram.com/sharethelove.co.in/" target="_blank"><img src="<?php echo home_url(); ?>/wp-content/uploads/2016/03/insta.png" /></a> <a href="https://twitter.com/SharetheloveIn" target="_blank"><img src="<?php echo home_url(); ?>/wp-content/uploads/2016/03/twitter.png" /></a></h3></div>
				<div class="clearfix"></div>
			</div>
			<div class="footer container">
				<div class="footer-left">
					<p>&copy; Detour Ventures. All rights reserved</p>
				</div>
				<div class="footer-right">
					<ul class="footer-nav">
						<li><a href="<?php echo home_url(); ?>">Home</a>|</li>
						<li><a href="<?php echo home_url(); ?>/about">About</a>|</li>
						<li><a href="<?php echo home_url(); ?>/legal-information">Legal Information</a>|</li>
						<li><a href="<?php echo home_url(); ?>/privacy-policy">Privacy Policy</a>|</li>
						<li><a href="<?php echo home_url(); ?>/terms-and-conditions">T&C</a></li>		
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
