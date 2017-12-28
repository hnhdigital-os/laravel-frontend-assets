<?php

namespace HnhDigital\LaravelFrontendAssets;

use FrontendAsset;

class Toastr
{

    /**
     * Default config.
     *
     * @var array
     */
    private static $default_config = [
        'closeButton' => true,
        'debug' => false,
        'progressBar' => true,
        'preventDuplicates' => true,
        'positionClass' => 'toast-top-right',
        'onclick' => null,
        'showDuration' => '400',
        'hideDuration' => '1000',
        'timeOut' => '7000',
        'extendedTimeOut' => '1000',
        'showEasing' => 'swing',
        'hideEasing' => 'linear',
        'showMethod' => 'fadeIn',
        'hideMethod' => 'fadeOut'
    ];

    /**
     * Add asset.
     *
     * @param boolean $version
     */
    public function __construct($version = false)
    {
        if (!env('APP_CDN', true)) {
            FrontendAsset::add('vendor/toastr.css');
            FrontendAsset::add('vendor/toastr.js');
        } else {
            $version = FrontendAsset::version(class_basename(__CLASS__), $version);
            FrontendAsset::add('https://cdnjs.cloudflare.com/ajax/libs/toastr.js/'.$version.'/toastr.min.css');
            FrontendAsset::add('https://cdnjs.cloudflare.com/ajax/libs/toastr.js/'.$version.'/toastr.min.js');
        }
    }

    /**
     * Toastr config.
     *
     * @return array
     */
    public static function config($customizations = [])
    {
        return htmlentities(json_encode(array_merge(self::$default_config, $customizations)));
    }
}
