<?php
namespace Modern_Tribe\Tribe_Fools;

class Settings {
	public function init() {
		add_action( 'admin_init', [ $this, 'register_settings' ] );
		add_action( 'admin_menu', [ $this, 'register_options_page' ] );
	}

	public function register_settings() {
		register_setting(
			'tribe-fools',
			'tribe_fools_kill_switch', [
				'type' => 'boolean',
				'sanitize_callback' => null,
				'default' => false,
		] );

		register_setting(
			'tribe-fools',
			'tribe_fools_global_comic_sans', [
				'type' => 'boolean',
				'sanitize_callback' => null,
				'default' => false,
		] );

		register_setting(
			'tribe-fools',
			'tribe_fools_falling_snow', [
			'type' => 'boolean',
			'sanitize_callback' => null,
			'default' => false,
		] );

		add_settings_field(
			'tribe_fools_kill_switch',
			_x( 'Kill switch', 'tribe-fools' ),
			[ $this, 'render_kill_switch' ],
			'tribe-fools-settings',
			'general-settings'
		);

		add_settings_field(
			'tribe_fools_global_comic_sans',
			_x( 'Global Comic Sans', 'tribe-fools' ),
			[ $this, 'render_global_comic_sans' ],
			'tribe-fools-settings',
			'general-settings'
		);

		add_settings_field(
			'tribe_fools_falling_snow',
			_x( 'Falling Snow', 'tribe-fools' ),
			[ $this, 'render_falling_snow' ],
			'tribe-fools-settings',
			'general-settings'
		);
	}

	public function register_options_page() {
		add_options_page(
			_x( 'Tribe Fools', 'options page title', 'tribe-fools' ),
			_x( 'Tribe Fools', 'options page menu title', 'tribe-fools' ),
			'manage_options',
			'tribe-fools-settings',
			[ $this, 'render' ]
		);
	}

	public function render() {
		require 'views/admin/options.php';
	}

	public function render_kill_switch() {
		$checked = checked( 1, get_option( 'tribe_fools_kill_switch' ), false );
		$explanation = esc_html__( 'Turn off all Tribe Fools blocks', 'tribe-fools' );

		echo "
			<input 
				name='tribe_fools_kill_switch' 
				id='tribe_fools_kill_switch' 
				type='checkbox' 
				value='1' 
				class='code' 
				$checked
			/> 
			
			$explanation
		";
	}

	public function render_global_comic_sans() {
		$checked = checked( 1, get_option( 'tribe_fools_global_comic_sans' ), false );
		$explanation = esc_html__( 'Enable use of Comic Sans everywhere', 'tribe-fools' );

		echo "
			<input 
				name='tribe_fools_global_comic_sans' 
				id='tribe_fools_global_comic_sans' 
				type='checkbox' 
				value='1' 
				class='code' 
				$checked
			/> 
			
			$explanation
		";
	}

	public function render_falling_snow() {
		$checked = checked( 1, get_option( 'tribe_fools_falling_snow' ), false );
		$explanation = esc_html__( 'Add the illusion of falling snow to your website', 'tribe-fools' );

		echo "
			<input 
				name='tribe_fools_falling_snow' 
				id='tribe_fools_falling_snow' 
				type='checkbox' 
				value='1' 
				class='code' 
				$checked
			/> 
			
			$explanation
		";
	}
}
