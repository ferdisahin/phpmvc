@extends('layout')

@section('title', 'Anasayfa')

@section('content')
    @foreach($data as $d)
        {{$d}}
    @endforeach
@endsection