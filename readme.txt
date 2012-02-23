=== Gravity Forms Toolbar ===
Contributors: daveshine, GDragoN
Donate link: http://genesisthemes.de/en/donate/
Tags: toolbar, tool bar, adminbar, admin bar, gravity forms, gravityforms, forms, add-ons, addons, administration, resources, links, deckerweb, dev4press, gdragon
Requires at least: 3.1
Tested up to: 3.3.1
Stable tag: 1.3

This plugin adds useful admin links and resources for Gravity Forms to the WordPress Toolbar / Admin Bar.

== Description ==

This small and lightweight plugin just adds a lot Gravity Forms related resources to your toolbar / admin bar. Also links to all admin settings pages pages of the plugin are included, making the life of form administrators/ developers a lot easier. So you might just switch from the fontend of your site to read current 'Entries' or just 'Add a new Form' etc. *How cool is that? :)* Also, support for all official and lots of third-party add-ons is included!

As the name suggests this plugin is primarily intended towards website admins/ developers. Beside the forum, support links etc. the main plugin settings links will only appear if the current user has the appropiate rights/ capabillities for these. This just goes hand in hand with the very same user rights Gravity Forms itself uses to display its menu entries. So also Editors or any user user with the proper rights could view 'Entries' etc (you could easily tweak all those roles & caps with the awesome ["Members" plugin](http://wordpress.org/extend/plugins/members/)!).

= NEW Features since v1.3+ =
* Display notifications when new Gravity Forms plugin update is available
* Settings to control menu items notifications display for updates and unread entries
* Toolbar menu item for Gravity Forms Toolbar plugin settings

= Plus the new features since v1.2+ =
* Admin settings page to optinally remove Support/Docs/FAQ and/or "Active Extensions" sections from menu (settings under "General Settings")
* Admin settings allow also to dynamically add existing Forms (link to their edit pages) and Entries of these forms
* Visual notification of new entries in the Toolbar (top level) and on "Entries" sub-level (if dynamic entries are activated)

= Official Add-Ons Support =
*The plugin out of the box supports links to settings pages of all officially available Gravity Forms Add-Ons, 8 to date (counting only the ones with settings pages!):*

* User Registration
* PayPal
* MailChimp
* AWeber
* Campaign Monitor
* Freshbooks
* Twilio
* Authorize.Net

= Add-Ons/ Plugin Support =
*At this time the plugin out of the box supports also links to settings pages of some third-party Gravity Forms related plugins:*

* Plugin: ["Gravity Forms Directory & Addons (free, by Katz Web Services, Inc.)](http://wordpress.org/extend/plugins/gravity-forms-addons/)
* Plugin: ["Pronamic iDEAL" Payment Gateway (free, by Pronamic, NL)](http://wordpress.org/extend/plugins/pronamic-ideal/)
* Plugin: ["Gravity Forms Salesforce Add-On (free, by Katz Web Services, Inc.)](http://wordpress.org/extend/plugins/gravity-forms-salesforce/)
* Plugin: ["Gravity Forms iContact Add-On (free, by Katz Web Services, Inc.)](http://wordpress.org/extend/plugins/gravity-forms-icontact/)
* Plugin: ["Gravity Forms Mad Mimi Add-On (free, by Katz Web Services, Inc.)](http://wordpress.org/extend/plugins/gravity-forms-mad-mimi/)
* Plugin: ["Gravity Forms ExactTarget Add-On (free, by Katz Web Services, Inc.)](http://wordpress.org/extend/plugins/gravity-forms-exacttarget/)
* Plugin: ["Gravity Forms ShootQ Add-On (free, by pussycatdev)](http://wordpress.org/extend/plugins/gravity-forms-shootq-add-on/)
* Plugin: ["Gravity Forms Contact Form 7 Importer (free, by Katz Web Services, Inc.)](http://wordpress.org/extend/plugins/contact-form-7-gravity-forms/)
* Plugin: ["Members" (free, by Justin Tadlock)](http://wordpress.org/extend/plugins/members/)
* *More third-party add-ons support will come with the next updates, so stay tuned :)*
* *Your plugin? - [Just contact me with specific data](http://genesisthemes.de/en/contact/)*

= Special Features =
* Not only supporting official Gravity Forms/ Gravity Help sites ALSO third-party and user links - so just the whole Gravity Forms ecosystem :)
* Link to downloadable German language packs - only displayed when German locales are active (de_DE, de_AT, de_CH, de_LU)
* Link to Dutch language/translation plugin - only displayed when Dutch locales are active (nl_NL or nl)
* *NOTE:* I would be happy to add more language/locale specific resources and more useful third-party links - just contact me!

= Localization =
* English (default) - always included
* German - always included
* Serbian by Dev4Press
* .pot file (`gravity-forms-toolbar.pot`) for translators is also always included :)
* *Your translation? - [Just send it in](http://genesisthemes.de/en/contact/)*

Credit where credit is due: This plugin here is inspired and based on the work of Remkus de Vries @defries and his original "WooThemes Admin Bar Addition" plugin.

*This plugin is a co-work from:*

[David Decker - DECKERWEB from deckerweb.de and GenesisThemes](http://genesisthemes.de/en/)

*and*

[Milan Petrovic - Dev4Press from dev4press.com](http://dev4press.com/)

= Feedback =
* We are open for your suggestions and feedback - Thank you for using or trying out one of our plugins!
* Drop us a line [@deckerweb](http://twitter.com/#!/deckerweb) or [@dev4press](http://twitter.com/#!/dev4press) on Twitter
* Follow [DECKERWEB Facebook page](http://www.facebook.com/deckerweb.service) and [Dev4Press Facebook page](http://www.facebook.com/dev4press)
* Or follow [+David Decker](http://deckerweb.de/gplus) on Google Plus ;-)

= More =
* [Also see my other plugins](http://genesisthemes.de/en/wp-plugins/) or see [my WordPress.org profile page](http://profiles.wordpress.org/users/daveshine/)
* Tip: [*GenesisFinder* - Find then create. Your Genesis Framework Search Engine.](http://genesisfinder.com/)

== Installation ==

1. Upload the entire `gravity-forms-toolbar` folder to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Look at your toolbar / admin bar and enjoy using the new Gravity Forms links there :)
4. Adjust a few options on the settings page - under "General Settings" > "Gravity Forms Toolbar"
5. Go and manage your entries and forms or develop new ones :)

Note: For custom and update-secure language files please upload them to `/wp-content/languages/gravity-forms-toolbar/` (just create this folder) - This enables you to use fully custom translations that won't be overridden on plugin updates. Also, complete custom English wording is possible with that as well, just use a language file like `gravity-forms-toolbar-en_US.mo/.po` to achieve that.

== Frequently Asked Questions ==

= Does this plugin work with newest WP version and also older versions? =
Yes, this plugin works really fine with WordPress 3.3 and 3.3.1!
It also works great with WP 3.2 - and also should with WP 3.1 - but we only tested extensively with WP 3.3+ this time. So you always should run the latest WordPress version for a lot of reasons.

= How are new resources being added to the toolbar / admin bar? =
Just drop me a note on [my Twitter @deckerweb](http://twitter.com/deckerweb) or via my contact page and I'll add the link(s) if it is useful for admins/ webmasters and the Gravity Forms community.

= How could my plugin/extension settings page be added to the admin bar links? =
This is possible of course and highly welcomed! Just drop me a note on [my Twitter @deckerweb](http://twitter.com/deckerweb) or via my contact page and we sort out the details!
Particularly, I need the admin url for the primary options page (like so `wp-admin/admin.php?page=foo`). I also need the correct name of the main PHP class or function (to check if the plugin extension exists or not). (I don't own all the premium stuff myself yet so you're more than welcomed to help me out with these things. Thank you!)

= There are still some other plugins for Gravity Forms out there why aren't these included by default? =
Simple answer: Linking/ adding is only possible where a plugin has its own admin pages and these are properly accessable.

== Screenshots ==

1. Gravity Forms Toolbar in default state (running with WordPress 3.3+ here)
2. Gravity Forms Toolbar in action - a secondary level - form management (running with WordPress 3.3+ here)
3. Gravity Forms Toolbar in action - a third level, for the official (and some third-party) Add-Ons (running with WordPress 3.3+ here)
4. Gravity Forms Toolbar in action - a secondary level - docs (running with WordPress 3.3+ here)
5. Gravity Forms Toolbar in action - a primary level - notification of new entries & updates (running with WordPress 3.3+ here)
6. Gravity Forms Toolbar in action - notification of new entries & updates on top-level (running with WordPress 3.3+ here)
7. Gravity Forms Toolbar - little admin settings page of the plugin (running with WordPress 3.3+ here)

== Changelog ==

= 1.3 =
* *Further enhancements and additions for plugin's own settings/features:*
 * NEW: Display notifications when new Gravity Forms plugin update is available.
 * NEW: Settings to control menu items notifications display for updates and unread entries.
 * NEW: Toolbar menu item for Gravity Forms Toolbar plugin settings.
* *Extended add-on and resources support:*
 * NEW: Added support for newly released official "Authorize.Net Add-On"
 * NEW: Added *Gravity Forms News Planet* feed link to resource links (you can also access this from here: http://friendfeed.com/gravityforms-news)
* *Other stuff:*
 * CHANGE: Changed wording from "Gravity Forms Main Settings" to just "Plugin Settings"
 * IMPROVEMENT: For WordPress 3.3+ changed display of resource links group: now at the bottom, below settings links and in WP 3.3 group style :)
 * CODE: No longer loading CSS styles or menu items for not logged-in users when plugins like "GD Press Tools" are active (which have options to show toolbar / admin bar also for visitors...)
 * CODE: Minor code/ code documenation tweaks.
 * UPDATE: Updated readme.txt file and all screenshots.
* *Translations related:*
 * NEW: Added possibility for custom and update-secure language files for this plugin - just upload them to `/wp-content/languages/gravity-forms-toolbar/` (just create this folder) - this enables you to use complete custom wording or translations.
 * NEW: Added Serbian translations by Dev4Press :)
 * UPDATE: Updated German translations and also the .pot file for all translators!

= 1.2.1 =
* BUGFIX: Fixed capability issue for displaying plugin's options page when "Members" plugin is installed
* CODE: Improved conditional check for Dutch language plugin; also, some more minor tweaks and improvements
* UPDATE: Fixed errors in .pot file from v1.2 - updated German translations and also the .pot file for all translators!

= 1.2 =
* Extended plugin functionality a lot, making it even more useful! - Thanx to new plugin co-author Milan Petrovic of Dev4Press!
 * NEW: Admin settings page to optinally remove "Support/Docs/FAQ" and/or "Active Extensions" sections from menu (settings under "General Settings")
 * NEW: Admin settings allow also to dynamically add existing "Forms" (link to their edit pages) and "Entries" of these forms
 * NEW: Visual notification of new entries in the toolbar (top level) and on "Entries" sub-level (if dynamic entries are activated)
* CODE: Improved conditional check for Dutch language plugin (only display link if plugin is not activated)
* UPDATE: Extended and improved readme.txt file
* UPDATE: Updated German translations and also the .pot file for all translators!

= 1.1 =
* Extended the third-party plugin support even more:
 * NEW: Added link to user profile at Gravity Help - for even easier access to your forum favorites etc. (only displaying for admins)
 * NEW: Added link to official blog post, documenting about "Gravity Forms CSS: Targeting Specific Elements" (Rocket Genius Blog)
 * NEW: Added useful resource link for CSS styling (plugin "Gravity Forms CSS Ready Class Selector")
 * NEW: Added plugin support for ["Gravity Forms iContact Add-On (free, by Katz Web Services, Inc.)](http://wordpress.org/extend/plugins/gravity-forms-icontact/)
 * NEW: Added plugin support for ["Gravity Forms Mad Mimi Add-On (free, by Katz Web Services, Inc.)](http://wordpress.org/extend/plugins/gravity-forms-mad-mimi/)
 * NEW: Added plugin support for ["Gravity Forms ExactTarget Add-On (free, by Katz Web Services, Inc.)](http://wordpress.org/extend/plugins/gravity-forms-exacttarget/)
 * NEW: Added plugin support for ["Gravity Forms ShootQ Add-On (free, by pussycatdev)](http://wordpress.org/extend/plugins/gravity-forms-shootq-add-on/)
 * NEW: Added plugin support for ["Members (free, by Justin Tadlock)](http://wordpress.org/extend/plugins/members/)
* BUGFIX: Corrected variable for Dutch language plugin, making link display finally work :)
* CODE: Minor tweaks and improvements.
* UPDATE: Updated German translations and also the .pot file for all translators!
* NEW: Added banner image on WordPress.org for better plugin branding :)

= 1.0 =
* Initial release

== Upgrade Notice ==

= 1.3 =
Several additions and improvements - Added GF update notification plus plugin setting for notifications. Further, added new Add-On and resource links. Also, updated .pot file for translators together with German translations - and added new Serbian translation!

= 1.2.1 =
Minor changes - Fixed/improved capability issues and conditional checks. Also, updated .pot file for translators together with German translations. 

= 1.2 =
Major improvement - Added little admin settings page to optionally remove unwanted entries. Added visual notifications for new form entries. New plugin co-author Milan Petrovic of Dev4Press - big thanks! Further, improved readme.txt file; made a few code tweaks. Also, updated .pot file for translators together with German translations. 

= 1.1 =
Several additions and improvements - Added 3 more useful user/resource links. Further, added plugin support for 5 more free plugins. Also, updated .pot file for translators together with German translations.

= 1.0 =
Just released into the wild.

== Translations ==

* English - default, always included
* German: Deutsch - immer dabei! [Download auch via deckerweb.de](http://deckerweb.de/material/sprachdateien/gravityforms-und-addons/#gravity-forms-toolbar)
* Serbian: српски - by Dev4Press
* For custom and update-secure language files please upload them to `/wp-content/languages/gravity-forms-toolbar/` (just create this folder) - This enables you to use fully custom translations that won't be overridden on plugin updates. Also, complete custom English wording is possible with that as well, just use a language file like `gravity-forms-toolbar-en_US.mo/.po` to achieve that.

*Note:* All my plugins are localized/ translateable by default. This is very important for all users worldwide. So please contribute your language to the plugin to make it even more useful. For translating I recommend the awesome ["Codestyling Localization" plugin](http://wordpress.org/extend/plugins/codestyling-localization/) and for validating the ["Poedit Editor"](http://www.poedit.net/), which works fine on Windows, Mac and Linux.

== Additional Info ==
**Idea Behind / Philosophy:** Just a little leightweight plugin for all the form developers and managers out there working 
with the incredible Gravity Forms to make their daily admin life a bit easier. I'll try to add more add-on/plugin support if it makes some sense. So stay tuned :).

**Gravity Forms News Planet** I also have started a little news/feed service via "FriendFeed" that you can subscribe to: http://friendfeed.com/gravityforms-news -- Please contact me via my Twitter for new resources (that have an RSS feed and are related to Gravity Forms!)

== Credits ==
**Big thanks** to Milan Petrovic of Dev4Press who made the options panel for this plugin - so it's still lightweight but even more useful!
