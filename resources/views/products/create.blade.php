<!DOCTYPE html>
<html>
<head>
    <title>Create Product</title>
</head>
<body>

<h1>Create Product</h1>

<form action="/products" method="POST">
    @csrf

    <label>Product Name:</label><br>
    <input type="text" name="name"><br><br>

    <label>Description:</label><br>
    <textarea name="description"></textarea><br><br>

    <label>Price:</label><br>
    <input type="number" step="0.01" name="price"><br><br>

    <label>Stock:</label><br>
    <input type="number" name="stock"><br><br>

    <button type="submit">Save Product</button>
</form>

</body>
</html>