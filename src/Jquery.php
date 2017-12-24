<?php

namespace Bluora\LaravelResourcesLoader\Assets;

use Resource;

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
        if (!env('APP_CDN', true)) {
            Resource::add('vendor/jquery.js', 'header');

            return;
        }

        $version = Resource::version(class_basename(__CLASS__), $version);
        Resource::addFirst('https://ajax.googleapis.com/ajax/libs/jquery/'.$version.'/jquery.min.js', 'header');
    }
}
