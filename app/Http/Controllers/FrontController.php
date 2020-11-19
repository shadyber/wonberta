<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Album;
use App\Models\About;
use App\Models\Photo;
use App\Models\Product;
use App\Models\Slide;
use App\Models\Station;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    //

    public function index()
    {
        $products=Product::all();
        $about=About::get()->first();
        $stations=Station::all();
        $address=Address::get()->first();
        $albums=Album::all();
        $photos=Photo::all();
        $slides=Slide::all();
        return view('welcome')->with(['about'=>$about,'products'=>$products,'address'=>$address,'stations'=>$stations,'albums'=>$albums,'photos'=>$photos,'slides'=>$slides]);
    }
}
