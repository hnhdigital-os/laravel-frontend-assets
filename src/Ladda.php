<?php

namespace HnhDigital\LaravelFrontendAssets;

use FrontendAsset;

class Ladda
{
    public function __construct($version = false)
    {
        if (!config('hnhdigital.assets.cdn', true)) {
            FrontendAsset::add('vendor/spin.min.js');
            FrontendAsset::add('vendor/ladda.min.js');
            FrontendAsset::add('vendor/ladda.jquery.min.js');
            FrontendAsset::add('vendor/ladda-themeless.min.css');
        } else {
            $version = FrontendAsset::version(class_basename(__CLASS__), $version);
            FrontendAsset::add('https://cdnjs.cloudflare.com/ajax/libs/Ladda/'.$version.'/spin.min.js');
            FrontendAsset::add('https://cdnjs.cloudflare.com/ajax/libs/Ladda/'.$version.'/ladda.min.js');
            FrontendAsset::add('https://cdnjs.cloudflare.com/ajax/libs/Ladda/'.$version.'/ladda.jquery.min.js');
            FrontendAsset::add('https://cdnjs.cloudflare.com/ajax/libs/Ladda/'.$version.'/ladda-themeless.min.css');
        }
        FrontendAsset::container('Jquery');
    }
}
