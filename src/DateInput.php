<?php

namespace Bluora\LaravelResourcesLoader\Assets;

use Resource;

class DateInput
{
    public function __construct($version = false)
    {
        if (!env('APP_CDN', true)) {
            Resource::add('vendor/datepicker.min.js');
            Resource::add('vendor/datepicker.css');
        } else {
            $version = Resource::version(class_basename(__CLASS__), $version);
            Resource::add('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/'.$version.'/js/bootstrap-datepicker.min.js');
            Resource::add('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/'.$version.'/css/bootstrap-datepicker.css');
        }
    }
}
