<?php

namespace HnhDigital\LaravelFrontendAssets;

use FrontendAsset;

class Jquery
{
    /**
     * Load jQuery.
     *
     * @param bool $version
     *
     * @return void
     *
     * @SuppressWarnings(PHPMD.BooleanArgumentFlag)
     */
    public function __construct($version = false)
    {
        if (!config('hnhdigital.assets.cdn', true)) {
            FrontendAsset::add('vendor/jquery.js', 'header');

            return;
        }

        $version = FrontendAsset::version(class_basename(__CLASS__), $version);

        FrontendAsset::addFirst('https://ajax.googleapis.com/ajax/libs/jquery/'.$version.'/jquery.min.js', 'header');
    }
}
