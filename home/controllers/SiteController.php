<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/1
 * Time: 10:08
 */

namespace home\controllers;


use yii\web\Controller;

class SiteController extends Controller
{

     public function actionIndex(){
          $data = [
               'name' => 'zzs'
          ];
          return $this->render('index',$data);
     }
}