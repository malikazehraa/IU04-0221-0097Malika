<?php
$conn = mysqli_connect("localhost","root","","products");
if(!$conn){ die(mysqli_connect_error()); }

$stmt = mysqli_prepare($conn,"DELETE FROM product WHERE product_id=?");
if(!$stmt){ die(mysqli_error($conn)); }

mysqli_stmt_bind_param($stmt,"i",$_GET['product_id']);
mysqli_stmt_execute($stmt);

header("Location: table.php");
exit;
?>
