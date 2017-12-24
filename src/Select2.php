<?php

namespace Bluora\LaravelResourcesLoader\Assets;

use Resource;

class Select2
{
    public function __construct($version = false)
    {
        if (!env('APP_CDN', true)) {
            Resource::add('vendor/select2.min.css');
            Resource::add('vendor/select2.min.js');
        } else {
            $version = Resource::version(class_basename(__CLASS__), $version);
            Resource::add('https://cdnjs.cloudflare.com/ajax/libs/select2/'.$version.'/css/select2.min.css');
            Resource::add('https://cdnjs.cloudflare.com/ajax/libs/select2/'.$version.'/js/select2.min.js');
        }
    }
}
