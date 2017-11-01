<?php

return [
    'name' => 'Admin',

    'menus' => (object) [
        (object) [
            'icon' => 'md md-people',
            'name' => 'User Management',
            'level' => 0,
            'submenu' => (object) [
                (object) [
                    'name' => 'Users',
                    'uri'  => 'users',
                    'level' => 0,
                ],
                (object) [
                    'name' => 'Roles',
                    'uri'  => 'roles',
                    'level' => 0,
                ],
                (object) [
                    'name' => 'Abilities',
                    'uri'  => 'abilities',
                    'level' => 0,
                ]
            ]
        ]
    ],

    'fallbackLogin' => '/admin/login'

];
