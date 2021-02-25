<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClearanceRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'is_cleared',
        'current_phase',
        'student_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
