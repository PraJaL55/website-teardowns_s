<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Website-teardown
 */

?>

<footer class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
		<div class="container">
			<a href="#" class="pull-left"><img src="<?php echo get_template_directory_uri(); ?>/img/logo2.png" class="img-responsive" alt=""/></a>
			<div class="footer-social pull-left">
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-google-plus"></i></a>
				<a href="#"><i class="fa fa-instagram"></i></a>
				<a href="#"><i class="fa fa-pinterest"></i></a>
			</div>
			<ul class="footer-links pull-right">
				<li><a href="#">About<a/></li>
				<li><a href="#">Terms of Conditions<a/></li>
				<li><a href="#">Privacy Policy<a/></li>
			</ul>
		</div>
	</footer>
</div>

<!-- JAVASCRIPT -->

<!--
<script src="js/vendor/jquery.min.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/vendor/slick/slick.min.js"></script>
<script src="js/vendor/lity/lity.min.js"></script>
<script src="js/vendor/jquery.inview.min.js"></script>
<script src="js/main.js"></script> -->


	<!--</div>--><!-- #content -->

	<!--<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'website-teardown' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'website-teardown' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'website-teardown' ), 'website-teardown', '<a href="https://automattic.com/" rel="designer">Underscores.me</a>' ); ?>
		</div>--><!-- .site-info -->
	<!--</footer>--><!-- #colophon -->
<!--</div>--><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
