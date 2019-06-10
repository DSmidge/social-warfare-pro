<?php

class SWP_Pro_Follow_Widget {


	/**
	 * Initializes the plugin with required data.
	 *
	 * @since 1.0.0 | 3 DEC 2018 | Created.
	 * @param void
	 * @return void
	 *
	 */
	public function __construct() {
		add_action( 'wp_enqueue_scripts', array( $this, 'load_assets' ) );
		add_action( 'admin_enqueue_scripts', array( $this, 'load_assets' ) );
	}


	/**
	 * Loads plugin data and initializes classes.
	 *
	 * @since 1.0.0 | 3 DEC 2018 | Created.
	 * @param void
	 * @return void
	 *
	 */
	public function init() {
		global $swfw_networks;

		$swfw_networks = array();
		$files = array(
			'Follow_Network',
			'Follow_Widget',
			'Cache',
			'Utility',

		);

		$this->load_files( '/lib/utilities/', $files );
		new SWFW_Follow_Widget();
	}


	/**
	 * Loads plugin styles.
	 *
	 * @since 1.0.0 | 3 DEC 2018 | Created.
	 * @param void
	 * @return void
	 *
	 */
	public function load_assets() {
		wp_enqueue_style( 'swfw-style', SWFW_PLUGIN_URL . '/assets/style.css' );
	}
}
