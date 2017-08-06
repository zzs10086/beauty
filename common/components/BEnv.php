<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/2
 * Time: 11:11
 * 自定义常量
 */
class BEnv{

     //数据库设置
     const DB_HOST_MASTER = 'localhost';
     const DB_USER = 'root';
     const DB_PASS = 'root';
     const DB_PORT = '3306';
     const DB_DBNAME = 'beauty';
     const DB_TABLEPREFIX = 'by_';
     const DB_CHARSET = 'utf8';
     const DB_HOST_SLAVE = '127.0.0.1';

     //redis的参数
     const REDIS_HOST = '127.0.0.1';
     const REDIS_PORT = '6379';
     const REDIS_PASS = null;
     const REDIS_DATA_BASE = 1;
     
     //静态域名
     const HOST_WWW = 'http://www.beauty.com';
     const HOST_ADMIN = 'http://admin.beauty.com';
}
