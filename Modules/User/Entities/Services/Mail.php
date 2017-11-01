<?php

namespace Modules\User\Entities\Services;

use Illuminate\Mail\Message;
use Mail as MailHelper;

class Mail
{
    public function registeredUser($user)
    {
        MailHelper::send(
            'user.registered',
            function ($message) use ($user) {
                /** @var Message $message */
                $message->from('laravel5.5@laravel.com', 'Your Application');
                $message->to($user->email, $user->name)->subject('Welcome to my app');
            }
        );
    }
}
