<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailerController extends Controller
{
    //

    public function send_mail(Request $request){

      return redirect()->back()->with('success','Message Sent Successfully');
    }
}
