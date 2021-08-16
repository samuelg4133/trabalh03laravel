<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "foundation_date",
        "website",
        "slogan",
        "active",
        "country_id"
    ];

    public function cars(){
        return $this->belongsToMany(Car::class);
    }

    public function country(){
        return $this->belongsTo(Country::class);
    }
}
