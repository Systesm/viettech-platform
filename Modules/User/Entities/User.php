<?php

namespace Modules\User\Entities;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Silber\Bouncer\Database\HasRolesAndAbilities;

class User extends Authenticatable
{
    use Notifiable;
    use HasRolesAndAbilities;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'avatar',
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    /**
     * Lay chuc vu cua User
     *
     * @param array $levels
     * @return boolean
     */
    public function isLevel(array $levels)
    {
        foreach ($levels as $key => $level) {
            if (in_array($level, $this->roles->pluck('level')->toArray())) {
                return true;
            }
        }
        return false;
    }
}
