<?php

namespace Bluora\LaravelResourcesLoader\Assets;

use Resource;

class TimeInput
{
    public function __construct()
    {
        Resource::add('vendor/timepicker.css');
        Resource::add('vendor/timepicker.js');
    }
}
