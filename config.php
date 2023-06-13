<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

const MYSQL_DBNAME = 'test_task';
const MYSQL_PORT = '3306';
const MYSQL_HOST = '127.0.0.1';
const MYSQL_CHARSET = 'utf8mb4';
const MYSQL_USERNAME = 'root';
const MYSQL_PASSWORD = 'admin';

session_start();

require_once 'autoload.php';