@extends('layouts.master_admin')
@section('title', 'Create Blog')
@section('content')

<div class="row">
    <div class="card col-lg-12 col-md-12 col-sm-12 border-left-primary">
        <div class="card-header">
            <a href="/blog"><i class="fa fa-list"></i></a>
     Create A Blog
        </div>
        <div class="card-body">

          <form action="/blog" method="post" enctype="multipart/form-data">
            {{  Form::token()  }}

              <div class="row">


                  <div class="col-6 col-sm-6 col-md-6 form-group ">
                     Title
                      <input type="text" class="form-control " name="title" placeholder="Blog Title" value="" >

                  </div>


                  <div class="col-6 col-sm-6 col-md-6 form-group ">
                     Category
                      <input type="text" class="form-control " name="category" placeholder="This is Categorithd in" value="" >

                  </div>
              </div>

              <div class="col-12 col-sm-12 col-md-12 form-group ">
                  Image
                  <input type="file" class="form-control " name="photo" placeholder="Photo" value="" required >

              </div>



        <div class="row">

              <div class="col-12 col-sm-12 col-md-12 form-group ">
                  Tags
                  <input type="text" class="form-control " name="tags" placeholder="Tags by Comma" value="" >

              </div>
        </div>


              <div class="col-12 col-sm-12 col-md-12 form-group ">
                  <label class="control-label">Detail:</label>
                  <textarea class="form-control " rows="3" cols="75" name="detail" maxlength="2000" minlength="500" placeholder="Any Detail"></textarea>

              </div>



            <button type="submit" class="btn btn-success mr-2">Submit</button>
            <button type="submit" class="btn btn-dark">Cancel</button>
            {{{ Form::close() }}}

        </div>
    </div>
</div>

@endsection
