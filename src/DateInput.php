<?php

namespace HnhDigital\LaravelFrontendAssets;

use FrontendAsset;

class DateInput
{
    public function __construct($version = false)
    {
        if (!env('APP_CDN', true)) {
            FrontendAsset::add('vendor/datepicker.min.js');
            FrontendAsset::add('vendor/datepicker.css');
        } else {
            $version = FrontendAsset::version(class_basename(__CLASS__), $version);
            FrontendAsset::add('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/'.$version.'/js/bootstrap-datepicker.min.js');
            FrontendAsset::add('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/'.$version.'/css/bootstrap-datepicker.css');
        }
    }
}
