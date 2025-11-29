@extends('layouts.app')

@section('title', 'Conference List')

@section('content')

    @auth
        <a href="{{ route('conferences.create') }}" class="btn btn-success m-2">{{__('app.addConference')}} </a>
    @endauth

    @foreach($conferences as $conference)
        <div class="card mb-4 shadow-sm">
            <div class="card-body">

                <h3 class="card-title">{{$conference['title']}}</h3>
                <p class="card-text">{{$conference['description']}}</p>
                <p class="card-text">{{$conference['date']}}</p>
                <p class="card-text">{{$conference['address']}}</p>

                @auth
                    <div class="d-flex gap-2">
                    <form action="{{ route('conferences.edit', $conference->id) }}" method="GET" style="margin-bottom: 10px;">
                        <button type="submit" class="btn btn-primary">{{__('app.edit')}}</button>
                    </form>
                    <form action="{{route('conferences.destroy', $conference->id)}}" method="POST" >
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">{{__('app.delete')}}</button>
                    </form>
                    </div>
                @endauth
            </div>
        </div>
    @endforeach
@endsection
