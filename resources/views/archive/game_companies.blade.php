<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href = "{{ asset('css/template.css') }}">
<style>
    table {
        border-collapse: collapse;
        max-width: 100%; /* Optional: Set the width of the table */
    }
    table, th, td {
        border: 1px solid black; /* Add a 1px solid black border */
        padding: 2px;
    }
</style>
</head>
<body>
    @extends('template')
    @section('content')
    <table>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>Publisher</th>
        </tr>
        @foreach($table as $data)
        <tr>
            <td> {{$data->id}} </td>
            <td> {{$data->name}} </td>
            <td> {{$data->publisher->name}}</td>
        </tr>
        @endforeach

        
    </table>
    <div class = 'table_button'>
        @if($prev >= 1)
        <a href = "{{route('paginator', ['page' => 'game_companies', 'pagination' => $prev])}}">prev</a>
        @else
        prev
        @endif
        <a href = "{{route('paginator', ['page' => 'game_companies', 'pagination' => $next])}}">next</a>
    </div>
    @endsection
</body>
</html>
