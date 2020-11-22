<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Album;
use App\Models\About;
use App\Models\Photo;
use App\Models\Product;
use App\Models\Service;
use App\Models\Slide;
use App\Models\Station;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    //

    public function index()
    {
        $products=Product::all();
        $about=About::get()->last();
        $stations=Station::all();
        $address=Address::get()->first();
        $albums=Album::orderBy('id', 'desc')->take(5)->get();
        $photos=Photo::orderBy('id', 'desc')->take(5)->get();
        $slides=Slide::orderBy('id', 'desc')->take(3)->get();
        $services=Service::orderBy('id', 'asc')->take(3)->get();
        return view('welcome')->with(['services'=>$services,'about'=>$about,'products'=>$products,'address'=>$address,'stations'=>$stations,'albums'=>$albums,'photos'=>$photos,'slides'=>$slides]);
    }
}
