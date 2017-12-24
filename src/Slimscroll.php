<?php

namespace HnhDigital\LaravelFrontendAssets;

use FrontendAsset;

class Slimscroll
{
    public function __construct($version = false)
    {
        if (!env('APP_CDN', true)) {
            FrontendAsset::add('vendor/slimscroll.min.js');
        } else {
            $version = FrontendAsset::version(class_basename(__CLASS__), $version);
            FrontendAsset::add('https://cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/'.$version.'/jquery.slimscroll.min.js');
        }
        FrontendAsset::container('Jquery');
    }
}
