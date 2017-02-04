<?php

namespace justyork\uikit\assets;

use yii\web\AssetBundle;

class Autocomplete extends AssetBundle
{
    public $sourcePath = '@vendor/bower/uikit';

    public $css = [
        'css/components/autocomplete.min.css',
    ];

    public $js = [
        'js/components/autocomplete.min.js',
    ];

    public $depends = [
        'justyork\uikit\UikitAsset',
    ];
}