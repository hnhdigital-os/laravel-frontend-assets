<?php

namespace Bluora\LaravelResourcesLoader\Assets;

use Resource;

class IcheckInput
{
    public function __construct($version = false)
    {
        if (!env('APP_CDN', true)) {
            Resource::add('vendor/icheck.min.js');
        } else {
            $version = Resource::version(class_basename(__CLASS__), $version);
            Resource::add('https://cdnjs.cloudflare.com/ajax/libs/iCheck/'.$version.'/icheck.min.js');
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
                Resource::add('vendor/icheck/'.$skin.'/'.$colour.'.css');
            } else {
                $version = Resource::version(class_basename(__CLASS__));
                Resource::add('https://cdnjs.cloudflare.com/ajax/libs/iCheck/'.$version.'/skins/'.$skin.'/'.$colour.'.css');
            }
        }
    }
}
