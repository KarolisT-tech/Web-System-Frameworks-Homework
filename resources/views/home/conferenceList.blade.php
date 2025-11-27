@extends('layouts.app')

@section('title', 'Conference List')

@section('content')
    @foreach($conferences as $conference)
        <h1>{{$conference['title']}}</h1>
        <p>{{$conference['description']}}</p>
        <p>{{$conference['date']}}</p>
        <p>{{$conference['address']}}</p>
    @endforeach
@endsection
