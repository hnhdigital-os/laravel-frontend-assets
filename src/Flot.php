<?php

namespace HnhDigital\LaravelFrontendAssets;

use FrontendAsset;

class Flot
{
    public function __construct($version = false)
    {
        if (!config('hnhdigital.assets.cdn', true)) {
            FrontendAsset::add('vendor/jquery.flot.js');
            FrontendAsset::add('vendor/jquery.flot.resize.js');
        } else {
            $version = FrontendAsset::version(class_basename(__CLASS__), $version);
            FrontendAsset::add('https://cdnjs.cloudflare.com/ajax/libs/flot/'.$version.'/jquery.flot.min.js');
            FrontendAsset::add('https://cdnjs.cloudflare.com/ajax/libs/flot/'.$version.'/jquery.flot.resize.min.js');
        }
        FrontendAsset::container('FlotTooltip');
    }
}
