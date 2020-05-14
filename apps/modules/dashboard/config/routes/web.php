<?php

$namespace =  'Phalcon\Init\Dashboard\Controllers\Web';

// ADMIN

$router->addGet('/loginadmin', [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'admin',
    'action' => 'loginadmin'
]);

$router->addGet('/katalog', [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'index',
    'action' => 'katalog'
]);

$router->addGet('/register', [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'user',
    'action' => 'register'
]);

$router->addGet('/login', [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'user',
    'action' => 'login'
]);

$router->addGet('/liststudio', [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'admin',
    'action' => 'liststudio'
]);

$router->addGet('/listreservasi', [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'admin',
    'action' => 'listreservasi'
]);

return $router;