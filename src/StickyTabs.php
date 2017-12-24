<?php

namespace Bluora\LaravelResourcesLoader\Assets;

use Resource;

class StickyTabs
{
    public function __construct($version = false)
    {
        Resource::add('vendor/sticky-tabs.js');
    }
}
