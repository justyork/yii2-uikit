<?php

namespace justyork\uikit\assets;

use yii\web\AssetBundle;

class FormSelect extends AssetBundle
{
    public $sourcePath = '@vendor/bower/uikit';

    public $css = [
        'css/components/form-select.min.css',
    ];

    public $js = [
        'js/components/form-select.min.js',
    ];

    public $depends = [
        'justyork\uikit\UikitAsset',
    ];
}