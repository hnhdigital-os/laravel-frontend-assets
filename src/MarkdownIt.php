<?php

namespace HnhDigital\LaravelFrontendAssets;

use FrontendAsset as FA;

class MarkdownIt
{
    private $verison;

    public function __construct($version = false)
    {
        $this->version = $version;

        if (!env('APP_CDN', true)) {
            FA::add('vendor/markdown-it.js');
        } else {
            $version = FA::version(class_basename(__CLASS__), $version);
            FA::add('https://cdnjs.cloudflare.com/ajax/libs/markdown-it/'.$version.'/markdown-it.min.js');            
        }
    }
}
