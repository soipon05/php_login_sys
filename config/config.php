<?php

ini_set('display_errors', 1);

define('DSN', 'mysql:host=mysql;dbname=testdb');
define('DB_USERNAME', 'testuser');
define('DB_PASSWORD', 'password');

require_once(__DIR__ . '/../lib/functions.php');
require_once(__DIR__ . '/autoload.php');

session_start();
