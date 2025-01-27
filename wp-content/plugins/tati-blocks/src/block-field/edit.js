import { __ } from '@wordpress/i18n';
import {
	useBlockProps,
	InspectorControls,
	RichText,
} from '@wordpress/block-editor';
import { useSelect } from '@wordpress/data';
import { useEntityProp } from '@wordpress/core-data';
import { TextControl, PanelBody, PanelRow } from '@wordpress/components';

import './editor.scss';

export default function Edit() {
	const postType = useSelect(
		( select ) => select( 'core/editor' ).getCurrentPostType(),
		[]
	);
	const [ meta, setMeta ] = useEntityProp( 'postType', postType, 'meta' );
	const titleOne = meta ? meta[ '_meta_field_title_one' ] : '';
	const updateTitleOne = ( val ) => {
		if ( meta ) {
			setMeta( { ...meta, _meta_field_title_one: val } );
		}
	};

	return (
		<>
			<InspectorControls>
				<PanelBody title={ __( 'MetaFields' ) }>
					<PanelRow>
						<TextControl
							label={ __( 'Title One', 'tati-blocks' ) }
							value={ titleOne }
							onChange={ updateTitleOne }
						/>
					</PanelRow>
				</PanelBody>
			</InspectorControls>
			<div { ...useBlockProps() }>
				<RichText
					tagName="h2"
					onChange={ updateTitleOne }
					allowedFormats={ [ 'core/bold', 'core/italic' ] }
					value={ titleOne }
				/>
			</div>
		</>
	);
}
