<?php

namespace App\Models;

use Calebporzio\Onboard\GetsOnboarded;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles, GetsOnboarded;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function createAdmin(array $validated) : array
    {
        $password = Str::random(8);
        $user = $this->create(array_merge($validated, ['password' => bcrypt($password)]));
        $user->assignRole('actor');
        return ['user' => $user, 'unhashedPassword' => $password];
    }

    public function isComplete()
    {

    }
}
