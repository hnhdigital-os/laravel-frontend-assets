<?php

namespace HnhDigital\LaravelFrontendAssets;

use FrontendAsset;

class GoogleAnalytics
{
    public function __construct()
    {
        if (empty(env('GOOGLE_ANALYTICS_KEY'))) {
            return;
        }

        FrontendAsset::add('https://www.googletagmanager.com/gtag/js?id='.env('GOOGLE_ANALYTICS_KEY'));
        // async
        
        $script = "window.dataLayer = window.dataLayer || [];\n";
        $script .= "function gtag(){dataLayer.push(arguments);}\n";
        $script .= "gtag('js', new Date());\n";
        $script .= sprintf("gtag('config', '%s');", env('GOOGLE_ANALYTICS_KEY'));
        FrontendAsset::addScript($script);
    }
}
