<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $fillable = [
        'profile_id',
        'ad_id',
        'reason',
        'status',
    ];

    public function profile()
    {
        return $this->belongsTo(profile::class);
    }

    public function ad()
    {
        return $this->belongsTo(Ad::class);
    }
}