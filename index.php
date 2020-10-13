<?php
include_once('init.php');
$pageCannonical = HOST . BASE_URL;
$uri = $_SERVER['REQUEST_URI'];
$badUrl = BASE_URL . 'index.php';
if(strpos($uri, $badUrl)=== 0){
    $cname = 'errors/e404';
} else{

$routes = include('routes.php');
$url = $_GET['qwertyqwerty'] ?? '';
//var_dump($_GET);
$routerRes = parseUrl($url, $routes);
$cname = $routerRes['controller'];
define('URL_PARAMS', $routerRes['params']);

$urlLen = strlen($url);

if($urlLen > 0 && $url[$urlLen-1] == '/'){
    $url = substr($url, 0, $urlLen-1);
} 
$pageCannonical .= $url;
}
//var_dump($routerRes);
$path = "controllers/$cname.php";
$pageTitle = $pageContent = '';


if (!file_exists($path)){
    $cname = 'errors/e404';
    $path = "controllers/$cname.php";
}
include_once($path);
$html = template('v_main', [
	'title' => $pageTitle,
    'content' => $pageContent,
    'cannonical' => $pageCannonical
]);

echo $html;