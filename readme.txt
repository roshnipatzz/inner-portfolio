=== Inner-Portfolio ===
Contributors: Roshni Patel
Tags: translation-ready, custom-background, theme-options, custom-menu, post-formats, threaded-comments
Requires at least: 4.0
Tested up to: 4.5.3
Stable tag: 1.0.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

A starter theme called Inner-Portfolio, or underscores.

== Description ==

The theme is called Inner-Portfolio. It was created to facilitate the lives of writers who wanted to showcase their works for the world to see. It allows users to display their content in a portfolio manner, all the while expressing their creativity through the theme's many functionalities. 


== Theme Installation ==

1. In your admin panel, go to Appearance > Themes and click the Add New button.
2. Click Upload and Choose File, then select the theme's .zip file. Click Install Now.
3. Click Activate to use your new theme right away.

Inner-Portfolio includes support for Infinite Scroll in Jetpack.

== Theme Main Customizations ==

* The theme holds a slider on the home page that displays clickable featured images (user must always upload a featured image for posts) of the seven most recent posts, which, upon clicking, will lead user to the respective post.
	*This slider feature is enabled in the 'Custom Home Page' template
* The theme includes a custom post type called 'Inner-Portfolio' which needs to be activated if users want to create custom posts within a specified area. To activate it, users must go to the their WordPress dashboard > Settings > Permalink > Save Changes. Without activation, the posts will not be found. Instead, users will see an error.

== Theme Menu ==
= Main Menu =
* To create a new menu, users should go to WordPress Dashboard > Appearance > Menus
* The theme uses 'Top (Primary)' for the main menu navigation and displays pages only
= Sidebar Menu =
* To create a sidebar menu, users should go to WordPress Dashboard > Appearance > Menus
* The theme uses 'Empty Menu' for the main menu navigation and displays posts only

== Theme Options Page ==

This theme allows users to customize aspect of the website. The Custom Options page enables users to:
* Select whether or not to display the sidebar
* Select the text font style (default or cursive)
* Select the background menu colour from a list of predefined colours
To do this users must go to WordPress Dashboard > Appearance > Theme Options

== Plugin ==
This theme has a plugin called: Inner-Portfolio
	
== Instructions for Using Plugin ==
	
= Plugin Installation =
	
1. Go onto your WordPress Dashboard, then click on Appearance, and then click on Plugins
2. Find Plugin Name: Inner-Portfolio and click on Activate
	
= Plugin Shortcode =

This plugin shortcode has two functions: it creates a customizable textbox and it allows users to link their social media

* General Information

According to the attributes given, users will be able to change the following on their Wordpress post or page:
		* Short Code Attribute *
			* The 'title' of the shortcode
				* Otherwise it will default to 'Contact Information'
		* Text Box Attributes *
			* The 'backgroundcolor' of the text box 
				* Any color or hex code can be applied 
			* The 'border' size of the text box 
				* Otherwise it will default to '0.2em'
			* The 'bordercolor' of the text box
				* Any color or hex code can be applied 
			* The 'bordertype' of the text box
				* Otherwise it will default to 'groove'
			* The 'padding' the text box
				 * Otherwise it will default to '10em 5em 10em 5em' (padding top, right, bottom, left)
			* The 'textcolor' of the content in the text box
				* Any color or hex code can be applied 
		* Link Attributes *
			* The 'facebook' link
				Otherwise it will default to 'http://www.facebook.com'
			* The 'linkedin' link
				Otherwise it will default to 'http://www.linkedin.com'
			* The 'twitter' link
				Otherwise it will default to 'http://www.twitter.com'
			*The 'instagram' link
				Otherwise it will default to 'http://www.instagram.com'
			* The 'wordpress' link
				Otherwise it will default to 'http://www.wordpress.com'

* Specific Information 
		* Select your destination, a Wordpress page or a Wordpress Post
		* Shortcodes will be activated by inputting: [contactme] CONTENT [/contactme] 
			* To add Content: Add your own content where it says CONTENT only
		* Example:
			* The code below will change the title, background color of textbox, border color of textbox, as well as add specific social media links that visitors can click on to direct them to an external website
				* User must input content where it says CONTENT
				* All attributes defined above can be added to the code below, the decision lies with the user

	[contactme title="Social Media Info" backgroundcolor="#73514e" bordercolor="#836b5c"  	facebook ="https://www.facebook.com/roshnipatzz" linkedin="https://www.linkedin.com/in/roshni-patel-641507101" twitter="https://twitter.com/roshnipatzz" instagram="https://www.instagram.com/roshnipatzz/" wordpress="https://roshnipatzz.wordpress.com/"] CONTENT [/contactme]
			* The code below will change the title, background color of textbox, border color of textbox, as well as add specific social media links that visitors can click on to direct them to an external website

	
== Images Citation ==
All images included in the theme are retrieved from Public Domain Image website: http://www.pixabay.com

== Credits ==

* Based on Underscores http://underscores.me/, (C) 2012-2016 Automattic, Inc., [GPLv2 or later](https://www.gnu.org/licenses/gpl-2.0.html)
* normalize.css http://necolas.github.io/normalize.css/, (C) 2012-2016 Nicolas Gallagher and Jonathan Neal, [MIT](http://opensource.org/licenses/MIT)
