<?php

namespace justyork\uikit\assets;

use yii\web\AssetBundle;

class Parallax extends AssetBundle
{
    public $sourcePath = '@vendor/bower/uikit';

    public $css = [
        
    ];

    public $js = [
        'js/components/parallax.min.js',
    ];

    public $depends = [
        'justyork\uikit\UikitAsset',
    ];
}