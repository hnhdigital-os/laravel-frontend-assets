<?php

namespace HnhDigital\LaravelFrontendAssets;

use FrontendAsset;

class ClipboardJs
{
    public function __construct($version = false)
    {
        if (!env('APP_CDN', true)) {
            FrontendAsset::add('vendor/clipboard.js');
        } else {
            $version = FrontendAsset::version(class_basename(__CLASS__), $version);
            FrontendAsset::add('https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/'.$version.'/clipboard.min.js');
        }
    }
}
