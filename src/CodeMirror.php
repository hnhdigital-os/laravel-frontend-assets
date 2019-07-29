<?php

namespace HnhDigital\LaravelFrontendAssets;

class CodeMirror
{
    private $verison;

    public function __construct($version = false)
    {
        $this->version = $version;

        if (!config('hnhdigital.assets.cdn', true)) {
            app('FrontendAsset')->add('vendor/codemirror.css');
            app('FrontendAsset')->add('vendor/codemirror.js');
        } else {
            $version = app('FrontendAsset')->version(class_basename(__CLASS__), $version);
            app('FrontendAsset')->add('https://cdnjs.cloudflare.com/ajax/libs/codemirror/'.$version.'/codemirror.min.css');
            app('FrontendAsset')->add('https://cdnjs.cloudflare.com/ajax/libs/codemirror/'.$version.'/codemirror.min.js');
        }
    }
}
