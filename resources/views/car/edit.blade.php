@extends('app')

@section('title', 'Edit Car Details')

@section('content')

<h2>Edit Car Details</h2>

<div>
    <a href="/cars">< Back to all cars</a>
</div>

<hr>

<form action="/cars/{{ $car->id }}" method="post">

        @method('PUT')

        <div>
                <label for="make">Make</label><br />
                <input type="text" id="make" name="make" autocomplete="off" value="{{ $car->make }}"/><br />
                <p style="color: red;">@error('make') {{$message}} @enderror</p>
        </div>

        <div>
                <label for="model">Model</label><br />
                <input type="text" id="model" name="model" autocomplete="off" value="{{ $car->model }}"/><br />
                <p style="color: red;">@error('model') {{$message}} @enderror</p>
        </div>

        <div>
                <label for="colour">Colour</label><br />
                <input type="text" id="colour" name="colour" autocomplete="off" value="{{ $car->colour }}"/><br />
                <p style="color: red;">@error('colour') {{$message}} @enderror</p>
        </div>

        <div>
                <label for="topSpeed">Top Speed</label><br />
                <input type="text" id="topSpeed" name="topSpeed" autocomplete="off" value="{{ $car->topSpeed }}"/><br />
                <p style="color: red;">@error('topSpeed') {{$message}} @enderror</p>
        </div>

        @csrf

        <button type="submit">Update</button>
</form>