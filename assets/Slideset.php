<?php

namespace justyork\uikit\assets;

use yii\web\AssetBundle;

class Slideset extends AssetBundle
{
     public $sourcePath = '@vendor/bower/uikit';

    public $css = [
        'css/components/slidenav.min.css',
    ];

    public $js = [
        'js/components/slideset.min.js',
    ];

    public $depends = [
        'justyork\uikit\UikitAsset',
    ];
}