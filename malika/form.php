<!DOCTYPE html>
<html>
<head>
  <title>Add Product</title>
</head>
<body>

<h2>Add Product</h2>

<form method="post" action="insert.php">

  Product Name:<br>
  <input type="text" name="product_name" required><br><br>

  Product Category:<br>
  <input type="text" name="product_category" required><br><br>

  Product Price:<br>
  <input type="number" step="0.01" name="product_price" required><br><br>

  <input type="submit" value="Submit">
</form>

<br>
<a href="table.php">View Products</a>

</body>
</html>
