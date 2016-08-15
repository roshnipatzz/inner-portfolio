<?php
/** 
 *  
 * Template Name: Front Page
 *  
 *
 */

get_header(); ?>

<div id="primary" class="content-area">
<main id="main" class="site-main" role="main">

<div class="flexslider">
  <ul class="slides">
    <li data-thumb="slide1-thumb.jpg">
      <img src="<?php echo get_template_directory_uri() ?>/sm-reader.jpg" />
    </li>
    <li data-thumb="slide2-thumb.jpg">
      <img src="<?php echo get_template_directory_uri() ?>/old.jpg" />
    </li>
    <li data-thumb="slide3-thumb.jpg">
      <img src="<?php echo get_template_directory_uri() ?>/owl.jpg" />
    </li>
    <li data-thumb="slide4-thumb.jpg">
      <img src="<?php echo get_template_directory_uri() ?>slide4.jpg" />
    </li>
     <li data-thumb="slide5-thumb.jpg">
      <img src="<?php echo get_template_directory_uri() ?>slide5.jpg" />
    </li>
  </ul>
</div>

			</main><!-- #main -->
	</div><!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>