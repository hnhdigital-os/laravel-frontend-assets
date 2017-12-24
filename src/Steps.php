<?php

namespace HnhDigital\LaravelFrontendAssets;

use FrontendAsset;

class Steps
{
    public function __construct($version = false)
    {
        FrontendAsset::container('Jquery');
        FrontendAsset::container('ValidateInput');

        if (!env('APP_CDN', true)) {
            FrontendAsset::add('vendor/steps.min.js');
            FrontendAsset::add('vendor/steps.css');
        } else {
            $version = FrontendAsset::version(class_basename(__CLASS__), $version);
            FrontendAsset::add('https://cdnjs.cloudflare.com/ajax/libs/jquery-steps/'.$version.'/jquery.steps.min.js');
            FrontendAsset::add('vendor/steps.css');
        }
    }
}
