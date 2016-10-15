<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $jsOptions = array(
        'position' => \yii\web\View::POS_HEAD,
    );
    
    public $css = [
        'vendor/font-awesome-4.6.3/css/font-awesome.min.css',
        'vendor/chosen/chosen.min.css',
        'css/guru-chosen.css',        
        'css/site.css',
        'css/guru.css',
    ];
    public $js = [
        'vendor/chosen/chosen.jquery.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
