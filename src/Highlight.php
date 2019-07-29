<?php

namespace HnhDigital\LaravelFrontendAssets;

use FrontendAsset as FA;

class Highlight
{
    private $verison;

    /**
     * Set verison.
     * @param boolean $version [description]
     */
    public function __construct($version = false)
    {
        $this->version = $version;

        app('FrontendAsset')->add('https://nhn.github.io/tui.editor/api/latest/lib/highlightjs/highlight.pack.js');
    }

    /**
     * Load a specific style.
     * 
     * @param array $styles
     *
     * @return void
     */
    public function config(...$styles)
    {
        $version = app('FrontendAsset')->version(class_basename(__CLASS__), $this->version);
        
        foreach ($styles as $style) {
           $this->loadStyle($version, $style);
       }
    }

    /**
     * Load a specific style.
     *
     * @param string $style
     *
     * @return void
     */
    private function loadStyle($version, $style)
    {
        $version = app('FrontendAsset')->version(class_basename(__CLASS__), $version);
        app('FrontendAsset')->add('https://cdnjs.cloudflare.com/ajax/libs/highlight.js/'.$version.'/styles/'.$style.'.min.css');
    }
}
