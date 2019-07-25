<?php

namespace HnhDigital\LaravelFrontendAssets;

use FrontendAsset;

class Autosize
{
    public function __construct($version = false)
    {
        if (!config('hnhdigital.assets.cdn', true)) {
            FrontendAsset::add('vendor/autosize.js');
        } else {
            $version = FrontendAsset::version(class_basename(__CLASS__), $version);
            FrontendAsset::add('https://cdnjs.cloudflare.com/ajax/libs/autosize.js/'.$version.'/autosize.min.js');
        }
    }
}
