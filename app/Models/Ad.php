<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    use HasFactory;

    protected $fillable = [
        'profile_id',
        'subcategory_id',
        'city_id',
        'title',
        'description',
        'price',
        'expiration_date',
        'status',
        'is_validated',
        'views_count',
    ];

    protected $casts = [
        'expiration_date' => 'datetime',
        'price' => 'decimal:2',
    ];

    public function profile()
    {
        return $this->belongsTo(profile::class);
    }

    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function images()
    {
        return $this->hasMany(AdImage::class);
    }

    public function messages()
    {
        return $this->hasMany(Message::class);
    }

    public function reports()
    {
        return $this->hasMany(Report::class);
    }

    public function mainImage()
    {
        return $this->hasOne(AdImage::class)->where('is_main', true);
    }
}