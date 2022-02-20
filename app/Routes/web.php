<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Providers\View;


$router->add('/',function(){
   $controller = new HomeController();
   echo $controller->show();
});

$router->add('/hello', function() {
    echo View::display('hello.php');
});

$router->add('/users', function() {
    $controller = new UserController();
    echo $controller->index();
});