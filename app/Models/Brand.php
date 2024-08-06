<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function category()
    {
        return $this->hasMany(Category::class);
    }

    public function products()
    {
        return $this->belongsTo(Product::class);
    }
}
