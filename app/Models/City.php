<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $fillable = [
        'region_id',
        'name',
        'zipcode',
    ];

    public function region()
    {
        return $this->belongsTo(Region::class);
    }

    public function ads()
    {
        return $this->hasMany(Ad::class);
    }

    public function searchStats()
    {
        return $this->hasMany(SearchStat::class);
    }
}