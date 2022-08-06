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
 * @package zivacoffee
 */

get_header();
?>

<section class="page-banner">
      <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/nafinia-putra-Kwdp-0pok-I-unsplash.jpg') ?>)"></div>
      <div class="page-banner__content container t-center c-white">
        <h3 class="headline headline--large">BEST COFFEE SHOP</h3>
        <h3 class="headline headline--medium">The best conversations are found at the bottom of a cup of coffee</h3>     
      </div>
    </section>
	
<div  class="container-fluid">
<div class="row">
<div class="col-sm-4">
The above example creates three equal-width columns on small,
</div>
<div  class="col-sm-4">
The above example creates three equal-width columns on small,
</div>

<div class="col-sm-4">
The above example creates three equal-width columns on small,
</div>
</div>
</div>


<?php
get_footer();
?>
