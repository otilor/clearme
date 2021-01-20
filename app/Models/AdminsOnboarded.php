<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminsOnboarded extends Model
{
    use HasFactory;

    protected $table = 'admins_onboarded';
    protected $fillable = [
        'user_id',
        'is_onboarded'
    ];
}
