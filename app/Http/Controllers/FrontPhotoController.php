<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Photo;
use App\Models\Station;
use App\Models\Address;
use App\Models\Product;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FrontPhotoController extends Controller{

    public function index()
    {

        $stations=Station::all();
        $address=Address::get()->first();
        $products=Product::all();
        $albums=Album::all();
        $photos=Photo::all();
        $about=About::get()->last();

        return view('gallery')->with(['address'=>$address,'stations'=>$stations,'albums'=>$albums,'photos'=>$photos,'products'=>$products,'about'=>$about]);
 }
}
