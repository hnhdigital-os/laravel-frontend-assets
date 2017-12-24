<?php

namespace HnhDigital\LaravelFrontendAssets;

use FrontendAsset;

class Slick
{
    public function __construct($version = false)
    {
        if (!env('APP_CDN', true)) {
            FrontendAsset::add('vendor/slick/slick.css');
            FrontendAsset::add('vendor/slick/slick-theme.css');
            FrontendAsset::add('vendor/slick/slick.js');
        } else {
            $version = FrontendAsset::version(class_basename(__CLASS__), $version);
            FrontendAsset::add('https://cdn.jsdelivr.net/gh/kenwheeler/slick@'.$version.'/slick/slick.css');
            FrontendAsset::add('https://cdn.jsdelivr.net/gh/kenwheeler/slick@'.$version.'/slick/slick-theme.css');
            FrontendAsset::add('https://cdn.jsdelivr.net/gh/kenwheeler/slick@'.$version.'/slick/slick.js');
        }
    }
}
