<?php
include 'config.php';
if(isset($_POST['submit'])){
    $name= mysqli_real_escape_string($con,$_POST['name']);
    $pass= md5($_POST['password']);
    $cpass= md5($_POST['cpassword']);
    $u_type=$_POST['user_type'];
    $select="SELECT * FROM users WHERE name='$name' && password = '$pass'";
    $result = mysqli_query($con,$select);
    if(mysqli_num_rows($result) > 0){
        $error[]='user already exist!';
    }
    else{
        if($pass != $cpass){
            $error[]='password not matched';
        }
        else{
            $insert="INSERT INTO users (name,password,user_type) VALUES ('$name','$pass','$u_type')";
            mysqli_query($con,$insert);
            echo "<script>location.replace('login.php')</script>";
        }
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        h3,h5{
            font-family:'Cairo';
            font-weight:bold;
        }
        h5{
            margin-bottom:30px;
            color:silver;
            font-weight:500;
            margin-top:-3px;
        }
        .main{
            box-shadow:1px 1px 10px silver;
            margin-top:10%;
        }
        
        input{
            margin-bottom:20px;
            width:50%;
        }
        select{
            width:50%;
            margin-bottom:20px;
            padding:5px;
        }
        a{
            text-decoration:none;
        }
        .main form .error-msg{
            margin:10px 0;
            display:block;
            background:crimson;
            color: #fff;
            border-radius: 5px;
            font-size:20px;
            padding:10px;
        }
    </style>
</head>
<body>
    <center>
        <div class="main">
            <form action="" method="post">
                <h3>Register NOW</h3>
                <h5>sign up</h5>
                <?php
                if(isset($error)){
                    foreach($error as $error){
                        echo "<span class='error-msg'>".$error."</span>";

                    }
                }
                ?>
                <input type="text" name="name" required placeholder="enter your name">
                <input type="password" name="password" required placeholder="enter your password">
                <input type="password" name="cpassword" required placeholder="confirm your password">
                <select name="user_type">
                    <option value="user">user</option>
                    <option value="admin">admin</option>
                </select>
                <input type="submit" name="submit" value="register now" class="btn btn-primary">
                <p>already have an account? <a href="login.php">Login</a></p>
            </form>
        </div>
    </center>
</html>