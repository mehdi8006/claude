<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = [
        'sender_id',
        'receiver_id',
        'ad_id',
        'subject',
        'content',
        'is_read',
    ];

    public function sender()
    {
        return $this->belongsTo(profile::class, 'sender_id');
    }

    public function receiver()
    {
        return $this->belongsTo(profile::class, 'receiver_id');
    }

    public function ad()
    {
        return $this->belongsTo(Ad::class);
    }
}