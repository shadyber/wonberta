<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Address;
use App\Models\Blog;
use App\Models\Product;
use App\Models\Station;
use Illuminate\Http\Request;

class FrontBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::all();
        $about=About::get()->first();
        $address=Address::get()->last();
        $blogs=Blog::all();
        $blog=Blog::get()->last();


        return view('front.blog.index')->with(['about'=>$about,'products'=>$products,'address'=>$address,'blogs'=>$blogs,'blog'=>$blog]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BLog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //

        //
        $blogs=Blog::all();

        $products=Product::all();
        $address=Address::all()->first();
        $about=About::get()->first();
        return view('front.blog.show')->with(['about'=>$about,'blog'=>$blog,'blogs'=>$blogs,'products'=>$products,'address'=>$address]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
