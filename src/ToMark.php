<?php

namespace HnhDigital\LaravelFrontendAssets;

class ToMark
{
    public function __construct($version = false)
    {
        if (!config('hnhdigital.assets.cdn', true)) {
            app('FrontendAsset')->add('vendor/to-mark.js');
        } else {
            $version = app('FrontendAsset')->version(class_basename(__CLASS__), $version);
            app('FrontendAsset')->add('https://uicdn.toast.com/to-mark/v'.$version.'/to-mark.min.js');
        }
    }
}
