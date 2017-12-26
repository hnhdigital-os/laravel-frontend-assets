<?php

namespace HnhDigital\LaravelFrontendAssets;

use FrontendAsset;

class FontAwesome
{
    /**
     * Load FontAwesome.
     *
     * @param bool $version
     *
     * @return void
     *
     * @SuppressWarnings(PHPMD.BooleanArgumentFlag)
     */
    public function __construct($version = false)
    {
        $version = FrontendAsset::version(class_basename(__CLASS__), $version);

        if ($version < 5) {
            return $this->version4();
        }

        FrontendAsset::add('vendor/fontawesome-all.css');
        FrontendAsset::add('vendor/fontawesome/js/fontawesome-all.js');
    }

    /**
     * Using version 4.
     *
     * @return void
     */
    private function version4()
    {
        if (!env('APP_CDN', true)) {
            FrontendAsset::add('vendor/font-awesome/css/font-awesome.min.css');

            return;
        }

        $version = FrontendAsset::version(class_basename(__CLASS__), $version);
        FrontendAsset::add('https://maxcdn.bootstrapcdn.com/font-awesome/'.$version.'/css/font-awesome.min.css');
    }
}
