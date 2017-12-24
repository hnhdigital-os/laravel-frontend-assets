<?php

namespace HnhDigital\LaravelFrontendAssets;

use FrontendAsset;

class ValidateInput
{
    public function __construct($version = false)
    {
        FrontendAsset::container('Jquery');
        if (!env('APP_CDN', true)) {
            FrontendAsset::add('vendor/validate.min.js');
            FrontendAsset::add('vendor/validate-additional.min.js');
        } else {
            $version = FrontendAsset::version(class_basename(__CLASS__), $version);
            FrontendAsset::add('https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/'.$version.'/jquery.validate.min.js');
            FrontendAsset::add('https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/'.$version.'/additional-methods.min.js');
        }
    }
}
