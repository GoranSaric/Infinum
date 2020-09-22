<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.2
 */

?>

	<div class="footer-box">
		<div class="footer-col1">
			<img src="<?php bloginfo('template_url'); ?>/assets/images/Logo.png">
			<p>© 2015 Uniduck. All rights reserved.</p>
		</div>
		<div class="footer-col2">
			<ul>
				<li>Like <span>Uniduck</span> on <img src="<?php bloginfo('template_url'); ?>/assets/icons/ic-facebook.svg"></li>
				<li>Follow <span>@uniduck</span> on <img src="<?php bloginfo('template_url'); ?>/assets/icons/ic-twitter.svg"></li>
				<li>Follow <span>@uniduck</span> on <img src="<?php bloginfo('template_url'); ?>/assets/icons/ic-instagram.svg"></li>
			</ul>
		</div>
	</div>

<?php wp_footer(); ?>

</body>
</html>
