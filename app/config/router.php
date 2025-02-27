<?php


return [
    'GET' => [
        '/' => ['Front\HomeController', 'index'],
        '/article' => ['Front\HomeController', 'verif'],
        '/admin' => ['Back\DashboardController', 'index'],
        '/signup' => ['Front\HomeController', 'signup'],
        '/login' => ['Front\HomeController', 'login'],
        '/home' => ['Front\HomeController', 'home'],
        '/admin/users' => ['Back\UserController', 'index'],
        '/admin/users/edit/:id' => ['Back\UserController', 'edit'],
        '/admin/users/delete/:id' => ['Back\UserController', 'delete'],
    ],
    'POST' => [
        '/admin/users/create' => ['Back\UserController', 'create'],
        '/admin/users/edit/:id' => ['Back\UserController', 'edit'],
        '/create' => ['Back\UserController', 'create'],
    ]
];
