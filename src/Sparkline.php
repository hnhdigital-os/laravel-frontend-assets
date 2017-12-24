<?php

namespace Bluora\LaravelResourcesLoader\Assets;

use Resource;

class Sparkline
{
    public function __construct($version = false)
    {
        if (!env('APP_CDN', true)) {
            Resource::add('vendor/sparkline.js');
        } else {
            $version = Resource::version(class_basename(__CLASS__), $version);
            Resource::add('https://cdnjs.cloudflare.com/ajax/libs/jquery-sparklines/'.$version.'/jquery.sparkline.min.js');
        }
        Resource::container('Jquery');
    }
}
