<?php

namespace justyork\uikit\assets;

use yii\web\AssetBundle;

class NotifyFlat extends AssetBundle
{
    public $sourcePath = '@vendor/bower/uikit';

    public $css = [
        'css/components/notify.almost-flat.min.css',
    ];

    public $js = [
        'js/components/notify.min.js',
    ];

    public $depends = [
        'justyork\uikit\UikitAsset',
    ];
}