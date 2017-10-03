=== Very Simple Event List ===
Contributors: Guido07111975
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=donation%40guidovanderleest%2enl
Version: 7.0
License: GNU General Public License v3 or later
License URI: http://www.gnu.org/licenses/gpl-3.0.html
Requires at least: 4.6
Tested up to: 4.8
Stable tag: trunk
Tags: simple, event, events, event list, event manager


This is a very simple plugin to display a list of events. Use a shortcode to display events on a page or use the widget.


== DESCRIPTION ==
= About =
This is a very simple plugin to display a list of events.

Use a shortcode to display events on a page or use the widget.

= How to use =
After installation go to Events and start adding your events.

* Use shortcode `[vsel]` to display upcoming events (including today)
* Use shortcode `[vsel-past-events]` to display past events
* Use shortcode `[vsel-current-events]` to display current events
* Use shortcode `[vsel-all-events]` to display all events

= Widget =
You can also list events in your sidebar using the widget.

Pagination is not available because it's not working properly in a widget.

But you can set a link to a page with all events.

= Settingspage =
Via Settings > VSEL you can:

* Keep events and settings when uninstalling plugin
* Show a summary instead of all content
* Link title to the event page
* Change or hide event labels

= Shortcode attributes =
You can display events from certain categories. You should enter the category slug. The slug is not always the same as the name of the category. 

* Example: `[vsel event_cat="first-category, second-category"]`

You can set amount of events per page. This will overwrite amount set in Settings > Reading.

* Example: `[vsel posts_per_page=5]`

The default order of the upcoming and current events list is ascending. The default order of the past and all events list is descending.

* Change order from ascending to descending: `[vsel order=desc]`
* Change order from descending to ascending: `[vsel order=asc]`

You can change the text that is being displayed in case of no events.

* Example: `[vsel no_events_text="your text here"]`

You can change the default image size that is being used to display the featured image.

WordPress creates duplicates in different sizes upon upload. These sizes can be set via Settings > Media.

* Small sized image: `[vsel image_size="small"]`
* Medium sized image: `[vsel image_size="medium"]`
* Large sized image: `[vsel image_size="large"]`

Note: I have set the featured image width at max 40% of the event content area.

Note: The featured image size in a single event is handled by your theme.

You can add multiple attributes.

* Example: `[vsel posts_per_page=5 image_size="medium"]`

= Widget attributes =
The widget supports the same attributes. Enter them without shortcode itself and without brackets.

* Display events from certain categories: `event_cat="first-category, second-category"`
* Set amount of events per page: `posts_per_page=5`
* Change order from ascending to descending: `order=desc`
* Change order from descending to ascending: `order=asc`
* Change no events text: `no_events_text="your text here"`
* Small sized image: `image_size="small"`
* Medium sized image: `image_size="medium"`
* Large sized image: `image_size="large"`
* Multiple attributes: `posts_per_page=5 image_size="medium"`

= Single event =
Template file single.php (and in some cases single-event.php) is being used to display a single event. This file is located in your theme folder.

= Event category page =
By default template file archive.php is being used. This file is located in your theme folder. My plugin does not support this file, so the event category page will not be displayed properly.

The event category page will only display properly when using the shortcode on a page.

Example: `[vsel event_cat="first-category, second-category"]`

= Uninstall =
If you uninstall plugin via WP dashboard all events and settings will be removed from database.

It removes all posts with (custom) post type "event".

You can avoid this via Settings > VSEL.

= Question? = 
Please take a look at the FAQ section.

= Translation =
Not included but plugin supports WordPress language packs.

