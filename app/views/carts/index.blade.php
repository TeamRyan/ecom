@extends('layouts.master')

@section('top-script')

@stop

@section('content')

@foreach($carts as $cart)
        <h2>
            <a href="{{{ action('CartsController@show', $cart->id) }}}">{{{ $cart->name }}}<a>
        </h2>
        
@endforeach

@stop

@section('bottom-script')

@stop








