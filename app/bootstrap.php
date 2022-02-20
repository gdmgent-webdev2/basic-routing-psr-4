<?php
// define constants
define('BASEPATH', __DIR__);

// start autoloading with composer
$autoloader = require __DIR__ . '/../vendor/autoload.php';

// new router instance
use App\Providers\Router;
$router = new Router();
require('Routes/web.php');

// beam me up, scotty
$router->dispatch();
