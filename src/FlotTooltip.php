<?php

namespace HnhDigital\LaravelFrontendAssets;

use FrontendAsset;

class FlotTooltip
{
    public function __construct($version = false)
    {
        if (!env('APP_CDN', true)) {
            FrontendAsset::add('vendor/jquery.flot.tooltip.min.js');
        } else {
            $version = FrontendAsset::version(class_basename(__CLASS__), $version);
            FrontendAsset::add('https://cdnjs.cloudflare.com/ajax/libs/flot.tooltip/'.$version.'/jquery.flot.tooltip.min.js');
        }
    }
}
