## Changelog

= 4.3.11 (25 August, 2026) =


* Security – Blocked PHP object injection when the frontend post edit form reads submitted meta (reported by WPScan).
* Security – Enforced the membership subscription gate in the AJAX handler to stop unauthenticated post creation through a subscription-gated frontend post form (reported by Charles Vosburgh).
* Security – User registration now fails closed when the nonce is missing or invalid and redirects to a safe URL, preventing CSRF-based login session fixation (reported by Yaswanth Reddy Sunkara).
* Enhance – Redesigned the Modules page with a responsive card grid and modern layout.
* Enhance – Added native support for uploading .jfif images through frontend post and user profile forms.
* Compatibility – Tested with WordPress 7.1.


