<!DOCTYPE html>
<html>
<head>
    <title>Football Store</title>
</head>
<body>

<nav>
    <a href="/products">Products</a> |
<a href="/categories">Categories</a> |
<a href="/cart">
    Shopping Cart ({{ count(session('cart', [])) }})
</a> |
<a href="/admin">Admin Panel</a> |
<a href="/login">Login</a>
</nav>

<hr>

@yield('content')

</body>
</html>