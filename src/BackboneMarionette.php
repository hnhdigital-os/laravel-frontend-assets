<?php

namespace HnhDigital\LaravelFrontendAssets;

use FrontendAsset;

class BackboneMarionette
{
    public function __construct($version = false)
    {
        if (!env('APP_CDN', true)) {
            FrontendAsset::add('vendor/backbone-marionette.js');
        } else {
            $version = FrontendAsset::version(class_basename(__CLASS__), $version);
            FrontendAsset::add('https://cdnjs.cloudflare.com/ajax/libs/backbone.marionette/'.$version.'/backbone.marionette.min.js');
        }
    }
}
