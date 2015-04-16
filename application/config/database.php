<?php defined('SYSPATH') OR die('No direct access allowed.');

return array
(
    'default' => array
    (
        'type'       => 'MySQL',
        'connection' => array(
            'hostname'   => 'localhost',
            'database'   => 'kohana',
            'username'   => 'root',
            'password'   => FALSE,
            'persistent' => FALSE,
        ),
        'table_prefix' => '',
        'charset'      => 'utf8',
        'caching'      => FALSE,
    ),
    'alternate' => array(
        'type'       => 'PDO',
        'connection' => array(
            'dsn'        => 'mysql:host=localhost;dbname=kohana',
            'username'   => 'root',
            'password'   => FALSE,
            'persistent' => FALSE,
        ),
        'table_prefix' => '',
        'charset'      => 'utf8',
        'caching'      => FALSE,
    ),
);
