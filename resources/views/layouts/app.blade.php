<!DOCTYPE html>
<html>
<head>
    <title>Football Store</title>
</head>
<body style="
    background:#FAFAFA;
    font-family:Arial, sans-serif;
">
<h1 style="
    color:#D4AF37;
    margin-bottom:10px;
">
    🏆 World Cup Store
</h1>

<nav style="
    padding:15px;
    border-bottom:3px solid #D4AF37;
    background:#F8F8F8;
    margin-bottom:20px;
">
    <a href="/products" style="
    margin-right:15px;
    color:#0B6E4F;
    text-decoration:none;
    font-weight:bold;
">
    Products
</a>

<a href="/categories" style="
    margin-right:15px;
    color:#0B6E4F;
    text-decoration:none;
    font-weight:bold;">Categories</a>

<a href="/cart" style="
    margin-right:15px;
    color:#0B6E4F;
    text-decoration:none;
    font-weight:bold;">
    Shopping Cart ({{ count(session('cart', [])) }})
</a>

<a href="/admin" style="
    margin-right:15px;
    color:#0B6E4F;
    text-decoration:none;
    font-weight:bold;">Admin Panel</a>

<a href="/login" style="
    margin-right:15px;
    color:#0B6E4F;
    text-decoration:none;
    font-weight:bold;">Login</a>

<a href="/register" style="
    margin-right:15px;
    color:#0B6E4F;
    text-decoration:none;
    font-weight:bold;">Register</a>
<form action="/logout" method="POST" style="display:inline;">
    @csrf
    <button type="submit">Logout</button>
</form>
</nav>

<hr>

@yield('content')

</body>
</html>