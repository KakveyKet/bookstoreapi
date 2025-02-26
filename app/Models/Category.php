<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // Fillable fields for mass assignment
    protected $fillable = ['name'];

    // Relationships
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
