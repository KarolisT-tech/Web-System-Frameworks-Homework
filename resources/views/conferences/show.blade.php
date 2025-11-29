@extends('layouts.app')

@section('title', 'Conference')

@section('content')

    <div class="card mb-4 shadow-sm">
        <div class="card-body">

            <h3 class="card-title">{{$conference['title']}}</h3>
            <p class="card-text">{{ __('app.description') . ': ' . $conference['description']}}</p>
            <p class="card-text">{{ __('app.date') . ': ' . $conference['date']}}</p>
            <p class="card-text">{{ __('app.address') . ': ' . $conference['address']}}</p>
            <p class="card-text">{{ __('app.participants') . ': ' . $conference['participants']}}</p>

        </div>
    </div>
@endsection

