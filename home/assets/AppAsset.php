<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/1
 * Time: 11:16
 */

namespace home\assets;


use yii\web\AssetBundle;

class AppAsset extends AssetBundle
{
     //public $basePath =__DIR__. '/../static';
     public $basePath = '@webroot';
     public $baseUrl = '@web/static';
     public $css = [
          'css/css.css',
     ];
     public $js = [];
     public $depends = [
         // 'yii\web\YiiAsset',
         // 'yii\bootstrap\BootstrapAsset',
     ];

}