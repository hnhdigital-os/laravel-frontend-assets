<?php

namespace HnhDigital\LaravelFrontendAssets;

use FrontendAsset;

class Popper
{
    public function __construct($version = false)
    {
        if (!env('APP_CDN', true)) {
            FrontendAsset::add('vendor/popper.js');
        } else {
            $version = FrontendAsset::version(class_basename(__CLASS__), $version);
            FrontendAsset::add('https://cdnjs.cloudflare.com/ajax/libs/popper.js/'.$version.'/popper.min.js');
        }
    }
}
