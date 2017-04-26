<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Manager extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
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
     * Get avatar
     * @return string
     */
    public function getAvatarAttribute()
    {
        //https://github.com/yzalis/Identicon
        return resolve('Bravist\Identicon')->getImageDataUri($this->id . $this->email);
    }
}
