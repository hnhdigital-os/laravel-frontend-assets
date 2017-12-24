<?php

namespace HnhDigital\LaravelFrontendAssets;

use FrontendAsset;

class Toastr
{
    public function __construct($version = false)
    {
        if (!env('APP_CDN', true)) {
            FrontendAsset::add('vendor/toastr.css');
            FrontendAsset::add('vendor/toastr.js');
        } else {
            $version = FrontendAsset::version(class_basename(__CLASS__), $version);
            FrontendAsset::add('https://cdnjs.cloudflare.com/ajax/libs/toastr.js/'.$version.'/toastr.min.css');
            FrontendAsset::add('https://cdnjs.cloudflare.com/ajax/libs/toastr.js/'.$version.'/toastr.min.js');
        }
    }
}
