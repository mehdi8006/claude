<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    protected $fillable = [
        'profile_id',
        'content',
        'is_read',
        'notification_type',
        'related_id',
    ];

    public function profile()
    {
        return $this->belongsTo(profile::class);
    }
}