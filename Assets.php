<?php

namespace guopee;

use yii\web\AssetBundle;

class Assets extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->sourcePath = __DIR__;
        parent::init();
    }

    public $jsOptions = [
        'position' => \yii\web\View::POS_HEAD
    ];

    public $cssOptions = [
        'position' => \yii\web\View::POS_HEAD
    ];

    public $css = [
        'assets/jquery.appendGrid-master/jquery.appendGrid-1.7.1.min.css',
        'assets/jquery-ui-1.12.1/jquery-ui.css',
        'assets/jquery-ui-1.12.1/jquery-ui.theme.css',
    ];

    public $js = [
        'assets/jquery.appendGrid-master/jquery.appendGrid-1.7.1.min.js',
        'assets/jquery-ui-1.12.1/jquery-ui.js',
    ];

    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}