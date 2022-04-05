=== Plugin Name ===
Contributors: sevenspark
Donate link: https://wpaccordionmenu.com
Tags: menu, navigation, accordion, images, widgets, icons, shortcodes, responsive, expand, toggle, reveal, accordian
Requires at least: 5.0
Tested up to: 5.8.1
Stable tag: 1.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

A flexible and robust accordion menu plugin

== Description ==

Bellows is an awesome accordion menu for WordPress.  It works with the WordPress menu system to allow you to build beautiful accordion menus for your site.


[Bellows Lite Demo](https://wpaccordionmenu.com/free/)
[Bellows Full Demo](https://wpaccordionmenu.com/)

Get started: [Bellows Quick Start Guide](http://sevenspark.com/docs/bellows/quick-start/lite)

= Feature Overview =

* Fully functional accordion menu
* Multiple submenu levels
* 3 included skin presets
* Multi- or single-folding
* Expand current submenu automatically option
* Shortcode integration - add an accodion menu to yoru site anywhere you can add shortcodes
* Widget integration - add an accordion menu to your widgetized theme areas


== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/bellows-accordion-menu` directory, or install the plugin through the WordPress plugins screen directly.
1. Activate the plugin through the 'Plugins' screen in WordPress
1. Use the Appearance > Bellows Menu screen to configure the plugin and generate the shortcode to add the menu to your site (or use a widget or PHP code)



== Frequently Asked Questions ==

= Where is the documentation? =

The complete documentation is available online: [Bellows Knowledgebase](http://sevenspark.com/docs/bellows)

= How to get started? =

Check out the [Bellows Quick Start Guide](http://sevenspark.com/docs/bellows/quick-start) to get up and running fast.

= What is the difference between the Lite and Pro versions? =

Please see the [Feature Comparison Table](https://wpaccordionmenu.com/features/)


== Changelog ==

= 1.3 =

* Feature: Current Associated Term Highlighting (highlight as current terms in the menu associated with the current page)
* Feature: Collapse on mobile option (toggle to reveal mobile menu)
* Feature: [Pro] Tree mode (toggles on left edge, aligned to text), including Tree skin
* Feature: [Pro] Vertical and Horizontal padding settings for top level and submenu items
* Feature: [Pro] Configurable Submenu Indent setting
* Feature: [Pro] Configurable Submenu Slide Speed setting
* Feature: [Pro] Include Parent setting for Autopopulated Posts menus
* Feature: [Pro] Exclude Posts option for Autopopulated Posts menus
* Feature: [Pro] Exclude Terms option for Autopopulated Terms menus
* Feature: Current item priority functionality - determine which item should be opened if multiple items are current.
* Enhancement: Improve keyboard accessibility
* Enhancement: Styling support for when using SVG replacement icons
* Enhancement: Configurable admin capability constant
* Enhancement: RTL improvements
* Update: jQuery 3 compatibility (replace deprecated functions)
* Update: PHP 7.4 compatibility
* Fix: Make term population work with arbitrary roots when using child_of
* Fix: Walker UberMenu check to pull ID properly

= 1.2.1 =

Lite:

* Enhancement: Improved RTL support
* Fix: Active state added to items with no submenus when default submenu state set to open

Pro:

* Feature: Added bellows_auto_terms_query_args filter
* Feature: Added bellows_auto_posts_query_args filter
* Feature: Added bellows_auto_post_title filter
* Feature: Added bellows_auto_term_title filter



= 1.2 =

Lite:

* Feature: Added Force Override Filters setting to combat themes and plugins that try to filter menu output
* Enhancement: Added bellows_menu_item_data filter
* Enhancement: If skin is disabled, and submenu dividers enabled, force the divider border
* Enhancement: Added bellows_link_attributes filter

Pro:

* Feature: Added Depth/Level limit setting for Terms Autopopulator
* Feature: Added option to set submenu default state to open or closed globally
* Feature: Added option to set submenu default state to open or closed on individual menu items


= 1.1 =

Lite:

* Exposed open and close submenu functions to external API
* Force parent submenus of current item open even if missing current classes

Pro:

* Submenu item padding Customizer setting
* Submenu font size Customizer setting
* When link is disabled, it will act as a toggle for submenu
* Add current menu item classes properly to terms in automatic terms taxonomy items

= 1.0 =

* Initial release
