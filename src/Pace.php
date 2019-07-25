<?php

namespace HnhDigital\LaravelFrontendAssets;

use FrontendAsset;

class Pace
{
    public function __construct($version = false)
    {
        if (!config('hnhdigital.assets.cdn', true)) {
            FrontendAsset::add('vendor/pace.min.js');
        } else {
            $version = FrontendAsset::version(class_basename(__CLASS__), $version);
            FrontendAsset::add('https://cdnjs.cloudflare.com/ajax/libs/pace/'.$version.'/pace.min.js');
        }
    }
}
