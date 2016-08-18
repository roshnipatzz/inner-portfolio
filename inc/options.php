<?php

/* this function adds submenu page on WP dashboard */
function ip_add_submenu() {

	add_submenu_page( 'themes.php', 'My Custom Options Page', 'Theme Options', 'manage_options', 'theme_options', 'my_theme_options_page');
}
add_action( 'admin_menu', 'ip_add_submenu' );

/* code for settings in options page */
function ip_settings_init() { 
	register_setting ('theme_options', 'ip_options_settings');
	add_settings_section(
	'ip_options_page_section', //  the id
	'Your section title', // section title
	'ip_options_page_section_callback', // function that will be created
	'theme_options'// page 
	);
	function ip_options_page_section_callback() { 
		echo 'This page allows you to show/hide the sidebar, change the font style of the content, and change background colour of the main menu.';
	}

// creating checkbox 
		add_settings_field( 
		'ip_checkbox_field', // the id
		'Select Your Preference', // the title
		'ip_checkbox_field_render', 
		'theme_options', 
		'ip_options_page_section'
	);
	// creates options for checkbox
	function ip_checkbox_field_render() { 
		$options = get_option( 'ip_options_settings' );
			?>
		<input type="checkbox" name="ip_options_settings[ip_checkbox_field]" 
			<?php if(isset($options['ip_checkbox_field'])) checked( 'on', ($options['ip_checkbox_field']) ) ;?> 
				value="on" />
		<label>Show Sidebar</label>
		<?php
	}

// creating radio button
	add_settings_field( 
		'ip_radio_field', // the id
		'Select Font Style', // the title
		'ip_radio_field_render', 
		'theme_options', 
		'ip_options_page_section'
	);
	// creates options for radio button
	function ip_radio_field_render() { 
		$options = get_option( 'ip_options_settings' );
		?>
		<input type="radio" name="ip_options_settings[ip_radio_field]"<?php if(isset($options['ip_radio_field'])) checked( $options['ip_radio_field'], 1 ); ?>
				value="1" /><label>Default</label><br />
		<input type="radio" name="ip_options_settings[ip_radio_field]"<?php if(isset($options['ip_radio_field'])) checked( $options['ip_radio_field'], 2 ); ?>
				value="2" /><label>Cursive</label><br />
		<?php
	}

// creating dropdown
	add_settings_field( 
		'ip_select_field', // the id
		'Select Background Menu Colour', // the title
		'ip_select_field_render', 
		'theme_options', 
		'ip_options_page_section'
		);
	//creates colour options for dropdown
	function ip_select_field_render() { 
		$options = get_option( 'ip_options_settings' );
		?>
		<select name="ip_options_settings[ip_select_field]">
			<option value="1"<?php if (isset($options['ip_select_field'])) selected( $options['ip_select_field'], 1 ); ?>>Default</option>
			<option value="2"<?php if (isset($options['ip_select_field'])) selected( $options['ip_select_field'], 2 ); ?>>Brown</option>
			<option value="3"<?php if (isset($options['ip_select_field'])) selected( $options['ip_select_field'], 3 ); ?>>Green</option>
			<option value="4"<?php if (isset($options['ip_select_field'])) selected( $options['ip_select_field'], 4 ); ?>>Deep Salmon</option>
		</select>
		<?php
	}
	
// this enables the options page to come together
	function my_theme_options_page(){ 
	?>
	<form action="options.php" method="post">
		<h2>My Custom Options Page</h2>
		<?php
			settings_fields( 'theme_options' );
			do_settings_sections( 'theme_options' );
			submit_button();
		?>
	</form>
	<?php
	}
}
add_action( 'admin_init', 'ip_settings_init' );