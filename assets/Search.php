<?php

namespace justyork\uikit\assets;

use yii\web\AssetBundle;

class Search extends AssetBundle
{
    public $sourcePath = '@vendor/bower/uikit';

    public $css = [
        'css/components/search.min.css',
    ];

    public $js = [
        'js/components/search.min.js',
    ];

    public $depends = [
        'justyork\uikit\assets\Autocomplete',
    ];
}