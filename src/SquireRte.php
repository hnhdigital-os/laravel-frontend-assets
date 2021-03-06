<?php

namespace HnhDigital\LaravelFrontendAssets;

use FrontendAsset as FA;

class SquireRte
{
    private $verison;

    public function __construct($version = false)
    {
        $this->version = $version;

        if (!config('hnhdigital.assets.cdn', true)) {
            FA::add('vendor/squire.js');
        } else {
            $version = FA::version(class_basename(__CLASS__), $version);
            FA::add('https://cdnjs.cloudflare.com/ajax/libs/squire-rte/'.$version.'/squire.js');
        }
    }
}
