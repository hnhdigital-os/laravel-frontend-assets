<?php

namespace Bluora\LaravelResourcesLoader\Assets;

use Resource;

class Toastr
{
    public function __construct($version = false)
    {
        if (!env('APP_CDN', true)) {
            Resource::add('vendor/toastr.css');
            Resource::add('vendor/toastr.js');
        } else {
            $version = Resource::version(class_basename(__CLASS__), $version);
            Resource::add('https://cdnjs.cloudflare.com/ajax/libs/toastr.js/'.$version.'/toastr.min.css');
            Resource::add('https://cdnjs.cloudflare.com/ajax/libs/toastr.js/'.$version.'/toastr.min.js');
        }
    }
}
