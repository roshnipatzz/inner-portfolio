<?php
/** 
 * 
 * Custom template that displays front page (home page) of website
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Inner-Portfolio
 */

get_header(); ?>

<div id="primary" class="content-area">
<main id="main" class="site-main" role="main">

<!-- Following slider code taken from FlexSlider 2 Plugin on http://flexslider.woothemes.com/ to create slider --!>
<div class="flexslider">
  <ul class="slides">
  <?php 
  // this query displays the featured images of the most recent posts
  $slider_query = new WP_Query(array( 'cat'=> '', 'posts_per_page' => 7) );
		// the code checks to see if and while posts are present, they should be posted 
		if ($slider_query->have_posts()): while ($slider_query->have_posts()): $slider_query->the_post(); ?>
    <li>
      <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
       <!-- this piece of code displays the image of the recent post on the slider--!>
        <?php the_post_thumbnail(); ?>
    </a>
    </li>
    
    <?php endwhile; wp_reset_postdata(); //this code resets post data
		endif; //this ends the if statement ?>
  </ul>
</div>

	</main><!-- #main -->
	</div><!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>