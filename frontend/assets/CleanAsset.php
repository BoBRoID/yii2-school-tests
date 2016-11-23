<?php
/**
 * Created by PhpStorm.
 * User: gilko.nikolai
 * Date: 23.11.2016
 * Time: 11:51
 */

namespace frontend\assets;


use yii\web\AssetBundle;

class CleanAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/clean.css',
    ];
    public $depends = [
        'yii\bootstrap\BootstrapAsset',
    ];
}