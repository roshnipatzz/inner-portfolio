<?php
/**
 * The template for displaying all pages.
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

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' ); ?>
		
		<?php content_font_style(); /* this line of code calls the function that changes menu background color in options page*/?> 
		<?php

			// If comments are open or we have at least one comment, comment template is loaded
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			
			endwhile; // End of the loop
			?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php //Option to show/hide Sidebar in pages
$options = get_option( 'ip_options_settings' );
							if ($options['ip_checkbox_field'] == 'on'){
							echo get_sidebar(); }

get_footer();
