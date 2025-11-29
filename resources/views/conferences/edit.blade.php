@extends('layouts.app')

@section('title', 'Articles Edit Form')

@section('content')
    <form action="{{ route('conferences.update', $conference->id) }}" method="POST">
        @csrf
        @method('PUT')
        @include('partials.form')
        <div><input type="submit" value="{{__('app.update')}}" class="btn btn-success m-2"></div>
    </form>
@endsection
