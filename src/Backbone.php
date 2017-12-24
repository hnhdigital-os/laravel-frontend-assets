<?php

namespace HnhDigital\LaravelFrontendAssets;

use FrontendAsset;

class Backbone
{
    public function __construct($version = false)
    {
        if (!env('APP_CDN', true)) {
            FrontendAsset::add('vendor/backbone.js');
        } else {
            $version = FrontendAsset::version(class_basename(__CLASS__), $version);
            FrontendAsset::add('https://cdnjs.cloudflare.com/ajax/libs/backbone.js/'.$version.'/backbone-min.js');
        }
    }
}
