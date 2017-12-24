<?php

namespace HnhDigital\LaravelFrontendAssets;

use FrontendAsset;

class PasswordComplexifyInput
{
    public function __construct($version = false)
    {
        if (!env('APP_CDN', true)) {
            FrontendAsset::add('vendor/complexify.js');
            FrontendAsset::add('vendor/complexify.banlist.js');
            FrontendAsset::add('vendor/complexify.css');
        } else {
            $version = FrontendAsset::version(class_basename(__CLASS__), $version);
            FrontendAsset::add('https://cdnjs.cloudflare.com/ajax/libs/jquery.complexify.js/'.$version.'/jquery.complexify.min.js');
            FrontendAsset::add('https://cdnjs.cloudflare.com/ajax/libs/jquery.complexify.js/'.$version.'/jquery.complexify.banlist.js');
            FrontendAsset::add('vendor/complexify.css');
        }
    }
}
