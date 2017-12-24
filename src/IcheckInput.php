<?php

namespace HnhDigital\LaravelFrontendAssets;

use FrontendAsset;

class IcheckInput
{
    public function __construct($version = false)
    {
        if (!env('APP_CDN', true)) {
            FrontendAsset::add('vendor/icheck.min.js');
        } else {
            $version = FrontendAsset::version(class_basename(__CLASS__), $version);
            FrontendAsset::add('https://cdnjs.cloudflare.com/ajax/libs/iCheck/'.$version.'/icheck.min.js');
        }
    }

    /**
     * Load skin for iCheck.
     *
     * @param string $skin
     * @param string $colour
     *
     * @return void
     */
    public static function config($skin, $colour)
    {
        if (!empty($skin) && !empty($colour)) {
            if (!env('APP_CDN', true)) {
                FrontendAsset::add('vendor/icheck/'.$skin.'/'.$colour.'.css');
            } else {
                $version = FrontendAsset::version(class_basename(__CLASS__));
                FrontendAsset::add('https://cdnjs.cloudflare.com/ajax/libs/iCheck/'.$version.'/skins/'.$skin.'/'.$colour.'.css');
            }
        }
    }
}
