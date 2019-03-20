import IMAGES from './images';

const Selection = ( { onClick, selected } ) =>{
	return (
		IMAGES.map( ( image, i )=> (
			<button className={ selected === image ? 'selected' : '' } onClick={ ()=> onClick( image ) } key={ image }>
				<img src={ image } alt="" />
			</button>
		) )
	);
};

Selection.propTypes = {};

export default Selection;
