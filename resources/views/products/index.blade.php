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
    <p>Category: {{ $product->category->name ?? 'No Category' }}</p>
<form action="/cart/add/{{ $product->id }}" method="POST">
    @csrf

    <button type="submit">
        Add To Cart
    </button>
</form>

<br>
<form action="/products/{{ $product->id }}" method="POST">
	<a href="/products/{{ $product->id }}/edit">
    Edit Product
</a>

<br><br>
    @csrf
    @method('DELETE')

    <button type="submit">Delete Product</button>

</form>

</div>

@endforeach

</body>
</html>