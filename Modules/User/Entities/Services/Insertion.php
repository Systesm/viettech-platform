<?php

namespace Modules\User\Entities\Services;

use Modules\User\Entities\User;

class Insertion
{
    /**
     * Create User
     *
     * @param [type] $data
     * @return void
     */
    public function createUser($data)
    {
        return User::create(
            [
                'name'         => $data->input('name'),
                'email'         => $data->input('email'),
                'password' => bcrypt($data->input('password')),
            ]
        );
    }

    /**
     * Change info User
     *
     * @param [type] $data
     * @return void
     */
    public function updateUser($email, $data)
    {
        return User::where('email', $email)
                     ->update($data);
    }
}
