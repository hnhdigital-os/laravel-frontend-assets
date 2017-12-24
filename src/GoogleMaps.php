<?php

namespace HnhDigital\LaravelFrontendAssets;

use FrontendAsset;

class GoogleMaps
{
    public function __construct($version = false)
    {
        FrontendAsset::add('https://maps.google.com/maps/api/js?libraries=places&key='.env('GOOGLE_MAP_KEY'));
    }
}
