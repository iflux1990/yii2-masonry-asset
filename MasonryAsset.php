<?php
/**
 * @copyright Copyright (c); iflux1990, 2017
 * @package yii2-masonry-asset
 */

namespace iflux1990\masonry;

use yii\web\AssetBundle;

/**
 * Asset bundle for Masonry.js (http://masonry.desandro.com/)
 *
 * @package ilux1990\masonry
 */
class MasonryAsset extends AssetBundle
{
    public $sourcePath = '@bower/jquery-masonry';
    
    public $js = [
        'jquery.masonry.min.js',
    ];
	
    public $depends = [
        'yii\web\JqueryAsset'
    ];	
}
