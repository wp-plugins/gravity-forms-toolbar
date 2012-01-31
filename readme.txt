=== Gravity Forms Toolbar ===
Contributors: daveshine
Donate link: http://genesisthemes.de/en/donate/
Tags: toolbar, adminbar, admin bar, gravity forms, gravityforms, forms, add-ons, addons, administration, resources, links, deckerweb
Requires at least: 3.1
Tested up to: 3.3.1
Stable tag: 1.1

This plugin adds useful admin links and resources for Gravity Forms to the WordPress Toolbar / Admin Bar.

== Description ==

This small and lightweight plugin just adds a lot Gravity Forms related resources to your toolbar / admin bar. Also links to all admin settings pages pages of the plugin are included, making the life of form administrators/ developers a lot easier. So you might just switch from the fontend of your site to read current 'Entries' or just 'Add a new Form' etc. *How cool is that? :)* Also, support for all official and lots of third-party add-ons is included!

As the name suggests this plugin is primarily intended towards website admins/ developers. Beside the forum, support links etc. the main plugin settings links will only appear if the current user has the appropiate rights/ capabillities for these. This just goes hand in hand with the very same user rights Gravity Forms itself uses to display its menu entries. So also Editors or any user user with the proper rights could view 'Entries' etc (you could easily tweak all those roles & caps with the awesome ["Members" plugin](http://wordpress.org/extend/plugins/members/)!).

= Official Add-Ons Support =
*The plugin out of the box supports links to settings pages of all officially available Gravity Forms Add-Ons, 7 to date:*

* User Registration
* PayPal
* MailChimp
* AWeber
* Campaign Monitor
* Freshbooks
* Twilio

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
* .pot file (`gravity-forms-toolbar.pot`) for translators is also always included :)
* *Your translation? - [Just send it in](http://genesisthemes.de/en/contact/)*

Credit where credit is due: This plugin here is inspired and based on the work of Remkus de Vries @defries and his awesome "WooThemes Admin Bar Addition" plugin.

[A plugin from deckerweb.de and GenesisThemes](http://genesisthemes.de/en/)

= Feedback =
* I am open for your suggestions and feedback - Thank you for using or trying out one of my plugins!
* Drop me a line [@deckerweb](http://twitter.com/#!/deckerweb) on Twitter
* Follow me on [my Facebook page](http://www.facebook.com/deckerweb.service)
* Or follow me on [+David Decker](http://deckerweb.de/gplus) on Google Plus ;-)

= More =
* [Also see my other plugins](http://genesisthemes.de/en/wp-plugins/) or see [my WordPress.org profile page](http://profiles.wordpress.org/users/daveshine/)
* Tip: [*GenesisFinder* - Find then create. Your Genesis Framework Search Engine.](http://genesisfinder.com/)

== Installation ==

1. Upload the entire `gravity-forms-toolbar` folder to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Look at your toolbar / admin bar and enjoy using the new Gravity Forms links there :)
4. Go and manage your forms or develop new ones :)

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
2. Gravity Forms Toolbar in action - primary level (running with WordPress 3.3+ here)
3. Gravity Forms Toolbar in action - a secondary level (running with WordPress 3.3+ here)
4. Gravity Forms Toolbar in action - a third level, for the official (and some third-party) Add-Ons (running with WordPress 3.3+ here)

== Changelog ==

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

= 1.1 =
Several additions and improvements - Added 3 more useful user/resource links. Further, added plugin support for 5 more free plugins. Also, updated .pot file for translators together with German translations.

= 1.0 =
Just released into the wild.

== Translations ==

* English - default, always included
* German: Deutsch - immer dabei! [Download auch via deckerweb.de](http://deckerweb.de/material/sprachdateien/gravityforms-und-addons/#gravity-forms-toolbar)

*Note:* All my plugins are localized/ translateable by default. This is very important for all users worldwide. So please contribute your language to the plugin to make it even more useful. For translating I recommend the awesome ["Codestyling Localization" plugin](http://wordpress.org/extend/plugins/codestyling-localization/) and for validating the ["Poedit Editor"](http://www.poedit.net/).

== Additional Info ==
**Idea Behind / Philosophy:** Just a little leightweight plugin for all the form developers and managers out there working 
with the incredible Gravity Forms to make their daily admin life a bit easier. I'll try to add more add-on/plugin support if it makes some sense. So stay tuned :).
