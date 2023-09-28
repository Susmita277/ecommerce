<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $fillable = [
        'cat_name',
        // 'total_products',
    ];

    public function product() {
        return $this->hasMany(Product::class, 'category' , 'id');
     }
}

