<?php

namespace justyork\uikit\assets;

use yii\web\AssetBundle;

class Notify extends AssetBundle
{
    public $sourcePath = '@vendor/bower/uikit';

    public $css = [
        'css/components/notify.min.css',
    ];

    public $js = [
        'js/components/notify.min.js',
    ];

    public $depends = [
        'justyork\uikit\UikitAsset',
    ];
}