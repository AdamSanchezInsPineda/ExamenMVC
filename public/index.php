<?php


require_once __DIR__.'/../Autoload.php';


$router = new Router();

$router->get('/', 'UsuarioController@index');

$router->dispatch();
