# SEO 44 Jump Links Block
A custom block that automatically creates a clickable, customizable Jump Links table of contents from the headings in your post.

* **Contributors:** sethsm
* **Tags:** jump links, on this page, table of contents, jump links block, jump links generator
* **Requires at least:** 5.5
* **Tested up to:** 6.8
* **Stable tag:** 1.4
* **Requires PHP:** 7.4
* **License:** GPLv2 or later
* **License URI:** https://www.gnu.org/licenses/gpl-2.0.html
* **Donate link:** https://www.paypal.com/donate/?hosted_button_id=M3B2Q94PGVVWL
* **Plugin URI:**  https://www.sethcreates.com/plugins-for-wordpress/under-the-weather/
* **Author URI:**  https://www.sethcreates.com/plugins-for-wordpress/

---

## Description

A powerful, feature-rich WordPress block that automatically generates a customizable Jump To “On this Page “table of contents to improve user navigation and engagement on your posts and pages.

The Jump Links Block intelligently scans your content for headings and creates a dynamic, interactive list of links. With a full collection of controls in the editor sidebar, you have complete command over the block's functionality and appearance, from reordering links to fine-tuning the design for your theme.

---

## The SEO & User Engagement Benefits

**Boost Your SEO & User Engagement**
Adding a well-structured table of contents is one of the most effective ways to improve both your website's user experience and its visibility in search engine rankings. The Jump Links Block is more than just a navigation tool; it's a powerful feature for enhancing your SEO.

**Stand Out in Search Results**
Google and other search engines can detect the anchor links created by this block and may feature them directly in the search results. This adds valuable "Jump to" links below your page description (also called fragment links or in-page links), allowing users to go straight to the section that answers their question.

**Improve Click-Through Rate (CTR)**
By occupying more space in the search results and presenting a clear outline of your content, you make your listing more appealing and informative. This encourages more users to click on your link over your competitors, directly boosting your CTR—a key metric for search engine ranking.

**Enhance User Experience**
For long articles, a table of contents is essential. It allows readers to easily navigate to the sections they care about most, which reduces bounce rates and increases the time they spend on your page. These positive user engagement signals are highly valued by search engines.

**Provide Clear Context for Search Engines**
A list of jump links acts as a clear, semantic outline of your page's structure. This helps search engines better understand the topics and sub-topics you cover, which can improve your chances of ranking for a wider range of related search queries.

---

## Key Features

### Automatic & Intelligent

* **Auto-Generates Links:** Scans your document in real-time and creates a list of links from your H2, H3, and H4 heading blocks. 

* **Smart Anchor ID Handling:** Automatically adds unique, semantic id attributes to heading blocks that don't have one.

* **Respects Your Content:** Never overwrites a custom id you've already added to a heading, giving you full control.

* **Live Syncing:** The list automatically updates in real-time as you add, remove, or edit headings in the editor.

### Full Customization

* **Viewing & Editing Modes:** Switch between a clean preview (Viewing Mode) and a detailed interface (Editing Mode) directly in the sidebar's "Presentation" panel.

* **Custom Link Text:** Change the text of any link. For example, turn a long heading like "Frequently Asked Questions about Our Product" into a short and simple "FAQ." 

* **Custom Ordering:** Easily reorder links with simple up and down arrow buttons to create the perfect flow for your readers.

* **Toggle Visibility:** You can exclude any heading from the list with a simple "Include/Exclude" toggle.  This allows you to leave a section out of your Jump Links List, if desired.

* **Customizable Heading:** Add an optional title (like "On This Page") above your list of links.

### Advanced Styling

* **Organized Sidebar:** All styling controls are neatly organized in a dedicated "Appearance" panel.

* **Layout Control:** Display your links in a standard vertical list or a modern horizontal, button-style layout.

* **Typography:** Control the **font size** with a simple picker, including a reset button. 

* **List Styles:** Choose between a bulleted list (<ul>), a numbered list (<ol>), or no list styling at all.

* **Full Color Control:** Use integrated color pickers to customize: **Link Color**, **Other Text Color** (for bullets, numbers, and the main heading).

* **Conditional Horizontal Link Styles:** When in the horizontal layout, you can fine-tune the design with controls for  **Link Background Color**, **Link Border Color**, and **border radius**.

---

## Front-End Experience

* **Smooth Scrolling:** Clicking a link smoothly scrolls the user to the relevant section of the page, providing a modern and pleasant user experience.

* **Collapsible List:** Optional feature to collapse long lists with an elegant "Show More" / "Show Less" SVG icon button to expand and contract the list horizontally or vertically.


---

## Installation

1. Download the plugin's .zip file.
2. In your WordPress admin dashboard, go to **Plugins > Add New > Upload Plugin.**
3. Upload the .zip file and click **Install Now.**
4. Activate the plugin.

---

## How to Use 

1. Create or edit a post or page.
2. Click the + icon to add a new block and search for **Jump Links Block.**
3. Add the block to your page. It will automatically find your headings.
4. Use the settings in the editor sidebar to customize the block. 
   A. In the **Presentation** panel, switch to **Editing Mode** to see all the controls for customizing individual links (reordering, renaming, and hiding).
   B. In the "Appearance" panel, control the layout, styling, and colors.
   C. In the "Heading Settings" panel, toggle the optional title and select which heading levels to include.

---

## Frequently Asked Questions (FAQ)

### How do I edit the text, reorder, or hide a specific link?
In the block's sidebar, go to the **Presentation** panel and click the **Editing Mode** button. This will reveal all the controls inside the block editor for customizing each individual link. When you're done, you can switch back to **Viewing Mode** to see a clean preview.

