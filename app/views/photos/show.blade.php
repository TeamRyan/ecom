@extends('layouts.master')

@section('top-script')

@stop

@section('content')

  
    {{{ $photo->file_name }}}
        

    {{ Form::open(array('action' => array('PhotosController@destroy', $photo->id), 'method' => 'DELETE', 'id' => 'formDelete'))}}

    <button type="submit" class="btn btn-default">Delete</button>
    {{ Form::close() }}

@stop

@section('bottom-script')

@stop








