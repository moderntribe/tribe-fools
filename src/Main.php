<?php
namespace Modern_Tribe\Tribe_Fools;

class Main {
	public function run() {
		add_action( 'enqueue_block_assets', [ $this, 'block_assets' ] );
		add_action( 'enqueue_block_editor_assets', [ $this, 'editor_assets' ] );
	}

	/**
	 * Enqueue Gutenberg block assets for both frontend + backend.
	 *
	 * @uses {wp-editor} for WP editor styles.
	 * @since 1.0.0
	 */
	public function block_assets() { // phpcs:ignore
		// Styles.
		wp_enqueue_style(
			'tribe_foolz-cgb-style-css', // Handle.
			plugins_url( 'dist/blocks.style.build.css', dirname( __FILE__ ) ), // Block style CSS.
			[ 'wp-editor' ] // Dependency to include the CSS after it.
		// filemtime( plugin_dir_path( __DIR__ ) . 'dist/blocks.style.build.css' ) // Version: File modification time.
		);
	}


	/**
	 * Enqueue Gutenberg block assets for backend editor.
	 *
	 * @uses {wp-blocks} for block type registration & related functions.
	 * @uses {wp-element} for WP Element abstraction — structure of blocks.
	 * @uses {wp-i18n} to internationalize the block's text.
	 * @uses {wp-editor} for WP editor styles.
	 * @since 1.0.0
	 */
	public function editor_assets() {
		// Scripts.
		wp_enqueue_script(
			'tribe_foolz-cgb-block-js',
			plugins_url( '/dist/blocks.build.js', dirname( __FILE__ ) ),
			[ 'wp-blocks', 'wp-i18n', 'wp-element', 'wp-editor' ],
			true
		);

		// Styles.
		wp_enqueue_style(
			'tribe_foolz-cgb-block-editor-css',
			plugins_url( 'dist/blocks.editor.build.css', dirname( __FILE__ ) ),
			[ 'wp-edit-blocks' ]
		);
	}
}


