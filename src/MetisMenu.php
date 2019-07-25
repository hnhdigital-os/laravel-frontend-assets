<?php

namespace HnhDigital\LaravelFrontendAssets;

use FrontendAsset;

class MetisMenu
{
    public function __construct($version = false)
    {
        if (!config('hnhdigital.assets.cdn', true)) {
            FrontendAsset::add('vendor/metis-menu.min.js');
            FrontendAsset::add('vendor/metis-menu.min.css');
        } else {
            $version = FrontendAsset::version(class_basename(__CLASS__), $version);
            FrontendAsset::add('https://cdnjs.cloudflare.com/ajax/libs/metisMenu/'.$version.'/metisMenu.min.css');
            FrontendAsset::add('https://cdnjs.cloudflare.com/ajax/libs/metisMenu/'.$version.'/metisMenu.min.js');
        }

        FrontendAsset::container('Jquery');
    }
}
