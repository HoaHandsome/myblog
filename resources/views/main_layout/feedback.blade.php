@extends('main_layout/layout')
@section('content')
     <div class="wrap-group article flex-column">
                        <h2>Thank {{$name}}</h2>
                        <h3>Thank you your messenger .I'll feedback as soon as posible </h3>
                        <h4>Click to <a href="{{url(route('home'))}}">here</a> for return to home</h4>

                        
                    </div>
@endsection