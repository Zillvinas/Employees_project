<?php

use Zilvinas\EmployeeProject\Services\RouterService;

require 'vendor/autoload.php';

require_once './routes.php';

$router = new RouterService();
try {
    $router->doRouting(
        path: $_SERVER['REQUEST_URI'],
        method: $_SERVER['REQUEST_METHOD'],
        params: $_SERVER['REQUEST_METHOD'] === 'POST' ? $_POST : $_GET
    );
} catch (Throwable $exception) {
    echo $exception->getMessage();
}

