<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $users = [
            [
                'username' => 'admin',
                'full_name' => 'Maria Dela Cruz',
                'role' => 'Administrator'
            ],
            [
                'username' => 'cashier01',
                'full_name' => 'John Ramos',
                'role' => 'Cashier'
            ],
            [
                'username' => 'cashier02',
                'full_name' => 'Liza Flores',
                'role' => 'Cashier'
            ],
            [
                'username' => 'inventory01',
                'full_name' => 'Paolo Reyes',
                'role' => 'Inventory Staff'
            ],
            [
                'username' => 'manager01',
                'full_name' => 'Karen Santos',
                'role' => 'Store Manager'
            ]
        ];

        return view('users/index', [
            'title' => 'User Accounts',
            'users' => $users
        ]);
    }
}