<?php
/*
 * Plugin Name: Contact Type
 * Plugin URI: pheonix.sheridanc.on.ca/~ccit3688
 * Description: A Shortcode to facilitate inputting contact information via text and social media links
 * Author: Roshni Patel
 * Author URI: pheonix.sheridanc.on.ca/~ccit3688
 * Version: 1.0
 */
 
 // Enqueued Style Sheet
function ipsc_plugin_styles(){
	wp_enqueue_style('ipsc-plugin-style', plugins_url('/style.css', __FILE__));
 }
 add_action( 'wp_enqueue_scripts', 'ipsc_plugin_styles' );
 
 // Enclosing function to add contact me text
 	function bio_shortcode ($atts, $content = null ) {
 		extract (shortcode_atts ( array(
 			'title' 			=> 'Contact Information',
 			'backgroundcolor' 	=> '',
 			'border' 			=> '0.2em',
 			'bordercolor' 		=> '',
 			'bordertype' 		=> 'groove',
 			'padding' 			=> '10em 5em 10em 5em', /* Padding top, right, bottom, left */
 			'textcolor' 		=> '',
 			'facebook'  		=> 'http://www.facebook.com',
        	'linkedin'  		=> 'http://www.linkedin.com',
        	'twitter' 			=> 'http://www.twitter.com',
        	'instagram' 		=> 'http://www.instagram.com',
        	'wordpress' 		=> 'http://www.wordpress.com',
 			), $atts));
 	
 	//returns text used to replace shortcode
 	return '<div class="bio"><div class="title">' . $title . '</div><div class="url-buttons"><div id="urlone" class=".url-link"><a href="' . $facebook . '" class="url-link">Facebook</a></div><div id="urltwo" class=".url-link"><a href="' . $linkedin . '" class="url-link">LinkedIn</a></div><div id="urlthree" class=".url-link"><a href="' . $twitter . '" class="url-link">Twitter</a></div><div id="urlfour" class=".url-link"><a href="' . $instagram . '" class="url-link">Instagram</a></div><div id="urlfive" class=".url-link"><a href="' . $wordpress . '" class="url-link">WordPress</a></div></div>' . '</h2>' . '<p style="padding: ' . $padding . '; color: ' . $textcolor . '; background-color: ' . $backgroundcolor . '; border: ' . $bordercolor . ' ' . $border . ' ' . $bordertype . '">' . $content . '</p></div>';
}
 	//allows user to add shortcode
 	add_shortcode('contactme', 'bio_shortcode');
 	
 	
 	