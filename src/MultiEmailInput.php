<?php

namespace HnhDigital\LaravelFrontendAssets;

use FrontendAsset;

class MultiEmailInput
{
    public function __construct($version = false)
    {
        FrontendAsset::container('TagsInput');
        FrontendAsset::add('vendor/multi-email.js');
        FrontendAsset::add('vendor/multi-email.css');
    }
}
