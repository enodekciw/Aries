=== Aries ===

Contributors: wplovin
Tags: one-column, two-columns, right-sidebar, fluid-layout, responsive-layout, custom-background, custom-menu, featured-images, post-formats, translation-ready, full-width-template, sticky-post, theme-options, threaded-comments, black, blue, gray, orange, pink, purple, red, yellow, dark, light
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Aries is fully responsive WordPress theme with 7 colorful skins. Also, you can create your own color schemes combining background (or even fullscreen background images!) and accent colors. Oh, and did I mention that Aries adapts to your needs? By default content is displayed in a single column, but if you add some widgets to the sidebar.. it morphs into two columns (content + sidebar)! Perfect for personal bloggers. P.S. Built with love @ http://wplov.in/

== Child Themes ==

Please follow https://codex.wordpress.org/Child_Themes#How_to_Create_a_Child_Theme to create a Child Theme, if you really need to make some modifications to Aries.
IMPORTANT: You won't need to worry about parent stylesheets, because those will be loaded automagically. Just create style.css as mentioned in that Codex link above and you are ready to go ;)

== Bundled with a theme ==

1. Font Awesome
Font Awesome 4.3.0 by @davegandy - http://fontawesome.io - @fontawesome
License - http://fontawesome.io/license (Font: SIL OFL 1.1, CSS: MIT License)

2. jQuery fitvids.js
Copyright 2013, Chris Coyier - http://css-tricks.com + Dave Rupert - http://daverupert.com
Released under the WTFPL license - http://sam.zoy.org/wtfpl/

3. html5shiv.js
Dual licensed under the MIT or GPL Version 2 licenses - https://github.com/aFarkas/html5shiv/

== Changelog ==

= 1.0.1 - May 26, 2015 =
* Added rel="nofollow" to footer link
* Removed get_post_format() from page.php
* Removed duplicate sticky-post theme tag
* Fixed bundled items license information @ readme.txt
* Added 'capability' => 'edit_theme_options' to add_section() / add_setting() in inc/customizer.php
* Changed 'aries_logo' setting sanitization callback to 'esc_url_raw' in inc/customizer.php
* esc_url( $aries_site_logo ) in header.php
* Bumped html5shiv version to 3.7.3-pre
* Bundled unminified version of js/html5shiv.js
* Reworked skins functionality to be compatible with Child Themes.
* wplovin.com -> wplov.in domain change

= 1.0.0 - Apr 17, 2015 =
* Initial release

Aries WordPress Theme, Copyright 2015 wplov.in
Aries is distributed under the terms of the GNU GPLv2 or later