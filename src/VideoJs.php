<?php

namespace HnhDigital\LaravelFrontendAssets;

use FrontendAsset;

class VideoJs
{
    public function __construct($version = false)
    {
        $version = FrontendAsset::version(class_basename(__CLASS__), $version);
        FrontendAsset::add(sprintf('http://vjs.zencdn.net/%s/video-js.css', $version));
        FrontendAsset::add(sprintf('http://vjs.zencdn.net/%s/video.js', $version));
    }
}
