<?php
include 'config.php';
$ID = $_GET['id'];
mysqli_query($con,"DELETE FROM card WHERE id=$ID");
echo "<script>location.replace('card.php')</script>";
?>
