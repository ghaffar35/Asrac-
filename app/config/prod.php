<?php

// Doctrine (db)

$app['db.options'] = array(
    'driver'   => 'pdo_mysql',
    'charset'  => 'utf8',
    'host'     => '',
    'port'     => '3306',
    'dbname'   => '',
    'user'     => '',
    'password' => '',
);

// define log level
$app['monolog.level'] = 'WARNING';