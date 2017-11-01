<?php

namespace Modules\User\Entities\Services;

use Illuminate\Http\Request;
use Validator;

class Validation
{
    /**
     * @param Request $request
     */
    public function registerUser($request)
    {
        Validator::make(
            $request->all(),
            [
                'name'     => 'required|string|max:255',
                'email'    => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:6|confirmed',
            ]
        )->validate();
    }
    
    public function updateUser($request)
    {
        Validator::make(
            $request->all(),
            [
                'name'     => 'required|string|max:255',
                'avatar'   => 'image',
            ]
        )->validate();

        $data = [
            'name'         => $request->input('name'),
        ];

        if ($request->password != '') {
            Validator::make(
                $request->all(),
                [
                    'password' => 'string|min:6|confirmed',
                ]
            )->validate();
            $data['password'] = bcrypt($request->input('password'));
        }

        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $nameFile = time() .'.'. $avatar->getClientOriginalExtension();
            $avatar->move(public_path('/uploads/avatar/'), $nameFile);
            $data['avatar'] = $nameFile;
        }

        return $data;
    }
}
