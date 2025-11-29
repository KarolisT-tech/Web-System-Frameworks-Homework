@extends('layouts.app')

@section('title', 'Conference Creation Form')

@section('content')
    <form action="{{ route('conferences.store') }}" method="POST">
        @csrf
        @include('partials.form')
        <div><input type="submit" value="{{__('app.create')}}"></div>
    </form>
@endsection
