<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?>
<section class="product-detail-wrap">
		<div class="product-list">
			<ul>
			<?php
			$post_id = get_the_ID();
			wp_reset_postdata();
			$lastposts = get_posts('post_type=products&numberposts=5&orderby=rand&cat=-52');
			foreach($lastposts as $post) :
			setup_postdata($post); ?>

			<li<?php if ( $post->ID == $post_id ) { echo ' class="current"'; } else {} ?>>

				<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>

			</li>
			<?php endforeach;
				wp_reset_postdata();
				?>
			</ul>
		</div><!--list end-->
		
		<div class="product-content">
			<div class="inner-content">
				asdf
			</div>
			
			asdf
		</div>
</section>