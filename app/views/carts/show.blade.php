@extends('layouts.master')

@section('top-script')

@stop

@section('content')


          
    {{{ $cart->name }}}

    {{ Form::open(array('action' => array('CartsController@destroy', $cart->id), 'method' => 'DELETE', 'id' => 'formDelete'))}}

    <button type="submit" class="btn btn-default">Delete</button>
    {{ Form::close() }}

@stop

@section('bottom-script')

@stop








