<?php

namespace justyork\uikit\assets;

use yii\web\AssetBundle;

class Lightbox extends AssetBundle
{
    public $sourcePath = '@vendor/bower/uikit';

    public $css = [
        
    ];

    public $js = [
        'js/components/lightbox.min.js',
    ];

    public $depends = [
        'justyork\uikit\UikitAsset',
    ];
}