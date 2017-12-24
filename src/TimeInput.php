<?php

namespace HnhDigital\LaravelFrontendAssets;

use FrontendAsset;

class TimeInput
{
    public function __construct()
    {
        FrontendAsset::add('vendor/timepicker.css');
        FrontendAsset::add('vendor/timepicker.js');
    }
}
