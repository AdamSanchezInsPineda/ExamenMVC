<?php


require_once __DIR__.'/../Autoload.php';


$router = new Router();

$router->get('/', 'UsersController@login');

$router->get('/register', 'UsersController@register');

$router->get('/admin', 'UsersController@adminLogin');

$router->post('/signup', 'UsersController@signup');

$router->post('/signin', 'UsersController@signin');

$router->post('/admin/signin', 'UsersController@adminSignin');

$router->get('/logout', 'UsersController@logout');

$router->get('/multas', 'MultasController@show');

$router->get('/admin/multas', 'MultasController@index');

$router->get('/pagar/{id}', 'MultasController@update');

$router->dispatch();
