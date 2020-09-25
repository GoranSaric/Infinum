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
	<div class="footer-wrapper clearfix">
		<div class="footer-col-1">
			<img src="<?php bloginfo('template_url'); ?>/assets/images/Logo.png">
			<h5>© 2015 Uniduck. All rights reserved.</h5>
		</div>
		<div class="footer-col-2">
			<ul>
				<li><a href="https://www.facebook.com/RainbowsandUnicornsLove/" target="_blank">Like <span>Uniduck</span> on <img src="<?php bloginfo('template_url'); ?>/assets/icons/ic-facebook.svg"></a></li>

				<li><a href="https://twitter.com/UnicornsOfLove" target="_blank">Follow <span>@uniduck</span> on <img src="<?php bloginfo('template_url'); ?>/assets/icons/ic-twitter.svg"></a></li>
				
				<li><a href="">Follow <span>@uniduck</span> on <img src="<?php bloginfo('template_url'); ?>/assets/icons/ic-instagram.svg"></a></li>
			</ul>
		</div>
	</div>
</div>
<?php wp_footer(); ?>

</body>
</html>
