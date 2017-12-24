<?php

namespace HnhDigital\LaravelFrontendAssets;

use FrontendAsset;

class Sparkline
{
    public function __construct($version = false)
    {
        if (!env('APP_CDN', true)) {
            FrontendAsset::add('vendor/sparkline.js');
        } else {
            $version = FrontendAsset::version(class_basename(__CLASS__), $version);
            FrontendAsset::add('https://cdnjs.cloudflare.com/ajax/libs/jquery-sparklines/'.$version.'/jquery.sparkline.min.js');
        }
        FrontendAsset::container('Jquery');
    }
}
