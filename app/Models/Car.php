<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "description",
        "sale_value",
        "year",
        "mileage",
        "motor",
        "brand_id"
    ];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}
