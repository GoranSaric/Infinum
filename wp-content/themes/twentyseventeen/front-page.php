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

<div class="blog-title">
	<div class="search-container">
		<h1>The Unicorn & a Duck</h1>
		<form action="/action_page.php">
			<input type="text" placeholder="Search blog" name="search">
			<button type="submit"><img src="<?php bloginfo('template_url'); ?>/assets/icons/ic-search.svg"></button>
		</form>
	</div>
</div>

<div class="front-body-wrapper clearfix">
<div class="fav-post">
	<div class="fav-post-img">
		<img src="<?php bloginfo('template_url'); ?>/assets/images/img-unicorn.png">
	</div>
	<div class="fav-post-content">
		<h5><?php the_time( "F j, Y" ); ?></h5>
		<h3>The legend of the unicorn - Myths and legends</h3>
		<div class="post-tags">
		<ul>
			<li>Unicorn</li>
			<li>Pinky</li>
			<li>Magic</li>
			<li>Love</li>
		</ul>
		</div>
		<p>Once upon a time in a kingdom far-far away in the lands of the never-ending spring, a king sat in his golden throne and ruled his kingdom in perfect harmony. A person can feel nothing but exuberance at the sight of... <span>Read more</span></p>
		<div class="fav-post-likes">
			<ul>
				<li><img src="<?php bloginfo('template_url'); ?>/assets/icons/ic-heart.svg">faves</li>
				<li><img src="<?php bloginfo('template_url'); ?>/assets/icons/ic-comment.svg">comments</li>
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
</div>
<?php
get_footer();
