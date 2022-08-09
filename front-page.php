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
$first_video = get_field('upload_video');
$second_video = get_field('second_video');
$third_video = get_field('third_video');

?>

<section class="page-banner">
      <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/nafinia-putra-Kwdp-0pok-I-unsplash.jpg') ?>)"></div>
      <div class="page-banner__content container t-center c-white">
        <h3 class="headline headline--large">BEST COFFEE SHOP</h3>
        <h3 class="headline headline--medium">The best conversations are found at the bottom of a cup of coffee</h3>     
      </div>
    </section>
	
<div  class="container-fluid">
<div class="description"><h2>REST RELAX REVIVE</h2></div>
<div class="row">
<div class="col-sm-4 hero_slider" style="background-image: url(<?php echo get_theme_file_uri('/images/tabitha-turner-F0Wd4djYvSA-unsplash.jpg') ?>)">

</div>
<div  class="col-sm-4 hero_slider" style="background-image: url(<?php echo get_theme_file_uri('/images/pexels-john-matthew-3784328.jpg') ?>)">
</div>

<div class="col-sm-4 hero_slider" style="background-image: url(<?php echo get_theme_file_uri('/images/pexels-chevanon-photography-302896.jpg') ?>)">
</div>
</div>
</div>

<div class=" container-fluid my_video">
<div  class="video_wapper">
<h4>BREW GUIDES</h4>
  <h2>CHECK OUT OUR MOST PUPOLAR BREW GUIDES</h2>
</div>
 <div class="row">
       <div class="col-sm-3 coffee_video">
       <?php if($first_video): ?>
           <?php echo $first_video; ?>
           <?php endif; ?>
       </div>
      <div class="col-sm-3 coffee_video">
      <?php if($second_video): ?>
           <?php echo $second_video; ?>
           <?php endif; ?>
      </div>
           <div class="col-sm-3 coffee_video">
           <?php if($third_video): ?>
           <?php echo $third_video; ?>
           <?php endif; ?>
           </div>
           </div>
</div>
<?php
get_footer();
?>
