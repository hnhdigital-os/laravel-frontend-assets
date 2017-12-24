<?php

namespace Bluora\LaravelResourcesLoader\Assets;

use Resource;

class PasswordComplexifyInput
{
    public function __construct($version = false)
    {
        if (!env('APP_CDN', true)) {
            Resource::add('vendor/complexify.js');
            Resource::add('vendor/complexify.banlist.js');
            Resource::add('vendor/complexify.css');
        } else {
            $version = Resource::version(class_basename(__CLASS__), $version);
            Resource::add('https://cdnjs.cloudflare.com/ajax/libs/jquery.complexify.js/'.$version.'/jquery.complexify.min.js');
            Resource::add('https://cdnjs.cloudflare.com/ajax/libs/jquery.complexify.js/'.$version.'/jquery.complexify.banlist.js');
            Resource::add('vendor/complexify.css');
        }
    }
}
