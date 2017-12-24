<?php

namespace Bluora\LaravelResourcesLoader\Assets;

use Resource;

class Steps
{
    public function __construct($version = false)
    {
        Resource::container('Jquery');
        Resource::container('ValidateInput');

        if (!env('APP_CDN', true)) {
            Resource::add('vendor/steps.min.js');
            Resource::add('vendor/steps.css');
        } else {
            $version = Resource::version(class_basename(__CLASS__), $version);
            Resource::add('https://cdnjs.cloudflare.com/ajax/libs/jquery-steps/'.$version.'/jquery.steps.min.js');
            Resource::add('vendor/steps.css');
        }
    }
}
