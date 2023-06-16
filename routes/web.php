<?php


$router->get('/', function () use ($router) {
    return $router->app->version();
});

//Site1

$router->get('/users1','Person1Controller@index');
$router->post('/users1', 'Person1Controller@add');
$router->get('/users1/{id}', 'Person1Controller@show');
$router->put('/users1/{id}','Person1Controller@up');
$router->delete('/users1/{id}', 'Person1Controller@del');



//Site2
$router->get('/users2','Person2Controller@index');
$router->post('/users2', 'Person2Controller@add');
$router->get('/users2/{id}', 'Person2Controller@show');
$router->put('/users2/{id}','Person2Controller@up');
$router->delete('/users2/{id}', 'Person2Controller@del');