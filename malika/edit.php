<?php
$conn = mysqli_connect("localhost","root","","products");
if(!$conn){ die(mysqli_connect_error()); }

$id = $_GET['product_id'];

$stmt = mysqli_prepare($conn,"SELECT * FROM product WHERE product_id=?");
if(!$stmt){ die(mysqli_error($conn)); }

mysqli_stmt_bind_param($stmt,"i",$id);
mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);
$row = mysqli_fetch_assoc($result);

if(!$row){ die("Product not found"); }
?>

<!DOCTYPE html>
<html>
<head>
  <title>Edit Product</title>
</head>
<body>

<h2>Edit Product</h2>

<form method="post" action="update.php">
  <input type="hidden" name="product_id" value="<?php echo $row['product_id']; ?>">

  Product Name:<br>
  <input type="text" name="product_name" value="<?php echo $row['product_name']; ?>" required><br><br>

  Product Category:<br>
  <input type="text" name="product_category" value="<?php echo $row['product_category']; ?>" required><br><br>

  Product Price:<br>
  <input type="number" step="0.01" name="product_price" value="<?php echo $row['product_price']; ?>" required><br><br>

  <input type="submit" value="Update">
</form>

</body>
</html>
