<?php

use Zilvinas\EmployeeProject\Controllers\UserController;
use Zilvinas\EmployeeProject\Services\RouterService;

RouterService::get('/', UserController::class, 'index');
RouterService::get('/user/create', UserController::class, 'create');
RouterService::post('/user', UserController::class, 'store');
