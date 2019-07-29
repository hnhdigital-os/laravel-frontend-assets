<?php

namespace HnhDigital\LaravelFrontendAssets;

class Raphael
{
    private $verison;

    public function __construct($version = false)
    {
        $this->version = $version;

        if (!config('hnhdigital.assets.cdn', true)) {
            app('FrontendAsset')->add('vendor/raphael.js');
        } else {
            $version = app('FrontendAsset')->version(class_basename(__CLASS__), $version);
            app('FrontendAsset')->add('https://cdnjs.cloudflare.com/ajax/libs/raphael/'.$version.'/raphael.js');
        }
    }
}
