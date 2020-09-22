<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header class="header">
		<div class="logo">
			<div class="nav-logo">
				<img src="<?php bloginfo('template_url'); ?>/assets/images/Logo.png">
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-2" id="main-menu-zavrsni">
					<?php 
					$args = array(
						'menu'            => 2,
						'container'       => 'div',
						'container_class' => 'menu',
						'container_id'    => '',
						'menu_class'      => '',
						'menu_id'         => 'main-menu'
					);
					wp_nav_menu( $args );
					?>
   <!--<div class="menu">
          <ul>
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">lifestyle</a></li>
            <li><a href="#">Food</a></li>
            <li><a href="#">Nature</a></li>
            <li><a href="#">photography</a></li>
          </ul>
      </div> -->
<div class="nav-btn">
  	<a href="">get for ios</a>
  	<a href="">unicorn owners</a>
  </div>
  </div>
  
</div>


</div>
</header>


