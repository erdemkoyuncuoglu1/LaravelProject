@extends('layouts.app')

@section('content')

<h1>Checkout</h1>

<h2>Order Summary</h2>

@if(session('cart'))

    @php
        $total = 0;
    @endphp

    @foreach(session('cart') as $item)

        @php
            $total += $item['price'] * $item['quantity'];
        @endphp

        <div style="border:1px solid black; padding:10px; margin:10px;">

            <h3>{{ $item['name'] }}</h3>

            <p>Price: {{ $item['price'] }} TL</p>

            <p>Quantity: {{ $item['quantity'] }}</p>

            <p>Subtotal: {{ $item['price'] * $item['quantity'] }} TL</p>

        </div>

    @endforeach

    <h2>Total Order Amount: {{ $total }} TL</h2>

@else

    <p>Your cart is empty.</p>

@endif

@endsection