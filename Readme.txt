=== Plugin Name ===
Contributors: gezimb
Tags: single page, single id, post id, id
Requires at least: 3.0.1
Tested up to: 3.6.1
Stable tag: 1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This plugin allows the user to create single-id.php pages and customize them. The id corresponds to the Category ID that is being queried.

== Description ==

If you ever need to customize the layout of a category post, you may use the plugin to reference the category by its ID and you will be able to customize the page. This plugin will let you create single-id.php pages on the theme directory which ultimately get rendered when the specific category has been queried.

== Installation ==

This section describes how to install the plugin and get it working.

1. Upload `single-id.php` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Create single pages.

== Frequently Asked Questions ==

= Why isn't my page showing? =

Double check that your single-id.php is actually refering to a cat id. For example if your cat id is 5, then single-5.php should do the job. Also make sure the file resides on the theme's root directory, that is alongisde its fellow single.php.

If that doesn't help, try enabling WP_DEBUG on your wp-config.php and read the errors. If any problems show up, either post them on the support forums and I'll do my best to help, or see what you can do to solve it.

== Screenshots ==

== Changelog ==

= 1.0 =
* Initial version works with single-id.php files

== Upgrade Notice ==