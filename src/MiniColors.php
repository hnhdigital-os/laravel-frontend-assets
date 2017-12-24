<?php

namespace HnhDigital\LaravelFrontendAssets;

use FrontendAsset;

class MiniColors
{
    public function __construct($version = false)
    {
        if (!env('APP_CDN', true)) {
            FrontendAsset::add('vendor/jquery.minicolors.css');
            FrontendAsset::add('vendor/jquery.minicolors.js');
        } else {
            $version = FrontendAsset::version(class_basename(__CLASS__), $version);
            FrontendAsset::add('https://cdnjs.cloudflare.com/ajax/libs/jquery-minicolors/'.$version.'/jquery.minicolors.min.css');
            FrontendAsset::add('https://cdnjs.cloudflare.com/ajax/libs/jquery-minicolors/'.$version.'/jquery.minicolors.min.js');
        }
    }
}
