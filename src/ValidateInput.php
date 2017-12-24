<?php

namespace Bluora\LaravelResourcesLoader\Assets;

use Resource;

class ValidateInput
{
    public function __construct($version = false)
    {
        Resource::container('Jquery');
        if (!env('APP_CDN', true)) {
            Resource::add('vendor/validate.min.js');
            Resource::add('vendor/validate-additional.min.js');
        } else {
            $version = Resource::version(class_basename(__CLASS__), $version);
            Resource::add('https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/'.$version.'/jquery.validate.min.js');
            Resource::add('https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/'.$version.'/additional-methods.min.js');
        }
    }
}
