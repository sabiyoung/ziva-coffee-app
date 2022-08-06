<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package zivacoffee
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'ziva-coffee' ); ?></a>

	<header id="masthead" class="site-header">
	<a href="<?php echo site_url(); ?>"><strong>Ziva</strong>Coffee</a>
         
	<div class="site-header__menu group">
		<nav id="site-navigation" class="main-navigation">
		<ul>
		       <li><a href="#">Home</a></li>
              <li><a href="<?php echo site_url("#"); ?>">About Us</a></li>
              <li><a href="#">Product</a></li>
              <li><a href="#">Subscribe</a></li>
              <li><a href="#">Contact Us</a></li>
              <li><a href="#">Location</a></li>
            </ul>
		</nav>
		</div>
		<!-- #site-navigation -->
	</header><!-- #masthead -->
