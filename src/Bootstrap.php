<?php

namespace HnhDigital\LaravelFrontendAssets;

use FrontendAsset;

class Bootstrap
{
    public function __construct($version = false)
    {
        FrontendAsset::container('Jquery');
        if (!env('APP_CDN', true)) {
            FrontendAsset::add('vendor/bootstrap.js');
        } else {
            $version = FrontendAsset::version(class_basename(__CLASS__), $version);
            FrontendAsset::add('https://maxcdn.bootstrapcdn.com/bootstrap/'.$version.'/js/bootstrap.min.js');
        }
        FrontendAsset::container('StickyTabs');
        FrontendAsset::add('vendor/bootstrap.css');
    }
}
