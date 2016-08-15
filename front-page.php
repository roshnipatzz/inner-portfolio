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
      <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
        <?php the_post_thumbnail(); ?>
    </a>
    </li>
    <li data-thumb="slide2-thumb.jpg">
      <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
        <?php the_post_thumbnail(); ?>
    </a>
    </li>
    <li data-thumb="slide3-thumb.jpg">
      <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
        <?php the_post_thumbnail(); ?>
    </a>
    </li>
    <li data-thumb="slide4-thumb.jpg">
      <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
        <?php the_post_thumbnail(); ?>
    </a>
    </li>
     <li data-thumb="slide5-thumb.jpg">
      <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
        <?php the_post_thumbnail(); ?>
    </a>
    </li>
    <li data-thumb="slide6-thumb.jpg">
      <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
        <?php the_post_thumbnail(); ?>
    </a>
    </li>
    <li data-thumb="slide7-thumb.jpg">
      <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
        <?php the_post_thumbnail(); ?>
    </a>
    </li>
  </ul>
</div>

			</main><!-- #main -->
	</div><!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>