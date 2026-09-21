## Changelog

= 4.3.12 (21 September, 2026) =


* Security – Fixed an issue where someone could sign up with a higher role than the site allows, or register while registration was switched off (reported by WPScan).
* Security – Fixed an issue where a submission could skip the membership requirement by being saved as a draft first (CVE-2026-17563).
* Security – Fixed an issue where the user registration form could be used to take over a visitor's session (CVE-2026-17564).
* Security – Registration and user profile forms can no longer be used to hand out an administrator role (CVE-2026-75823).
* Security – Fixed an issue where a logged-in member could delete or take over media files belonging to someone else through a frontend post form (reported by Patchstack).
* Security – Fixed an issue where a guest could publish a paid submission without paying, by reusing the link from the confirmation email (reported by Patchstack).
* Security – Fixed an issue where a membership pack could be activated from an unpaid PayPal subscription, kept an unlimited post count, and stayed active after the subscription expired or was suspended (reported by Patchstack).
* Security – Fixed an issue where a custom field value or label could run scripts on the page when a submission was viewed.
* Security – Values entered in a repeatable field are now cleaned before they are saved.
* Security – Importing a form file can no longer create content of an unexpected type or status.
* Security – The scheduled post expiration cleanup now requires the right permission to run.
* Security – The user directory no longer shows a member's email address to logged-out visitors; signed-in visitors and sites that opt in still see it.
* Fix – Guest post email verification works again: the link in the confirmation email publishes the post instead of showing an error.
* Fix – A recurring membership pack now activates with the correct post limit and expiry date, including packs that start with a free trial, and comes back after a paused subscription is reactivated.
* Fix – Posts no longer expire when post expiration is switched off on the membership pack, or when the expiration time is left empty or invalid.
* Fix – A site whose plugin files were installed without their dependencies now shows a clear admin notice instead of a fatal error, whether or not WP User Frontend Pro is also installed.
* Fix – Updating the plugin's dependencies no longer breaks the site with a missing-trait fatal error.
* Enhance – Frontend form scripts and styles now load only on pages that actually use a WP User Frontend form, including pages built with Elementor, so the rest of the site stays lighter.


