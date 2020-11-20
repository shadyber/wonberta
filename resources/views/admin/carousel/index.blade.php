@extends('layouts.master_admin')
@section('title', 'List Slides')
@section('content')

<div class="row">
    <div class="card col-lg-12 col-md-12 col-sm-12 border-left-primary">
        <div class="card-header">
<a href="/slide/create" class="btn  btn-info">Create a Slide</a>
        </div>
        <div class="card-body">
<div class="row">
@foreach($slides as $slide)
<div class="col-md-4">

    <a href="/slide/{{$slide->id}}/edit"> <i class="fas fa-pencil-alt"></i></a>
  <img src="{{ $slide->photo }}" class="img-thumbnail" />
   <h2>{{ $slide->title }}</h2>
   <p>{{ $slide->subtitle }}</p>

    <div class="col-md-6 text-right">
        {!! Form::open([
            'method' => 'DELETE',
            'route' => ['slide.destroy', $slide->id]
        ]) !!}
        {!! Form::submit('Delete this Slide', ['class' => 'btn btn-danger']) !!}

        {!! Form::close() !!}

    </div>


</div>
@endforeach
</div>
        </div>
    </div>
</div>

@endsection

