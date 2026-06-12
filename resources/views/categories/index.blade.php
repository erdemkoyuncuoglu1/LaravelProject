@extends('layouts.app')

@section('content')

<h1>Football Store Categories</h1>

@foreach($categories as $category)

<div style="border:1px solid black; padding:10px; margin:10px;">

    <h3>{{ $category->name }}</h3>

    <p>{{ $category->description }}</p>

</div>

@endforeach

@endsection