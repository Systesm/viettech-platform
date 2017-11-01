<?php

namespace Modules\User\Entities\Services;

use Auth;

class Authentication
{
    protected function guard()
    {
        return Auth::guard();
    }

    public function login($user)
    {
        $this->guard()->login($user);
    }
}
