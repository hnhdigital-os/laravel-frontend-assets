<?php

namespace HnhDigital\LaravelFrontendAssets;

use FrontendAsset;

class GoogleAnalytics
{
    public function __construct($ga_key = null)
    {
        if (empty($ga_key) && !empty(env('GOOGLE_ANALYTICS_KEY'))) {
            $ga_key = env('GOOGLE_ANALYTICS_KEY');
        }

        if (empty($ga_key)) {
            return;
        }

        FrontendAsset::add('https://www.googletagmanager.com/gtag/js?id='.$ga_key);
        // async
        
        $script = "window.dataLayer = window.dataLayer || [];\n";
        $script .= "function gtag(){dataLayer.push(arguments);}\n";
        $script .= "gtag('js', new Date());\n";
        $script .= sprintf("gtag('config', '%s');", $ga_key);
        FrontendAsset::addScript($script);
    }
}
