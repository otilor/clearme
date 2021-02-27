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
        'passed_phases',
        'student_id'
    ];

    protected $casts = [
        'passed_phases' => 'array',
        'current_phases' => 'array',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getCurrentPhaseAttribute($value)
    {
        return Section::find($value);
    }

    public function getPassedPhasesAttribute($value)
    {
        return (array) $value;
    }

    public function getOtherPhasesAttribute($value)
    {
        return (array) $value;
    }
}
