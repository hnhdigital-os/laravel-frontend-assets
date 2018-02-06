<?php

namespace HnhDigital\LaravelFrontendAssets;

use FrontendAsset;

class IfVisibleJs
{
    public function __construct($version = false)
    {
        if (!env('APP_CDN', true)) {
            FrontendAsset::add('vendor/ifvisible.js');
        } else {
            $version = FrontendAsset::version(class_basename(__CLASS__), $version);
            FrontendAsset::add('https://cdnjs.cloudflare.com/ajax/libs/ifvisible/'.$version.'/ifvisible.js');
        }
    }
}
