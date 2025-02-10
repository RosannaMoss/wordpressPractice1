import { registerBlockType } from '@wordpress/blocks';
import { RichText } from '@wordpress/editor';

registerBlockType('my-gutenberg/block', {  // Ensure this block name matches with PHP
    title: 'My Gutenberg Custom Block',
    icon: 'smiley',
    category: 'widgets',
    attributes: {
        content: {
            type: 'string',
            source: 'html',
            selector: 'p',
        },
    },
    edit: ({ attributes, setAttributes }) => {
        const { content } = attributes;

        return (
            <RichText
                tagName="p"
                value={content}
                onChange={(newContent) => setAttributes({ content: newContent })}
            />
        );
    },
    save: ({ attributes }) => (
        <RichText.Content tagName="p" value={attributes.content} />
    ),
});
