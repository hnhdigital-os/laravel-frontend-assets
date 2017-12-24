<?php

namespace HnhDigital\LaravelFrontendAssets;

use FrontendAsset;

class VectorMap
{
    public function __construct()
    {
        FrontendAsset::add('vendor/jquery.jvectormap.css');
        FrontendAsset::add('vendor/jquery.jvectormap.min.js');
        FrontendAsset::add('vendor/jquery.jvectormap-world-mill-en.js');
    }
}
