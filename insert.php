<?php
include('config.php');

if(isset($_POST['upload'])){
    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_FILES['image'];
    $image_location = $_FILES['image']['tmp_name'];
    $image_name = $_FILES['image']['name'];
    $image_up = "images/".$image_name;
    $insert = "INSERT INTO prod (name,price,image) VALUES ('$name','$price','$image_up')";
    mysqli_query($con, $insert);
    if(move_uploaded_file($image_location,'images/'.$image_name)){
        echo "<script>alert(1)</script>";
    }
    else{
        echo "<script>alert(0)</script>";
    }

    echo "<script>location.replace('index.php')</script>";

}   

?>