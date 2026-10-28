## Changelog

= 4.3.14 (28 October, 2026) =
* Security – Fixed an issue where a crafted link could run a script in a visitor's browser through the category field of a frontend form (reported by Wordfence, CVE-2026-103962).
* Security – Fixed an issue where a guest could submit a category name that ran a script when an administrator later opened that form in the builder (reported by Wordfence, CVE-2026-109214).
* Security – Fixed an issue where a visitor could attach uploads to a form that has no upload field (reported by Sangho Lee).
* Security – Fixed an issue where a logged-in member could place the registration shortcode in a submission and hand themselves a higher role (reported by Wordfence).
* Security – Fixed an issue where a visitor could run the setup wizard and overwrite the payment, posting and profile settings, including the saved PayPal details (reported by Patchstack).
* Security – Fixed an issue where a logged-in member could activate a paid subscription pack without paying for it (reported by Patchstack).
* Fix – Form settings are no longer lost when a form is saved after new fields are added, so the submit button keeps its label and no PHP warning appears.



