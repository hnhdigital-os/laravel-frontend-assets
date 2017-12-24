<?php

namespace Bluora\LaravelResourcesLoader\Assets;

use Resource;

class Pace
{
    public function __construct($version = false)
    {
        if (!env('APP_CDN', true)) {
            Resource::add('vendor/pace.min.js');
        } else {
            $version = Resource::version(class_basename(__CLASS__), $version);
            Resource::add('https://cdnjs.cloudflare.com/ajax/libs/pace/'.$version.'/pace.min.js');
        }
    }
}
