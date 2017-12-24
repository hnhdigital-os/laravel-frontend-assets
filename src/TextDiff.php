<?php

namespace Bluora\LaravelResourcesLoader\Assets;

use Resource;

class TextDiff
{
    public function __construct($version = false)
    {
        if (!env('APP_CDN', true)) {
            Resource::add('vendor/text-diff-patch.min.js');
            Resource::add('vendor/text-diff.min.js');
        } else {
            $version = Resource::version(class_basename(__CLASS__), $version);
            Resource::add('https://cdnjs.cloudflare.com/ajax/libs/diff_match_patch/'.$version.'/diff_match_patch.js');
            Resource::add('vendor/pretty-text-diff/jquery.pretty-text-diff.min.js');
        }
    }
}
