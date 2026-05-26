<?php
session_start();
include 'koneksi.php';

if (!isset($_SESSION['user'])) {
    header("Location: index.php");
    exit;
}

$data = mysqli_query($conn, "SELECT * FROM products");
?>

<link rel="stylesheet" href="style_dashboard.css">

<h2>Admin Panel - Product</h2>

<a href="add.php">+ Add Product</a>
<a href="logout.php">Logout</a>

<table border="1" cellpadding="10">
<tr>
  <th>ID</th>
  <th>Name</th>
  <th>Price</th>
  <th>Stock</th>
  <th>Actions</th>
</tr>

<?php while ($row = mysqli_fetch_assoc($data)) { ?>
<tr>
  <td><?= $row['id'] ?></td>
  <td><?= $row['name'] ?></td>
  <td><?= $row['price'] ?></td>
  <td><?= $row['stock'] ?></td>
  <td>
    <a href="edit.php?id=<?= $row['id'] ?>">Edit</a>
    <a href="remove.php?id=<?= $row['id'] ?>">Delete</a>
  </td>
</tr>
<?php } ?>

</table>