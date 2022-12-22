<?php

namespace Zilvinas\EmployeeProject\Controllers;

use Zilvinas\EmployeeProject\Models\User;

class UserController
{
    private User $user;
    public function __construct()
    {
        $this->user = new User();
    }
    public function index(): void
    {
        $users = $this->user->get();
    require './views/home.php';
    }

    public function create(): void
    {
        $employee = new User();
        $employees = $employee->get();

        require './views/create-user.php';
    }
    public function store(array $newEmployee): void
    {
        $this->user->create([
          'first_name' => $newEmployee['firstname'],
            'last_name' => $newEmployee['lastname'],

        ]);

        header('Location: /user');
    }
}