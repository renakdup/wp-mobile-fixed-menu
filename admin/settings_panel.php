<?php

// Adding a page in the admin panel
function mfm_adding_menu() {
	add_menu_page( "Mobile Fixed Menu Settings", "MobileFixedMenu Settings", "manage_options", "mfm_plugin_settings", "mfm_adminpanel_plugin_settings", null, 99 );
}


// The plugin settings page
function mfm_adminpanel_plugin_settings() {
	echo '<div class="wrap"><h1>Mobile Fixed Menu Settings</h1>';
	echo '<form method="post" action="options.php">';

	settings_fields( "mfm_section" );
	do_settings_sections( "mfm_plugin_options" );
	submit_button();

	echo '</form>';
	echo '</div>';
}


// Adminpanel setting fields
function mfm_adminpanel_display_phone() {
	$name = 'mfm_phone';
	echo '<input type="text" name="' . $name . '" id="' . $name . '" value="' . get_option( $name ) . '"/>';
}

function mfm_adminpanel_display_email() {
	$name = 'mfm_email';
	echo '<input type="text" name="' . $name . '" id="' . $name . '" value="' . get_option( $name ) . '"/>';
}

function mfm_adminpanel_display_whatsapp() {
	$name = 'mfm_whatsapp';
	echo '<input type="text" name="' . $name . '" id="' . $name . '" value="' . get_option( $name ) . '"/>';
}

function mfm_adminpanel_display_google_map_link() {
	$name = 'mfm_google_map_link';
	echo '<input type="text" name="' . $name . '" id="' . $name . '" value="' . get_option( $name ) . '"/>';
}


//Register plugin setting, fields, sections settings
function mfm_adminpanel_display_fields() {
	add_settings_section( "mfm_section", "Заполните соответствующие поля для отображение элементов в меню", null, "mfm_plugin_options" );

	add_settings_field( "mfm_phone", "Телефон", "mfm_adminpanel_display_phone", "mfm_plugin_options", "mfm_section" );
	add_settings_field( "mfm_email", "Emai", "mfm_adminpanel_display_email", "mfm_plugin_options", "mfm_section" );
	add_settings_field( "mfm_whatsapp", "Whatsapp", "mfm_adminpanel_display_whatsapp", "mfm_plugin_options", "mfm_section" );
	add_settings_field( "mfm_google_map_link", "Ссылка на гугл карту", "mfm_adminpanel_display_google_map_link", "mfm_plugin_options", "mfm_section" );

	register_setting( "mfm_section", "mfm_phone" );
	register_setting( "mfm_section", "mfm_email" );
	register_setting( "mfm_section", "mfm_whatsapp" );
	register_setting( "mfm_section", "mfm_google_map_link" );
} ?>