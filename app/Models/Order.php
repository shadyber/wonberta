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


    public static function allOrders(){
        return Order::all();
    }


    
    public static function pendingOrders(){
        return Order::all()->where('status','LIKE','0');
    }

    
    public static function processingOrders(){
        return Order::all()->where('status','LIKE','1');
    }

    
    public static function closedOrders(){
        return Order::all()->where('status','LIKE','2');
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
