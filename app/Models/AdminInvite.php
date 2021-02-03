<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
