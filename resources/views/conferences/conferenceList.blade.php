@extends('layouts.app')

@section('title', 'Conference List')

@section('content')
    @auth
        <a href="{{ route('conferences.create') }}" class="btn btn-primary" style="margin-bottom: 20px;"> {{__('app.addConference')}} </a>
    @endauth
    @foreach($conferences as $conference)
        <h1>{{$conference['title']}}</h1>
        <p>{{$conference['description']}}</p>
        <p>{{$conference['date']}}</p>
        <p>{{$conference['address']}}</p>
        @auth
            <form action="{{ route('conferences.edit', $conference->id) }}" method="GET" style="margin-bottom: 10px;">
                <button type="submit" class="btn btn-primary">{{__('app.edit')}}</button>
            </form>
            <form action="/conference/{{ $conference->id }}/delete" method="POST" >
                @csrf
                <button type="submit">{{__('app.delete')}}</button>
            </form>
        @endauth
    @endforeach
@endsection
