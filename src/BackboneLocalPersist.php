<?php

namespace HnhDigital\LaravelFrontendAssets;

use FrontendAsset;

class BackboneLocalPersist
{
    public function __construct($version = false)
    {
        if (!config('hnhdigital.assets.cdn', true)) {
            FrontendAsset::add('vendor/backbone-local-persist.js');
        } else {
            $version = FrontendAsset::version(class_basename(__CLASS__), $version);
            FrontendAsset::add('https://cdn.jsdelivr.net/npm/backbone.localpersist'.$version.'/Backbone.localPersist.min.js');
        }
    }
}
