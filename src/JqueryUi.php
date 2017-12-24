<?php

namespace HnhDigital\LaravelFrontendAssets;

use FrontendAsset;

class JqueryUi
{
    /**
     * Load jQuery UI.
     *
     * @param bool $version
     *
     * @return void
     *
     * @SuppressWarnings(PHPMD.BooleanArgumentFlag)
     */
    public function __construct($version = false)
    {
        FrontendAsset::container('Jquery');
        $theme = empty($theme) ? config('resource.JqueryUiTheme.1') : $theme;

        if (!env('APP_CDN', true)) {
            FrontendAsset::add('vendor/jquery-ui.js', 'header');
            FrontendAsset::add('vendor/jquery-ui/themes/'.$theme.'/jquery-ui.min.css');

            return;
        }

        $version = FrontendAsset::version(class_basename(__CLASS__), $version);
        FrontendAsset::addFirst('https://ajax.googleapis.com/ajax/libs/jqueryui/'.$version.'/jquery-ui.min.js', 'header');
        FrontendAsset::addFirst('https://ajax.googleapis.com/ajax/libs/jqueryui/'.$version.'/themes/'.$theme.'/jquery-ui.min.css');
    }
}
