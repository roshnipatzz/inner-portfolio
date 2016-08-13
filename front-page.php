<?php
/** 
 *  
 * Template Name: New Page Template
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
  </ul>
</div>

	<div id="grid-container">
		<?php 
			$args = array( 
				'posts_per_page' => 5,			 
			); ?>
			
			<?php $the_query = new WP_Query( $args ); ?>
			<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					<div class="column1">
						<h1><?php the_title(); ?></a></h1>
						<div class="box">
						<?php if ( has_post_thumbnail() ) : ?>
    						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
        						<?php the_post_thumbnail(); ?>
    						</a> </div>
    					<?php endif; ?>
    				</div>

					<?php
						endwhile;
					?>
				<?php wp_reset_postdata(); ?>
			<?php endif; ?>
			<?php wp_reset_query(); ?>

	</div>
			</main><!-- #main -->
	</div><!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>