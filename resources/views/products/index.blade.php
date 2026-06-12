@extends('layouts.app')

@section('content')

<h1>Football Store Products</h1>

@foreach($products as $product)

<div style="
    border:2px solid #D4AF37;
    padding:20px;
    margin:15px;
    border-radius:15px;
    width:320px;
    background:white;
">

    <h2 style="color:#0B6E4F;">
    {{ $product->name }}
</h2>

    <p>{{ $product->description }}</p>

    <p style="
    color:#D4AF37;
    font-size:20px;
    font-weight:bold;
">
    {{ $product->price }} TL
</p>
    <p>Stock: {{ $product->stock }}</p>

    <p>Category: {{ $product->category->name ?? 'No Category' }}</p>

    <form action="/cart/add/{{ $product->id }}" method="POST">
        @csrf
    <button type="submit" style="
    background:#0B6E4F;
    color:white;
    border:none;
    padding:10px 15px;
    border-radius:5px;
">
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