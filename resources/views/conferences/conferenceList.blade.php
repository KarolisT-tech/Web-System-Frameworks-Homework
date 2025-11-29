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
                <p class="card-text">{{$conference['date']}}</p>

                <div class="d-flex gap-2">
                    <form action="{{ route('conferences.show', $conference->id) }}" method="GET">
                    <button type="submit" class="btn btn-secondary">{{__('app.view')}}</button>
                    </form>

                    @auth
                        <form action="{{ route('conferences.edit', $conference->id) }}" method="GET">
                            <button type="submit" class="btn btn-primary">{{__('app.edit')}}</button>
                        </form>

                        <div x-data="{ open: false }">

                            <button type="button" class="btn btn-danger" @click="open = true">
                                {{ __('app.delete') }}
                            </button>

                            <div x-show="open" x-transition @click.away="open = false" class="mt-2 p-2 border rounded bg-white">

                                <p class="mb-2">{{ __('app.deleteconf') }}</p>

                                <div class="d-flex justify-content-between">
                                    <button class="btn btn-danger btn-sm" @click="open = false">
                                        {{ __('app.no') }}
                                    </button>

                                    <form action="{{ route('conferences.destroy', $conference->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-success btn-sm" type="submit">
                                            {{ __('app.yes') }}
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endauth
                </div>
            </div>
        </div>
    @endforeach
@endsection
