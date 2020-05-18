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

$router->addGet('/tabelstudio', [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'admin',
    'action' => 'tabelstudio'
]);

$router->addGet('/tambahstudio', [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'admin',
    'action' => 'tambahstudio'
]);

$router->addPost('/tambahstudio', [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'admin',
    'action' => 'storetambahstudio'
]);

$router->addGet('/editstudio/{id}',[
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'admin',
    'action' => 'editstudio'
]);

$router->addGet('/delete/{id}',[
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'admin',
    'action' => 'delete'
]);

$router->addPost('/storeeditstudio',[
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'admin',
    'action' => 'storeeditstudio'
]);

$router->addGet('/listreservasi', [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'admin',
    'action' => 'listreservasi'
]);


$router->addGet('/akunsaya', [
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'user',
    'action' => 'akunsaya'
]);

$router->addGet('/editprofil/{id}',[
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'user',
    'action' => 'editprofil'
]);

$router->addPost('/editprofil',[
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'user',
    'action' => 'storeeditprofil'
]);

$router->addGet('/tambahreservasi',[
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'user',
    'action' => 'tambahreservasi'
]);

$router->addPost('/storetambahreservasi',[
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'user',
    'action' => 'storetambahreservasi'
]);

$router->addGet('/listreservasisaya',[
    'namespace' => $namespace,
    'module' => 'dashboard',
    'controller' => 'user',
    'action' => 'listreservasisaya'
]);

return $router;