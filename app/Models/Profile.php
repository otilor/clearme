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
        'phone_number',
        'faculty',
        'is_completed',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function isComplete()
    {
        return $this->is_completed;
    }

    public function makeComplete() : bool
    {
        $this->is_completed = true;
        return true;
    }
}
