@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           
            <h3>Welcome {{ Auth::user()->firstName }} {{ Auth::user()->lastName}}</h3>
          

        </div>
    </div>
</div>
@endsection
