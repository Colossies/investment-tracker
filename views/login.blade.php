<!-- 
    Home will have a button to go to log and a button to go to summary
 -->
@section('stylesheets')
<link rel="stylesheet" href = "{{ asset('css/invest.css') }}">
<link rel = "stylesheet" href = " {{ asset('css/login.css') }}">
@endsection
@extends('master')
@section('content')

<div>
    <div class = "content">
        <!-- Each button will be in the form of a card -->
        <div class = "form">
            <h1>Login</h1>

            @if ($errors->any())
                <div class="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <hr>
            @if($message != null)
            <div class = "message">
                {{$message}}
            </div>
            @endif
            <form action = "{{ route('login_submit')}}" method = "POST">
                @csrf
                <div class = "form-group">
                    <label for = "username" class = "margin2">Username</label>
                    <input type = "text" class = "form-control margin2" id = "username" name = "username">
                </div>  

                <div class = "form-group">
                    <label for = "password" class = "margin2">Password</label>
                    <input type = "password" class = "form-control margin2" id = "password" name = "password">
                </div>  

                <button type ="submit" class = "invest">Login</button>
            </form>
            <a href = "{{route('register')}}">don't have an account? Register here!</a>
        </div>
</div>
@endsection