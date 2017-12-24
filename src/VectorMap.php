<?php

namespace Bluora\LaravelResourcesLoader\Assets;

use Resource;

class VectorMap
{
    public function __construct()
    {
        Resource::add('vendor/jquery.jvectormap.css');
        Resource::add('vendor/jquery.jvectormap.min.js');
        Resource::add('vendor/jquery.jvectormap-world-mill-en.js');
    }
}
