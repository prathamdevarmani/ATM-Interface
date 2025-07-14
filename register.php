
<?php 
include("config/database.php");
if (isset($_POST['submit'])) {
    $username=$_POST['username'];
    $email=$_POST['email'];
    $pin=$_POST['pin'];
    $confirmpin=$_POST['confirmpin'];
    $duplicate= mysqli_query($conn,"SELECT * FROM tb_user WHERE username='$username' OR email='$email'");
    if(mysqli_num_rows($duplicate) > 0){
        echo "<script>alert('User name has aleardy taken');</script>";
    }   
    else{
        if($pin == $confirmpin){
            $query = "INSERT INTO tb_user VALUES('','$username','$$email','$pin','')";
            mysqli_query($conn,$query);
            echo "<script>alert('Register succesfull');</script>";
            header("refresh:0; url=login.php");
        }
        else{
            echo "<script>alert('pin does not exists');</script>";
        }
    }
}
$id=$_SESSION['id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Registration Form</h1>
    <div class="container">
        <form action="" method="post" autocomplete="off">
            <div class="form-group">
                <label for="Username">Usernsame</label>
                <input type="text" name="username" id="username" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="Pin">PIN</label>
                <input type="number" name="pin" id="pin" class="form-control">
            </div>
            <div class="form-group">
                <label for="ConfirmPin">Confirm PIN</label>
                <input type="number" name="confirmpin" id="confirmpin" class="form-control">
            </div>
           <div>
            <input type="submit" name="submit" id="anchor" value="Register" class="btn btn-primary">
           </div>
           <div>
           <a href="login.php" class="btn btn-primary" id="anchor">login</a>
           </div>

        </form>
    </div>
</body>
</html>