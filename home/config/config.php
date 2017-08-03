<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/1
 * Time: 10:17
 */
$config = [
     'id' => 'beauty home',
     'basePath' => dirname(__DIR__),
     'aliases' => [
          '@home' => dirname(__DIR__),
     ],
     'controllerNamespace' => 'home\controllers',
     //'layout' => null,
     'components' => [
        /*  'assetManager' => [
               'basePath' => '@home/web/static',
               'baseUrl' => '@home/web/static'
          ],*/
          'request' => [
               'csrfParam' => '_csrf-home',
               // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
               'cookieValidationKey' => 'YKDFSDLNC872LJS23MV0KSDS',
          ],
     ],
     /*'bootstrap' => ['gii'],
     'modules' => [
          'gii' => [
               'class' => 'yii\gii\Module',
          ],
     ]*/
];

if (!YII_ENV_TEST) {
     // configuration adjustments for 'dev' environment
     $config['bootstrap'][] = 'debug';
     $config['modules']['debug'] = [
          'class' => 'yii\debug\Module',
     ];

     $config['bootstrap'][] = 'gii';
     $config['modules']['gii'] = [
          'class' => 'yii\gii\Module',
     ];
}

return $config;