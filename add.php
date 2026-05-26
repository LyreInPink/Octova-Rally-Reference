<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $price = $_POST['price'];
  $stock = $_POST['stock'];

  mysqli_query($conn, "INSERT INTO products (name, price, stock) VALUES ('$name', '$price', '$stock')");
  header("Location: admin.php");
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link rel="stylesheet" href="style_add.css">
</head>
<body>

<div class="container">
    <h2>Add Product</h2>

    <form method="POST">
        <div class="form-group">
            <input type="text" name="name" placeholder="Product Name" required>
        </div>
        
        <div class="form-group">
            <input type="number" name="price" placeholder="Price" required>
        </div>
        
        <div class="form-group">
            <input type="number" name="stock" placeholder="Stock" required>
        </div>
        
        <button name="submit">Save</button>
    </form>
</div>

</body>
</html>