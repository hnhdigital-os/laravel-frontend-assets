<?php

namespace HnhDigital\LaravelFrontendAssets;

use FrontendAsset;

class Translations
{
    public function __construct($version = false)
    {
        FrontendAsset::add('vendor/translation.js');
        FrontendAsset::add('js/translations.js');
    }
}
