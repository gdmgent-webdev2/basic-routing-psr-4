<?php

use App\Http\Controllers\HomeController;
use App\Providers\View;


$router->add('/',function(){
   $controller = new HomeController();
   echo $controller->show();
});

$router->add('/hello', function() {
    echo View::display('hello.php');
});
