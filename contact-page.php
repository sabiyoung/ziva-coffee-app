<?php

/* Template Name: Contact Us Template */
 /*
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package zivacoffee
 */

get_header();
?>

	<div class="page-banner-page">
	<div class="page-banner__bg" style="background-image: url(<?php echo get_theme_file_uri('/images/image2.jpg') ?>)"></div>
      <div class="banner__content-page container container--narrow">
        <h1 class="banner__title-page"><?php the_title(); ?></h1>
      </div>
	</div>
	<div class="container container--narrow page-section">
	<div class="generic-content page-form">
       <?php the_content(); ?>
	
    
	   </div>
	   
      </div>
	  </div>
<?php
get_footer();
?>