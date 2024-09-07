<?php
include 'config.php';
if(isset($_POST['add'])){
    $name=$_POST['name'];
    $price=$_POST['price'];
    $insert="INSERT INTO card (name,price) VALUES ('$name','$price')";
    mysqli_query($con,$insert);
    echo "<script>location.replace('card.php')</script>";
}
?>