More [translations](https://translate.wordpress.org/projects/wp-plugins/very-simple-event-list) are very welcome!

= Credits =
Without the WordPress codex and help from the WordPress community I was not able to develop this plugin, so: thank you!

Enjoy!


== INSTALLATION ==
Please check Description section for installation info.


== Frequently Asked Questions ==
= How can I change date format? =
You can set date format in WP dashboard via Settings > General.

The datepicker and date input field in WP dashboard only support 2 numeric date formats: "day-month-year" (30-01-2016) and "year-month-day" (2016-01-30).

If the date format set in WP dashboard is not the same, it will be changed into 1 of the 2 above.

= How do I set plugin language? =
Plugin uses the WP Dashboard language, set in Settings > General.

If plugin language pack is not available, language fallback will be English.

= What do you mean with current events? =
Current events are events I can visit today. So this can be an one-day or multi-day event.

= Are events also listed on time? =
No, because input field for time is a regular text input this is not possible.
 
= Can I set the number of events on a page? =
Yes, this is possible.

You can find more info about this at the Description section.

= Can I display a summary instead of all content? =
Yes, this is possible.

You can activate the summary via Settings > VSEL.

And you can set a custom summary while adding an event. This will replace the default summary (if activated).

= Can I display certain events only? =
Besides listing upcoming, current or past events you can display events from certain categories.

You can find more info about this at the Description section.

= Is it possible to display events in a widget? =
Yes, this is possible.

You can find more info about this at the Description section.

= Why is the page with all events not displayed properly? =
Go to the page in your dashboard and check the shortcode in "Text" mode. 

If you have added the shortcode in "Visual" mode, it might be wrapped in HTML tags, such as: `<script>[vsel]</script>`

You should remove the HTML tags and resave the page.

= Why is a single event not displayed properly? =
You can find more info about this at the Description section.

= Why is the event category page not displayed properly? =
You can find more info about this at the Description section.

= Why a 404 (nothing found) when I click the pagination? =
This might be caused because the slug of your page ends with "event". This causes a conflict with my plugin.

You should change this slug into something else. The slug is not always the same as the name of the page.

= Why a 404 (nothing found) when I click the title link? =
This is mostly caused by the permalink settings. Please reset the permalink via Settings > Permalinks.

= Can I change or hide event labels? =
Yes, this is possible.

You can change or hide event labels via Settings > VSEL.

= What does "Link to more info" mean? =
While adding an event you can add a link (an URL) to a post, page or website.

This can be useful in case additional info is available on another site.

And you can label this link. Default label is "More info".

= What does "Link to all events" mean? =
While adding a widget you can add a link (an URL) to a page with all events.

This can be useful because in most cases the widget only lists a few events.

And you can label this link. Default label is "All events".

= Can I use multiple shortcodes on the same page? =
Yes, as far as I know there are no issues when using multiple shortcodes.

= Why an error notification instead of a date? =
An error notification is displayed in case start date begins after end date. To solve this please reset date.

= Why no start date in dashboard? =
All events posted with version 4.0 and older have 1 date only. To solve this please reset date.

= Why no meta, image or categories while adding an event? =
If these boxes are not present, they might be unchecked in Screen Options.

= How do I list events in a template file? =
* Upcoming events: `<?php echo do_shortcode( '[vsel]' ); ?>`
* Past events: `<?php echo do_shortcode( '[vsel-past-events]' ); ?>`
* Current events: `<?php echo do_shortcode( '[vsel-current-events]' ); ?>`
* All events: `<?php echo do_shortcode( '[vsel-all-events]' ); ?>`

= What happens with my events when I uninstall VSEL? =
You can find more info about this at the Description section.

= How can I make a donation? =
You like my plugin and you're willing to make a donation? Nice! There's a PayPal donate link on the WordPress plugin page and my website.

= Other question or comment? =
Please open a topic in plugin forum.


== Changelog ==
= Version 7.0 =
* minor textual change
* minor change in file vsel-single

= Version 6.9 =
* major update
* new: change labels via the settingspage
* new: display start date and end date on the same line via the settingspage
* removed label attributes
* removed attribute to display start date and end date on the same line
* attributes mentioned above where not supported on the single event page
* updated most files
* updated readme file
* new screenshots on wp.org

= Version 6.8 =
* reduce space in widget and mobile screen: the featured image is not full width anymore
* but you can still undo this, using some custom CSS
* new: activate link to single event for page or widget separately
* new: activate excerpt for page or widget separately
* you might have to reset both settings on the settingspage
* new: added CSS class to start date and end date on the same line: vsel-meta-combined-date
* increased the custom excerpt lenght from 150 to 250 characters
* updated most files

= Version 6.7 =
* major update
* changed and simplyfied code and file structure regarding the shortcodes
* widget uses it's own shortcode files now
* removed files vsel-upcoming, vsel-past, vsel-current and vsel-all
* added files vsel-shortcodes and vsel-widget-shortcodes
* added files vsel-list and vsel-widget-list
* new: added extra settings to hide elements
* new: added event ID to each event in list
* new: shortcode attribute to display start date and end date on the same line
* new: shortcode attribute to set the image size that is being used
* for more info please check readme file
* changed default image width from 40% into max 40% (to avoid blurry image)
* changed default image width in widget from 100% into max 100% (to avoid blurry image)
* updated most files

For all versions please check file changelog.


== Screenshots == 
1. Very Simple Event List (Twenty Seventeen theme).
2. Very Simple Event List single event (Twenty Seventeen theme).
3. Very Simple Event List widget (Twenty Seventeen theme).
4. Very Simple Event List (dashboard).
5. Very Simple Event List single event (dashboard).
6. Very Simple Event List widget (dashboard).
7. Very Simple Event List settingspage (dashboard).
8. Very Simple Event List settingspage (dashboard).