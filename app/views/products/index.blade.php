@extends('layouts.master')

@section('top-script')

@stop

@section('content')

 @foreach($products as $product)
        <h2>
            <a href="{{{ action('ProductsController@show', $product->id) }}}">{{{ $product->name }}}<a>
        </h2>
        
 @endforeach

@stop

@section('bottom-script')

@stop








