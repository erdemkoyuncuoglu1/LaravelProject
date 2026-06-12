@extends('layouts.app')

@section('content')

<div style="
    text-align:center;
    padding:50px;
    background:#F8F8F8;
    border:2px solid #D4AF37;
    border-radius:10px;
">

    <h1 style="color:#0B6E4F;">
        🏆 FIFA World Cup Store
    </h1>

    <h3>
        Official Jerseys, Footballs and Accessories
    </h3>

    <p>
        Explore the best World Cup products from your favorite national teams.
    </p>

    <br>

    <a href="/products" style="
        background:#0B6E4F;
        color:white;
        padding:10px 20px;
        text-decoration:none;
        border-radius:5px;
    ">
        Browse Products
    </a>

</div>
<br><br>

<h2>Featured Products</h2>

<div style="
    display:flex;
    flex-wrap:wrap;
    gap:15px;
">

    <div style="
        border:1px solid #ccc;
        padding:15px;
        margin-top:10px;
        border-radius:10px;
    ">

        <h3>🇦🇷 Argentina Home Jersey</h3>

        <p>Official World Cup Jersey</p>

        <strong>2499 TL</strong>

    </div>

    <div style="
        border:1px solid #ccc;
        padding:15px;
        margin-top:10px;
        border-radius:10px;
    ">

        <h3>🇧🇷 Brazil Home Jersey</h3>

        <p>Official World Cup Jersey</p>

        <strong>2299 TL</strong>

    </div>

</div>


@endsection