<?php

namespace tests\overrides;

use dosamigos\leaflet\plugins\makimarker\MakiMarker;

class TestMakiMarker extends MakiMarker
{
    public function registerAssetBundle($view)
    {
        TestMakiMarkerAsset::register($view);
        return $this;
    }
}
