@extends('layouts.app')

@section('content')

<h1>Football Store Products</h1>

@foreach($products as $product)

<div style="
    border:1px solid #ccc;
    padding:20px;
    margin:15px;
    border-radius:10px;
    width:300px;
">

    <h2>{{ $product->name }}</h2>

    <p>{{ $product->description }}</p>

    <p>
    <strong>
        Price: {{ $product->price }} TL
    </strong>
</p>
    <p>Stock: {{ $product->stock }}</p>

    <p>Category: {{ $product->category->name ?? 'No Category' }}</p>

    <form action="/cart/add/{{ $product->id }}" method="POST">
        @csrf
        <button type="submit">
    🛒 Add To Cart
</button>
    </form>

    <br>

    <a href="/products/{{ $product->id }}/edit">
        Edit Product
    </a>

    <br><br>

    <form action="/products/{{ $product->id }}" method="POST">
        @csrf
        @method('DELETE')

        <button type="submit">Delete Product</button>
    </form>

</div>

@endforeach

@endsection