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
		<h3><?php the_title(); ?></h3>
		<h5><img src="<?php bloginfo('template_url'); ?>/assets/icons/ic-writer.svg"><?php the_author_meta('display_name', 1); ?></h5>
	</div>
	<div class="back-to-btn">
		<a href="http://localhost/Infinum">Back to blog</a>
	</div>
</div>

<div class="single-wrapper clearfix">
	<div class="single-content">
		<?php
		while ( have_posts() ) {
			the_post();
			?>
			<h5>Heaven on earth</h5>
			<div class="single-content-func">
				<?php the_content(); ?>
			</div>
			<div class="single-tags">
				<?php 
				$tags = get_the_tags(); 
				if (!empty($tags)) {
					$tags = array_chunk($tags,ceil(count($tags)),true);
					foreach($tags as $v) {
						echo '<ul>';
						foreach ($v as $tag) {
							echo '<li><a href="'.get_tag_link($tag->term_id).'">' . $tag->name . '</a></li>'; 
						}
						echo '</ul>';
					}
				}
				?>
			</div>
		<?php } ?>
	</div>

	<div class="single-video">
		<?php the_field('single_video'); ?>
		<h6><?php the_field('video_text'); ?></h6>
	</div>

	<div class="single-img">

		<?php if( get_field('single_image') ): ?>
			<img src="<?php the_field('single_image'); ?>" />
		<?php endif; ?>
		<h6><?php the_field('image_text'); ?></h6>
	</div>


	<?php

	while ( have_posts() ) {
		the_post();
		?>
		<div class="next-post">
			<h4><?php the_field('recent_post'); ?></h4>
			<div class="next-post-box">
				<div class="next-post-img">
					<?php 
					if(has_post_thumbnail()){
						the_post_thumbnail( 'large' );
					}
					?>
				</div>
				<div class="next-post-content">
					<h5><?php the_title(); ?></h5>
					<p><?php the_excerpt(); ?></p>
				</div>
			</div>
		</div>
	<?php } ?>
	<div style="clear: both;"></div>
</div>
<?php
get_footer();
