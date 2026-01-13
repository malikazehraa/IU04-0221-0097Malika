<?php
$conn = mysqli_connect("localhost","root","","products");
$result = mysqli_query($conn,"SELECT * FROM product");
?>

<!DOCTYPE html>
<html>
<head>
  <title>Product List</title>

  <script>
    function confirmDelete(id) {
      if (confirm("Are you sure you want to delete this product?")) {
        window.location = "delete.php?product_id=" + id;
      }
    }
  </script>

</head>
<body>

<h2>Product List</h2>
<a href="form.php">Add New Product</a>
<br><br>

<table border="1">
<tr>
  <th>ID</th>
  <th>Name</th>
  <th>Category</th>
  <th>Price</th>
  <th>Action</th>
</tr>

<?php while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
  <td><?php echo $row['product_id']; ?></td>
  <td><?php echo $row['product_name']; ?></td>
  <td><?php echo $row['product_category']; ?></td>
  <td><?php echo $row['product_price']; ?></td>
  <td>
    <a href="edit.php?product_id=<?php echo $row['product_id']; ?>">Edit</a> |
    <button onclick="confirmDelete(<?php echo $row['product_id']; ?>)">Delete</button>
  </td>
</tr>
<?php } ?>

</table>

</body>
</html>
