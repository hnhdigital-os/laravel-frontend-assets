<?php

namespace HnhDigital\LaravelFrontendAssets;

use FrontendAsset;

class GoogleRecaptcha
{
    public function __construct($key = null)
    {
        if (empty($key) && !empty(env('GOOGLE_REPCAPTHCA_KEY'))) {
            $key = env('GOOGLE_REPCAPTHCA_KEY');
        }

        if (empty($key)) {
            return;
        }

        FrontendAsset::add('https://www.google.com/recaptcha/api.js', ['name' => 'footer', 'async' => 'async', 'defer' => 'defer']);

        FrontendAsset::addMeta('g-recaptcha-sitekey', ['content' => $key]);
    }
}
