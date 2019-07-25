<?php

namespace HnhDigital\LaravelFrontendAssets;

use FrontendAsset;

class TimePickerInput
{
    public function __construct($version = false)
    {
        if (!config('hnhdigital.assets.cdn', true)) {
            FrontendAsset::add('vendor/timepicker.css');
            FrontendAsset::add('vendor/timepicker.js');
        } else {
            $version = FrontendAsset::version(class_basename(__CLASS__), $version);
            FrontendAsset::add('https://cdn.jsdelivr.net/jquery.timepicker/'.$version.'/jquery.timepicker.css');
            FrontendAsset::add('https://cdn.jsdelivr.net/jquery.timepicker/'.$version.'/jquery.timepicker.min.js');
        }
    }
}
