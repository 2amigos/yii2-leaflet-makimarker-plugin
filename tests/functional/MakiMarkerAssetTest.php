<?php

namespace tests;

use tests\overrides\TestMakiMarkerAsset;
use yii\web\AssetBundle;

class MakiMarkerAssetTest extends TestCase
{
    public function testRegister()
    {
        $view = $this->getView();
        $this->assertEmpty($view->assetBundles);
        TestMakiMarkerAsset::register($view);
        $this->assertCount(2,$view->assetBundles);
        $this->assertTrue($view->assetBundles['tests\\overrides\\TestMakiMarkerAsset'] instanceof AssetBundle);
        $content = $view->render('//layouts/rawlayout.php');
        $this->assertContains('leaflet.css', $content);
        $this->assertContains('Leaflet.MakiMarkers.js', $content);

    }
}
