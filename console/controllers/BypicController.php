<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/6
 * Time: 9:38
 */
namespace console\controllers;

use yii\console\Controller;
use Yii;

class BypicController extends Controller{

     private $list = "http://tu.lulukuang.com";
     private $article = "http://tu.lulukuang.com/article.php?fid=030feca165895ab0d85040653889a826&id=01";
     public function actionPic(){
          
     }

     private function getArticle(){
          
     }
     public function actionTest(){
          $list = Yii::$app->db->createCommand("select * from  by_beauty")->queryAll();
          echo '<pre>';print_r($list);
     }
}