<?php

namespace Bluora\LaravelResourcesLoader\Assets;

use Resource;

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
        Resource::container('Jquery');
        $theme = empty($theme) ? config('resource.JqueryUiTheme.1') : $theme;

        if (!env('APP_CDN', true)) {
            Resource::add('vendor/jquery-ui.js', 'header');
            Resource::add('vendor/jquery-ui/themes/'.$theme.'/jquery-ui.min.css');

            return;
        }

        $version = Resource::version(class_basename(__CLASS__), $version);
        Resource::addFirst('https://ajax.googleapis.com/ajax/libs/jqueryui/'.$version.'/jquery-ui.min.js', 'header');
        Resource::addFirst('https://ajax.googleapis.com/ajax/libs/jqueryui/'.$version.'/themes/'.$theme.'/jquery-ui.min.css');
    }
}
