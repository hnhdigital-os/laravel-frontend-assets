<?php

namespace Bluora\LaravelResourcesLoader\Assets;

use Resource;

class TimePickerInput
{
    public function __construct($version = false)
    {
        if (!env('APP_CDN', true)) {
            Resource::add('vendor/timepicker.css');
            Resource::add('vendor/timepicker.js');
        } else {
            $version = Resource::version(class_basename(__CLASS__), $version);
            Resource::add('https://cdn.jsdelivr.net/jquery.timepicker/'.$version.'/jquery.timepicker.css');
            Resource::add('https://cdn.jsdelivr.net/jquery.timepicker/'.$version.'/jquery.timepicker.min.js');
        }
    }
}
