@extends('app')

@section('title', 'Car Details')

@section('content')

<h2>Car Details</h2>

<div>
    <a href="/cars">< Back to all cars</a>
</div>

<hr>

<div>
    <strong>Make:</strong>
    <span>{{ $car->make }}</span>
</div>

<div>
    <strong>Model:</strong>
    <span>{{ $car->model }}</span>
</div>

<div>
    <strong>Colour:</strong>
    <span>{{ $car->colour }}</span>
</div>

<div>
    <strong>Top Speed:</strong>
    <span>{{ $car->topSpeed }}</span>
</div>

@endsection
