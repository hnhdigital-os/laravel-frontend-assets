<?php

namespace Bluora\LaravelResourcesLoader\Assets;

use Resource;

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
        $version = Resource::version(class_basename(__CLASS__), $version);

        if ($version < 5) {
            return $this->v4();
        }

        Resource::add('vendor/fontawesome-all.css');
    }

    private function v4()
    {
        if (!env('APP_CDN', true)) {
            Resource::add('vendor/font-awesome/css/font-awesome.min.css');

            return;
        }

        $version = Resource::version(class_basename(__CLASS__), $version);
        Resource::add('https://maxcdn.bootstrapcdn.com/font-awesome/'.$version.'/css/font-awesome.min.css');
    }
}
