@extends('app')

@section('title', 'Cars Form')

@section('content')

@include('nav')

<h2>Cars Form</h2>

<form action="/cars" method="post">

        <div>
                <label for="make">Make</label><br />
                <input type="text" id="make" name="make" autocomplete="off" value="{{ old('make') }}"/><br />
                <p style="color: red;">@error('make') {{$message}} @enderror</p>
        </div>

        <div>
                <label for="model">Model</label><br />
                <input type="text" id="model" name="model" autocomplete="off" value="{{ old('model') }}"/><br />
                <p style="color: red;">@error('model') {{$message}} @enderror</p>
        </div>

        <div>
                <label for="colour">Colour</label><br />
                <input type="text" id="colour" name="colour" autocomplete="off" value="{{ old('colour') }}"/><br />
                <p style="color: red;">@error('colour') {{$message}} @enderror</p>
        </div>

        <div>
                <label for="topSpeed">Top Speed</label><br />
                <input type="text" id="topSpeed" name="topSpeed" autocomplete="off" value="{{ old('topSpeed') }}"/><br />
                <p style="color: red;">@error('topSpeed') {{$message}} @enderror</p>
        </div>

        @csrf

        <button type="submit">Submit</button>

</form>

@endsection
