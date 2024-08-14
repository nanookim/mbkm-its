<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAssetLanding extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
//        'css/site.css',
//        'https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700&display=swap&subset=latin-ext',
        'landing/css/bootstrap.css',
        'landing/css/fontawesome-all.css',
        'landing/css/swiper.css',
        'landing/css/magnific-popup.css',
        'landing/css/styles.css',
    ];
    public $js = [
        'landing/js/jquery.min.js',
        'landing/js/popper.min.js',
        'landing/js/bootstrap.min.js',
        'landing/js/jquery.easing.min.js',
        'landing/js/swiper.min.js',
        'landing/js/jquery.magnific-popup.js',
        'landing/js/validator.min.js',
        'landing/js/scripts.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
    ];
}
