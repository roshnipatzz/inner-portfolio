<?php

/*
 * Plugin Name: Inner-Portfolio
 * Plugin URI: phoenix.sheridanc.on.ca/~ccit3688
 * Author: Roshni Patel
 * Author URI: phoenix.sheridanc.on.ca/~ccit3688
 * Description: This plugin will display custom posts, and a shortcode that allows the input of contact information
 */

// Enqueues the plugin stylesheet
function ip_plugin_styles(){
	wp_enqueue_style('plugin-style', plugins_url('/css/style.css', __FILE__));
}
add_action( 'wp_enqueue_scripts', 'ip_plugin_styles' );

add_action( 'init', 'create_post_type' );
// This function creates a custom post type
function create_post_type() {
  register_post_type( 'inner-portfolio',
    array(
      	'labels' 		=> array(
        'name' 			=> __( 'Inner-Portfolio' ),
        'singular_name' => __( 'Inner-Portfolio' )
      ),
      	'public' 		=> true, // Posts can be seen by public in Wordpress dashboard and site
     	'has_archive' 	=> true, // Posts can be archived
      	'supports' 		=> array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ), //Enables support for featured images among others; as shown within array
    )
  );
}

// Creates the IP Widget
class IPWidget extends WP_Widget{
	
	// This code registers the widget
	public function __construct(){
		$widget_ops = array(
			'classname' => 'ip_custom_posts', // the id
			'description' => 'This will display custom posts'// the description
		);
		// This code adds a widget class and a description
		parent::__construct('ipcustomposts','Inner-Portfolio Custom Posts', $widget_ops);
	}

	// Function determines what appears on the site
	public function widget($args, $instance){
		// Claims if a title is found, display title, otherwise display the default title
		$title = apply_filters('widget_title', empty($instance['title']) ? 'Inner Voice' : $instance['title'], $instance, $this->id_base); //apply_filter protects the code from bad codes
		echo $args['before_widget'];
		
		if($title){
			echo $args['before_title'] . $title . $args['after_title'];
		} ?>

			<ul class="ip_secondary">
			<?php
			$mycustompost_query = new WP_Query(array( 
				'post_type'		 => 'inner-portfolio', // Posts retrieved from custom posts
				'orderby'		 => 'date', // Orders posts by date
				'posts_per_page' => 3 // Displays 3 posts on page
			 	) );
			if ($mycustompost_query->have_posts()): 
					while ($mycustompost_query->have_posts()): $mycustompost_query->the_post(); ?>		
				<li class="custpost">
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
					<?php the_post_thumbnail(); ?>
				</li>				
				<?php 
					endwhile; wp_reset_postdata(); // Resets post data
					endif; wp_reset_query(); // Ends the query
				?>
			</ul>

			<?php
			echo $args['after_widget']; // Appears after widget is registered
	}

	// This function allows users to use the WordPress dashboard to determine what appears on the site
	public function form($instance){
		$instance = wp_parse_args((array) $instance, array('title'=>''));
		$title = strip_tags($instance['title']);
		?>
		<p>
			<label for="<?php echo $this->get_field_id('title'); ?>">Title:</label> 
			<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
		</p>
		<?php 
	}

// This function allows to save, submit, and filter bad code
	public function update($new_instance,$old_instance){
		$instance = $old_instance;
		$new_instance = wp_parse_args((array) $new_instance, array('title' => ''));
		$instance['title'] = strip_tags($new_instance['title']);
		return $instance;
	}			
}
// Action hook; executes function
add_action('widgets_init',function(){ register_widget('IPWidget'); });
// Calls the shortcode file
require ( plugin_dir_path( __FILE__ ) . '/ip-shortcode.php');