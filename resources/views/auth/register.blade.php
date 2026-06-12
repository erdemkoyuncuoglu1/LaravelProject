@extends('layouts.app')

@section('content')

<h1>Register</h1>

<form>

    <label>Name:</label><br>
    <input type="text" name="name"><br><br>

    <label>Email:</label><br>
    <input type="email" name="email"><br><br>

    <label>Password:</label><br>
    <input type="password" name="password"><br><br>

    <label>Confirm Password:</label><br>
    <input type="password" name="password_confirmation"><br><br>

    <button type="submit">
        Register
    </button>

</form>

@endsection