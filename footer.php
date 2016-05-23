<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Electric_Sheep
 */

?>

	</div><!-- #content -->
	<?php if(is_category()):?>
	<footer id="colophon" class="site-footer container-fluid" role="contentinfo">
		<div class="row">
			<div class="footer-menu Open-Sans col-md-2 col-md-push-1">
				<h5>About</h5>
				<ul>
					<li><a href="">About E-Sheep</a></li>
					<li><a href="">Cookie Monster</a></li>
					<li><a href="">TOS</a></li>
				</ul>
			</div>
			<div class="footer-menu Open-Sans col-md-2 col-md-push-1">
				<h5>About</h5>
				<ul>
					<li><a href="">About E-Sheep</a></li>
					<li><a href="">Cookie Monster</a></li>
					<li><a href="">TOS</a></li>
				</ul>
			</div>
			<div class="footer-menu Open-Sans col-md-2 col-md-push-1">
				<h5>About</h5>
				<ul>
					<li><a href="">About E-Sheep</a></li>
					<li><a href="">Cookie Monster</a></li>
					<li><a href="">TOS</a></li>
				</ul>
			</div>
			<div class=" col-md-2 col-md-push-4">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/logo-footer.png" title="<?php bloginfo( 'name' ); ?>" alt="<?php bloginfo( 'name' ); ?>">
				</a>
			</div>
		</div>
	</footer><!-- #colophon -->
	<?php endif;?>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
