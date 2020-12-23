<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $blogs=Blog::all();

        return view('admin.blog.index')->with(['blogs'=>$blogs]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.blog.create');
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



        $validatedData = $request->validate([
            'title' => ['required', 'max:255'],
            'photo' => 'mimes:jpeg,png|max:1024',
            'detail' => ['required'],
        ]);

        $url='/img/product_placeholder.png';
        if($request->has('photo'))
        {

            try{

                $extension = $request->photo->extension();
                $request->photo->storeAs('/public', $validatedData['title'].".".$extension);
                $url = Storage::url($validatedData['title'].".".$extension);

            }catch(Exception $ex){

            }

        }
        $blog = new Blog;
        $blog->title = $request->title;
        $blog->category = $request->category;
        $blog->photo =$url;
        $blog->detail =$request->detail;
        $blog->tags =$request->tags;
        $blog->save();
        return redirect()->back()->with(['success'=>'Blog Created','blog'=>$blog]);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //


        return  view('admin.blog.show')->with(['blog'=>$blog]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        //


        return  view('admin.blog.edit')->with(['blog'=>$blog]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
