import { registerPlugin } from '@wordpress/plugins';
import MetaBox from './components/MetaBox';

registerPlugin( 'meta-plugin', {
	render: MetaBox,
} );
