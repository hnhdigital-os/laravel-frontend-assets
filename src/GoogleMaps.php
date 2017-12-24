<?php

namespace Bluora\LaravelResourcesLoader\Assets;

use Resource;

class GoogleMaps
{
    public function __construct($version = false)
    {
        Resource::add('https://maps.google.com/maps/api/js?libraries=places&key='.env('GOOGLE_MAP_KEY'));
    }
}
