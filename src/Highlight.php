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

        FA::add('https://nhnent.github.io/tui.editor/api/latest/lib/highlightjs/highlight.pack.js');
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
        $version = FA::version(class_basename(__CLASS__), $this->version);
        
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
        $version = FA::version(class_basename(__CLASS__), $version);
        FA::add('https://cdnjs.cloudflare.com/ajax/libs/highlight.js/'.$version.'/styles/'.$style.'.min.css');
    }
}
