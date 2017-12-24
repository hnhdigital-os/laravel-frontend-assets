<?php

namespace HnhDigital\LaravelFrontendAssets;

use FrontendAsset;

class StickyTabs
{
    public function __construct($version = false)
    {
        FrontendAsset::add('vendor/sticky-tabs.js');
    }
}
