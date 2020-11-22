<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $services=Service::all();
        $orders_alert=Order::all()->where('status','LIKE',0);

        return view('admin.service.index')->with(['services'=>$services,'orders_alert'=>$orders_alert]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $services=Service::all();
        $orders_alert=Order::all()->where('status','LIKE',0);

        return view('admin.service.create')->with(['services'=>$services,'orders_alert'=>$orders_alert]);

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
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
        $orders_alert=Order::all()->where('status','LIKE',0);

        return view('admin.service.show')->with(['service'=>$service,'orders_alert'=>$orders_alert]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        //
        $orders_alert=Order::all()->where('status','LIKE',0);

        return view('admin.service.edit')->with(['service'=>$service,'orders_alert'=>$orders_alert]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        //
    }
}
