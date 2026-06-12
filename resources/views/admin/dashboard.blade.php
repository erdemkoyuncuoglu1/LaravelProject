<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
</head>
<body>

<h1>Football Store Admin Panel</h1>

<hr>

<h2>Dashboard Summary</h2>

<p>Total Products: {{ $productCount }}</p>
<p>Total Categories: {{ $categoryCount }}</p>

<hr>

<h2>Quick Actions</h2>

<ul>
    <li><a href="/products">Manage Products</a></li>
    <li><a href="/categories">Manage Categories</a></li>
    <li><a href="/products/create">Add Product</a></li>
    <li><a href="/categories/create">Add Category</a></li>
</ul>

</body>
</html>