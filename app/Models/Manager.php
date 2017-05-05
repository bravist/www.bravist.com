<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Laracasts\Presenter\PresentableTrait;
use App\Presenter\ManagerPresenter;

class Manager extends Authenticatable
{
    use PresentableTrait;
    protected $presenter = 'ManagerPresenter';
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

    /**
     * Many-to-Many relations with the permission model.
     * Named "perms" for backwards compatibility. Also because "perms" is short and sweet.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

}
