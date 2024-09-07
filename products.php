
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        h3{
            font-family:'Cairo';
            font-weight:bold;

        }
        .card{
            float:right;
            margin:20px 10px;
        }
        .card img{
            width:100%;
            height:200px;
        }
        main{
            width:60%;
        }
    </style>
</head>
<body>
    <center>
        <h3>ADMIN - جميع المنتجات المتوفرة</h3>
    </center>
    <?php
    include 'config.php';
    $result = mysqli_query($con,"SELECT * FROM prod");
    while($row=mysqli_fetch_array($result)){
        echo "
        <center>
            <main>
                <div class='card' style='width: 15rem;'>
                    <img src='$row[image]' class='card-img-top'>
                    <div class='card-body'>
                        <h5 class='card-title'>$row[name]</h5>
                        <p class='card-text'>$row[price]</p>
                        <a href='delete.php? id=$row[id]' class='btn btn-danger'>حذف منتج</a>
                        <a href='update.php? id=$row[id]' class='btn btn-primary'>تعديل منتج</a>
                    </div>
                </div>
            </main>
        </center>
        ";
    }
    ?>
    
</body>
</html>
