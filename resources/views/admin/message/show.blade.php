@extends('layouts.master_admin')
@section('title', 'Message')
@section('content')

    <div class="row">
        <div class=" col-lg-12 col-md-12 col-sm-12 border-left-primary">


            <div class="my-3 p-3 bg-white rounded shadow-sm">
                <h6 class="border-bottom border-gray pb-2 mb-0">{{$message->subject}}</h6>


                        <div class="media text-muted pt-3">
                            <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"></rect><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>
                            <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                <strong class="d-block text-gray-dark">{{$message->email}}</strong>


                                @if(!$message->status==0)
                                    <strong class="text-gray-300">
                                        @endif
                                        {{$message->message}}

                                        @if(!$message->status==0)
                                    </strong>
                                @endif
                            </p>
                        </div>






                <small class="d-block text-right mt-3">
                    <a href="#" class="btn btn-google">Replay</a>
                </small>


                <div class="col-md-12">
                    <form action="/replay" method="post">
                        {{Form::token()}}
                        <div class="form-group">
                            <label for="email">To :</label>
                            <input type="email" name="email" value="{{$message->email}}" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" name="subject" value="replay to {{$message->subject}}" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea name="message" id="message" cols="30" rows="10" class="form-control summernote">

                                -- original message --
                                {{$message->message}}


                            </textarea>
                        </div>

<div class="form-group">
    <button class="btn btn-outline-success" type="submit"> Send </button>
</div>
                    </form>

                </div>
            </div>




@endsection
