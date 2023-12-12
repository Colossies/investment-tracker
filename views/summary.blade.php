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
                    <th>Value</th>
                    <th>Value/Unit</th>
                    <th>units</th>
                    <th>Total Spent</th>
                    <th>Last Updated</th>
                </tr>
                @foreach($summary as $data)
                <tr>
                    <td>{{$data->id}}</td>
                    <td>{{$data->name}}</td>
                    <td>{{$data->investment_type}}</td>
                    <td>{{$data->value}}</td>
                    <td>{{$data->value_unit}}</td>
                    <td>{{$data->units}}</td>
                    <td>{{$data->amount_spent}}</td>
                    <td>{{$data->updated_at}}</td>
                </tr>
                @endforeach
            </table>


        
        <div class = 'table_button'>
            @if($curr_page - 1 >= 1)
            <a href = "{{route('summary', ['page' => $curr_page - 1])}}">prev</a>
            @else
            <a>prev</a>
            @endif
            @if($next == 1)
            <a href = "{{route('summary', ['page' => $curr_page + 1])}}">next</a>
            @else
            <a>next</a>
            @endif
        </div>
    </div>
</div>
@endsection