import { useBlockProps, RichText } from '@wordpress/block-editor';
// import { useSelect } from '@wordpress/data';

export default function save({ attributes }) {
	// Read directly from attributes, no hooks!
const { headings, showHeading, headingText, layout, isCollapsible, listStyle, fontSize, textColor, linkColor, linkBackgroundColor, linkBackgroundColorHover, linkBorderColor, linkBorderRadius } = attributes;

	// Pass the font size as a CSS Custom Property for dynamic height calculations
	// Consolidate all dynamic styles onto the parent wrapper
	const style = {
		// Text & Font
		color: textColor,
		fontSize: fontSize,
		'--jump-link-font-size': fontSize || '18px',
		
		// Link Variables (Applied to wrapper, consumed by children)
		'--seo44-link-color': linkColor,
		'--seo44-link-bg': layout === 'horizontal' ? linkBackgroundColor : undefined,
		'--seo44-link-hover-bg': layout === 'horizontal' ? linkBackgroundColorHover : undefined,
		'--seo44-link-border-color': layout === 'horizontal' ? linkBorderColor : undefined,
		'--seo44-link-radius': layout === 'horizontal' && linkBorderRadius ? `${linkBorderRadius}px` : undefined,
	};
	
	const ListTag = listStyle === 'ol' ? 'ol' : 'ul';
	

	const blockProps = useBlockProps.save({
   		className: `${layout === 'horizontal' ? 'is-layout-horizontal' : ''} ${isCollapsible ? 'is-collapsible' : ''} ${listStyle === 'none' ? 'list-style-none' : ''}`.trim(),
    	style,
	});
	
	// Show More Expand and Contract Arrows
	const arrowDownIcon = (
		<svg className="arrow-down" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
			<path d="M12 16l-6-6 1.41-1.41L12 13.17l4.59-4.58L18 10l-6 6z"></path>
		</svg>
	);
	const arrowUpIcon = (
		<svg className="arrow-up" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
			<path d="M12 8l-6 6 1.41 1.41L12 10.83l4.59 4.58L18 14l-6-6z"></path>
		</svg>
	);

	return (
		<div {...blockProps}>
			{showHeading && <RichText.Content tagName="div" className="wp-block-seo44-jump-links-heading" value={headingText} />}
			{headings && headings.length > 0 && (
                <nav aria-label={__('Table of contents', 'jump-links-block-seo-44')}>
                    <ListTag id="seo44-jump-links-list">
                        {headings.filter(h => h.isVisible !== false).map(h => (
                            <li key={h.anchor}>
								<a href={`#${h.anchor}`}>{h.linkText}</a>
				
                            </li>
                        ))}
                    </ListTag>
                    {isCollapsible && (
						<button type="button" className="seo-44-show-more" aria-label={__('Show More', 'jump-links-block-seo-44')}
							aria-expanded="false"
                            aria-controls="seo44-jump-links-list"
						>
							{arrowDownIcon}
							{arrowUpIcon}
						</button>
					)}
                </nav>
			)}
		</div>
	);
}
