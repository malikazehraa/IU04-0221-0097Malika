<?php
$conn = mysqli_connect("localhost","root","","products");
if(!$conn){ die(mysqli_connect_error()); }

$sql = "INSERT INTO product 
        (product_name, product_category, product_price)
        VALUES (?, ?, ?)";

$stmt = mysqli_prepare($conn, $sql);
if(!$stmt){ die(mysqli_error($conn)); }

mysqli_stmt_bind_param(
  $stmt,
  "ssd",
  $_POST['product_name'],
  $_POST['product_category'],
  $_POST['product_price']
);

mysqli_stmt_execute($stmt);

header("Location: table.php");
exit;
?>
