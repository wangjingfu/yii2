<?php
return [
    'basePath' => dirname(__DIR__),
    'aliases' => [
        '@adminViewPath' => '@app/modules/admin/views',
        '@adminLayoutsPath' => '@adminViewPath/layouts',
        '@adminLayout' => '@adminLayoutsPath/admin'
    ],
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=yii2basic',
            'username' => 'root',
            'password' => '123456',
            'charset' => 'utf8',
            'tablePrefix' => 'k_',
        ],
    ],
];