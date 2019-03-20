<div class="wrap tribe-fools">
	<h1> <?php echo esc_html_x( 'Tribe Fools', 'settings page heading', 'tribe-fools' ); ?> </h1>

	<form method="post" action="options.php">
		<?php settings_fields( 'tribe-fools' ); ?>

		<table id="tribe_fools_general_settings">
			<?php do_settings_fields( 'tribe-fools-settings', 'general-settings' ); ?>
		</table>

		<?php submit_button(); ?>
	</form>
</div>
