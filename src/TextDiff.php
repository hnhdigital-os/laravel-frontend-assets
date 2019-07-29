<?php

namespace HnhDigital\LaravelFrontendAssets;

class TextDiff
{
    public function __construct($version = false)
    {
        if (!config('hnhdigital.assets.cdn', true)) {
            app('FrontendAsset')->add('vendor/text-diff-patch.min.js');
            app('FrontendAsset')->add('vendor/text-diff.min.js');
        } else {
            $version = app('FrontendAsset')->version('DiffMatchPatch', $version);
            app('FrontendAsset')->add('https://cdnjs.cloudflare.com/ajax/libs/diff_match_patch/'.$version.'/diff_match_patch.js');
            app('FrontendAsset')->add('vendor/text-diff.min.js');
        }
    }
}
