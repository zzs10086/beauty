<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        /*'db' => [
              'class' => 'yii\db\Connection',
              'charset' => BEnv::DB_CHARSET,
              //'tablePrefix' =>CEnv::DB_TABLEPREFIX, //model中添加了表名，这边不用设置表前缀了
              'username' => BEnv::DB_USER,
              'enableSchemaCache' => true,
              'schemaCacheDuration' => 3600 * 24,
              'schemaCache' => 'filecacheclean',
              'password' => BEnv::DB_PASS,
              'dsn' => 'mysql:host=' . BEnv::DB_HOST_MASTER . ':' . BEnv::DB_PORT . ';dbname=' . BEnv::DB_DBNAME,
              'slaveConfig' => [// 配置从服务器
                   'username' => BEnv::DB_USER,
                   'password' => BEnv::DB_PASS,
                   'attributes' => [
                        PDO::ATTR_TIMEOUT => 10,// use a smaller connection timeout
                   ],
              ],
              'slaves' => [
                   ['dsn' => 'mysql:host=' . BEnv::DB_HOST_SLAVE . ':' . BEnv::DB_PORT . ';dbname=' . BEnv::DB_DBNAME],
              ],

         ],*/
    ],
];
