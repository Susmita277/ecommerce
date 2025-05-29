<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Address extends Model
{
        use HasFactory;
        protected $fillable =[
            'order_id',
            'street_address',
            'city',
            'phone',
        ];
        public function order(){
            return $this->belongsTo(Order::class);
        }
}
