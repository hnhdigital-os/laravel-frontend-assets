<?php

namespace Bluora\LaravelResourcesLoader\Assets;

use Resource;

class MetisMenu
{
    public function __construct($version = false)
    {
        if (!env('APP_CDN', true)) {
            Resource::add('vendor/metis-menu.min.js');
            Resource::add('vendor/metis-menu.min.css');
        } else {
            $version = Resource::version(class_basename(__CLASS__), $version);
            Resource::add('https://cdnjs.cloudflare.com/ajax/libs/metisMenu/'.$version.'/metisMenu.min.css');
            Resource::add('https://cdnjs.cloudflare.com/ajax/libs/metisMenu/'.$version.'/metisMenu.min.js');
        }

        Resource::container('Jquery');
    }
}
