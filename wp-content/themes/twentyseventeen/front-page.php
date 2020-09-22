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


<div class="fav-post">
	<div class="fav-post-img">
		<img src="<?php bloginfo('template_url'); ?>/assets/images/img-unicorn.png">
	</div>
	<div class="fav-post-content">
		<h5><?php the_time( "F j, Y" ); ?></h5>
		<h3>The legend of the unicorn - Myths and legends</h3>
		<h5>tags</h5>
		<p>neki paragraf za sada</p>
		<div class="fav-post-likes">
			<ul>
				<li>faves</li>
				<li>comments</li>
			</ul>
		</div>
	</div>
</div>

<div class="front-post-containter">
		<div class="post-box">
			<div class="post-box-img">
				<img src="<?php bloginfo('template_url'); ?>/assets/images/img-unicorn2.png">
			</div>
			<?php the_time( "F j, Y" ); ?>
			<div class="post-box-content">
				<h5>neki title za sada</h5>
				<p>tagovi</p>
				<p>tu će biti paragraf</p>
				<div class="post-box-likes">
					<ul>
						<li>faves</li>
						<li>comments</li>
					</ul>
				</div>
			</div>
		</div>


		<div class="post-box">
			<div class="post-box-img">
				<img src="<?php bloginfo('template_url'); ?>/assets/images/img-unicorn3.png">
			</div>
			<?php the_time( "F j, Y" ); ?>
			<div class="post-box-content">
				<h5>neki title za sada</h5>
				<p>tagovi</p>
				<p>tu će biti paragraf</p>
				<div class="post-box-likes">
					<ul>
						<li>faves</li>
						<li>comments</li>
					</ul>
				</div>
			</div>
		</div>

		<div class="post-box">
			<div class="post-box-img">
				<img src="<?php bloginfo('template_url'); ?>/assets/images/img-unicorn4.png">
			</div>
			<?php the_time( "F j, Y" ); ?>
			<div class="post-box-content">
				<h5>neki title za sada</h5>
				<p>tagovi</p>
				<p>tu će biti paragraf</p>
				<div class="post-box-likes">
					<ul>
						<li>faves</li>
						<li>comments</li>
					</ul>
				</div>
			</div>
		</div>
</div>
<?php
get_footer();
