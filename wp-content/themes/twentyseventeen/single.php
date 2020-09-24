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

<?php
get_footer();
