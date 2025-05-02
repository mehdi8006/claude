<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SearchStat extends Model
{
    use HasFactory;

    protected $fillable = [
        'profile_id',
        'category_id',
        'subcategory_id',
        'city_id',
        'region_id',
        'keywords',
    ];

    public function profile()
    {
        return $this->belongsTo(profile::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function region()
    {
        return $this->belongsTo(Region::class);
    }
}