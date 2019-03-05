<?php

namespace HnhDigital\LaravelFrontendAssets;

use FrontendAsset;

class SignaturePad
{
    public function __construct($version = false)
    {
        if (!env('APP_CDN', true)) {
            FrontendAsset::add('vendor/signature_pad.umd.js');
        } else {
            $version = FrontendAsset::version(class_basename(__CLASS__), $version);
            FrontendAsset::add('https://cdn.jsdelivr.net/npm/signature_pad@'.$version.'/dist/signature_pad.umd.min.js');
        }
    }
}
