<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>
<?php $body_class = get_post_meta(get_the_ID(), 'body_class', true); ?>
<body <?php body_class($body_class); ?>>
<div id="page" class="site">
<?php $background_image =get_the_post_thumbnail_url(); ?>
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentynineteen' ); ?></a>
		<header id="masthead" class="<?php echo is_singular() && twentynineteen_can_show_post_thumbnail() ? 'site-header' : 'site-header'; ?>" style="background:<?php if(isset($background_image) && !empty($background_image)){ ?>url(<?php echo get_the_post_thumbnail_url(); ?>)<?php }else { echo "#192351";} ?>">
			<?php if(is_singular('post')): ?>
				<!-- Single post header wrapper start -->
				<div class="single-header-wrapper">
			<?php endif; ?>
			<div class="header-container">
				<div class="site-branding-container">
					<?php //get_template_part( 'template-parts/header/site', 'branding' ); ?>
					<?php if ( has_custom_logo() ) : ?>
						<div class="logo site-branding">
						<?php if(is_singular('products')){ ?>
								<a href="<?php echo get_site_url(); ?>" class="custom-logo-link" rel="home" itemprop="url"><img width="162" height="72" src="<?php echo get_stylesheet_directory_uri(); ?>/images/product-logo.svg" class="custom-logo" alt="" itemprop="logo"></a>
							<?php }else{
								the_custom_logo();
							} ?>
						</div>
					<?php endif; ?>

					<?php if ( has_nav_menu( 'menu-1' ) ) : ?>
					<div class="top-nav">
						<nav aria-label="<?php esc_attr_e( 'Top Menu', 'twentynineteen' ); ?>">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_class'     => 'main-menu',
								'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							)
						);
						?>
						</nav>
					</div><!-- #site-navigation -->
					<div class="clear"></div>
					<div class="object_a">
							<span class="blue-ball"></span>
							<span class="red-ball"></span>
						</div>
					<div class="header-desc">
						<?php $shortDesc = get_the_excerpt(get_the_ID());
							$pageTitle = get_the_title();
						?>
						<?php if(isset($pageTitle) && !empty($pageTitle)): ?>
							<h2><?php echo $pageTitle; ?></h2>
						<?php endif; ?>
						<?php if(isset($shortDesc) && !empty($shortDesc)): ?>
							<p><?php echo $shortDesc; ?></p>
						<?php endif; ?>	
						<?php if(is_home() || is_front_page()) { ?><span class="obj-red"></span> <?php } ?>
					</div>
				<?php endif; ?>
			</div>
			<?php if(is_single()): ?>
				<!-- Single post header wrapper end -->
				</div>
			<?php endif; ?>
		</header><!-- #masthead -->

	<div id="content" class="site-content">
