<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

	</div><!-- #content -->
	<footer id="colophon" class="site-footer">
	<div class="newsletter">
		<div class="container">
			<div class="newsletter-text">Subscribe to Crerax Latest News & Offers</div>
			<div class="newsletter-form">
				<form action="" method="">
					<input type="email" name="email" placeholder="Please Enter your Email Adress" />
					<input type="submit" value="" name="submit-btn" />
				</form>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	<div class="container">
		<?php get_template_part( 'template-parts/footer/footer', 'widgets' ); ?>
		<div class="site-info">
			<?php $blog_info = get_bloginfo( 'name' ); ?>
			<?php if ( ! empty( $blog_info ) ) : ?>
				<a class="site-name" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>,
			<?php endif; ?>
			<div class="reserved-rights">
				<?php
				/* translators: %s: WordPress. */
				printf( __( '%s All Rights Reserved. <a href="#" class="imprint">Terms & Conditions.</a>', 'twentynineteen' ),  date('Y') );
				?></div>
			<?php if ( has_nav_menu( 'social' ) ) : ?>
				<nav class="social-navigation" aria-label="<?php esc_attr_e( 'Social Links Menu', 'twentynineteen' ); ?>">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'social',
							'menu_class'     => 'social-links-menu',
							'link_before'    => '<span class="screen-reader-text">',
							'link_after'     => '</span>' . twentynineteen_get_icon_svg( 'link' ),
							'depth'          => 1,
						)
					);
					?>
				</nav><!-- .social-navigation -->
			<?php endif; ?>
		</div><!-- .site-info -->
	</div>
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
