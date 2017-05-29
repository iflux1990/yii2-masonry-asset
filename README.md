Yii2 Masonry.js Asset
======================

Simple asset bundle for masonry.js jQuery plugin (http://masonry.desandro.com/)
Masonry is a JavaScript grid layout library.

Forked from https://github.com/nerburish/yii2-masonry-asset

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist iflux1990/yii2-masonry-asset "*"
```

or add

```
"iflux1990/yii2-masonry-asset": "*"
```

to the require section of your `composer.json` file.


Usage
-----

You can register the asset in your AppAsset 

```
class AppAsset extends AssetBundle
{
    ...
    public $depends = [
        ...
        'iflux1990\masonry\MasonryAsset'
    ];
}
```

or use it directly in a view 

```
<?php
\iflux1990\masonry\MasonryAsset::register($this);
?>
```

And then use as it is described in the documentation (https://github.com/desandro/masonry):




 
