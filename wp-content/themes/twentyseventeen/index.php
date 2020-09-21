<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="blog-title">
	<h1>The Unicorn & a Duck</h1>
	<div class="search-container">
		<form action="/action_page.php">
			<input type="text" placeholder="Search blog" name="search">
			<button type="submit"><img src="<?php bloginfo('template_url'); ?>/assets/icons/ic-search.svg"></button>
		</form>
	</div>
</div>


<?php
get_footer();
