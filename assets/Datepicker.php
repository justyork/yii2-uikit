<?php

namespace justyork\uikit\assets;

use yii\web\AssetBundle;

class Datepicker extends AssetBundle
{
    public $sourcePath = '@vendor/bower/uikit';

    public $css = [
        'css/components/datepicker.min.css',
    ];

    public $js = [
        'js/components/datepicker.min.js',
    ];

    public $depends = [
        'justyork\uikit\UikitAsset',
    ];
}