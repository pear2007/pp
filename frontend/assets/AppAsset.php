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
    public $css = [
     
		'css/bootstrap.css',
		'css/animate.css',
		'css/style.css',
    ];
    public $js = [
	'js/jquery-3.1.0.min.js',
//		'jquery-1.11.1.min.js',
		'js/bootstrap.js',


   

    ];
    public $depends = [
     //  'yii\web\YiiAsset',
//  'yii\bootstrap\BootstrapAsset',

    ];
}

