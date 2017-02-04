<?php

namespace justyork\uikit\assets;

use yii\web\AssetBundle;

class DinamicGrid extends AssetBundle
{
    public $sourcePath = '@vendor/bower/uikit';

    public $css = [
        
    ];

    public $js = [
        'js/components/grid.min.js',
    ];

    public $depends = [
        'justyork\uikit\UikitAsset',
    ];
}