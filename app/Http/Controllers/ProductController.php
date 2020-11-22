<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\Station;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
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
        $products=Product::all();
        $orders_alert=Order::all()->where('status','LIKE',0);

        return view('admin.product.index')->with(['products'=>$products,'orders_alert'=>$orders_alert]);
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

        return view('admin.product.create')->with(['orders_alert'=>$orders_alert]);
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
        $product = new Product;
        $product->name = $request->name;
        $product->detail = $request->detail;
        $product->photo =$url;
        $product->save();
        return redirect()->back()->with(['success'=>'Product Created','jobs'=>$product]);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
        $orders_alert=Order::all()->where('status','LIKE',0);

        return  view('admin.product.show')->with(['product'=>$product,'orders_alert'=>$orders_alert]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
        $orders_alert=Order::all()->where('status','LIKE',0);

        return view('admin.product.edit')->with(['product'=>$product,'orders_alert'=>$orders_alert]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //$product = Product::findOrFail($product->id);

        $this->validate($request, [
            'name' => 'required',
            'detail' => 'required'

        ]);

        $input = $request->all();

        $product->fill($input)->save();

        //$orders_alert=Order::all()->where('status','LIKE',0);
      return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
        $product->delete();
        return redirect()->back()->with('success','Removed');

    }
}