### Which heading levels will appear in the list? 
That’s your choice. By default, the block will create a list of the H2 headings, but you can add H3 and H4 headings (or remove h2 headings) by simply checking a box (H1 and H5 headings are not included as they are less commonly used for in-page content structure). Control which levels are included in the **Heading Settings** panel in the sidebar by checking or unchecking the boxes. You can also use the **Editing Mode** screen to exclude individual headings from your list.

### Will this block overwrite custom anchor IDs I've already added to my headings?
No. The block is designed to be smart about this. If a heading block already has a custom anchor ID, the Jump Links Block will use that existing ID and will not overwrite it. It only adds an ID if one is missing.  The anchor ID is required to create semantic jump links.

**Note:** If one of the headings on your page is “Office Directions,” the ID created will be “office-directions.”  This could create a potential conflict if you have another ID on your webpage named “office-directions.” In this case, you simply need to assing another id to the block heading to resolve this conflict.

### Why does the "Show More" button not work in the editor?
The collapsible functionality and the **Show More** button, which features a down arrow icon, are front-end features that function using a JavaScript file. They are designed to work only on the live, published page. To give you an accurate preview, the editor displays a non-functional replica of the "Show More" button when the feature is enabled. You can hover over it to see a helpful tooltip, and clicking it will show an informational notice confirming that it's interactive on the front end.

### How do I style the links in the horizontal layout?
The special styling options for the horizontal layout (like link background and border color) will automatically appear in the **Appearance** panel in the sidebar *after* you select the "Horizontal" layout option.

### Are Jump To Links the same as Site Links?
While they look similar, **sitelinks** and **jump to links** are two different features in Google's search results. The main difference is where the links take the user. 

* **Sitelinks:** Links to **separate pages** on the same website (site-level navigation). They most often appear for branded searches when Google is confident the user wants to navigate the main sections of a specific site. Their purpose is to navigate a website's main sections and help users get to the most popular or important pages on a website more quickly.

* **"Jump to" links:** Links to **different sections within the same page** (page-level navigation).  Jump To Links are also called fragment links or in-page links.  They typically appear for long articles, tutorials, or FAQs where a table of contents with anchor links is used.  Their purpose is to navigate a long piece of content and take search users directly to the specific part of the page that answers their question.

**Jump To Links** are the search result feature that the Jump Links Block is designed to create. 

### How is the standalone "SEO 44 Jump Links Block" plugin different from the "SEO 44" plugin?
The main **SEO 44** plugin is a complete suite of tools that includes meta tag optimization, schema generation, XML sitemaps, *and* the Jump Links Block. This standalone **SEO 44 Jump Links Block** plugin offers *only* the Jump Links Block functionality for users who don't need a full SEO suite. if you are using the SEO 44 plugin, *already* have access to the Jump Links Block and do not need to install this standalone block plugin.

---

## Screenshots

1. Published Jump Links, horizontal and vertical examples
2. Expandable Jump Links, horizontal and vertical examples
3. The Jump Links Block in Presentation Mode
4. The Jump Links Block in Editing Mode
5. The Sidebar controls for the Jump Links Block 

---

## Changelog

### 1.4.0
* **State Reconciliation Engine:**  Completely overhauled the core useEffect logic to robustly handle all state changes. The new "reconciliation" engine correctly adds and removes headings as the document is edited, while intelligently preserving all user customizations (custom text, visibility, and custom order) without conflict.
* **Bug Fixes:**  Resolved bugs related to component rendering and various JavaScript "race conditions."

### 1.3.0
* **Smooth Scrolling:**  Implemented a front-end script (view.js) that enables smooth scrolling when a user clicks on a jump link.
* **Collapsible Section:**  For long lists, the front-end script can now automatically collapse the block and add a "Show More" / "Show Less" button for a cleaner appearance.

### 1.2.0
* **New "Appearance" Panel:**  Reorganized the sidebar controls for a cleaner user experience.
* **Layout Control:** Added a ButtonGroup to switch between a standard vertical list and a modern horizontal layout.
* **List Style Control:** Added a dropdown to select a bulleted (ul), numbered (ol), or unstyled (none) list format. The control is intelligently disabled when in the horizontal layout.
* **Typography & Color Controls:** Added a FontSizePicker with a reset button. Added PanelColorSettings for "Link Color" and "Other Text Color."
* **Conditional Horizontal Styles:** Added a dedicated section that appears only for the horizontal layout, allowing users to customize the link background color, border color, and border radius.

### 1.1.0
* **"Viewing" vs. "Editing" Modes:** Introduced a presentation toggle in the sidebar to switch between a clean preview and a detailed editing interface.
* **Editable Link Text:** In "Editing Mode," users can now customize the text of each link (e.g., change "Frequently Asked Questions" to "FAQ").
* **Visibility Toggles:** Added an "Included" / "Exclude" toggle for each link in "Editing Mode," allowing users to hide specific headings from the list.
* **Custom Reordering:** Implemented up and down arrow buttons for each link, allowing users to set a custom order that is different from the document's top-to-bottom order. The buttons use robust SVG icons.

### 1.0.0
* **Initial Block Setup:** Established the basic block structure and registration.
* **Real-time Heading Scan:** Implemented the core logic to automatically scan the editor content for H2, H3, and H4 headings.
* **Live Editor Preview:** The block displays a live preview of the generated link list directly in the editor.
* **Smart Anchor ID Generation:** The block intelligently adds unique anchor IDs to heading blocks that are missing them, while respecting any custom IDs that have already been set by the user.
* **Basic Sidebar Controls:** Added checkboxes to allow users to select which heading levels (H2, H3, H4) to include in the list.
