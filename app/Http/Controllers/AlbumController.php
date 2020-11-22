<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AlbumController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $albums=Album::all();
        $orders_alert=Order::all()->where('status','LIKE',0);

        return view('admin.album.index')->with(['albums'=>$albums,'orders_alert'=>$orders_alert]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $albums=Album::all();
        $orders_alert=Order::all()->where('status','LIKE',0);

        return view('admin.album.create')->with(['albums'=>$albums,'orders_alert'=>$orders_alert]);
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
        //
        $validatedData = $request->validate([
            'name' => 'required',
            'photo' => 'mimes:jpeg,png|max:1024'

        ]);
        $url='/img/slide/slide1.jpg';
        if($request->has('photo'))
        {

            try{

                $extension = $request->photo->extension();
                $request->photo->storeAs('/public', $validatedData['name'].time().".".$extension);
                $url = Storage::url($validatedData['name'].time().".".$extension);

            }catch(Exception $ex){
                print('Image not Uploaded'.$ex);
            }

        }else{
            print('Photo not found');
        }

        $album = new Album;
        $album->name = $request->name;
        $album->detail = $request->detail;
        $album->photo =$url;

        $album->save();
        $orders_alert=Order::all()->where('status','LIKE',0);

        return redirect()->back()->with(['success'=>'Album Created','album'=>$album,'orders_alert'=>$orders_alert]);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function show(Album $album)
    {
        //
        $orders_alert=Order::all()->where('status','LIKE',0);

        return view('admin.album.show')->with(['album'=>$album,'orders_alert'=>$orders_alert]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function edit(Album $album)
    {
        $orders_alert=Order::all()->where('status','LIKE',0);

        //
        return view('admin.album.edit')->with(['album'=>$album,'orders_alert'=>$orders_alert]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Album $album)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function destroy(Album $album)
    {
        //
        $album->delete();
        return redirect()->back()->with('success','Removed');

    }
}
