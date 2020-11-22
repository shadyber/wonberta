<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Order;
use Illuminate\Http\Request;

class AddressController extends Controller
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
        $address=Address::all()->first();
        if(!$address){
            return view('admin.address.create');
        }
        $orders_alert=Order::all()->where('status','LIKE',0);

        return view('admin.address.index')->with(['address'=>$address,'orders_alert'=>$orders_alert]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $address=Address::get()->first();
        $orders_alert=Order::all()->where('status','LIKE',0);

        return view('admin.address.create')->with(['address'=>$address,'orders_alert'=>$orders_alert]);
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

        $this->validate($request, [
            'email' => 'required',
            'tel' => 'required'

        ]);
        /*
        */

        $address = new Address;
        $address->email = $request->email;
        $address->tel = $request->tel;
        $address->tel2 = $request->tel2;
        $address->location = $request->location;
        $address->city = $request->city;
        $address->country = $request->country;
        $address->fax = $request->fax;
        $address->address1=$request->address1;
        $address->address2=$request->address2;
        $address->facebook = $request->facebook;
        $address->twitter = $request->twitter;
        $address->instagram = $request->instagram;
        $address->google = $request->google;
        $address->pintrest = $request->pintrest;
        $address->youtube = $request->youtube;
        $address->linkedin = $request->linkedin;

        $address->save();
        $orders_alert=Order::all()->where('status','LIKE',0);

        return  view('admin.address.index')->with(['address'=>$address,'orders_alert'=>$orders_alert]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function show(Address $address)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function edit(Address $address)
    {
        //
        $orders_alert=Order::all()->where('status','LIKE',0);

        return  view('admin.address.index')->with(['address'=>$address,'orders_alert'=>$orders_alert]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Address $address)
    {
        //

        $address = Address::findOrFail($address->id);

        $this->validate($request, [
            'email' => 'required',
            'tel' => 'required'

        ]);

        $input = $request->all();

        $address->fill($input)->save();
        $orders_alert=Order::all()->where('status','LIKE',0);
        return redirect()->route('address.index')->with(['success'=>'Address Update Successfuly','orders_alert'=>$orders_alert]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function destroy(Address $address)
    {
        //
        $address->delete();
        return redirect()->back()->with('success','Removed');
    }
}
