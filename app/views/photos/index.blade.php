@extends('layouts.master')

@section('top-script')

@stop

@section('content')

@foreach($photos as $photo)
        <h2>
            <a href="{{{ action('PhotosController@show', $photo->id) }}}">{{{ $photo->file_name }}}<a>
        </h2>
        
@endforeach

@stop

@section('bottom-script')

@stop








