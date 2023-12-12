<!-- 
    Home will have a button to go to log and a button to go to summary
 -->

@extends('master')

@section('stylesheets')
<link rel="stylesheet" href = "{{ asset('css/home.css') }}">
@endsection

@section('content')
<div>
    <div class = "content">
        <div class = "welcome">
            <h1>Welcome, {{$user->username}}!</h1>
        </div>
        <div class = "card_container">
            <a href = "{{route('log')}}">
                <div class="card">
                    <div class="card_content">
                        <h2 class="title">Investment Log</h2>
                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus volutpat, mi id pulvinar efficitur, ex justo fermentum leo.</p>
                    </div>
                </div>
            </a>
            <a href = "{{route('summary')}}">
                <div class="card">
                    <div class="card_content">
                        <h2 class="title">Investment Summary</h2>
                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus volutpat, mi id pulvinar efficitur, ex justo fermentum leo.</p>
                    </div>
                </div>
            </a>

            <a href = "{{route('invest')}}">
                <div class="card">
                    <div class="card_content">
                        <h2 class="title"><br>Invest</h2>
                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus volutpat, mi id pulvinar efficitur, ex justo fermentum leo.</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection