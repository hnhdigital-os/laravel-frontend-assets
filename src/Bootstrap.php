<?php

namespace HnhDigital\LaravelFrontendAssets;

use FrontendAsset;

class Bootstrap
{
    public function __construct($version = false)
    {
        FrontendAsset::container('Jquery');
        FrontendAsset::container('Popper');
        if (!config('hnhdigital.assets.cdn', true)) {
            FrontendAsset::add('vendor/bootstrap.js');
        } else {
            $version = FrontendAsset::version(class_basename(__CLASS__), $version);
            FrontendAsset::add('https://maxcdn.bootstrapcdn.com/bootstrap/'.$version.'/js/bootstrap.min.js');
        }
        FrontendAsset::add('vendor/bootstrap.css');
    }
}
