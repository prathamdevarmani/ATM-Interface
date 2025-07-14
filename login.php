<?php 
include("config/database.php");
if(isset($_POST['submit']) ){
        $username=$_POST['username'];
        $pin=$_POST['pin'];
        $result=mysqli_query($conn,"SELECT * FROM tb_user WHERE username='$username'");
        $row = mysqli_fetch_assoc($result);
        if(mysqli_num_rows($result) > 0){
            if($pin==$row['pin']){
                $_SESSION['login'] = true;
                $_SESSION['id'] = $row['id'];
                session_start();
                header("Location: ATM_Main.php");
            }
            else{
                echo "<script>alert('Wrong pin');</script>";
            }
        }
        else{
            echo "<script>alert('User not registered');</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Login </h1>
    <div class="container">
        <form action="" method="post" autocomplete="off">
            <div class="form-group">
            <label for="Username">Usernsame</label>
            <input type="text" name="username" id="username" class="form-control">
            </div>
            <div class="form-group">
                <label for="Pin">PIN</label>
                <input type="number" name="pin" id="pin" class="form-control">
            </div>
            <div>
            <input type="submit" name="submit" id="anchor" value="Login" class="btn btn-primary">
           </div>
           <div>
           <a href="register.php" class="btn btn-primary" id="anchor">Registration</a>

           </div>
        </form>
    </div>
</body>
</html>