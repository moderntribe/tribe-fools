/**
 * @var {object} tribeFoolsFallingSnow
 */
jQuery( function( $ ) {
	let $body = $( 'body' );

	if ( 'object' !== typeof tribeFoolsFallingSnow.snowImages ) {
		return;
	}

	function rand( min, max ) {
		min = Math.ceil(min);
		max = Math.floor(max);
		return Math.floor( Math.random() * ( max - min + 1 ) ) + min;
	}

	function removeSnow() {
		$( this ).fadeOut( function() {
			$( this ).remove();
		} );
	}

	function getSnowImage() {
		return tribeFoolsFallingSnow.snowImages[ rand( 0, tribeFoolsFallingSnow.snowImages.length - 1 ) ];
	}

	function spawnSnow() {
		let x = rand( -100, $body.width() + 100 );
		let y1 = -100;
		let y2 = $body.height() + 200;
		let speed = rand( y2 - y1, ( y2 - y1 ) * 20 );
		let scaleFactor = rand( 2, 6 ) / 10;

		let $snow = $( '<img />' )
			.attr( 'src', getSnowImage() )
			.css( {
				'left': x,
				'position': 'fixed',
				'top': y1,
				'transform': 'scale(' + scaleFactor + ') rotate(' + rand( 0, 360 ) + 'deg)',
				'z-index': 10000,
			} )
			.animate(
				{ 'top': '+=' + y2 },
				speed,
				removeSnow
			)
			.appendTo( $body );
	}

	function snowFall() {
		if ( Math.random() < 0.9 ) {
			return;
		}

		spawnSnow();
	}

	setInterval( snowFall, 20 );
} );
