<?php

namespace HnhDigital\LaravelFrontendAssets;

use FrontendAsset;

class Underscore
{
    public function __construct($version = false)
    {
        if (!config('hnhdigital.assets.cdn', true)) {
            FrontendAsset::add('vendor/underscore.js');
        } else {
            $version = FrontendAsset::version(class_basename(__CLASS__), $version);
            FrontendAsset::add('https://cdnjs.cloudflare.com/ajax/libs/underscore.js/'.$version.'/underscore-min.js');
        }
    }
}
