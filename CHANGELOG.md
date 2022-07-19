# Changelog

All notable changes to `laravel-stripe-webhooks` will be documented in this file

## [3.3.0](https://github.com/PascaleBeier/laravel-stripe-webhooks/compare/3.2.0...v3.3.0) (2022-07-19)


### Features

* Use Container to create Job instance to allow dependency injection ([4e74d8a](https://github.com/PascaleBeier/laravel-stripe-webhooks/commit/4e74d8a2ed45f78db0bc918defb52c434c82de48))


### Bug Fixes

* **ci:** add composer.json version ([831be93](https://github.com/PascaleBeier/laravel-stripe-webhooks/commit/831be93bc49797a5a3654c8b6af50eb1a9dd092a))
* **ci:** remove composer.json version ([a4bb5ea](https://github.com/PascaleBeier/laravel-stripe-webhooks/commit/a4bb5ea8b52ded592b08c776642b04e67edc9ef8))
* **ci:** remove explicit manifest command ([d8d6ede](https://github.com/PascaleBeier/laravel-stripe-webhooks/commit/d8d6edeae8f6c090e77f903b760e7f583244d66b))
* **ci:** Use main branch for php setup to include pint ([453038a](https://github.com/PascaleBeier/laravel-stripe-webhooks/commit/453038ac7fc677dca287ff2caa90b7bdc539da24))
* **ci:** use release-please manifest ([455f851](https://github.com/PascaleBeier/laravel-stripe-webhooks/commit/455f851517722908bdeef259a049f9ee20b9460e))
* **ci:** Use simple release-type since we do not version composer.json ([206dac4](https://github.com/PascaleBeier/laravel-stripe-webhooks/commit/206dac4105c605e2cfd247057bb0f19038636bf9))

## [3.2.0](https://github.com/spatie/laravel-stripe-webhooks/compare/3.1.3...3.2.0) - 2022-06-07

### What's Changed

- Update UPGRADING.md by @mstaack in https://github.com/spatie/laravel-stripe-webhooks/pull/125
- let user able to define a default job as a catchall event handler by @wanghanlin in https://github.com/spatie/laravel-stripe-webhooks/pull/128

### New Contributors

- @mstaack made their first contribution in https://github.com/spatie/laravel-stripe-webhooks/pull/125
- @wanghanlin made their first contribution in https://github.com/spatie/laravel-stripe-webhooks/pull/128

**Full Changelog**: https://github.com/spatie/laravel-stripe-webhooks/compare/3.1.3...3.2.0

## [3.1.3](https://github.com/spatie/laravel-stripe-webhooks/compare/3.1.2...3.1.3) - 2022-05-18

## What's Changed

- Update UPGRADING.md by @flatcapco in https://github.com/spatie/laravel-stripe-webhooks/pull/116
- Update README.md by @flatcapco in https://github.com/spatie/laravel-stripe-webhooks/pull/117
- UPGRADING.md v3: Add payload column type change by @andzandz in https://github.com/spatie/laravel-stripe-webhooks/pull/122
- Allow stripe sdk v8 by @ankurk91 in https://github.com/spatie/laravel-stripe-webhooks/pull/123

## New Contributors

- @flatcapco made their first contribution in https://github.com/spatie/laravel-stripe-webhooks/pull/116
- @andzandz made their first contribution in https://github.com/spatie/laravel-stripe-webhooks/pull/122

**Full Changelog**: https://github.com/spatie/laravel-stripe-webhooks/compare/3.1.2...3.1.3

## [3.1.2](https://github.com/spatie/laravel-stripe-webhooks/compare/3.1.1...3.1.2) - 2022-03-07

## What's Changed

- fix: only check for stripe webhooks by @ankurk91 in https://github.com/spatie/laravel-stripe-webhooks/pull/110

**Full Changelog**: https://github.com/spatie/laravel-stripe-webhooks/compare/3.1.1...3.1.2

## [3.1.1](https://github.com/spatie/laravel-stripe-webhooks/compare/3.1.0...3.1.1) - 2022-02-05

## What's Changed

- feat: process webhook once by @ankurk91 in https://github.com/spatie/laravel-stripe-webhooks/pull/107

**Full Changelog**: https://github.com/spatie/laravel-stripe-webhooks/compare/3.1.0...3.1.1

## [3.1.0](https://github.com/spatie/laravel-stripe-webhooks/compare/3.0.2...3.1.0) - 2022-01-14

- allow Laravel 9

## [3.0.2](https://github.com/spatie/laravel-stripe-webhooks/compare/3.0.1...3.0.2) - 2021-11-24

## What's Changed

- Add Unreleased Heading to Changelog by @stefanzweifel in https://github.com/spatie/laravel-stripe-webhooks/pull/101
- docs: fix upgrade guide by @ankurk91 in https://github.com/spatie/laravel-stripe-webhooks/pull/102
- Corrected potential WebhookConfig issues. by @accu-clw in https://github.com/spatie/laravel-stripe-webhooks/pull/104

## New Contributors

- @stefanzweifel made their first contribution in https://github.com/spatie/laravel-stripe-webhooks/pull/101
- @accu-clw made their first contribution in https://github.com/spatie/laravel-stripe-webhooks/pull/104

**Full Changelog**: https://github.com/spatie/laravel-stripe-webhooks/compare/3.0.1...3.0.2

## [3.0.1](https://github.com/spatie/laravel-stripe-webhooks/compare/3.0.0...3.0.1) - 2021-11-05

## What's Changed

- Update README.md by @Faks in https://github.com/spatie/laravel-stripe-webhooks/pull/98
- Fix publish commands by @ryanito in https://github.com/spatie/laravel-stripe-webhooks/pull/99
- Fix routing by @ankurk91 in https://github.com/spatie/laravel-stripe-webhooks/pull/100

## New Contributors

- @Faks made their first contribution in https://github.com/spatie/laravel-stripe-webhooks/pull/98
- @ryanito made their first contribution in https://github.com/spatie/laravel-stripe-webhooks/pull/99

**Full Changelog**: https://github.com/spatie/laravel-stripe-webhooks/compare/3.0.0...3.0.1

## 3.0.0 - 2021-10-25

- use spatie/laravel-webhook-client v3
- require PHP 8
- require Laravel 8

No changes to the API have been made, so it should be an easy upgrade

## 2.6.2 - 2021-10-04

- Fix model from config not being used

## 2.6.1 - 2021-06-28

- Process everything by default (#89)
- restore Postgres compat

## 2.6.0 - 2021-06-18

- process Stripe calls only once

## 2.5.0 - 2020-01-12

- add `verify_signature` config option

## 2.4.0 - 2020-12-07

- add support for PHP 8

## 2.3.1 - 2020-09-09

- Add Laravel 8 support

## 2.3.0 - 2020-03-03

- Add Laravel 7 support

## 2.2.1 - 2019-09-04

- Allow Stripe 7.x

## 2.2.0 - 2019-09-04

- Add Laravel 6 support

## 2.1.0 - 2019-07-08

- upgrade spatie/laravel-webhook-client from v1 to v2

## 2.0.0 - 2019-06-24

- this package now makes use of spatie/laravel-webhook-client

## 1.2.0 - 2018-02-27

- drop support for Laravel 5.7 and below
- drop support for PHP 7.1 and below

## 1.1.4 - 2018-02-27

- add support for Laravel 5.8

## 1.1.3 - 2018-11-03

- use `STRIPE_WEBHOOK_SECRET` env variable

## 1.1.2 - 2018-08-29

- send a response in the controller

## 1.1.1 - 2018-08-29

- add support for Laravel 5.7

## 1.1.0 - 2018-07-23

- add support for Stripe Connect

## 1.0.3 - 2018-02-17

- add support for stripe api v6

## 1.0.2 - 2018-02-08

- add support for L5.6

## 1.0.1 - 2017-10-12

- added missing parameter to `jobClassDoesNotExist` method

## 1.0.0 - 2017-10-09

- initial release
