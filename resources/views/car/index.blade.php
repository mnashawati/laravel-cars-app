@extends('app')

@section('title', 'Cars Table')

@section('content')
@include('nav')
    <h2>All Cars</h2>
    <button><a href="/cars/create" style="text-decoration:none">New</a></button>
    <hr>
    <table style="width:100%">
        <tr style="text-align:left">
            <th>Make</th>
            <th>Model</th>
            <th>Colour</th>
            <th>Top Speed</th>
            <th>View</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        @forelse($cars as $car)
            <tr>
                <td>{{$car->make}}</td>
                <td>{{$car->model}}</td>
                <td>{{$car->colour}}</td>
                <td>{{$car->topSpeed}}</td>
                <td><a href="/cars/{{ $car->id }}">View</a></td>
                <td><a href="/cars/{{ $car->id }}/edit">Edit</a></td>
                <td>
                        <form action="/cars/{{ $car->id }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit">Delete</button>
                        </form>
                </td>
            </tr>
        @empty 
            <p>No cars to show</p>    
        @endforelse
    </table>    
@endsection