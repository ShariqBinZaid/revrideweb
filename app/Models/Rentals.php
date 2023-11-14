<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rentals extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function Images()
    {
        return $this->hasMany(RentalImages::class, 'rental_id', 'id');
    }

    public function Category()
    {
        return $this->belongsTo(Categories::class, 'category_id');
    }
}
