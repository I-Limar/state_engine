<?php
// Нельзя объявлять переменнные в подключаемом
//файле поэтому делаем автоматическую вызываемую функцию
//переменные будут только в ее окружении
return(function (){

$intGTO = '[1-9]+\d*';
return [
    [
        'test' => '/^$/',
        'controller' => 'all'
    ],
    [
        'test' => '/^add\/?$/',
        'controller' => 'add'
    ],
    [
        'test' => '/^logs\/?$/',
        'controller' => 'logs'
    ],
    [
        'test' => "/^article\/($intGTO)\/?$/",
        'controller' => 'article',
        'params' => ['id' => 1]
    ],
    [
        'test' => "/^login\/?$/",
        'controller' => 'auth/login'
    ],
];
})();