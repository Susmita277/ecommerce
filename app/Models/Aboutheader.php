<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aboutheader extends Model
{
    use HasFactory;
     
    protected $table = 'aboutheaders';

    protected $fillable = [
        'abouts',
    ];
}
