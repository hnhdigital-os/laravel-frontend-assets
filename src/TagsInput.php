<?php

namespace Bluora\LaravelResourcesLoader\Assets;

use Resource;

class TagsInput
{
    public function __construct($version = false)
    {
        if (!env('APP_CDN', true)) {
            Resource::add('vendor/tags-input.js');
            Resource::add('vendor/tags-input.css');
        } else {
            $version = Resource::version(class_basename(__CLASS__), $version);
            Resource::add('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/'.$version.'/bootstrap-tagsinput.js');
            Resource::add('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/'.$version.'/bootstrap-tagsinput.css');
        }
    }
}
