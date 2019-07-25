<?php

namespace HnhDigital\LaravelFrontendAssets;

use FrontendAsset;

class ChartJs
{
    public function __construct($version = false)
    {
        if (!config('hnhdigital.assets.cdn', true)) {
            FrontendAsset::add('vendor/chart.js');
        } else {
            $version = FrontendAsset::version(class_basename(__CLASS__), $version);
            FrontendAsset::add('https://cdnjs.cloudflare.com/ajax/libs/Chart.js/'.$version.'/Chart.bundle.min.js');
        }
    }
}
