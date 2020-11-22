<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'f_name',
        'l_name',
        'email',
        'tel',
        'application_letter',
        'address',
        'product_id',
        'order_varity',
        'order_grade',
        'status'

    ];

    public function products()
    {
        return $this->belongsTo(Product::class);
    }
}
