<!-- 
    Home will have a button to go to log and a button to go to summary
 -->

@extends('master')
@section('stylesheets')
<link rel="stylesheet" href = "{{ asset('css/table.css') }}">
@endsection
@section('content')
<div class = "content">
    <div class = "table">
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Investment Type</th>
                <th>Action</th>
                <th>Amount</th>
                <th>Price/Unit</th>
                <th>units</th>
                <th>Fee(%)</th>
                <th>Total Spent</th>
                <th>Date</th>
            </tr>
            @foreach($investment as $data)
            <tr>
                <td>{{$data->id}}</td>
                <td>{{$data->name}}</td>
                <td>{{$data->investment_type}}</td>
                <td>{{$data->action}}</td>
                <td>{{$data->amount}}</td>
                <td>{{$data->price_unit}}</td>
                <td>{{$data->units}}</td>
                <td>{{$data->fee}}</td>
                <td>{{$data->amount_spent}}</td>
                <td>{{$data->created_at}}</td>
            </tr>
            @endforeach
        </table>

        <div class = 'table_button'>
            @if($curr_page - 1 >= 1)
            <a href = "{{route('log', ['page' => $curr_page - 1])}}">prev</a>
            @else
            <a>prev</a>
            @endif
            @if($next == 1)
            <a href = "{{route('log', ['page' => $curr_page + 1])}}">next</a>
            @else
            <a>next</a>
            @endif
        </div>
    </div>
</div>
@endsection