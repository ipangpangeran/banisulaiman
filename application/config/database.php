<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$active_group = 'development';
$query_builder = TRUE;


$db['development'] = array(
    'dsn'      => '',
    'hostname' => '103.196.155.102',
    'port'     => 3306,
    'username' => 'bansul',
    'password' => 'ingatmatiAA26!',
    'database' => 'bansul',
    'dbdriver' => 'mysqli',
    'dbprefix' => '',
    'pconnect' => FALSE,
    'db_debug' => (ENVIRONMENT !== 'production'),
    'cache_on' => FALSE,
    'cachedir' => '',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_general_ci',
    'swap_pre' => '',
    'encrypt' => FALSE,
    'compress' => FALSE,
    'stricton' => FALSE,
    'failover' => array(),
    'save_queries' => TRUE
);

