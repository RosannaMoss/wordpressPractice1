import { registerBlockType } from '@wordpress/blocks';
import { RichText, InspectorControls } from '@wordpress/editor';
import { PanelBody, ColorPalette, TextControl } from '@wordpress/components';
import { useEffect } from '@wordpress/element';

registerBlockType('my-new-gutenberg/block', {
    title: 'My New Custom Block with Ticking Clock',
    icon: 'clock',
    category: 'widgets',
    attributes: {
        content: {
            type: 'string',
            source: 'html',
            selector: 'p',
        },
        backgroundColor: {
            type: 'string',
            default: '#f0f0f0',
        },
        customTitle: {
            type: 'string',
            default: 'My New Custom Block',
        },
        showDate: {
            type: 'boolean',
            default: false,
        },
        currentTime: {
            type: 'string',
            default: '', // Initially empty, will be updated by the editor
        },
    },
    edit({ attributes, setAttributes }) {
        const { content, backgroundColor, customTitle, showDate, currentTime } = attributes;

        // Update the time every second in the editor
        useEffect(() => {
            const interval = setInterval(() => {
                const time = new Date().toLocaleTimeString();
                setAttributes({ currentTime: time });
            }, 1000); // Update every second

            return () => clearInterval(interval); // Clean up interval when the component is unmounted
        }, []); // Empty dependency array to run effect only once

        return (
            <>
                <InspectorControls>
                    <PanelBody title="Block Settings" initialOpen={true}>
                        <TextControl
                            label="Block Title"
                            value={customTitle}
                            onChange={(newTitle) => setAttributes({ customTitle: newTitle })}
                        />
                        <ColorPalette
                            label="Background Color"
                            value={backgroundColor}
                            onChange={(newColor) => setAttributes({ backgroundColor: newColor })}
                        />
                        <TextControl
                            label="Show Date"
                            value={showDate ? "Yes" : "No"}
                            onClick={() => setAttributes({ showDate: !showDate })}
                            help="Click to toggle showing current date"
                        />
                    </PanelBody>
                </InspectorControls>

                {/* Block Edit View */}
                <div className="my-new-gutenberg-block" style={{ backgroundColor: backgroundColor }}>
                    <h2>{customTitle}</h2>
                    <RichText
                        tagName="p"
                        value={content}
                        onChange={(newContent) => setAttributes({ content: newContent })}
                    />
                    {showDate && <p>{new Date().toLocaleDateString()}</p>}
                    <p>{currentTime}</p> {/* Dynamic Clock in Editor */}
                </div>
            </>
        );
    },
    save({ attributes }) {
        const { content, backgroundColor, customTitle, showDate, currentTime } = attributes;

        return (
            <div className="my-new-gutenberg-block" style={{ backgroundColor: backgroundColor }}>
                <h2>{customTitle}</h2>
                <RichText.Content tagName="p" value={content} />
                {showDate && <p>{new Date().toLocaleDateString()}</p>} {/* Date Display */}
                <p className="ticking-clock">{currentTime}</p> {/* Static time saved on Frontend */}
            </div>
        );
    },
});

// Add a script to update the time on the frontend in real-time (without needing a page refresh)
document.addEventListener('DOMContentLoaded', function () {
    const clockElement = document.querySelector('.ticking-clock');
    if (clockElement) {
        setInterval(function () {
            clockElement.textContent = new Date().toLocaleTimeString();
        }, 1000); // Update every second
    }
});
