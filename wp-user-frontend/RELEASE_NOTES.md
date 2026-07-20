## Changelog

= v4.3.9 (20 July, 2026) =
* New – Post Form Gutenberg block to place a frontend post submission form in the block editor with full style controls.
* New – Change Password tab in the user profile account page so members can update their password from the frontend.
* New – Redesigned Upgrade to Pro page with a plan comparison and pricing toggle.
* Enhance – Revamped the payment checkout page with a two column layout, order summary and clearer gateway selection.
* Enhance – Coupon discount and coupon ID are now stored per transaction and shown in the admin transaction list.
* Enhance – Show the active Pro plan as a badge in the admin header.
* Fix – Custom field placeholders in notification emails no longer replace a numeric field value with an attachment URL; only image and file upload fields resolve to URLs.
* Fix – Coupon discounts now apply to PayPal payments; the discounted amount was previously ignored at checkout.
* Fix – Resolve a fatal error on PHP 8 when a frontend post form still contains a field from a deactivated module.
* Fix – Renamed the PayPal webhook query variable so it no longer conflicts with FacetWP and other plugins.
* Fix – The user registration login form's "Don't have an account?" text is now translatable.
* Fix – Corrected the Custom HTML field tooltip; WordPress shortcodes require the Shortcode field.


