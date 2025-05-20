<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Product extends Model
{
    use HasFactory;
    protected $fillable = ['category_id', 'name', 'slug', 'price', 'mrp', 'discount', 'description', 'images', 'is_active', 'is_stock'];

    protected $casts = [
        'images' => 'array',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function orderitem()
    {
        return $this->hasMany(Orderitem::class);
    }
}
