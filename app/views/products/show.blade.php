@extends('layouts.master')

@section('top-script')

@stop

@section('content')

 
        {{{ $product->name }}}
      
       
        <br> Posted on {{ $product->created_at->setTimezone('America/Chicago')->format('l, F jS Y') }}

    {{ Form::open(array('action' => array('ProductsController@destroy', $product->id), 'method' => 'DELETE', 'id' => 'formDelete'))}}

    <button type="submit" class="btn btn-default">Delete</button>
    {{ Form::close() }}

@stop

@section('bottom-script')

@stop








