Maki Marker Plugin
==================

[![Latest Version](https://img.shields.io/github/tag/2amigos/yii2-leaflet-makimarker-plugin.svg?style=flat-square&label=release)](https://github.com/2amigos/yii2-leaflet-makimarker-plugin/tags)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/2amigos/yii2-leaflet-makimarker-plugin/master.svg?style=flat-square)](https://travis-ci.org/2amigos/yii2-leaflet-makimarker-plugin)
[![Coverage Status](https://img.shields.io/scrutinizer/coverage/g/2amigos/yii2-leaflet-makimarker-plugin.svg?style=flat-square)](https://scrutinizer-ci.com/g/2amigos/yii2-leaflet-makimarker-plugin/code-structure)
[![Quality Score](https://img.shields.io/scrutinizer/g/2amigos/yii2-leaflet-makimarker-plugin.svg?style=flat-square)](https://scrutinizer-ci.com/g/2amigos/yii2-leaflet-makimarker-plugin)
[![Total Downloads](https://img.shields.io/packagist/dt/2amigos/yii2-leaflet-makimarker-plugin.svg?style=flat-square)](https://packagist.org/packages/2amigos/yii2-leaflet-makimarker-plugin)

Yii 2 [LeafletJs](http://leafletjs.com/) Plugin to create map icons using Maki Icons from MapBox. Markers are retrieved
from MapBox's [Static Marker Api](https://www.mapbox.com/developers/api/#Stand-alone.markers).

This Plugin works in conjunction with [LeafLet](https://github.com/2amigos/yii2-leaflet-extension)
library for [Yii 2](https://github.com/yiisoft/yii2) framework.

Installation
------------
The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
composer require 2amigos/yii2-leaflet-makimarker-plugin:~1.0
```
or add

```json
"2amigos/yii2-leaflet-makimarker-plugin" : "~1.0"
```

to the require section of your application's `composer.json` file.

Usage
-----

Using its `make` method:

```

use dosamigos\leaflet\plugins\makimarker\MakiMarker;
use dosamigos\leaflet\types\LatLng;
use dosamigos\leaflet\layers\Marker;

// LeafLet initialization component
// ...

// Initialize plugin
$makimarkers = new MakiMarker(['name' => 'makimarker']);

// install
$leafLet->installPlugin($makimarkers);

// sample location
$center = new LatLng(['lat' => 51.508, 'lng' => -0.11]);

// generate icon through its icon
$marker = new Marker([
    'latLng' => $center,
    'icon' => $leafLet->plugins->makimarker->make("rocket",['color' => "#b0b", 'size' => "m"]),
    'popupContent' => 'Hey! I am a marker'
]);

```

Testing
-------

```bash
$ ./vendor/bin/phpunit
```

Contributing
------------

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

Credits
-------

- [Antonio Ramirez](https://github.com/tonydspaniard)
- [All Contributors](../../contributors)

License
-------

The BSD License (BSD). Please see [License File](LICENSE.md) for more information.

> [![2amigOS!](http://www.gravatar.com/avatar/55363394d72945ff7ed312556ec041e0.png)](http://www.2amigos.us)  
<i>Web development has never been so fun!</i>
[www.2amigos.us](http://www.2amigos.us)
