<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;


    public static $messages;

    
           public static function allMessages()
            {
                $messages=Message::all();
                return $messages;
            }

            public static function unreadMessages(){
                $messages=Message::all()->where('status','LIKE','0');
                return $messages;
            }
}
