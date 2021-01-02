<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'matric_number',
        'department',
        'faculty',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
