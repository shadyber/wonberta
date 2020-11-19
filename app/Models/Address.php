<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    protected $fillable = [
        'email',
        'tel',
        'tel2',
        'fax',
        'location',
        'country',
        'city',
        'address1',
        'address2',
        'facebook',
        'twitter',
        'instagram',
        'google',
        'pintrest',
        'youtube',
        'linkedin'

    ];
}
