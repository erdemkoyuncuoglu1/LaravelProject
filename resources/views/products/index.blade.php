<!DOCTYPE html>
<html>
<head>
    <title>Products</title>
</head>
<body>

<h1>Football Store Products</h1>

@foreach($products as $product)

<div style="border:1px solid black; padding:10px; margin:10px;">

    <h3>{{ $product->name }}</h3>

    <p>{{ $product->description }}</p>

    <p>Price: {{ $product->price }} TL</p>

    <p>Stock: {{ $product->stock }}</p>

</div>

@endforeach

</body>
</html>