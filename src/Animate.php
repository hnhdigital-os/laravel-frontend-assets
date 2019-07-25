<?php

namespace HnhDigital\LaravelFrontendAssets;

use FrontendAsset;

class Animate
{
    public function __construct($version = false)
    {
        if (!config('hnhdigital.assets.cdn', true)) {
            FrontendAsset::add('vendor/animate.css');
        } else {
            $version = FrontendAsset::version(class_basename(__CLASS__), $version);
            FrontendAsset::add('https://cdnjs.cloudflare.com/ajax/libs/animate.css/'.$version.'/animate.min.css');
        }
    }
}
