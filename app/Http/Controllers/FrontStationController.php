<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Address;
use App\Models\Order;
use App\Models\Photo;
use App\Models\Product;
use App\Models\Station;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use Ramsey\Uuid\Type\Integer;

class FrontStationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products=Product::all();
        $stations=Station::all();

        $address=Address::get()->first();
        $about=About::get()->first();

        $station=Station::get()->last();


        return view('front.station.index')->with(['about'=>$about,'products'=>$products,'address'=>$address,'stations'=>$stations,'station'=>$station]);
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

  return redirect()->back();
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
return redirect()->back();
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
        $stations=Station::all();
        $products=Product::all();
        $address=Address::all()->first();
        $about=About::get()->first();
        $station_photos=$station->photos;
        return view('front.station.show')->with(['about'=>$about,'station'=>$station,'stations'=>$stations,'products'=>$products,'address'=>$address,'station_photos'=>$station_photos]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Station  $station
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
        $station = Station::findOrFail($id);

        $this->validate($request, [
            'name' => 'required',
            'detail' => 'required'

        ]);

        $input = $request->all();

        $station->fill($input)->save();
        $orders_alert=Order::all()->where('status','LIKE',0);
        return redirect()->route('station.index')->with(['success'=>'Station Update Successfuly','orders_alert'=>$orders_alert]);

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
