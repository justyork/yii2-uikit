<?php

namespace justyork\uikit\assets;

use yii\web\AssetBundle;

class GridParallax extends AssetBundle
{
    public $sourcePath = '@vendor/bower/uikit';

    public $css = [
        
    ];

    public $js = [
        'js/components/grid-parallax.min.js',
    ];

    public $depends = [
        'justyork\uikit\UikitAsset',
    ];
}