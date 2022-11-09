=== Candy Shop FSE Theme ===
Contributors:      Bria Mears
Tags:              block-theme
Tested up to:      6.1
Stable tag:        1.0.0
License:           GPL-2.0-or-later
License URI:       https://www.gnu.org/licenses/gpl-2.0.html

A mega-simple block theme built to display candy cards!


== Description ==

This is a custom FSE WP theme built to display simple content and a candy card block (which is a plugin that must be downloaded and installed separately!).

== Installation ==

1. Install a fresh version of WP
1. Upload the theme files to the `/wp-content/themes` directory, or install the theme.zip through the WordPress themes screen directly.
2. Activate the theme through the 'Themes' screen in WordPress
3. Replace the `/wp-content/uploads` folder with the uploads.zip included in this repo 
4. Import the `candyshop-fse-db` to your fresh version of WP, and utilize search/replace (ideally using WP-CLI) to replace the `candyshop.local` URLs with your fresh WP version URL.

== Moving Forward ==

Some things I would do moving forward: 

1. Dive more into the FSE build and attempt some custom Gutenberg blocks that leverages PHP a bit deeper
2. Of course, actually add webpack/gulp to the project to organize (and compile) the CSS as the theme grows larger