<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\AdminInvite
 *
 * @property int $id
 * @property int $section_id
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|AdminInvite newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AdminInvite newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AdminInvite query()
 * @method static \Illuminate\Database\Eloquent\Builder|AdminInvite whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdminInvite whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdminInvite whereSectionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdminInvite whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdminInvite whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class AdminInvite extends Model
{
    use HasFactory;
    public const PENDING = "Pending";
    public const DECLINED = "Declined";
    public const APPROVED = "Approved";


    protected $fillable = [
        'section_id',
        'status',
    ];
}
