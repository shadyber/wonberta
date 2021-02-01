<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Album;
use App\Models\About;
use App\Models\Blog;
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
        $i=0;
        $j=0;
        $products=Product::all();
        $about=About::get()->last();
        $stations=Station::all();
        $address=Address::get()->first();
        $albums=Album::orderBy('id', 'desc')->take(5)->get();
        $photos=Photo::orderBy('id', 'desc')->take(5)->get();
        $slides=Slide::orderBy('id', 'desc')->take(3)->get();
        $blogs=Blog::orderBy('id', 'desc')->take(3)->get();
        $services=Service::orderBy('id', 'asc')->take(3)->get();
        return view('welcome')->with(['services'=>$services,'about'=>$about,'products'=>$products,'address'=>$address,'stations'=>$stations,'albums'=>$albums,'photos'=>$photos,'slides'=>$slides,'i'=>$i,'j'=>$j,'blogs'=>$blogs]);
    }

    public function about()
        {
            $i=0;
            $j=0;
            $products=Product::all();
            $about=About::get()->last();
            $stations=Station::all();
            $address=Address::get()->first();
            $albums=Album::orderBy('id', 'desc')->take(5)->get();
            $photos=Photo::orderBy('id', 'desc')->take(5)->get();
            $slides=Slide::orderBy('id', 'desc')->take(3)->get();
            $blogs=Blog::orderBy('id', 'desc')->take(3)->get();
            $services=Service::orderBy('id', 'asc')->take(3)->get();
            return view('about')->with(['services'=>$services,'about'=>$about,'products'=>$products,'address'=>$address,'stations'=>$stations,'albums'=>$albums,'photos'=>$photos,'slides'=>$slides,'i'=>$i,'j'=>$j,'blogs'=>$blogs]);

    }
      public function contact()
        {
            $i=0;
            $j=0;
            $products=Product::all();
            $about=About::get()->last();
            $stations=Station::all();
            $address=Address::get()->first();
            $albums=Album::orderBy('id', 'desc')->take(5)->get();
            $photos=Photo::orderBy('id', 'desc')->take(5)->get();
            $slides=Slide::orderBy('id', 'desc')->take(3)->get();
            $blogs=Blog::orderBy('id', 'desc')->take(3)->get();
            $services=Service::orderBy('id', 'asc')->take(3)->get();
            return view('contact')->with(['services'=>$services,'about'=>$about,'products'=>$products,'address'=>$address,'stations'=>$stations,'albums'=>$albums,'photos'=>$photos,'slides'=>$slides,'i'=>$i,'j'=>$j,'blogs'=>$blogs]);

    }
}
