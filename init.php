<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
include_once('model/visits.php');
include_once('model/articles.php');
include_once('core/arr.php');
include_once('model/cats.php');
if (isset($_GET['c'])!=='logs'){
addVisitLog();
}
include_once('core/system.php');	

const BASE_URL = '/dz4/';

const DB_HOST = 'localhost';
const DB_NAME = 'blog';
const DB_USER= 'root';
const DB_PASS = '';