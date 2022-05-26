@extends('layouts.layout')

@section('title', 'trains')

@section('content')
<div class="container">
    <div class="row row-cols-5 py-5">
        @forelse ($trains as $key => $train)
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title">{{ $train->train_code}}</h5>
                      <h6 class="card-subtitle mb-2 text-muted">{{$train->in_time}}</h6>
                      <p class="card-text"> {{$train->departures}} <span>{{$train->departures_date}}</span></p>
                      <p class="card-text">{{$train->arrivals}} <span>{{$train->arrivals_date}}</span></p>
                    </div>
                </div>
            </div>
        @empty
            <h2>Il database è vuoto</h2>
        @endforelse
    </div>
</div>

@endsection