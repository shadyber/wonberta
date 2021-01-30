<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Station extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'detail',
        'address',
        'banner',
        'altitude',
        'size'

    ];



    public function photos()
    {
        return $this->hasMany(Photo::class);
    }

    public static function allStations()
    {
       return Station::all();
    }
}
