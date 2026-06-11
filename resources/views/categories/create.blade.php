<!DOCTYPE html>
<html>
<head>
    <title>Create Category</title>
</head>
<body>

<h1>Create Category</h1>

<form action="/categories" method="POST">
    @csrf

    <label>Category Name:</label><br>
    <input type="text" name="name"><br><br>

    <label>Description:</label><br>
    <textarea name="description"></textarea><br><br>

    <button type="submit">Save Category</button>
</form>

</body>
</html>