<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/1
 * Time: 10:08
 */

namespace home\controllers;


use yii\web\Controller;
 use Yii;

class SiteController extends Controller
{

     public function actionIndex(){
          echo 'haha';
          $data = [
               'name' => 'zzs'
          ];
          return $this->render('index',$data);
     }
     public function actionDbtest()
     {
          $list = Yii::$app->db->createCommand("select * from  by_beauty")->queryAll();
          echo '<pre>';print_r($list);

          echo 'dbtest';exit;
     }
}