<!-- 
    Home will have a button to go to log and a button to go to summary
 -->
@section('stylesheets')
<link rel="stylesheet" href = "{{ asset('css/invest.css') }}">
@endsection
@extends('master')
@section('content')

<div>
    <div class = "content">
        <!-- Each button will be in the form of a card -->
        <div class = "form">
            <h1>INVESTMENT FORM</h1>

            @if ($errors->any())
                <div class="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            
            <form action = "{{ route('post_invest')}}" method = "POST">
                @csrf
                <div class = "form-group">
                    <label>Action</label>
                    <div>
                        <div class = "form-check">
                            <input class = "form-check-input" type = "radio" name = "action" id = "buy" value = "buy" checked>
                            <label class = "form-check-label" for = "buy">Buy</label>
                        </div>
                        <div class = "form-check">
                            <input class = "form-check-input" type = "radio" name = "action" id = "sell" value = "sell">
                            <label class = "form-check-label" for = "sell">Sell</label>
                        </div>
                    </div>
                </div>

                <div class = "form-group">
                    <label for = "name" class = "margin2">Investment Name</label>
                    <input type = "text" class = "form-control margin2" id = "name" name = "name">
                </div>  

                <div class = "form-group">
                    <label for = "type" class = "margin2">Investment Type</label>
                    <select class = "form-control margin2" name ="type" id = "type">
                        <option value ="mutual-funds">Mutual Funds</option>
                        <option value = "stocks">Stocks</option>
                        <option value = "crypto">Crypto</option>
                        <option value = "foreign-curr">Foreign Currency</option>
                        <option value = "gold">Gold</option>
                        <option value = "nft">NFT</option>
                    </select>
                </div>

                <div class = "form-group">
                    <label>Amount Mode</label>
                    <div>
                        <div class = "form-check">
                            <input class = "form-check-input" type = "radio" name = "amount_mode" id = "money" value = "money" checked>
                            <label class = "form-check-label" for = "money">Money</label>
                        </div>
                        <div class = "form-check">
                            <input class = "form-check-input" type = "radio" name = "amount_mode" id = "unit" value = "unit">
                            <label class = "form-check-label" for = "unit">Unit(s)</label>
                        </div>
                    </div>
                </div>

                <div class = "form-group">
                    <label for = "amount" class = "margin2">Amount</label>
                    <input type = "text" class = "form-control margin2" id = "amount" name = "amount" step = "any" pattern="\d+(\.\d{1,2})?">
                </div>
                
                <div class = "form-group">
                    <label for = "price_unit" class = "margin2">Price/Unit</label>
                    <input type = "text" class = "form-control margin2" id = "price_unit" name = "price_unit" step = "any" pattern="\d+(\.\d{1,2})?">
                </div>

                <div class = "form-group">
                    <label for = "fee" class = "margin2">Fee (%)</label>
                    <input type = "text" class = "form-control margin2" id = "fee" name = "fee" step = "any" pattern="\d+(\.\d{1,2})?">
                </div>

                <button type ="submit" class = "invest">Invest</button>
            </form>
        </div>
</div>
@endsection