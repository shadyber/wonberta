@extends('layouts.master_admin')
@section('title', 'Create Order')
@section('content')

<div class="row">
    <div class="card col-lg-12 col-md-12 col-sm-12 border-left-primary">
        <div class="card-header">
     Create A Product
        </div>
        <div class="card-body">

          <form action="/order" method="post" enctype="multipart/form-data">
            {{  Form::token()  }}

              <div class="row">


                  <div class="col-6 col-sm-6 col-md-6 form-group ">
                      First Name
                      <input type="text" class="form-control " name="f_name" placeholder="your Name" value="" >

                  </div>


                  <div class="col-6 col-sm-6 col-md-6 form-group ">
                      Last Name
                      <input type="text" class="form-control " name="l_name" placeholder="Your Last Name" value="" >

                  </div>
              </div>
              <div class="col-12 col-sm-12 col-md-12 form-group ">
                  Email
                  <input type="email" class="form-control " name="email" placeholder="your Primary Email" value="" required >

              </div>

              <div class="col-12 col-sm-12 col-md-12 form-group ">
                  Phone Number
                  <input type="tel" class="form-control " name="tel" placeholder="your Primary Phone" value="" >

              </div>

              <div class="col-12 col-sm-12 col-md-12 form-group ">
                  Shipping Address
                  <input type="text" class="form-control " name="address" placeholder="Where Should we Deliver" value="" >

              </div>

              <div class="col-12 col-sm-12 col-md-12 form-group ">
                  Select Product
                  <select class="form-control" name="product_id" placeholder="Select Product" required>
                      @foreach($products as $product)
                          <option value="{{$product->id}}">{{ $product->name }}</option>
                      @endforeach
                  </select>

              </div>



              <div class="col-12 col-sm-12 col-md-12 form-group ">
                  Select Variety
                  <select class="form-control " name="order_varity" placeholder="Select Varity"value="" >

                      <option> washed</option>
                      <option> unwashed</option>

                  </select>

              </div>




              <div class="col-12 col-sm-12 col-md-12 form-group ">
                  Select Grade
                  <select class="form-control " name="order_grade" placeholder="Select Grade"value="" >

                      <option>Grade 1</option>
                      <option>Grade 2</option>
                      <option>Grade 3</option>
                      <option>Grade 4</option>
                      <option>Grade 5</option>
                  </select>

              </div>



              <div class="col-12 col-sm-12 col-md-12 form-group ">
                  <label class="control-label">Message:</label>
                  <textarea class="form-control " rows="2" cols="75" name="application_letter" placeholder="Any Message"></textarea>

              </div>



            <button type="submit" class="btn btn-success mr-2">Submit</button>
            <button type="submit" class="btn btn-dark">Cancel</button>
            {{{ Form::close() }}}

        </div>
    </div>
</div>

@endsection
