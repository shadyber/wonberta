<?php

namespace App\Http\Controllers;

use App\Models\Station;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class StationController extends Controller
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
        $stations=Station::all();
        return view('admin.station.index')->with('stations',$stations);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $stations=Station::all();
        return view('admin.station.create')->with('stations',$stations);
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
            'name' => ['required', 'max:255'],
            'photo' => 'mimes:jpeg,png|max:1024',
            'detail' => ['required'],
        ]);

        $url='/img/product_placeholder.png';
        if($request->has('photo'))
        {

            try{

                $extension = $request->photo->extension();
                $request->photo->storeAs('/public', $validatedData['name'].".".$extension);
                $url = Storage::url($validatedData['name'].".".$extension);

            }catch(Exception $ex){

            }

        }
        $station = new Station;
        $station->name = $request->name;
        $station->detail = $request->detail;
        $station->banner =$url;
        $station->address =$request->address;
        $station->size =$request->size;

        $station->save();
        return redirect()->back()->with(['success'=>'Product Created','stations'=>$station]);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Station  $station
     * @return \Illuminate\Http\Response
     */
    public function show(Station $station)
    {
        //

        return view('admin.station.show')->with('station',$station);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Station  $station
     * @return \Illuminate\Http\Response
     */
    public function edit(Station $station)
    {
        //

        return view('admin.station.edit')->with('station',$station);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Station  $station
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Station $station)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Station  $station
     * @return \Illuminate\Http\Response
     */
    public function destroy(Station $station)
    {
        //
    }
}
