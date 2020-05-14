<?php

$namespace =  'Phalcon\Init\Dashboard\Controllers\Web';

$router->addGet('/katalog', [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'index',
    'action' => 'katalog'
]);

$router->addGet('/loginadmin', [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'admin',
    'action' => 'loginadmin'
]);

$router->addPost('/loginadmin', [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'admin',
    'action' => 'storelogin'
]);

$router->addGet('/halamanadmin', [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'admin',
    'action' => 'halamanadmin'
]);

$router->addGet('/logoutadmin', [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'admin',
    'action' => 'logout'
]);


$router->addGet('/register', [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'user',
    'action' => 'register'
]);

$router->addPost('/register', [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'user',
    'action' => 'storeregister'
]);

$router->addGet('/login', [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'user',
    'action' => 'login'
]);

$router->addPost('/login', [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'user',
    'action' => 'storelogin'
]);

$router->addGet('/halamanuser', [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'user',
    'action' => 'halamanuser'
]);

$router->addGet('/logoutuser', [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'user',
    'action' => 'logout'
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