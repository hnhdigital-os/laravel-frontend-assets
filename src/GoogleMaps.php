<?php

namespace HnhDigital\LaravelFrontendAssets;

use FrontendAsset;
use Illuminate\Support\Arr;

class GoogleMaps
{
    public function __construct($extension = false)
    {
        FrontendAsset::add('https://maps.google.com/maps/api/js?libraries=places&key='.env('GOOGLE_MAP_KEY'));

        if ($extension !== false) {
            $this->loadExtensions($extension);

            return;
        }
    }

    /**
     * Load requested extensions.
     *
     * @param string|array $extensions
     *
     * @return void
     */
    private function loadExtensions($extensions)
    {
        $extensions = Arr::wrap($extensions);

        foreach ($extensions as $extension) {
            $extension = 'ext'.$extension;

            if (method_exists($this, $extension)) {
                $this->$extension();
            }
        }
    }

    /**
     * Marker Clusterer.
     *
     * @return void
     */
    private function extMarkerClusterer()
    {
        FrontendAsset::add('https://cdnjs.cloudflare.com/ajax/libs/js-marker-clusterer/1.0.0/markerclusterer_compiled.js');
    }
}
