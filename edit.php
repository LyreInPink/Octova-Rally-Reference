<?php
include 'koneksi.php';

$id = $_GET['id'];
$data = mysqli_query($conn, "SELECT * FROM products WHERE id=$id");
$row = mysqli_fetch_assoc($data);

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $price = $_POST['price'];
  $stock = $_POST['stock'];

  mysqli_query($conn, "UPDATE products SET name='$name', price='$price', stock='$stock' WHERE id=$id");
  header("Location: admin.php");
  exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <link rel="stylesheet" href="style_edit.css">
</head>
<body>

<div class="container">
    <h2>Edit Product</h2>

    <form method="POST">
        <div class="form-group">
            <input type="text" name="name" value="<?= $row['name'] ?>" placeholder="Nama produk" required>
        </div>
        
        <div class="form-group">
            <input type="number" name="price" value="<?= $row['price'] ?>" placeholder="Harga" required>
        </div>
        
        <div class="form-group">
            <input type="number" name="stock" value="<?= $row['stock'] ?>" placeholder="Stock" required>
        </div>
        
        <button type="submit" name="submit">Update</button>
    </form>
</div>

</body>
</html>