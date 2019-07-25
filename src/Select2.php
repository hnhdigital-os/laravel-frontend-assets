<?php

namespace HnhDigital\LaravelFrontendAssets;

use FrontendAsset;

class Select2
{
    public function __construct($version = false)
    {
        if (!config('hnhdigital.assets.cdn', true)) {
            FrontendAsset::add('vendor/select2.min.css');
            FrontendAsset::add('vendor/select2.min.js');
        } else {
            $version = FrontendAsset::version(class_basename(__CLASS__), $version);
            FrontendAsset::add('https://cdnjs.cloudflare.com/ajax/libs/select2/'.$version.'/css/select2.min.css');
            FrontendAsset::add('https://cdnjs.cloudflare.com/ajax/libs/select2/'.$version.'/js/select2.min.js');
        }
    }
}
