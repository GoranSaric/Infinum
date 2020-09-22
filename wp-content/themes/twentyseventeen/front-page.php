<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

get_header(); ?>


<div>
	<div>
		<img src="<?php bloginfo('template_url'); ?>/assets/images/img-unicorn.png">
	</div>
	<div>
		<h5><?php the_time( "F j, Y" ); ?></h5>
		<h3>The legend of the unicorn - Myths and legends</h3>
		<h5>tags</h5>
		<p>neki paragraf za sada</p>
		<div class="">
			<h4>faves</h4>
			<h4>comments</h4>
		</div>
	</div>
</div>
<?php
get_footer();
