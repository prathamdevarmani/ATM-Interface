<?php 
include("config/database.php");
if(!empty($_SESSION['id'])){
        $id=$_SESSION['id'];
        $result=mysqli_query($conn,"SELECT *FROM tb_user WHERE id=$id");
        $row = mysqli_fetch_assoc($result);
    }
    else{
        header("Location:login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATM</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Main Menu</h1>
    <div class="container">
    <form action="ATM_PerformAction.php" id="formal" name="formal" method="post">
        <div class="form-grp">
            <input type="submit" name="Action" id="Action" value="Check Balance" class="btn btn-primary">
        </div>
        
        <div class="form-grp">
            <input type="submit" name="Action" id="Action" value="Withdrawl Money" class="btn btn-primary">
        </div >

        <div class="form-grp">
            <input type="submit" name="Action" id="Action" value="Deposit Money" class="btn btn-primary">
        </div>

        <div class="form-grp">
            <input type="submit" name="Action" id="Action" value="Logout" class="btn btn-primary">
        </div>
    </form>
    </div>
    <p>&nbsp;</p>
</body>
</html>