<?php

namespace Bluora\LaravelResourcesLoader\Assets;

use Resource;

class FlotTooltip
{
    public function __construct($version = false)
    {
        if (!env('APP_CDN', true)) {
            Resource::add('vendor/jquery.flot.tooltip.min.js');
        } else {
            $version = Resource::version(class_basename(__CLASS__), $version);
            Resource::add('https://cdnjs.cloudflare.com/ajax/libs/flot.tooltip/'.$version.'/jquery.flot.tooltip.min.js');
        }
    }
}
