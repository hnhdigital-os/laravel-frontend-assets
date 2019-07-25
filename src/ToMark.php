<?php

namespace HnhDigital\LaravelFrontendAssets;

use FrontendAsset as FA;

class ToMark
{
    private $verison;

    public function __construct($version = false)
    {
        $this->version = $version;

        if (!config('hnhdigital.assets.cdn', true)) {
            FA::add('vendor/to-mark.js');
        } else {
            $version = FA::version(class_basename(__CLASS__), $version);
            FA::add('https://cdnjs.com/libraries/raphael/'.$version.'/raphael.min.js');            
        }
    }
}
