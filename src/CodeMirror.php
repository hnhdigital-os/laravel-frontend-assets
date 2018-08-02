<?php

namespace HnhDigital\LaravelFrontendAssets;

use FrontendAsset as FA;

class CodeMirror
{
    private $verison;

    public function __construct($version = false)
    {
        $this->version = $version;

        if (!env('APP_CDN', true)) {
            FA::add('vendor/codemirror.css');
            FA::add('vendor/codemirror.js');
        } else {
            $version = FA::version(class_basename(__CLASS__), $version);
            FA::add('https://cdnjs.cloudflare.com/ajax/libs/codemirror/'.$version.'/codemirror.css.js');
            FA::add('https://cdnjs.cloudflare.com/ajax/libs/codemirror/'.$version.'/codemirror.min.js');            
        }
    }
}
