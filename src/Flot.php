<?php

namespace Bluora\LaravelResourcesLoader\Assets;

use Resource;

class Flot
{
    public function __construct($version = false)
    {
        if (!env('APP_CDN', true)) {
            Resource::add('vendor/jquery.flot.js');
            Resource::add('vendor/jquery.flot.resize.js');
        } else {
            $version = Resource::version(class_basename(__CLASS__), $version);
            Resource::add('https://cdnjs.cloudflare.com/ajax/libs/flot/'.$version.'/jquery.flot.min.js');
            Resource::add('https://cdnjs.cloudflare.com/ajax/libs/flot/'.$version.'/jquery.flot.resize.min.js');
        }
        Resource::container('FlotTooltip');
    }
}
