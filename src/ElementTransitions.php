<?php

namespace HnhDigital\LaravelFrontendAssets;

use FrontendAsset;

class ElementTransitions
{
    public function __construct($version = false)
    {
        FrontendAsset::add('vendor/element-transitions.css');
    }
}
