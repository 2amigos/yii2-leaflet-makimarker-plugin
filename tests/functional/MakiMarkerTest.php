<?php

namespace tests;


use dosamigos\leaflet\plugins\makimarker\MakiMarker;
use tests\overrides\TestMakiMarker;

class MakiMarkerTest extends TestCase
{
    public function testMake()
    {
        $plugin = new MakiMarker();
        $icon = $plugin->make('rocket');

        $this->assertEquals('L.MakiMarkers.icon({"icon":"rocket"})', $icon);
    }

    public function testEncode()
    {
        $plugin = new MakiMarker(['icon' => 'rocket']);

        $this->assertEquals('plugin:makimarker', $plugin->getPluginName());

        $contents = $plugin->encode();

        $this->assertEquals('L.MakiMarkers.icon({"icon":"rocket"})', $contents);

        $plugin->icon = null;
        $this->assertEmpty($plugin->encode());

        $plugin->icon = 'rocket';
        $plugin->name = 'testName';
        $this->assertEquals('var testName = L.MakiMarkers.icon({"icon":"rocket"});', $plugin->encode());
    }

    public function testRegister()
    {
        $view = $this->getView();
        $plugin = new TestMakiMarker();

        $this->assertEquals($plugin, $plugin->registerAssetBundle($view));

        $this->assertCount(2, $view->assetBundles);

        $this->assertArrayHasKey('tests\overrides\TestMakiMarkerAsset', $view->assetBundles);

        $this->assertEquals(
            'js/Leaflet.MakiMarkers.js',
            $view->assetBundles['tests\overrides\TestMakiMarkerAsset']->js[0]
        );
    }

}
