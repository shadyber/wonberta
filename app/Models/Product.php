<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'detail',
        'pohto'

    ];
    public function orders()
    {
        return $this->hasMany(Order::class);
    }


    public static function allProducts(){
        return Product::all();
    }

}
