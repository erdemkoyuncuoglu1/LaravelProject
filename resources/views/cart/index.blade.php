@extends('layouts.app')

@section('content')

<h1>
    Football Store Shopping Cart
    ({{ count(session('cart', [])) }})
</h1>

@if(session('cart'))

    @php
        $total = 0;
    @endphp

    @foreach(session('cart') as $id => $item)

        @php
            $total += $item['price'] * $item['quantity'];
        @endphp

        <div style="border:1px solid black; padding:10px; margin:10px;">

            <h3>{{ $item['name'] }}</h3>

            <p>Price: {{ $item['price'] }} TL</p>
            <p>Quantity: {{ $item['quantity'] }}</p>
            <p>Subtotal: {{ $item['price'] * $item['quantity'] }} TL</p>

            <form action="/cart/remove/{{ $id }}" method="POST">
                @csrf

                <button type="submit">Remove From Cart</button>
            </form>

        </div>

    @endforeach

    <h2>Total: {{ $total }} TL</h2>
<form action="/cart/clear" method="POST">
    @csrf

    <button type="submit">
        Clear Cart
    </button>
</form>
@else

    <p>Your cart is empty.</p>

@endif

@endsection