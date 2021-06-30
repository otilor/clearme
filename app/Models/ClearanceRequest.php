<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ClearanceRequest
 *
 * @property int $id
 * @property int $student_id
 * @property int $current_phase
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property array|null $passed_phases
 * @property array|null $other_phases
 * @property array $payload
 * @property-read \App\Models\User $user
 * @method static \Database\Factories\ClearanceRequestFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|ClearanceRequest newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ClearanceRequest newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ClearanceRequest query()
 * @method static \Illuminate\Database\Eloquent\Builder|ClearanceRequest whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClearanceRequest whereCurrentPhase($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClearanceRequest whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClearanceRequest whereOtherPhases($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClearanceRequest wherePassedPhases($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClearanceRequest wherePayload($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClearanceRequest whereStudentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClearanceRequest whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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
        'payload' => 'array',
        'passed_phases' => 'array',
        'other_phases' => 'array',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getCurrentPhaseAttribute($value)
    {
        return Section::find($value);
    }
}
