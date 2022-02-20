<?php
// define constants
define('BASEPATH', __DIR__);

// start autoloading with composer
$autoloader = require __DIR__ . '/../vendor/autoload.php';


use Illuminate\Database\Capsule\Manager as Capsule;
$capsule = new Capsule;
$capsule->addConnection([
   "driver" => "mysql",
   "host" =>"127.0.0.1",
   "database" => "demo-webdev2",
   "username" => "root",
   "password" => "secret"
]);
$capsule->setAsGlobal();
$capsule->bootEloquent();
// dump($capsule);


$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

// new router instance
use App\Providers\Router;
$router = new Router();
require('Routes/web.php');

// beam me up, scotty
$router->dispatch();
