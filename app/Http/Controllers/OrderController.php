<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use App\Notifications\OrderCreated;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notification;

class OrderController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth')->except('create','store');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $orders=Order::all();
        $products=Product::all();
        return view('admin.order.index')->with(['orders'=>$orders,'products'=>$products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $orders=Order::all();
        $products=Product::all();

        return view('admin.order.create')->with(['orders'=>$orders,'products'=>$products]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'tel' => 'required'

        ]);

        $order=new Order;
        $order->f_name=$request->f_name;
        $order->l_name=$request->l_name;
        $order->tel=$request->tel;
        $order->email=$request->email;
        $order->application_letter=$request->application_letter;
        $order->address=$request->address;
        $order->order_varity=$request->order_varity;
        $order->order_grade=$request->order_grade;
        $order->product_id=$request->product_id;

        $order->save();
        User::find(1)->notify(new OrderCreated($order));
       // $admin=User::find(1);
//Notification::send($admin,new OrderCreated($order));
        return  back()->with('success','Order Deliver to Manager Thank you For your Interest');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
        $product=Product::find($order->product_id);

        return view('admin.order.show')->with(['order'=>$order,'product'=>$product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
        $this->validate($request, [
            'status' => 'required'

        ]);

        $input = $request->all();
        $order->fill($input)->save();
        return redirect()->back()->with('success','Order Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
        $order->delete();
        return redirect()->back()->with('success','Removed');
    }
}
