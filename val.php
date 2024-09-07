<?php
include 'config.php';
$ID=$_GET['id'];
$up = mysqli_query($con,"SELECT * FROM prod WHERE id=$ID");
$data2 = mysqli_fetch_array($up);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تأكيد شراء المنتج</title>
    <!-- <link rel="stylesheet" href="index.css"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        input{
            display:none;
        }
        .main{
            width:30%;
            padding:20px;
            box-shadow:1px 1px 10px silver;
            margin-top:20px;
        }
    </style>
</head>
<body>
    <center>
        <div class="main">
            <form action="insert_card.php" method="post">
                <h2>هل فعلا تريد شراء المنتج</h2>
                <input type="text" name="id" value="<?php echo  $ID?>">
                <input type="text" name="name" value="<?php echo  $data2['name']?>">
                <input type="text" name="price" value="<?php echo  $data2['price']?>">
                <button name="add" type="submit" class="btn btn-warning">تأكيد</button>
                <br><br>
                <a href="shop.php">الرجوع لصفحة المنتجات</a>
            </form>
        </div>
    </center>
</body>
</html>