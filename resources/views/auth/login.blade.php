@extends('layouts.app')

@section('content')

<h1>Login</h1>

<form>

    <label>Email:</label><br>
    <input type="email" name="email"><br><br>

    <label>Password:</label><br>
    <input type="password" name="password"><br><br>

    <button type="submit">
        Login
    </button>

</form>

@endsection