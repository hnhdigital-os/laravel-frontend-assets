<?php

namespace HnhDigital\LaravelFrontendAssets;

use FrontendAsset;
use Stripe\Stripe as StripeApi;

class Stripe
{
    public function __construct($version = false)
    {
        $version = FrontendAsset::version(class_basename(__CLASS__), $version);
        FrontendAsset::add('https://js.stripe.com/v'.$version.'/');
        StripeApi::setApiKey(env('STRIPE_SK'));
    }
}
