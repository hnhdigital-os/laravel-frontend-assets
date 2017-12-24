<?php

namespace Bluora\LaravelResourcesLoader\Assets;

use Resource;

class FlagIcon
{
    public static function svg($country_code, $version = false)
    {
        $version = Resource::version(class_basename(__CLASS__), $version);

        return 'https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/'.$version.'/flags/1x1/'.strtolower($country_code).'.svg';
    }
}
