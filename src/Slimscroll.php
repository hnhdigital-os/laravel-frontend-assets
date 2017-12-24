<?php

namespace Bluora\LaravelResourcesLoader\Assets;

use Resource;

class Slimscroll
{
    public function __construct($version = false)
    {
        if (!env('APP_CDN', true)) {
            Resource::add('vendor/slimscroll.min.js');
        } else {
            $version = Resource::version(class_basename(__CLASS__), $version);
            Resource::add('https://cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/'.$version.'/jquery.slimscroll.min.js');
        }
        Resource::container('Jquery');
    }
}
