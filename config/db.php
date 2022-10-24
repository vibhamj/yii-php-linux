<?php

/*return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=yii2basic',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];*/

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'oci:dbname=192.168.0.14:1521/orcl.ht.home;charset=UTF8',
    'username' => 'C##1',
    'password' => 'admin',
];
