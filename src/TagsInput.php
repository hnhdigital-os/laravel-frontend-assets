<?php

namespace HnhDigital\LaravelFrontendAssets;

use FrontendAsset;

class TagsInput
{
    public function __construct($version = false)
    {
        if (!env('APP_CDN', true)) {
            FrontendAsset::add('vendor/tags-input.js');
            FrontendAsset::add('vendor/tags-input.css');
        } else {
            $version = FrontendAsset::version(class_basename(__CLASS__), $version);
            FrontendAsset::add('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/'.$version.'/bootstrap-tagsinput.js');
            FrontendAsset::add('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/'.$version.'/bootstrap-tagsinput.css');
        }
    }
}
