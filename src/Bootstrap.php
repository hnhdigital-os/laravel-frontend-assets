<?php

namespace Bluora\LaravelResourcesLoader\Assets;

use Resource;

class Bootstrap
{
    public function __construct($version = false)
    {
        Resource::container('Jquery');
        if (!env('APP_CDN', true)) {
            Resource::add('vendor/bootstrap.js');
        } else {
            $version = Resource::version(class_basename(__CLASS__), $version);
            Resource::add('https://maxcdn.bootstrapcdn.com/bootstrap/'.$version.'/js/bootstrap.min.js');
        }
        Resource::container('StickyTabs');
        Resource::add('vendor/bootstrap.css');
    }
}
