<?php
include 'config.php';
$ID = $_GET['id'];
mysqli_query($con,"DELETE FROM prod WHERE id = $ID");
echo "<script>location.replace('products.php')</script>"
?>