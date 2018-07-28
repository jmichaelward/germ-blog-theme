<?php
/**
 * The main class file for the theme.
 *
 * @package JMW\GermBlog
 */

namespace JMW\GermBlog;

/**
 * Class Theme
 *
 * @package JMW\GermBlog
 */
class Theme {
	/**
	 * @var string
	 */
	private $prefix = 'germ-blog-';

	/**
	 * @var string
	 */
	private $asset_url;

	/**
	 * Theme version.
	 *
	 * @var string
	 */
	private $version = '1.0.0';

	/**
	 *
	 */
	public function run() {
		$this->asset_url = get_template_directory_uri() . '/assets/dist/';

		$this->register_hooks();
	}

	/**
	 *
	 */
	private function register_hooks() {
		add_action( 'wp_enqueue_scripts', [ $this, 'register_styles' ] );
		add_action( 'wp_enqueue_scripts', [ $this, 'register_scripts' ] );
	}

	/**
	 *
	 */
	public function register_scripts() {
		wp_enqueue_script( "{$this->prefix}-main", "{$this->asset_url}/app.js", [], $this->version, true );
	}

	/**
	 *
	 */
	public function register_styles() {
		wp_enqueue_style( "{$this->prefix}-main", "{$this->asset_url}/app.css" );
	}
}
