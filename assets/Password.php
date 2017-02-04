<?php

namespace justyork\uikit\assets;

use yii\web\AssetBundle;

class Password extends AssetBundle
{
    public $sourcePath = '@vendor/bower/uikit';

    public $css = [
        'css/components/form-password.min.css',
    ];

    public $js = [
        'js/components/form-password.min.js',
    ];

    public $depends = [
        'justyork\uikit\UikitAsset',
    ];
}