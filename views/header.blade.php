<link rel="stylesheet" href = "{{ asset('css/header.css') }}">
<header>

    <a href = "{{route('home')}}">Home</a>
    <a href = "{{route('log', ['page' => 1])}}">Investment Log</a>
    <a href = "{{route('summary', ['page' => 1])}}">Investment Summary</a>
    <a href = "{{route('invest')}}">Invest</a>
    @if($user_id != null)
    <a href = "{{route('logout')}}">Logout</a>
    @endif
</header>
