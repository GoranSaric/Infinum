<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="single-post-banner">
	<div class="single-intro-info">
		<h3>The Legend of the Unicorn - Myths and Legends</h3>
		<h5><img src="<?php bloginfo('template_url'); ?>/assets/icons/ic-writer.svg">Krešo the Duck</h5>
	</div>
	<div class="back-to-btn">
		<a href="">Back to blog</a>
	</div>
</div>

<div class="single-wrapper clearfix">
	<div class="single-content">
		<?php

		while ( have_posts() ) {
			the_post();
			?>

			<h5>Heaven on earth</h5>

			<?php the_content(); ?>
			
			

			<div class="single-tags">
				<ul>
					<li>Unicorn</li>
					<li>Pinky</li>
					<li>Magic</li>
					<li>Love</li>
				</ul>
			</div>
		<?php } ?>
	</div>
	
	<?php if ( is_active_sidebar( 'custom-side-bar' ) ) : ?>
		<?php dynamic_sidebar( 'custom-side-bar' ); ?>
	<?php endif; ?>

	<div class="single-video">
		<iframe width="950" height="530" src="https://www.youtube.com/embed/EMO42TVAvnA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		<h6>Truffle & wild mushroom</h6>
	</div>

	<div class="single-img">
		<img src="<?php bloginfo('template_url'); ?>/assets/images/img-unicorn7@2x.png">
		<h6>Truffle & wild mushroom</h6>
	</div>


	<div class="next-post">
		<h4>More Magic</h4>
		<div class="next-post-box">
			<div class="next-post-img">
				<img src="<?php bloginfo('template_url'); ?>/assets/images/img-unicorn5.png">
			</div>
			<div class="next-post-content">
				<h5>Sed ut perspiciatis unde omnis</h5>
				<p>Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet</p>
				<a href="">Read More</a>
			</div>
		</div>
	</div>
	<div style="clear: both;"></div>
</div>
<?php
get_footer();
