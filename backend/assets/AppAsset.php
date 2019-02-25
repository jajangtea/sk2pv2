<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle {

    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/preload.css',
        'css/vendors.css',
        'css/syntaxhighlighter/shCore.css',
        'css/style-blue.css',
        'css/width-full.css'
    ];
    public $js = [
        'js/vendors.js',
        'js/styleswitcher.js',
        'js/syntaxhighlighter/shCore.js',
        'js/syntaxhighlighter/shBrushXml.js',
        'js/syntaxhighlighter/shBrushJScript.js',
        'js/DropdownHover.js',
        'js/app.js',
        'js/holder.js',
        'js/index.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

}
