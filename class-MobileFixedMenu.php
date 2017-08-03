<?php

class MobileFixedMenu {

	function __construct() {
		// initial changed functions
		add_action( 'init', array( &$this, 'init' ) );
	}

	//init plugin
	public function init() {
		add_action( 'wp_enqueue_scripts', array( $this, 'register_style' ), 100 );
		add_action( 'get_footer', array( $this, 'output_frontend_menu' ), 99999 );

		// admin
		if ( is_admin() ) {
			// The plugin settings panel
			include_once( plugin_dir_path( __FILE__ ) . 'admin/settings_panel.php' );
			add_action( 'admin_menu', 'mfm_adding_menu' );
			add_action( "admin_init", 'mfm_adminpanel_display_fields' );
		}
	}

	// Add style file
	public function register_style() {
		wp_register_style( 'mobile-fixed-menu', plugin_dir_url( __FILE__ ) . 'css/mobile-fixed-menu.css', false, '0.1', null );
		wp_enqueue_style( 'mobile-fixed-menu' );
	}

	// Menu content
	public function output_frontend_menu( $name ) {
		$elements_menu = $this->get_options();
		$cont_items = $elements_menu[ 'count' ];
		$elements = $elements_menu['elements'];

		if ( $cont_items > 0 ) {
			include_once plugin_dir_path( __FILE__ ) . 'template/menu.php';
		}
	}

	/**
	 * Get options value menu
	 *
	 * @param $elements array   Menu items
	 * @param $count    integer    Number of items in the menu
	 *
	 * @return array
	 */
	public function get_options() {
		$elements = array();
		$count = 0;

		$phone = get_option( 'mfm_phone' );
		$email = get_option( 'mfm_email' );
		$whatsapp = get_option( 'mfm_whatsapp' );
		$google_map_link = get_option( 'mfm_google_map_link' );

		if ( $phone ) {
			$phone = preg_replace( '/[^+0-9]/', '', $phone );
			if ( is_numeric( $phone ) ) {
				$elements[ 'phone' ] = $phone;
				$count ++;
			}
		}

		if ( is_email( $email ) ) {
			$elements[ 'email' ] = $email;
			$count ++;
		}

		if ( $whatsapp ) {
			$whatsapp = preg_replace( '/[^0-9]/', '', $whatsapp );
			if ( is_numeric( $whatsapp ) ) {
				$elements[ 'whatsapp' ] = $whatsapp;
				$count ++;
			}
		}

		if ( filter_var( $google_map_link, FILTER_VALIDATE_URL ) ) {
			$elements[ 'google_map_link' ] = $google_map_link;
			$count ++;
		}

		$elements_menu = array(
			'count'    => $count,
			'elements' => $elements,
		);

		return $elements_menu;
	}
}

new MobileFixedMenu();