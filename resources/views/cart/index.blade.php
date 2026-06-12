<!DOCTYPE html>
<html>
<head>
    <title>Shopping Cart</title>
</head>
<body>

<h1>Football Store Shopping Cart</h1>

@if(session('cart'))

    @foreach(session('cart') as $item)

        <div style="border:1px solid black; padding:10px; margin:10px;">

            <h3>{{ $item['name'] }}</h3>

            <p>Price: {{ $item['price'] }} TL</p>

        </div>

    @endforeach

@else

    <p>Your cart is empty.</p>

@endif

</body>
</html>