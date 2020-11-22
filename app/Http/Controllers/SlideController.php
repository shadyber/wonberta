<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Slide;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SlideController extends Controller
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
        $slides=Slide::all();
        $orders_alert=Order::all()->where('status','LIKE',0);

        return view('admin.carousel.index')->with(['slides'=>$slides,'orders_alert'=>$orders_alert]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $orders_alert=Order::all()->where('status','LIKE',0);

        return view('admin.carousel.create')->with(['orders_alert'=>$orders_alert]);
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
            'title' => 'required',
            'photo' => 'mimes:jpeg,png|max:1024'

        ]);
        $url='/img/slide/slide1.jpg';
        if($request->has('photo'))
        {

            try{

                $extension = $request->photo->extension();
                $request->photo->storeAs('/public', $validatedData['title'].time().".".$extension);
                $url = Storage::url($validatedData['title'].time().".".$extension);

            }catch(Exception $ex){
                print('Image not Uploaded'.$ex);
            }

        }else{
            print('Photo not found');
        }

        $slide = new Slide;
        $slide->title = $request->title;
        $slide->subtitle = $request->subtitle;
        $slide->photo =$url;

        $slide->save();
        return redirect()->back()->with(['success'=>'Carousel Slide Created','jobs'=>$slide]);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function show(Slide $slide)
    {
        //
        $orders_alert=Order::all()->where('status','LIKE',0);

        return view('admin.carousel.show')->with(['slide'=>$slide,'orders_alert'=>$orders_alert]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function edit(Slide $slide)
    {
        //
        $orders_alert=Order::all()->where('status','LIKE',0);

        return view('admin.carousel.edit')->with(['slide'=>$slide,'orders_alert'=>$orders_alert]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slide $slide)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slide $slide)
    {
        //

//        $slide = Slide::findOrFail($id);

        $slide->delete();


        return redirect()->back()->with('success','Slide Removed');
    }
}
