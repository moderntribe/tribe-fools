<?php
namespace Modern_Tribe\Tribe_Fools;

class Global_Effects {
	public function init() {
		if ( (bool) get_option( 'tribe_fools_falling_snow' ) ) {
			add_action( 'wp_enqueue_scripts', [ $this,  'do_falling_snow' ] );
		}
	}

	public function do_falling_snow() {
		$img_url = main()->plugin_url() . '/img';

		wp_enqueue_script( 'jquery' );

		wp_enqueue_script(
			'tribe_fools_falling_snow',
			main()->plugin_url() . '/dist/falling-snow.js',
			[ 'jquery' ],
			false,
			true
		);

		wp_localize_script(
			'tribe_fools_falling_snow',
			'tribeFoolsFallingSnow', [
				'snowImages' => [
					$img_url . '/snow-1.png',
					$img_url . '/snow-2.png'
				]
			]
		);
	}
}
