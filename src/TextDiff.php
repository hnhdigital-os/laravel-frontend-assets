<?php

namespace HnhDigital\LaravelFrontendAssets;

use FrontendAsset;

class TextDiff
{
    public function __construct($version = false)
    {
        if (!config('hnhdigital.assets.cdn', true)) {
            FrontendAsset::add('vendor/text-diff-patch.min.js');
            FrontendAsset::add('vendor/text-diff.min.js');
        } else {
            $version = FrontendAsset::version(class_basename(__CLASS__), $version);
            FrontendAsset::add('https://cdnjs.cloudflare.com/ajax/libs/diff_match_patch/'.$version.'/diff_match_patch.js');
            FrontendAsset::add('vendor/pretty-text-diff/jquery.pretty-text-diff.min.js');
        }
    }
}
