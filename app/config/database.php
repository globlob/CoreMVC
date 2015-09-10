<?php
use Illuminate\Database\Capsule\Manager as Capsule;
$capsule = new Capsule();

######  Databese Settings ######
$capsule->addConnection([
    //Database Driver
    'driver' => 'mysql',
    //Your host name
    'host' => 'localhost',
    //Database user name
    'username' => 'root',
    //Database password
    'password' => '',
    //Database name
    'database' => 'rr',
    //Charset
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci',
    //Table prefix(optional)
    'prefix' => '',
]);
$capsule->bootEloquent();